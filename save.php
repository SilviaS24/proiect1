<?php
require_once "connection.php";
$msg="";
if(isset($_POST['upload'])){
    $target="./assets/img/".md5(uniqid(time())).basename($_FILES['image']['name']);
    $text=$_POST['nume'];
    $pret=$_POST['pret'];
    $sql="INSERT INTO servicii(nume, imagine, pret) VALUES('$text', '$target', '$pret')";
    mysqli_query($con, $sql);
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        header('Location:administrareservicii.php');
    }
    else{
        $msg="Vai! Vai! Vai!!!";
    }
}

