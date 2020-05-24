$("document").ready(function () {

    var periodo = $("#selectPeriodo").children("option:selected").val();

    $("#btnRegistrarEscuela").click(function () {
        registrarEscuela();
    });

    var valores = {



    }

    var columnas = {
        1:"d"

    }

    function registrarEscuela() {
        var parametros = {
            "insertar": "1",
            "valores": JSON.stringify(valores),
            "columnas": JSON.stringify(columnas),
            "tabla": "escuela"
        }
    }

    $("#selectPeriodo").change(function () {
        periodo = $(this).children("option:selected").val();
    });

});