
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

    $("#btnVoluntarios").click(function () {
        postForm('index.php', { ruta: 'voluntarios' });
    });

    $("#btnEscuelas").click(function () {
        postForm('index.php', { ruta: 'escuelas' });
    });

    $("#btnPeriodos").click(function () {
        postForm('index.php', { ruta: 'periodos' });
    });

    $("#btnRegistroEscuela").click(function () {
        postForm('index.php', { ruta: 'registroEscuela' });
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

