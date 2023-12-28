<?php
session_start();

if (isset($_SESSION['form_errors'])) {
    $errors = $_SESSION['form_errors'];
    unset($_SESSION['form_errors']);
} else {
    $errors = [];
}
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="main.css">
    <title>Carattia</title>
</head>
<body>
    <div class="carattia">
        <div class="container">
            <div class="header">
                <div class="logo">
                    <img src="images/logo.png">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="/images/photo1.png">
                    <img src="/images/photo2.png">
                    <h1>Zostań Ambasadorem Ultra!</h1>
                    <p>
                        Program Ambasador Ultra to elitarny program dla użytkowników
                        Instagrama i miłośników urody. Wystarczy, że wypełnisz formularz i wyślesz swoje zgłoszenie, a my przekażemy Ci instrukcje, co zrobić
                        dalej. Dołącz do nas, Twoja opinia ma znaczenie!
                    </p>
                    <h2>Ambasadorzy Ultra uzyskują:</h2>
                    <span>Prezent powitalny</span><br>
                    <span>Gwarantowane znizki na luksusowe kosmetyki naturalne</span><br>
                    <span>Promocję swojego profilu na naszym instagramie</span>
                    <div class="type">
                        <div class="row">
                            <div class="col-4">
                                <img src="/images/photo3.png">
                                <p>Naturalne składniki</p>
                            </div>
                            <div class="col-4">
                                <img src="/images/photo4.png">
                                <p>Najwyższa jakość</p>
                            </div>
                            <div class="col-4">
                                <img src="/images/photo5.png">
                                <p>Gwarancja satysfakcji</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content">
                        <p>Wypełnij formularz i zgłoś się <br> do programu.</p>
                        <span>(Liczba miejsc ograniczona!)</span>
                        <img class="cup" src="/images/photo6.png">
                        <?php if (!empty($errors)): ?>
                            <div class="form-errors">
                                <?php foreach ($errors as $error): ?>
                                    <p class="error"><?php echo $error; ?></p>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <form action="form.php" method="POST">
                            <input type="text" name="name" value="<?php echo isset($_SESSION['name']) ? htmlspecialchars($_SESSION['name']) : ''; ?>" placeholder="Imię">
                            <input type="text" name="instagram" value="<?php echo isset($_SESSION['instagram']) ? htmlspecialchars($_SESSION['instagram']) : ''; ?>" placeholder="Instagram">
                            <input type="text" name="followers" value="<?php echo isset($_SESSION['followers']) ? htmlspecialchars($_SESSION['followers']) : ''; ?>" placeholder="Followers">
                            <input type="email" name="email" value="<?php echo isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : ''; ?>" placeholder="Email">
                            <button type="submit">Zostań Ambasadorem</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <img src="images/logo.png">
        </div>
    </div>
</body>
</html>

<?php
unset($_SESSION['name']);
unset($_SESSION['instagram']);
unset($_SESSION['followers']);
unset($_SESSION['email']);