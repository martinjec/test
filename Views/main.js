// Hide unused DIV's
$(document).ready(function () {
  $("select#productType").change(function (e) {
    $("input").prop("required", false);
    $("#DVD").hide();
    $("#Book").hide();
    $("#Furniture").hide();
    $("#" + e.target.value).show();
    $("#" + e.target.value)
      .children()
      .prop("required", true);
  });
//Cancel button
  $("#cancel").click(function (e) {
    e.preventDefault();
    window.location.href = "../../";
  });
//Submit
  $("#product_form").submit(function (e) {
    e.preventDefault();
    $.post(
      "../AddItem/addItem",
      {
        sku: $("#sku").val(),
        name: $("#name").val(),
        price: $("#price").val(),
        selector: $("#productType").val(),
        size: $("#size").val(),
        weight: $("#weight").val(),
        height: $("#height").val(),
        width: $("#width").val(),
        length: $("#length").val(),
      },
      function (data) {
        //Response error message
        var html = $(data).filter("#msg");
        $("#msg").replaceWith(html);
        //Redirecting to list view
        if ($("#msg").is(":empty")) {
          window.location.href = "../../";
        }
      },
      "html"
    );
  });
});
