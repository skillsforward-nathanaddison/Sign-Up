<?php
include_once'header.php';
?>

<section class="signup-form">
    <H2>Sign Up</H2>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="username" placeholder="Username...">
        <input type="text" name="emailAdd" placeholder="Email address...">
        <input type="text" name="userId" placeholder="User Id...">
        <input type="password" name="password" placeholder="Password...">
        <input type="password" name="rePassword" placeholder="Repeat Password...">
        <button type="submit" name="submit">Sign Up</button>
    </form>
</section>







<?php
include_once'footer.php';
?>
