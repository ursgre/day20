function changeOrder(id) {
  var id = id;
  var record_order = document.getElementById("getOrder" + id).value;

  $.ajax({
    type: "post",
    url: `${baseUrl}panel/record_order/set/`,
    data: {
      id: id,
      record_order: record_order,
      table: `${currentTable}`,
    },
    cache: false,
    complete: function (html) {},
  });
}
