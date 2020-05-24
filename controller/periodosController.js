$("document").ready(function () {

    llenarTablaPeriodos();
     
    function llenarTablaPeriodos() {

        var parametros = {
            "accion": "1",
        }

        $.ajax({

            data: parametros,
            url: "./CONTROLLERPHP/periodosTabla.php",
            type: "post",
            success: function (data) {
                //alert(data);
                $("#divPeriodos").html(data);
            },
            error: function () {
                alert("error ");
            }

        });


    }

    $("#btnAgregarPeriodo").click(function () {
        agregarPeriodo();
    });


    function agregarPeriodo(){

        var valores = {
            0: $("#txtNombrePeriodo").val(),
            1: $("#txtContrasenaPeriodo").val()
        }
        var columnas = {
            0: "Nombre",
            1: "Contrasena"
        }

        var sinRepetir = {
            "columna": "Nombre",
            "valor": $("#txtNombrePeriodo").val()
        }
        var parametros = {
            "insertar": "1",
            "valores": JSON.stringify(valores),
            "columnas": JSON.stringify(columnas),
            "tabla": "periodo",
            "sinRepetir": JSON.stringify(sinRepetir)
        }

        $.ajax({

            data: parametros,
            url: "./CONTROLLERPHP/insert.php",
            type: "post",
            success: function (data) {
                //alert(data);
                if (data == "no") {
                    alert("Periodo con ese nombre ya exsiste");
                }
            },
            error: function () {
                alert("error ");
            }

        }).done(function () {
            llenarTablaPeriodos();
        });

    }

});