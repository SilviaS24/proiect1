<?php
$con= mysqli_connect('localhost' ,'root', '', 'clienti');
if(!$con)
{
    die(mysqli_errno($con));
}