$(document).ready(function() {

     $('#myModal').modal('show'); //mostrar la ventana
    /*Restringe las fechas del timepicker*/

     $("#myModal").on('hidden.bs.modal', function(){
       
        document.location.href = "index.php";
    });
     var now = new Date();
    minDate = now.toISOString().substring(0,10);
    $('#date').prop('min', minDate);

   
    //$('#check').prop('checked',);

    
    var id = $("#tarea").attr("value");

    $.ajax({
        type: "POST",
        url: "getTask.php?id="+id,
        success: function(response) {
            var tarea = JSON.parse(response);
            $("#title").attr("value", tarea[0]);
            $('#date').val(tarea[1]);
            $("#des").html(tarea[2]);
            //$("#check").attr("value",tarea[3]);
            //alert(tarea[3]);
            //$("#check[value='" + tarea[3].toString() + "']").attr("input", true);
            //$("imput[value='" + gau[3].toString() + "']").attr("selected", true);
            if (tarea[3]==1) {
                $('#check').prop('checked',true);
                $("#check").val(tarea[3]);

            }
           

           
        }
    });
    
   // modificar  tareas
      $('#miform').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        excluded: [':disabled'],
        fields: {
            title: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es obligatorio.'
                    }
                }
            },
            des: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es obligatorio.'
                    }
                }
            },
            date: {
                validators: {
                    date: {
                        format: 'DD/MM/YYYY',
                        message: 'El formato es: dd/mm/yyyy'
                    },
                    notEmpty: {
                        message: 'Este campo es obligatorio.'
                    }
                }
            }
        }
    }).on('success.form.bv',function(e) {
        //e.preventDefault();
        var formData = new FormData(this);
        var id = $("#tarea").attr("value");
        $.ajax({
            type: 'POST',
            url: "modificar_tarea2.php?id="+id,
            data: formData,
            async: false,
            success: function (data) {
                alert("Los cambios se efectuaron exitosamente.");
                document.location.href = "index.php";
            },
            cache: false,
            contentType: false,   // by default jQuery sets this to urlencoded string
            processData: false  // do not process the data as url encoded params
        });
        return false;
    });

    function reset_form () {
        $('#editForm')[0].reset();
        $("#editForm").data('bootstrapValidator').resetForm();
    };
  

   
});