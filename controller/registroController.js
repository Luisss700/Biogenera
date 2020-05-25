$("document").ready(function () {

    $("#btnRegistrate").click(function () {
        
        var error = false;
        var correo = $("#txtCorreo").val();
        var contra = $("#txtContrasena").val();
        var contra2 = $("#txtContrasena2").val();
        
        if (contra2 != contra) {
            alert("Las contraseñas no coinciden");
            error = true;
        } else {
            var $myForm = $('#formaRegistro');
            if ($myForm[0].checkValidity()) {
                // La forma es valida y contrasena correcta, ahora a checar si el correo ya exsiste
                var parametros = {
                    "correo": correo
                }
                $.ajax({

                    data: parametros,
                    url: "./CONTROLLERPHP/verificar.php",
                    type: "post",
                    success: function (data) {
                        if (data > 0) {
                            error = true;
                            alert("El correo ingresado ya tiene una cuenta registrada.");
                            return;
                        }
                    },
                    error: function () {
                        alert("error");
                    }

                }).done(function () {
                    if (!error) {
                        $("#hiddenRegistro").trigger("click");
                    }
                });
            } else {
                $("#hiddenRegistro").trigger("click");
            }
        }
    });


    //#region validar


    //#endregion

});