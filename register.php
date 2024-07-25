<?php include('includes/header.php'); ?>
<?php include('crud.php'); ?>

<div class="container">
    <h1>Register</h1>
    <form action="register.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone" required><br><br>
        
        <input type="submit" name="submit" value="Register">
    </form>
</div>

<?php include('includes/footer.php'); ?>
