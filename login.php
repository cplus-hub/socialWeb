<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/login.css">
    <script src="./js/login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <title>login</title>
</head>

<body>
    <div><img src="./img/logo_1.png" class="logo" alt="logo"></div>
    
</div>
    <div class="main">

        <div><img src="./img/icon.png" class="icon" alt="icon"></div>
        <div class="maintext">
            <span ><a href="./login.php" class="maintext_1">登入</a></span>
            <span ><a href="./signup.php"class="maintext_2">註冊</a></span>
        </div>
        <form action="" method="post">
            <input type="text" name="account" class="account" placeholder="Account">
            <br />
            <input type="password" name="password" class="password" placeholder="Password">
            <br />
            <input type="submit" class="signin" value="Sign in">
        </form>
        <div></div>
    </div>
</body>

</html>