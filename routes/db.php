<?php

    $host="localhost";
    $user="root";
    $pass="Norsuiza12*";
    $db="gridjs";

    $conn=mysqli_connect($host,$user,$pass,$db);

    if($conn){

        $sql="Select * from usuarios";
        $result = mysqli_query($conn,$sql);
        $data= array();

        while($row=mysqli_fetch_assoc($result)){
            $data[]=$row;
        }

        $item= json_encode($data);
      

    }else{
        echo("Error en la conexion");
    }


?>