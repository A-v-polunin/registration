<?php 

    $login = $_POST['login'];
    $password = $_POST['password'];
    $check = 0;
    $checkBukv = 0;
    $checkNum = 0;
    $vopros = "?";
    $voskl = "!";

    $bigAlphobet = array("A" , "B" , "C" , "D" , "E" , "F" , "G" , "H" , "I" , "J" , "K" , "L" , "M" , "N" , "O" , "P" , "Q" , "R" , "S" , "T" , "U" , "V" , "W" , "X" , "Y" , "Z");
    $numbers = array("0" , "1" , "2" , "3" , "4" , "5" , "6" , "7" , "8" , "9" , "10");

    if(mb_strlen($password) < 8){
        echo "Пароль должен иметь минимум 8 символов";
        exit();
    }


    if(preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $login))
    {
        $igor = $down;
    }else{
        echo "Введите правильный мейл";
    }

    if(!strpos($password, $voskl)){
        $check +=0.5;
    }

    if(!strpos($password, $vopros)){
        $check +=0.5;
    }

    for($i = 0 ; $i < count($bigAlphobet) ; $i++){
        if(!strpos($password, $bigAlphobet[$i])){
            $checkBukv +=1;
        }
    }

    for($i = 0 ; $i < count($numbers) ; $i++){
        if(!strpos($password , $numbers[$i])){
            $checkNum +=1;
        }
    }

    if($check < 0.6 || $checkBukv < 26 || $checkNum < 11){
        $mysql = new mysqli('localhost' , 'root' , 'root' , 'register');

        $mysql->query("INSERT INTO `users` (`login` , `password`)
        VALUES('$login', '$password')");

        $mysql->close();
        echo "Вы создали аккаунт";
    }else{
        echo "Введи правильный пароль уебок!";
    }

?>