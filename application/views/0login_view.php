<!--<html>
<head>
    <title>Login for Health Fitness Pro</title>
</head>
<body>
<h3>Login for the Health Fitness Pro</h3>
<form action="/Cw2/index.php/auth_controller/authenticate" method="POST">
    Email : <input type="email" name='uname' length="10" size="10" required>  <br>
    Password: <input type="password" name='pword' length="15" size="30" required> <br>
    <input type="submit" value='Login!'>
</form>
<form action="/Cw2/index.php/auth_controller/register" method="POST">
<input type="submit" value='Register!'>
</form>
<span style="color: red"><?php echo $errmsg ?></span> <br>
</body>
</html>-->



<!doctype html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Login</title>
    <title>Login for Health Fitness Pro</title>
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/animate.css">
    <link rel="stylesheet" href="../../css/styles3.css">
    <link rel="stylesheet" href="../../css/style2.css">
    <link rel="stylesheet" href="../../css/demo.css">
</head>
<body>
    <br>
    <br>
    <br>
    <br>
    <header><h1>Login for the Health Fitness Pro</h1>
    </header>
    <div id="container">
        <form action="/Cw2/index.php/auth_controller/authenticate" method="POST">
            <label for="email">Email:</label>
            <input type="email" name='uname' length="10" size="10" required> <br>
            <label for="username">Password:</label>
            <p><a href="#">Forgot your password?</a>
                <input type="password" name='pword' length="15" size="30" required> <br>
            <div id="lower">
                <input type="checkbox" value ="rme" name ="remember"><label class="check" for="checkbox">Remember me</label>
                <input type="submit" value="Login">
            </div>
        </form>
        <form action="/Cw2/index.php/auth_controller/register" method="POST">
            <input type="submit" value='Register!'>
        </form>
        <span style="color: red"><?php echo $errmsg ?></span> <br>
    </div>


</body>
</html>






