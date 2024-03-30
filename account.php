<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ua">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="zagolovok">
            Обліковий запис
        </div>
    </div>
</header>
<div class="container">
    <div class="osnova">
        <?php
        if (!isset($_SESSION['login'])) {
            ?>
            <form method="post" action="login_process.php">
                <div>
                    <p>Ім'я або Email:</p>
                    <label>
                        <input name="username_or_email" type="text" required/>
                    </label>
                </div>
                <div>
                    <p>Пароль:</p>
                    <label>
                        <input name="password" type="password" required/>
                    </label>
                </div>
                <button type="submit">Увійти</button>
                <a href="Registration.php"><button type="button">Зареєструватися</button></a>
            </form>
        <?php } else { ?>
            <p>Привіт, <?php echo $_SESSION['login']; ?>!</p>
            <a href="logout.php">Вийти</a>
        <?php } ?>
        <div id="error_message" style="color: red; margin-top: 10px;">
            <?php
            if (isset($_SESSION['login_error'])) {
                echo $_SESSION['login_error'];
                unset($_SESSION['login_error']);
            }
            ?>
        </div>
        <div class="exit">
            <a href="Main.php">На головну</a>
        </div>
    </div>
</div>
</body>
</html>
