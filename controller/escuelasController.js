$("document").ready(function () {

   // llenarSelectPeriodos();
    /*
   function llenarSelectPeriodos() {

        var parametros = {
            "accion": "2",
        }

        $.ajax({

            data: parametros,
            url: "./CONTROLLERPHP/periodosTabla.php",
            type: "post",
            success: function (data) {
                alert(data);
                $("#selectPeriodos").html(data);
            },
            error: function () {
                alert("error ");
            }

        });


    }

   */

    var periodoJ = $("#selectPeriodo").children("option:selected").val();

    var escuelaJ = $("#selectEscuela").children("option:selected").val();

    $("#selectPeriodo").change(function (s) {
        periodoJ = $(this).children("option:selected").val();
        //alert("periodo = "+ periodoJ);
    });

    $("#selectEscuela").change(function (s) {
        escuelaJ = $(this).children("option:selected").val();
        //alert("periodo = "+ periodoJ);
    });

    $("#btnActualizarPeriodo").click(function () {
        //alert("Periodo =" + periodoJ);
        postForm('index.php', { ruta: 'escuelas' , periodo:periodoJ});
    });

    $("#btnActualizarEscuela").click(function () {
        //alert("Escuela =" + escuelaJ);
        postForm('index.php', { ruta: 'escuelas', periodo: periodoJ , escuela: escuelaJ });
    });

    $("#btnAgregarEstudiante").click(function () {
        if(validarEstudiante()){
            agregarEstudiante($("#txtEscuelaId").val());
        }
    });

    function validarEstudiante() {
        var r = true;
        var vNombre = $("#txtNombreEstudiante").val();
        var vEdad = $("#txtEdad").val();
        var vGrado = $("#txtGrado").val();
        var vNombreTutor = $("#txtNombreTutor").val();
        var vTel = $("#txtTelefonoTutor").val();

        if (isNaN(vEdad) || vEdad.length < 1) {
            alert("Ingresar un numero en la edad");
            return false;
        }
        if (isNaN(vGrado) || vGrado.length < 1) {
            alert("Ingresar un numero en grado");
            return false;
        }
        if (vNombre.length < 3) {
            alert("Nombre muy corto");
            return false;
        }



        return r;

    }

    function agregarEstudiante(idEsc) {

        var valores = {
            0: $("#txtNombreEstudiante").val(),
            1: $("#txtEdad").val(),
            2: $("#txtGrado").val(),
            3: $("#txtNombreTutor").val(),
            4: $("#txtTelefonoTutor").val(),
            5: idEsc
        }
        var columnas = {
            0: "Nombre",
            1: "Edad",
            2: "Grado",
            3: "NombreP",
            4: "TelefonoP",
            5: "IDescuela"
        }

        var sinRepetir = {
            "columna": "Nombre",
            "valor": $("#txtNombreEstudiante").val()
        }

        var parametros = {
            "insertar": "1",
            "valores": JSON.stringify(valores),
            "columnas": JSON.stringify(columnas),
            "tabla": "estudiante",
            "sinRepetir": JSON.stringify(sinRepetir)
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
                    alert("Se ha agregado un estudiante");
                }
            },
            error: function () {
                alert("error ");
            }

        }).done(function () {
            llenarTablaEstudiantes(idEsc);
        });

    }

    var myEle = document.getElementById("agregarJS");
    if (myEle) {
        llenarTablaEstudiantes($("#txtEscuelaId").val());
    }

    function llenarTablaEstudiantes(idEsc) {

        var parametros = {
            "accion": "1",
            "idEscuela":idEsc
        }

        $.ajax({

            data: parametros,
            url: "./CONTROLLERPHP/estudiantesTabla.php",
            type: "post",
            success: function (data) {
                //alert(data);
                $("#divEstudiantes").html(data);
            },
            error: function () {
                alert("error ");
            }

        });


    }

    var elements = document.getElementsByClassName("btnEliminarEstudiante");

    var myFunction = function () {
        var attribute = this.getAttribute("data-id");
        //alert(attribute);
    };

    for (var i = 0; i < elements.length; i++) {
        elements[i].addEventListener('click', myFunction, false);
    }

    $("#divEstudiantes").on("click", ".btnEliminarEstudiante", function (event) {
        event.stopPropagation();
        var id = $(this).data('id');
        eliminarEstudiante(id);
    });

    function eliminarEstudiante(id) {

        var parametros = {
            "eliminar": "1",
            "valor": id,
            "columna": "IDEstudiante",
            "tabla": "estudiante"
        }

        $.ajax({

            data: parametros,
            url: "./CONTROLLERPHP/delete.php",
            type: "post",
            success: function (data) {
                //alert(data);
                alert("Se ha eliminado el estudiante");
            },
            error: function () {
                alert("error ");
            }

        }).done(function () {
            llenarTablaEstudiantes($("#txtEscuelaId").val());
        });

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