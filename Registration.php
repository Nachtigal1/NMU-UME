<?php
$error_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $password = $_POST['password'] ?? '';
    $email = $_POST['email'] ?? '';
    $day = $_POST['day'] ?? '';
    $month = $_POST['month'] ?? '';
    $year = $_POST['year'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $spam = isset($_POST['spam']) ? "Так" : "Ні";
    $comments = $_POST['comments'] ?? '';
    $avatar = $_FILES['avatar']['name'] ?? '';

    if (!empty($name) && !empty($password) && !empty($email) && !empty($day) && !empty($month) && !empty($year) && !empty($gender)) {
        header("Location: Main.html?success=true");
        exit;
    } else {
        $error_message = "Ошибка: Некоторые данные отсутствуют. Пожалуйста, заполните все обязательные поля.";
    }
}
?>

<!DOCTYPE html>
<html lang="ua">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Реєстрація</title>
    <style>
        div {
            display: flex;
            justify-content: space-between;
            margin-bottom: 5px;
        }

        p {
            margin: 0;
            padding: 0;
        }

        body {
            max-width: 920px;
            margin: 0 auto;
        }
    </style>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<header class="header">
    <div class="container">
        <div class="zagolovok">
            Реєстрація
        </div>
    </div>
</header>
<div class="container">
    <div class="osnova">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
            <div>
                <p>Ваше ім'я:</p>
                <label>
                    <input name="name" type="text" size="20" value="Іван" required/>
                </label>
            </div>
            <div>
                <p>Пароль: (тільки цифри та букви латинського алфавіту)</p>
                <label>
                    <input name="password" type="password" size="20" pattern="^(?=.*\d)(?=.*[a-zA-Z]).{8,}$" required/>
                </label>
            </div>
            <div>
                <label for="email">Адреса електронної пошти:</label>
                <input type="email" id="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required>
            </div>
            <div>
                <p>Дата народження:</p>
                <div>
                    <select name="day" size="1">
                        <?php
                        for ($day = 1; $day <= 31; $day++) {
                            echo "<option value='$day'>$day</option>";
                        }
                        ?>
                    </select>
                    <select name="month" size="1">
                        <?php
                        $months = [
                            'Січень', 'Лютий', 'Березень', 'Квітень', 'Травень', 'Червень', 'Липень',
                            'Серпень', 'Вересень', 'Жовтень', 'Листопад', 'Грудень'
                        ];
                        foreach ($months as $month) {
                            echo "<option value='$month'>$month</option>";
                        }
                        ?>
                    </select>
                    <input name="year" type="text" size="4" maxlength="4" />
                </div>
            </div>
            <div>
                <p>Вкажіть вашу стать:</p>
                <div>
                    Ч <input type="radio" name="gender" value="male" /> Ж
                    <input type="radio" name="gender" value="female" />
                </div>
            </div>
            <div>
                <p>
                    <input type="checkbox" name="spam" checked="checked" /> Так, я хочу
                    регулярно отримувати спам на пошту
                </p>
            </div>
            <div>
                <p>Ваші побажання:</p>
                <div>
                    <textarea name="comments" rows="6" cols="30"> </textarea>
                </div>
            </div>
            <div>
                <p align="left">Аватарка</p>
                <input name="avatar" type="file" size="20" />
            </div>
            <button type="submit">Подача запита</button>
            <button type="reset">Скинути</button>
            <div class="exit">
                <a href="Main.html" style="margin: 0 auto;">На головну</a>
            </div>
            <?php if (!empty($error_message)) : ?>
                <p style="color: red;"><?php echo $error_message; ?></p>
            <?php endif; ?>
        </form>
    </div>
</div>
</body>

</html>
