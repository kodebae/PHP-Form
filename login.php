<?php 
require_once 'includes/header.php';
?>
<div class="form-container">
    <h1>Login</h1>
    <p>Need a new account?<a href="register.php">Sign up here!</a></p>

    <form action="" method="post">
        <input type="text" name="username" placeholder="username">
        <input type="text" name="password" placeholder="password">
        <input type="text" name="email" placeholder="email">
        <button type="submit">Login</button>
    </form>
</div> 

<?php 
require_once 'includes/footer.php';
?>