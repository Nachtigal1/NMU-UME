<?php
session_start();
require("utils/db.php");
?>

<!DOCTYPE html>
<html lang="ua">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Військова енциклопедія України</title>
</head>

<body>

<header class="header">
    <div class="container">
        <div class="zagolovok">
            Військова енциклопедія України
        </div>
    </div>
</header>
<iframe src="https://en.wikipedia.org/wiki/Armed_Forces_of_Ukraine" style="position: absolute; height: 785px; width: 385px;"></iframe>
<div class="container">
    <div class="osnova">
        <p>
            Вас вітає електронна військова єнциклопеідія, на данному порталі ви знайдете інформацію про екіпіровку,
            обладнання, зброю, структуру та традиції всіх родів на структур Збройних Сил України.
        </p>
        <div class="main">
            <div class="main-item">
                <a href="flag.html">
                    <img src="img/флаг.jpg" alt="" class="flag">
                </a>
                <span>
                        Прапори та символіка родів військ.
                    </span>
            </div>
            <div class="main-item">
                <a href="картотека.html">
                    <img src="img/tank.png" alt="" class="flag">
                </a>
                <span>
                        Техніка та обладнання
                    </span>
            </div>
            <div class="main-item">
                <a href="історія.html">
                    <img src="img/час.png" alt="" class="flag">
                </a>
                <span>
                        Історії створення та розвитку
                    </span>
            </div>
            <div class="main-item">
                <a href="Інфор.php">
                    <img src="img/FAQ.png" alt="" class="flag">
                </a>
                <span>
                        Інша інформація
                    </span>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <div class="podval">
            <form action="" class="register">
                <a href="account.php">
                    <img src="img/user.png" alt="" class="flag">
                </a>
            </form>

            <a href="tell:+380567280002" class="kontakt">
                Контактный номер (+380)-(56 728 0002)
            </a>
        </div>
    </div>
</footer>
<script>
    const urlParams = new URLSearchParams(window.location.search);
    const success = urlParams.get('success');
    const name = urlParams.get('name');

    if (success === 'true' && name) {
        alert('Шановний ' + decodeURIComponent(name) + ', ви успішно зареєструвалися!');

        window.history.replaceState({}, document.title, window.location.pathname);
    }
</script>
</body>

</html>
