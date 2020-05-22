
$("document").ready(function () {
   
    $("#btnMiCuenta").click(function () {
        postForm('index.php', { ruta: 'miCuenta' });
    });

    $("#btnRegistroRuta").click(function () {
        postForm('index.php', { ruta: 'registro' });
    });

    $("#btnCerrarSesion").click(function () {
        postForm('index.php', { cerrarSesion: 'cerrarSesion' });
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

