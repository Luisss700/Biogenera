$("document").ready(function () {

    var periodoJ = $("#selectPeriodo").children("option:selected").val();
    $("#selectPeriodo").change(function () {
        periodoJ = $(this).children("option:selected").val();
        //alert("periodo = " + periodo);
    });

    $("#selectEscuela").change(function (s) {
        escuelaJ = $(this).children("option:selected").val();
        //alert("escuela = "+ escuelaJ);
    });

    $("#btnEquipos").click(function () {
        postForm('index.php', { ruta: 'registroEquipo', periodo: periodoJ });
    });

    $("#btnActualizarEscuela").click(function () {
        //alert("Escuela =" + escuelaJ);
        postForm('index.php', { ruta: 'registroEquipo', periodo: periodoJ, escuela: escuelaJ });
    });

    $("#btnAgregarEquipo").click(function () {
        agregarEquipo();
    });

    function agregarEquipo() {

        var valores = {
            0: periodoJ,
            1: escuelaJ
        }
        var columnas = {
            0: "IDPeriodo",
            1: "IDescuela"
        }


        var parametros = {
            "insertar": "1",
            "valores": JSON.stringify(valores),
            "columnas": JSON.stringify(columnas),
            "tabla": "equipo"
        }

        $.ajax({

            data: parametros,
            url: "./CONTROLLERPHP/insert.php",
            type: "post",
            success: function (data) {
                //alert(data);
                if (data == "no") {
                    alert("Estudiante con ese nombre en esta escuela ya exsiste");
                } else {
                    alert("Se ha agregado un equipo");
                }
            },
            error: function () {
                alert("error ");
            }

        }).done(function () {
            llenarTablaEquipo();
        });

    }

    function llenarTablaEquipo() {

        var parametros = {
            "accion": "1",
            "idEscuela": escuelaJ
        }

        $.ajax({

            data: parametros,
            url: "./CONTROLLERPHP/equiposTabla.php",
            type: "post",
            success: function (data) {
                //alert(data);
                $("#divEquipos").html(data);
            },
            error: function () {
                alert("error ");
            }

        });


    }

    var elements = document.getElementsByClassName("btnEliminarEquipo");

    var myFunction = function () {
        var attribute = this.getAttribute("data-id");
        //alert(attribute);
    };

    for (var i = 0; i < elements.length; i++) {
        elements[i].addEventListener('click', myFunction, false);
    }

    $("#divEquipos").on("click", ".btnEliminarEquipo", function (event) {
        event.stopPropagation();
        var id = $(this).data('id');
        eliminarEquipo(id);
    });

    function eliminarEquipo(id) {

        var parametros = {
            "eliminar": "1",
            "valor": id,
            "columna": "IDEquipo",
            "tabla": "equipo"
        }

        $.ajax({

            data: parametros,
            url: "./CONTROLLERPHP/delete.php",
            type: "post",
            success: function (data) {
                //alert(data);
                alert("Se ha eliminado el equipo");
            },
            error: function () {
                alert("error ");
            }

        }).done(function () {
            llenarTablaEquipo();
        });

    }


    var escuelaJ = $("#selectEscuela").children("option:selected").val();

    var myEle = document.getElementById("agregarJS");
    if (myEle) {
        llenarTablaEquipo();
    }

    function postForm(path, params, method) {
        method = method || 'post';

        var form = document.createElement('form');
        form.setAttribute('method', method);
        form.setAttribute('action', path);

        for (var key in params) {
            if (params.hasOwnProperty(key)) {
                var hiddenField = document.createElement('input');
                hiddenField.setAttribute('type', 'hidden');
                hiddenField.setAttribute('name', key);
                hiddenField.setAttribute('value', params[key]);

                form.appendChild(hiddenField);
            }
        }

        document.body.appendChild(form);
        form.submit();
    }
});