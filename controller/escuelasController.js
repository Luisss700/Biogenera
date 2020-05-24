$("document").ready(function () {

    llenarSelectPeriodos();

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

});