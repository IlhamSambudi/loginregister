<?php
include('config.php');
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php?access_denied");
}
?>

<style>
    body {
        margin: 0;
        padding: 0;


        background: linear-gradient(-45deg, #1ef9b7, #1e74f9, #b749f6, #fe3e3e);
        background-size: 400% 400%;
        animation: Gradient 15s ease infinite;

    }

    .navbar a {
        font-family: "Ink Free" !important;
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

    .fas {
        font-size: 23px;
        color: #9c47fc;
        display: block;
        background: -webkit-linear-gradient(#1ef9b7, #1e74f9);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .fa {
        font-size: 15px;
        color: #9c47fc;
        display: block;
        background: -webkit-linear-gradient(#1ef9b7, #1e74f9);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    
</style>

<script src="https://kit.fontawesome.com/cb32ff1eee.js" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><i class="fas fa-theater-masks blue "></i> BOOKSHOCK</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="tampil.php"><i class="fa fa-book"></i> HOME</a>
            <a class="nav-item nav-link" href="#"><i class="fa fa-users"></i> COMMUNITY</a>
            <a class="nav-item nav-link" href="#"><i class="fa fa-address-book"></i> ABOUT</a>
            <a class="nav-item nav-link" href="#"><i class="fa fa-question"></i> HELP</a>
            <a class="nav-item nav-link" href="user.php"><i class="fa fa-user-graduate"></i> <?php echo $_SESSION['username']; ?></a>
            <a class="nav-item nav-link" href="logout.php"><i class="fa fa-sign-out-alt"></i>Log Out</a>


        </div>
    </div>
</nav>