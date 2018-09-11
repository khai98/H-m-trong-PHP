<link rel="stylesheet" href="BTVN.css">
<form method="post">
    <?php require "SAVEPWEM_BTVN.php"; ?>

    <div class="container">
        <h1>Register</h1>
        <p>Registration Form</p>
        <hr>


        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email">
        <div class="colorErr"><?php echo $nameErr ?></div>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password">
        <div class="colorErr"><?php echo $passwordErr ?></div>

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat">
        <div class="colorErr"><?php echo $phoneErr ?></div>
        <hr>
        <button type="submit" class="registerbtn">Register</button>


    </div>
</form>
