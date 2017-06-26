// Add Record
function addRecord() {
    // get values
    var first_name = $("#first_name").val();
    var last_name = $("#last_name").val();
    var email = $("#email").val();
if (first_name!=='' || last_name!==''){
    // Add record
    $.post("subscribe/addRecord.php", {
        first_name: first_name,
        last_name: last_name,
        email: email
    }, function (data, status) {
        swal(
  'Muito Bom!',
  'Parabéns Você é o mais novo integrante!',
  'success',setTimeout(location.reload.bind(location), 2000),
)
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        

        // clear fields from the popup
        $("#first_name").val("");
        $("#last_name").val("");
        $("#email").val("");
    });
}

    else {
        
       swal(
  'Oops...',
  'Favor preencha os dados!',
  
)
    }

}