<?php

if(isset($_POST['submit'])){
    $to = "world.around.us1234@gmail.com";
    $from = "MySite@mail.com";
    $subject = "Заявка з сайту"
    $name = $_POST['name'];
    $email = $_POST['e-mail'];
    $message = " Доброго дня, Вам написав " .$name ."\n\n" . "Його електронна пошта: " . $email;
    $headers = "From:" . $from;
    mail($to, $subject, $message,$headers);
}

?>