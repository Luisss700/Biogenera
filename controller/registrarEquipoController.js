$("document").ready(function () {

    var periodo = $("#selectPeriodo").children("option:selected").val();
    $("#selectPeriodo").change(function () {
        periodo = $(this).children("option:selected").val();
        alert("periodo = " + periodo);
    });

});