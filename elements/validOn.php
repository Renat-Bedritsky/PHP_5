<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/treehouse/elements/header.php';
?>

<div class="validOn">

    <h2>Данные прошли проверку</h2>

    <p>Спасибо!</p>

</div>
   
<?php
header("refresh: 10; url=../pages/contact.php");

require_once $_SERVER["DOCUMENT_ROOT"].'/treehouse/elements/footer.php';
?>