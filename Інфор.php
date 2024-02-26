<!DOCTYPE html>
<html lang="ua">

<head>
    <link rel="stylesheet" href="style.css"
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Інша інформація</title>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="zagolovok">
                Інша інформація.
            </div>
        </div>
    </header>
    <div class="container">
        <div class="osnova">
            <img src="IMG/свечка.gif" alt="" class="svecha"><br>
            <span class="nadpis">Вічна слава героям!!!</span><br>
            <div class="jiv">
                <a href="https://savelife.in.ua/">Рахунок Фонду "Повернись живим"

                </a>
                <?php
                    $losses = array(
                        "Танки" => 6555,
                                    "ББМ" => 12478,
                                    "Літаків" => 340,
                                    "Гелікоптерів" => 325,
                                    "Гармат. артилетрії" => 6477,
                                    "РСЗВ" => 1000,
                                    "ППО" => 686,
                                    "Автотраспорту" => 13037,
                                    "Кораблів" => 25,
                                    "БПЛА" => 7707,
                                    "Ракет різних видів" => 1910,
                                    "Особового складу" => 410700
                                    );
                                    ?>

                                    <table border="1" valign="center" align="center">
                                        <caption>Втрати РФ з 24 лютого 2022 року</caption>
                                        <tr>
                                            <th>Техніка</th>
                                            <th>Втрати</th>
                                        </tr>
                                        <?php
                        foreach ($losses as $technique => $loss) {
                                        echo "<tr>";
                                        echo "<td>$technique</td>";
                                        echo "<td>$loss</td>";
                                        echo "</tr>";
                                        }
                                        ?>
                                    </table>
            </div>
            <div class="exit">
                <a href="Main.html">На головну

                </a>
            </div>


        </div>

</body>

</html>