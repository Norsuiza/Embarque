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
            background-color: #333; /* Color de fondo del menú izquierdo */
            color: white; /* Color del texto */
            padding: 40px;
            overflow-y: auto;
            z-index: 1000; /* Asegura que el menú izquierdo esté por encima de otros elementos */
        }

        .menu-izquierdo a {
            display: block;
            color: white; /* Color del texto de los enlaces */
            text-decoration: none;
            padding: 15% 0;

        }

        .menu-izquierdo a:hover {
            background-color: #555; /* Color de fondo al hacer hover en los enlaces */
        }

        /* Ajuste de margen izquierdo para el contenido principal */
        main {
            padding: 2%;

            margin-left: 90px; /* Asegura que el contenido principal no se superponga con el menú izquierdo */
            margin-top: 50px;
        }


    </style>

</head>

<!-- Fondo de la pagina -->
<body style="background-color: rgba(255, 255, 255, 0);">

<!-- Nav Bar Parte Superior de la pagina -->
@extends("layout.header")

<!-- Nav Bar Parte Izquierda de la pagina -->
    @extends("layout.lat")

<!-- Visualizacion de la pagina -->



<main>

    <p>Seleccionar Cliente</p>


    <select aria-label="Default select example" style="background-color:#ffffff;color: rgb(0, 0, 0); padding: 5px 30px; border-radius: 5px;">
         <option selected>s</option>
    </select>



    <p style="margin-top: 30px">Buscar por atributo</p>
    <div id="wrapper"></div>
</main>

<script src="https://unpkg.com/gridjs/dist/gridjs.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<!--Tabla de embarques por cliente--->
            <script type="text/javascript">
                    const grid=new gridjs.Grid({
                        search:true,
                        sort:true,
                        pagination:{
                            limit:6
                        },
                        columns:["Folio","Numero de embarque","Fecha","Hora","Contract","Partner","Temporada","Conductor","Transporte","N. Caja refrigerada","Total de pallets","Estatus de descarga"],
                        server:{
                            url:"http://localhost:8000/api/shipments/",
                            then: data=>{
                                console.log(data);
                                return data.map(item=>[
                                    item.id,
                                    item.shipment_number,
                                    item.shipment_date,
                                    item.shipment_hour,
                                    item.contract,
                                    item.partner_id,
                                    item.season_id,
                                    item.driver,

                                    item.transport,
                                    item.refrigerated_box,
                                    item.pallets_total,
                                    item.download_flag,
                                ])
                            }

                        }
                    }).render(document.getElementById('wrapper'))
            </script>
</body>
</html>
