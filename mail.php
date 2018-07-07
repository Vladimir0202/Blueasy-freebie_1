<?php

$recepient = "dvl_02@mail.ru";
$sitename = "Название сайта";

$name = trim($_GET["name-field"]);
$phone = trim($_GET["email-field"]);
$text = trim($_GET["msg-field"]);

$pagetitle = "Новая заявка с сайта \"$sitename\"";
$message = "Имя: $name \nТелефон: $phone \nТекст: $text";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");