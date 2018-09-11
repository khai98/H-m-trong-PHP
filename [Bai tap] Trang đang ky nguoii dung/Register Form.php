<link rel="stylesheet" href="cssRegisterForm.css">
<form method="post">
    <?php require "SaveRegisterForm.php"; ?>

    <div class="container">
        <h1>RegisterForm</h1>
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

<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .thumbnail {
        height: 60px;
        width: 100px;
        overflow: hidden;
    }

    .thumbnail img {
        width: 100%;
    }

    .text {
        text-align: center;
        font-weight: bold;
    }

    .search {
        width: 40%;
        margin-left: 280px;

    }
</style>
<table border="0">
    <caption><h2> RegisterForm List</h2></caption>
    <tr>
        <th>STT</th>
        <th>Emaill</th>
        <th>Password</th>
    </tr>




    <?php
    $datas = loadContents();?>
    <?php foreach ($datas as $key => $data):?>
    <tr>
        <td><?php echo $key+1 ?></td>
        <td><?php echo  $data ['email'] ?></td>
        <td><?php echo  $data ['password'] ?></td>
    </tr>
    <?php endforeach;?>
</table>
