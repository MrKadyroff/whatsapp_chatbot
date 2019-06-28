
$("#form").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);

    $.ajax({
           type: "POST",
           url: "mes.php",
           data: form.serialize(), // serializes the form's elements.
           success: function(data)
           {
             // alert(data);
               modal.style.display = "block";

  document.getElementById('form').reset();

          }

         });


});
$("#form_clients").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);

    $.ajax({
           type: "POST",
           url: "client.php",
           data: form.serialize(), // serializes the form's elements.
           success: function(data)
           {
             // alert(data);
               modal_clients.style.display = "block";


  document.getElementById('form_clients').reset();

          }

         });


});


var modal = document.getElementById("myModal");
var modal_clients = document.getElementById("myModal_clients");

// Get the button that opens the modal


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];


// When the user clicks on the button, open the modal


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

span.onclick = function() {
  modal_clients.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

window.onclick = function(event) {
  if (event.target == modal_clients) {
    modal_clients.style.display = "none";
  }
}

$(function del(id,phone,name) {


        $.ajax({
            url: 'upd_clients.php',
            data: {
                text: $("textarea[name=name"+id+"]").val(),
                phone:$("input[name=phone"+id+"]").val(),
            },
            dataType : 'json'
        });

});
