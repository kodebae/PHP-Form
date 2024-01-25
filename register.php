<?php 
require_once 'includes/header.php';
?>
<div class="form-container">
    <h1>Register</h1>
    <p>Have an existing account?<a href="login.php">Login</a></p>

    <form action="" method="post">
        <input type="text" name="username" placeholder="username">
        <input type="text" name="password" placeholder="password">
        <input type="text" name="confirmPassword" placeholder="confirm password">
        <input type="text" name="email" placeholder="email">
        <button type="submit" name="submit">Sign Up</button>
    </form>
</div> 

<?php 
require_once 'includes/footer.php';
?>