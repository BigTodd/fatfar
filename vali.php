<?php
    $fn = $_POST["firstname"];
    $ln = $_POST["lastname"];
    $age = $_POST["age"];

    function dandadan(){
        global $age;
        global $fn;
        global $ln;
        $ageval = $age >= 1 && $age <= 120;
        if(empty ($age)){
            echo "Can't be empty!";
        }
        elseif(empty ($fn)){
            echo "Can't be empty!";
        }
        elseif(empty ($ln)){
            echo "Can't be empty!";
        }
        elseif($ageval){
            header("Location: bravissimo.php");
        }
        else{
            echo "WRONG";
        }
        
    }
    dandadan();
?>