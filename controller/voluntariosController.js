$("document").ready(function () {

    //alert("hola");
    $("#btnBuscar").click(function () {
        //alert("buscar");
        var periodoJ = $('#selectPeriodo option:selected').data('id');

        var e2 = document.getElementById("selectFiltro");
        var filtroJ = e2.options[e2.selectedIndex].text;

        var busquedaJ = $("#txtBusqueda").val();

        //alert(busquedaJ + filtroJ + periodoJ);
        postForm('index.php', { ruta: 'voluntarios', periodo: periodoJ, filtro: filtroJ,busqueda:busquedaJ });
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