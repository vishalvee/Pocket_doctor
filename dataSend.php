<?php


$to="tusharnegist@gmail.com";
$subject="give your pussy";
$message="saksham ko teri pussy chaihiye";
$from="prpbrainbooster@gmail.com";

$headers="From: $from";


if(mail($to,$subject,$message,$headers)){

    echo "SEND";
}else{
    echo " NOT SEND";

}































?>