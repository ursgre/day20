<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mailer_attachment extends CI_Controller {

    public function send() {   
        //if($_POST['secret_key'] == '6Ldgg8wUAAAAAJ2lwfaZ3Q1V7pJ_VI9SqgkbVkE3') {    
            $now = date('Y-m-d');
            if (!is_dir('mailer/attachment/'.$now)) {
                mkdir('./mailer/attachment/' . $now, 0777, TRUE);
            }
            $config['upload_path'] = './mailer/attachment/'.$now;
            $config['allowed_types'] = '*';
            $config['max_size'] = 0;
            $config['max_width'] = 0;
            $config['max_height'] = 0;
                
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
                
            if($this->input->post('attachment') != null) {
                if ($this->upload->do_upload('attachment')) {
                    $data = $this->upload->data();
                    if($data['file_ext'] == '.pdf') {
                    $insert['attachment'] = $now.'/'.$data['file_name'];
                    } else {
                        $this->session->set_flashdata('flashdata', '<p class="text-danger font-weight-bold mb-0">Wysyłany plik musi być w formacie PDF</p>');
                        redirect($_SERVER['HTTP_REFERER']);
                        exit;
                    }        
                }
            }

            $data['contact'] = $this->back_m->get_one('contact_settings', 1);
            $insert['name'] = $this->input->post('name');
            $insert['email'] = $this->input->post('email');
            $insert['phone'] = $this->input->post('phone');
            if($this->input->post('subject') == null ) {
                $insert['subject'] = 'Formularz kontaktowy od '.$insert['name'];
                $_POST['subject'] = $insert['subject'];
            } else {
                $insert['subject'] = $this->input->post('subject');
                $_POST['subject'] = $insert['subject'];
            }
            $insert['message'] = $this->input->post('message');
            if($this->input->post('rodo1') != null ) { 
                $insert['rodo1'] = '1'; 
                $_POST['rodo1'] = 'Zaakceptowane';
            } else {
                $insert['rodo1'] = '0';
                $_POST['rodo1'] = 'Niezaakceptowane';
            }
            if($this->input->post('rodo2') != null ) { 
                $insert['rodo2'] = '1'; 
                $_POST['rodo2'] = 'Zaakceptowane';
            } else {
                $insert['rodo2'] = '0';
                $_POST['rodo2'] = 'Niezaakceptowane';
            }
            $this->back_m->insert('mails', $insert);  

            require 'application/libraries/mailer/config.php';
            require 'application/libraries/mailer/functions.php';
            require 'application/libraries/mailer/PHPMailerAutoload.php';

            $_POST['base_url'] = base_url(); 

            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->Host = $cfg['smtp_host'];
            $mail->SMTPAuth = true;         
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            $mail->Username = $cfg['smtp_user'];
            $mail->Password = $cfg['smtp_pass'];
            $mail->Port = $cfg['smtp_port'];
            $mail->setFrom($cfg['smtp_user'], $data['contact']->company .  ' - formularz kontaktowy');
            $mail->AddBCC($data['contact']->email1);
            //$mail->AddBCC('dawid.plociennik13@gmail.com');
            $mail->addAttachment('mailer/attachment/'.$insert['attachment']);
            if(!empty($_POST['email'])) {
                $mail->addReplyTo($_POST['email']);
            }
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';
            $mail->Subject = $data['contact']->company .  ' - formularz kontaktowy';
            $mail->Body    = build_mail_body($_POST, 'contact_attachment.php');
            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
                exit;
            } else {
                $this->session->set_flashdata('flashdata', '<p class="text-success font-weight-bold mb-0">Pomyślnie wysłałeś formularz!</p>');
                redirect($_SERVER['HTTP_REFERER']);
            }
        //}
    }
}