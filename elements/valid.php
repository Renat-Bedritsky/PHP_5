<?php

function validData($name, $email, $phone, $message) {
    $regexpName = '/^[a-zA-Zа-яА-ЯёЁ]+$/ui';
    $regexpEmail = '/^[A-Z]{1}[-_.a-zA-Z0-9]{1,20}@[a-z]{2,10}.[a-z]{2,5}$/';
    $regexpPhone = '/^\+[\d]{1,3}[ ]{0,1}[\d]{2}[ ]{0,1}[\d]{3}[ -]{0,1}[\d]{2}[ -]{0,1}[\d]{2}$/';
    $regexpMessage = '/^[-., a-zа-я0-9]{5,250}$/i';

    if (!preg_match($regexpName, $name) || !preg_match($regexpEmail, $email) || !preg_match($regexpPhone, $phone) || !preg_match($regexpMessage, $message)) {
        return false;
    }
    return true;
}

if (validData($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['message']) === true) {
    header("refresh: 0; url=../elements/validOn.php");
}
else {
    header("refresh: 0; url=../pages/contact.php");
}

?>