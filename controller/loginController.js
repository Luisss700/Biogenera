$("document").ready(function () {
    
    $("#btnLogin").click(function () {

        var correo = $("#txtCorreo").val();
        var contrasena = $("#txtContrasena").val();

        var parametros = {
            "correo": correo,
            "contrasena": contrasena
        }

        $.ajax({

            data: parametros,
            url: "./CONTROLLERPHP/verificar.php",
            type: "post",
            success: function (data) {
                if (data == 0) {
                    alert("Correo no exsiste");
                }
                if (data == "fracaso") {
                    alert("Contraseña Incorrecta");
                }
                if (data == "exito") {
                    postForm('index.php', { loginExito: correo });
                }
            },
            error: function () {
                alert("error ");
            }

        });
        
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