<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mailer extends CI_Controller {

    public function send() {       
        
        if($_POST['secret_key'] == '6Le3s8AUAAAAAETy4Gqn_M5F8xQBNJOgMI9qBqTG') {
            $data['contact'] = $this->back_m->get_one('contact_settings', 1);

            $insert['name'] = $this->input->post('name');
            $insert['email'] = $this->input->post('email');
            $insert['subject'] = 'Formularz kontaktowy - '.$insert['name'];
            $insert['phone'] = $this->input->post('phone');
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
            if(!empty($_POST['email'])) {
                $mail->addReplyTo($_POST['email']);
            }
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';
            $mail->Subject = $data['contact']->company .  ' - formularz kontaktowy';
            $mail->Body    = build_mail_body($_POST, 'contact.php');
            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
                exit;
            } else {
                $this->session->set_flashdata('flashdata', '<p class="font-weight-bold mb-0">Pomy??lnie wys??a??e?? formularz!</p>');
                redirect('');
            }
        }
    }
}









