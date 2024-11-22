<?php 
    $first = $_POST["first"];
    $last = $_POST["last"];
    $mail = $_POST["mail"];
    $pass1 = $_POST["pas1"];
    $pass2 = $_POST["pas2"];

    function dandadan(){
        global $mail;
        global $first;
        global $last;
        global $pass1;
        global $pass2;
        $passval = $pass1 == $pass2;
        $passvil = strlen($pass1) >= 8;
        if(empty ($mail)){
            echo "Can't be empty!";
        }
        elseif(empty ($first)){
            echo "Can't be empty!";
        }
        elseif(empty ($last)){
            echo "Can't be empty!";
        }
        elseif(empty ($pass1)){
            echo "Can't be empty!";
        }
        elseif(empty ($pass2)){
            echo "Can't be empty!";
        }
        elseif($passval && $passvil){
            header("Location: bravissimo2.php?first=$first&last=$last");
        }
        else{
            echo "WRONG";
        }
        
    }
    dandadan();
?>