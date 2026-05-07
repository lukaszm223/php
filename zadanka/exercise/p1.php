<?php
     $polaczenia = mysqli_connect("localhost","root", "", "zadanka")

     $name = $_POST['name'];
     $surename = $_POST['surename'];
     $terms = $_POST['terms'];

     if($terms == "on"){
        $terms = 1;
    }else{
        $terms = 0;
    }
    
    echo <"<h1>name : $name </h1>"
    echo <"<h1>surename : $surename </h1>"

