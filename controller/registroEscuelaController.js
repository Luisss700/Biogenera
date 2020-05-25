$("document").ready(function () {

    var periodo = $("#selectPeriodo").children("option:selected").val();

    $("#btnRegistrarEscuela").click(function () {
        if (validar()) {
            registrarEscuela();
        }
    });

    function validar() {

        var r = true;
            var vNombre = $("#txtNombre").val();
            var vTurno = $("#txtTurno").val();
            var vColaborador = $("#txtColaborador").val();
            var vCupo = $("#txtCupo").val();
            var vNombreContacto = $("#txtNombreContacto").val();

            if (isNaN(vCupo) || vCupo.length < 1) {
                alert("Ingresar un numero en el cupo");
                return false;
            }
            if (vNombre.length < 3) {
                alert("Nombre muy corto");
                return false;
            }
            if (vColaborador.length < 3) {
                alert("Nombre de colaborador muy corto");
                return false;
            }
            if (vNombreContacto.length < 3) {
                alert("Nombre de contacto corto");
                return false;
            }

            return r;

    }
   
    function registrarEscuela() {
        //alert("Periodo = "+periodo);
        var valores = {

            0: $("#txtNombre").val(),
            1: $("#txtTurno").val(),
            2: $("#txtFechaVisita").val(),
            3: $("#txtColaborador").val(),
            4: $("#txtCupo").val(),
            5: $("#txtNombreContacto").val(),
            6: $("#txtContactoTel").val(),
            7: periodo

        }

        var columnas = {
            0: "Nombre",
            1: "Turno",
            2: "FechaVisita",
            3: "Colaborador",
            4: "Cupo",
            5: "NombreContacto",
            6: "Contacto",
            7: "IDperiodo",

        }


        var parametros = {
            "insertar": "1",
            "valores": JSON.stringify(valores),
            "columnas": JSON.stringify(columnas),
            "tabla": "escuela"
        }
        $.ajax({

            data: parametros,
            url: "./CONTROLLERPHP/insert.php",
            type: "post",
            success: function (data) {
                alert(data + "Escuela registrada");
                if (data == "no") {
                    alert("Periodo con ese nombre ya exsiste");
                }
                postForm('index.php', { ruta: 'escuelas' });
            },
            error: function () {
                alert("error ");
            }

        });
    }

    $("#selectPeriodo").change(function () {
        periodo = $(this).children("option:selected").val();
    });

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