
<!DOCTYPE html>
<html lang="en">
    <head>

    <!-- Referencias -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Embarques</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://unpkg.com/gridjs/dist/theme/mermaid.min.css" rel="stylesheet" />
        <!-- Estilos sobre nav y textos -->
        <link rel="stylesheet" href="{{asset('css/nav.css')}}">
    </head>

    <body>

        <!-- Nav Bar Parte Superior de la pagina -->
        @extends("layout.header")
        <!-- Nav Bar Parte Izquierda de la pagina -->
        @extends("layout.lat")

    <main>
        <h3 style="margin-bottom:45px">Datos de Embarques</h3>
        <p>Tus clientes</p>
        <!--Combo para seleccionar cliente-->
        <form  method="POST">
            <select id='client' name="client" aria-label="Default select example" style="background-color:#ffffff;color: rgb(0, 0, 0); padding: 5px 30px; border-radius: 5px;">
                <option value="0"></option>
            </select>
        </form>

        <p style="margin-top: 30px">Tus embarques</p>

        <!--Tabla de embarques por cliente-->
        <div id="wrapper"></div>
    </main>

       <script src="public/js/Grid.js"></script>
        <script src="https://kit.fontawesome.com/df85a1ea3b.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://unpkg.com/gridjs/dist/gridjs.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{asset('js/Grid.js')}}"></script>
    </body>
</html>
