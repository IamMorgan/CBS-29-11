<?php

// обработчик отправки письма
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Если поле обязательно к заполнению, оставить простую функцию
    if (isset($_POST['title'])) {$title = $_POST['title'];}

    $phone = "Телефон: ";
    if (!empty($_POST["phone"])) {
        //Если после следует еще поле, пишем двойной перенос
        $phone .= $_POST["phone"] . "\n";
    } else {$phone = "";};

    $name = "Имя: ";
    if (!empty($_POST["name"])) {
        //Если после следует еще поле, пишем двойной перенос
        $name .= $_POST["name"] . "\n";
    } else {$name = "";};

    $mail = "E-mail: ";
    if (!empty($_POST["mail"])) {
        //Если после следует еще поле, пишем двойной перенос
        $mail .= $_POST["mail"] . "\n";
    } else {$mail = "";};

    $program = "Программа: ";
    if (!empty($_POST["program"])) {
        //Если после следует еще поле, пишем двойной перенос
        $program .= $_POST["program"] . "\n";
    } else {$program = "";};

    
    

    // переменные для заполнения
    $headers = "Content-type: text/plain; charset = utf-8";
    $to = "danilpasko@gmail.com"; /*Получатель*/
    /*$title = "Мошн дизайн, анимация, видео"; Тема письма*/
    $mailText = "$name$phone$mail$program"; /*Содержимое письма*/

    // шаблон письма
    $send = mail ($to, $title, $mailText, $headers);
};

?>


                