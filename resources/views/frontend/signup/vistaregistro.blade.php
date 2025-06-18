<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script><!--Libreria alertas -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="{{ asset('css/buttons_estilo.css') }}" rel="stylesheet">

    <title>Create Post</title>

     <style>
        html, body {
            height: 100%;
        }
        body {
            font-family: 'Roboto', sans-serif;
            background-image: url({{ asset('images/fondo3.jpg') }});
            background-size: 100% 100%;
            background-repeat: no-repeat;
        }

        ::placeholder {
            font-size:14px;
            letter-spacing:0.5px;
        }

        .form-control-lg {
            font-size: 16px;
            padding: 25px 20px;
        }
        .font-500{
            font-weight:500;
        }
        .image-size-small{
            width:200px;
            margin:0 auto;
        }
    </style>


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand h1" href={{ route('login') }}>CRUD Registro de usuarios</a>            
    </nav>

    <div class="container">
    <div class="row">
        <div class="col-lg-6 col-12 mx-auto">
            <div class="p-5 bg-white rounded shadow-lg" style="margin-top: 30px;">
                <h3 class="mb-2 text-center pt-2" style="font-weight: bold">Registrar Usuario</h3>
                <form method="post" action="{{ route('registrar.store') }}" id="formulario">
                    @csrf
                    <label class="font-500 mt-3">Nombre</label>
                    <input type="text" class="form-control form-control-lg mb-3" id="nombre" name="nombre">

                    <label class="font-500">Password</label>
                    <input type="password" class="form-control form-control-lg mb-3" id="password" name="password">

                    <button type="submit" class="button w-100 fw-bold mt-3 button-primary button-pill">Registrar</button>

                    <a href="{{ route('login') }}" class="button w-100 fw-bold mt-3 button-primary button-pill">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</div>

    <script src={{ asset('js/registro.js') }}></script>
</body>

</html>