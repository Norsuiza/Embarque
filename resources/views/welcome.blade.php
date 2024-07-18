<!DOCTYPE html>
<html lang="en">

<head>
<!-- Referencias -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/gridjs/dist/theme/mermaid.min.css" rel="stylesheet" />

<!-- Estilos sobre nav y textos -->
    <style>
        /* Estilos para el menú izquierdo */
        .menu-izquierdo {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: 200px;
            background-color: #333; /* Color de fondo del menú izquierdo */
            color: white; /* Color del texto */
            padding: 20px;
            overflow-y: auto;
            z-index: 1000; /* Asegura que el menú izquierdo esté por encima de otros elementos */
        }

        .menu-izquierdo a {
            display: block;
            color: white; /* Color del texto de los enlaces */
            text-decoration: none;
            padding: 10px 0;
        }

        .menu-izquierdo a:hover {
            background-color: #555; /* Color de fondo al hacer hover en los enlaces */
        }

        /* Ajuste de margen izquierdo para el contenido principal */
        main {
            margin-left: 220px; /* Asegura que el contenido principal no se superponga con el menú izquierdo */
            padding: 20px;
        }
    </style>

</head>

<!-- Fondo de la pagina -->
<body style="background-color: rgba(255, 255, 255, 0);">

<!-- Nav Bar Parte Izquierda de la pagina -->
<div class="menu-izquierdo">
    <p>Menu inicial</p>
    <a>Perfil</a>
    <a >Clientes</a>
    <a >Informacion</a>
</div>

<!-- Nav Bar Parte Superior de la pagina -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(139, 216, 124); margin-left: 200px;">
    <div class="container">
        <a class="navbar-brand" href="#">
            <i class="fas fa-truck"></i> Embarques
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<!-- Visualizacion de la pagina -->
<main>
    
    <div id="wrapper"></div>

    <script src="https://unpkg.com/gridjs/dist/gridjs.umd.js"></script>
              
    
    <!-- Modificacion falta referenciar el script para mostrar los datos en la tabla de Welcome-->


    <script type="text/javascript" src="{{asset('js/script.js')}}"></script>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


            <script type="text/javascript">  


                    const grid=new gridjs.Grid({
                        search:true,
                        sort:true,
                        pagination:{
                            limit:6
                        },
                        columns:["id","name","email","gender"],
                        server:{
                            url:"https://gorest.co.in/public/v2/users",
                            then: data=>{
                                console.log(data);
                                return data.map(item=>[
                                    item.id,
                                    item.name,
                                    item.email,
                                    item.gender
                                ])
                            }

                        }
                    }).render(document.getElementById('wrapper'))


            </script>
        

</body>
</html>
