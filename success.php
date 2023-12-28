<?php
if (!$_GET['name']) {
    header('location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Carattia success</title>
</head>
<body>
    <div class="carattia">
        <div class="content">
            <h1>Dziękijemy!</h1>
            <p>Twoje zgłoszenie jest przetwarzane. Nasza odpowiedź pojawi się na Twoim mailu maksymalnie w ciągu godziny. Powodzenia! <?php echo $_GET['name']?></p>
        </div>
    </div>
    <div class="footer">
        <img src="images/logo.png">
    </div>
</body>
</html>

<style>
    body {
        padding: 0;
        margin: 0;
        position: relative;
    }

    .carattia {
        padding: 0;
        margin: 0;
        background-image: url("/images/background.jpg");
        background-repeat: no-repeat;
        background-position: center;
        height: 100vh;
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100vw;
    }

    .content {
        max-width: 720px;
        margin: auto;
        padding: 0 30px;
    }

    .content h1 {
        margin: 0;
        text-align: center;
        color: #ddbd42;
        font-size: 40px;
    }

    .content p {
        text-align: center;
        margin-top: 20px;
        color: #fff;
        font-size: 20px;
    }

    .footer {
        opacity: 0.7;
        background-color: #000;
        z-index: 1;
        display: block;
        position: absolute;
        bottom: 0;
        width: 100%;
    }

    .footer img {
        display: block;
        margin: 0 auto;
        padding: 18px;
    }
</style>