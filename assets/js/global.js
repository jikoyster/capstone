// Menu Toggle Script 
$("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});

// Tooltip Script
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// Datepicker Script 
$(document).on('focus', '.datepicker', function () {
  $(this).datepicker({
    startDate: "today", 
    todayBtn: "linked"
  });
});

// Get data into editAccount Modal
function editAccount() {
  var accountId = $(".userId", $(input[type='hidden'])).val(); //cannot get id val
  console.log(accountId);
  $.ajax({
    type: "POST",
    url: base_url+"Users/getUserInfo",
    dataType: 'json',
    data: {"user_id": accountId},
    error: function(xhr, ajaxOptions, thrownError) {
              alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status);
              alert("responseText: "+xhr.responseText);
            },
    success: function(data) {
      $("#fname").val(data[0]['firstname']);
      $("#lname").val(data[0]['lastname']);
      $("#school").val(data[0]['office']);
      $("#dept").val(data[0]['department']);
      $("#org").val(data[0]['organization']);
      $("#uname").val(data[0]['username']);
      $("#pass").val(data[0]['password']);
    }
  });
}

$(document).ready(function () {
  $("#editAccount").on("click", editAccount);
});
