<!doctype html>
<html lang="en">

<head>
    <title>login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Ink Free";
            background: linear-gradient(-45deg, #1ef9b7, #1e74f9, #b749f6, #fe3e3e);
            background-size: 400% 400%;
            animation: Gradient 15s ease infinite;
            text-align: center;
        }

        @-webkit-keyframes Gradient {
            0% {
                background-position: 0% 50%
            }

            50% {
                background-position: 100% 50%
            }

            100% {
                background-position: 0% 50%
            }
        }

        .form {
            margin: 10% 0 0 20%;
            float: center;
            width: 60%;

        }

        .input {
            font-family: "Ink Free";
            border: 0;
            padding: 1%;
            background: none;
            font-size: 14pt;
            float: center;
            width: 77%;
            margin-bottom: 1%;
            border-radius: 24px;
            outline: none;
            border: 2px solid white;
            text-align: center;
            color: white;
        }

        .enter{
            border: 0;
            font-family: "Ink Free";
            padding: 1%;
            color: white;
            background: none;
            font-size: 15pt;
            float: center;
            width: 20%;
            margin-bottom: 1%;
            border-radius: 24px;
            outline: none;
            border: 2px solid white;
            text-align: center;

        }

        .welcome {
            color: white;
            font-size: 30pt;
            font-weight: 900;
            float: center;
        }
    </style>
</head>


<body>

    <div class="form">
        <span class="welcome"> WELCOME</span>
        <form action="login.php" method="POST">
            <input class="input" type="text" name="username" placeholder="USERNAME"><br>
            <input class="input" type="email" name="email" placeholder="EMAIL"><br>
            <input class="input" type="password" name="password" placeholder="PASSWORD"><br>
            <br>
            <input class="enter" type="submit" name="login" placeholder="LOGIN"><br>
            <br><br>
            <br>
        </form>
        <a href="register.php" class="enter">REGISTATION</a>
    </div>

</body>

</html>
<?php
include 'config.php';
if (@$_POST['simpan']) {
    $username = @$_POST['username'];
    $email = @$_POST['email'];
    $password = @$_POST['password'];
    $pass = md5($password);

    mysqli_query($koneksi, "INSERT into users(username,email,password) values ('$username, $email, $pass')");
}
?>
<script type="type/javascript">
    alert("simpan berhasil");
window.location.href="index.php
</script>