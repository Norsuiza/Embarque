<style>
main {
            padding: 2%;
          
            margin-left: 180px; /* Asegura que el contenido principal no se superponga con el menú izquierdo */
         
        } 
</style>

<main>

    <div id="wrapper"></div>
    
</main>

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

<script src="https://unpkg.com/gridjs/dist/gridjs.umd.js"></script>