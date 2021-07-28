function setActiveRecord(id, table) {
  let active = document.getElementById("check" + id).checked ? 1 : 0;

  $.ajax({
    type: "post",
    url: `${baseUrl}panel/active_records/set/`,
    data: { id: id, active, table: currentTable },
    cache: false,
    beforeSend: function (html) {
      console.log(html);
    },
    complete: function (html) {
      console.log(html);
    },
  });
}
