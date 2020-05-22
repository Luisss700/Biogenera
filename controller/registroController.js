$("document").ready(function () {

    $("#btnRegistrate").click(function () {

        var error = false;

        var contra = $("#txtContrasena").val();
        var contra2 = $("#txtContrasena2").val();
        
        if (contra2 != contra) {
            alert("Las contraseñas no coinciden");
        } else {
            $("#hiddenRegistro").trigger("click");
        }
    });


});