<?php
include_once'header.php';
?>

<section class="signup-form">
    <H2>Login</H2>
    <form action="login.inc.php" method="post">
        <input type="text" name="Username" placeholder="Username/Email...">
        <input type="password" name="password" placeholder="Password...">
        <button type="submit" name="submit">Login</button>
    </form>
</section>







<?php
include_once'footer.php';
?>
