//<!-- Menu Toggle Script -->
$("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});

//<!-- Datepicker Script -->
$('.datepicker').datepicker({
  todayBtn: "linked"
});

//<!-- Adding outline of activities row -->
$(function(){
  $("#add-activity-outline-row").click(function(){
    var list = '<tr>\
                  <td><input type="text" name="tentative[]" class="form-control datepicker" required></td>\
                  <td><input type="text" name="activity[]" class="form-control" required></td>\
                  <td><input type="number" name="participants[]" class="form-control" required></td>\
                  <td><input type="text" name="persons[]" class="form-control" required></td>\
                  <td class="text-center">\
                    <button type="button" class="rm-activity-outline-row btn btn-danger btn-sm"><span class="glyphicon glyphicon-minus-sign"></span></button>\
                  </td>\
                </tr>';
    $('#activity-outline tbody').append(list);
  });
});

//<!-- Adding budgetary requirements row  & totals-->
function isNumber(n) {
  return !isNaN(parseFloat(n)) && isFinite(n);
}

function recalc() {
  var tt = 0;
  $("#budgetary").find('tr').each(function () {
    var f = $(this).find('input.frequency').val();
    var q = $(this).find('input.quantity').val();
    var a = $(this).find('input.amount').val();
    var dateTotal = (f * q) * a;
    $(this).find('input.subtotal').val(dateTotal ? dateTotal : "");
    tt += isNumber(dateTotal) ? dateTotal : 0;
  }); //END .each
  $("#grand_total").html(tt);
}

function addMealsRow() {
  var list = '<tr>\
               <td><input type="text" name="a_particulars[]" id="a_particulars" class="particulars form-control" required></td>\
               <td><input type="number" name="a_frequency[]" id="a_particulars" class="frequency form-control" min="1" required></td>\
               <td><input type="number" name="a_quantity[]" id="a_quantity" class="quantity form-control" min="1" required></td>\
               <td>\
                 <div class="input-group">\
                   <div class="input-group-addon">₱</div>\
                   <input type="number" name="a_amount[]" id="a_amount" class="amount form-control" step="0.01" min="0.25" required>\
                 </div>\
               </td>\
               <td>\
                 <div class="input-group">\
                   <div class="input-group-addon">₱</div>\
                   <input type="number" name="a_total[]" id="a_product" class="subtotal form-control" readonly>\
                 </div>\
               </td>\
               <td class="text-center">\
                <button type="button" class="rm-meals-row btn btn-danger btn-sm"><span class="glyphicon glyphicon-minus-sign"></span></button>\
               </td>\
            </tr>';
  $('#budgetary tbody:first').append(list);
}

function addTranspoRow() {
   var list = '<tr>\
                  <td><input type="text" name="b_particulars[]" class="particulars form-control" required></td>\
                  <td><input type="number" name="b_frequency[]" class="frequency form-control" min="1" required></td>\
                  <td><input type="number" name="b_quantity[]" class="quantity form-control" min="1" required></td>\
                  <td>\
                    <div class="input-group">\
                      <div class="input-group-addon">₱</div>\
                      <input type="number" name="b_amount[]" class="amount form-control" step="0.25" min="1" required>\
                    </div>\
                  </td>\
                  <td>\
                    <div class="input-group">\
                      <div class="input-group-addon">₱</div>\
                      <input type="number" name="b_total[]" id="b_product" class="subtotal form-control" readonly>\
                    </div>\
                  </td>\
                  <td class="text-center">\
                    <button type="button" class="rm-transpo-row btn btn-danger btn-sm"><span class="glyphicon glyphicon-minus-sign"></span></button>\
                  </td>\
              </tr>';
    $('#budgetary tbody:eq(1)').append(list);
}

function addMaterialsRow() {
  var list = '<tr>\
                  <td><input type="text" name="c_particulars[]" class="particulars form-control" required></td>\
                  <td><input type="number" name="c_frequency[]" class="frequency form-control" min="1" required></td>\
                  <td><input type="number" name="c_quantity[]" class="quantity form-control" min="1" required></td>\
                  <td>\
                    <div class="input-group">\
                      <div class="input-group-addon">₱</div>\
                      <input type="number" name="c_amount[]" class="amount form-control" step="0.01" min="0.25" required>\
                    </div>\
                  </td>\
                  <td>\
                    <div class="input-group">\
                      <div class="input-group-addon">₱</div>\
                      <input type="number" name="c_total[]" id="c_product" class="subtotal form-control" readonly>\
                    </div>\
                  </td>\
                  <td class="text-center">\
                    <button type="button" class="rm-materials-row btn btn-danger btn-sm"><span class="glyphicon glyphicon-minus-sign"></span></button>\
                  </td>\
              </tr>';
    $('#budgetary tbody:eq(2)').append(list);
}

function calcSum() {
  var sum = 0;
  $(".subtotal").each(function () {
    if (!isNaN($(this).val())) sum += parseFloat($(this).val());
  });
  $(".grand_total").val(sum.toFixed(2));
}

$(function () {
  $("#calc").on("click", calcSum);
  $("#budgetary").on("keyup blur", ".form-control", recalc);
  $("#budgetary").on("keyup blur", ".form-control", calcSum);
  $("#add-meals-row").on("click", function() { addMealsRow() });
  $("#add-transpo-row").on("click", function() { addTranspoRow() });
  $("#add-materials-row").on("click", function() { addMaterialsRow() });
});

//<!-- remove table row -->
$(document).on('click', 'button.rm-meals-row,.rm-transpo-row,.rm-materials-row,.rm-activity-outline-row', function () {
  $(this).closest('tr').remove();
  return false;
});


     