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

    var elements = document.getElementsByClassName("btnEliminarPeriodo");

    var myFunction = function () {
        var attribute = this.getAttribute("data-nombre");
        //alert(attribute);
    };

    for (var i = 0; i < elements.length; i++) {
        elements[i].addEventListener('click', myFunction, false);
    }

    function eliminarPeriodo(nombre) {

        var parametros = {
            "eliminar": "1",
            "valor": nombre,
            "columna": "Nombre",
            "tabla": "periodo"
        }

        $.ajax({

            data: parametros,
            url: "./CONTROLLERPHP/delete.php",
            type: "post",
            success: function (data) {
                //alert(data);             
            },
            error: function () {
                alert("error ");
            }

        }).done(function () {
            llenarTablaPeriodos();
        });

    }


    $("#divPeriodos").on("click", ".btnEliminarPeriodo", function (event) {
        event.stopPropagation();
        var nombre = $(this).data('nombre');
        eliminarPeriodo(nombre);
    });

});