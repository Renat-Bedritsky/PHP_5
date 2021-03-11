<?php
require_once '../elements/header.php';
?>

<div class="contacts_data">
    <div class="container">
        <h2>Contact us</h2>
        <p>Proin iaculis purus consequat sem cure.</p>
        <form action="../elements/valid.php" method="POST">
            <div class="footer_top_data">
                <div>
                    <input type="text" name="name" minlength="2" maxlength="20" required placeholder="YOUR NAME*">
                    <input type="email" name="email" minlength="7" maxlength="30" required placeholder="YOUR E-MALE*">
                    <input type="text" name="phone" minlength="6" maxlength="20" required placeholder="YOUR PHONE*">
                </div>
                <div>
                    <textarea name="message" required placeholder="YOUR MASSAGE*"></textarea>
                </div>
            </div>
            <div class="footer_top_button">
                <button>Send Message</button>
            </div>
        </form>
    </div>
</div>

<?php
require_once '../elements/footer.php';
?>