
$("document").ready(function () {


    $("#btnPrueba").click(function () {
        var parametros = {
            "dato":$("#txtPrueba").val()
        }
        
        $.ajax({
            
            data: parametros,
            url: "./CONTROLLERPHP/MODELS.php",
            type: "post",
            success: function (data) {
                alert("sucesssss = " + data);
                $("#contenidoDinamico").html(data);
            },
            error: function () {
                alert("error " );
            }
         
        });

    });
   
    });