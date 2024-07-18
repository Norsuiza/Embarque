const grid=new gridjs.Grid({
    search:true,
    sort:true,
    pagination:{
        limit:3
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