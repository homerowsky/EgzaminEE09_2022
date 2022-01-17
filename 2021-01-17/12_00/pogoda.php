<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prognoza pogody Wrocław</title>
    <link rel="stylesheet" href="styl2.css">
</head>

<body>
    <header>
        <div class="top-left">
            <img src="logo.png" alt="meteo">
        </div>
        <div class="top-center">
            <h1>Prognoza dla Wrocławia</h1>
        </div>
        <div class="top-right">
            <p>maj, 2019 r.</p>
        </div>
    </header>
    <main class="main">
        <table>
            <thead>
                <tr>
                    <th>DATA</th>
                    <th>TEMPERATURA W NOCY</th>
                    <th>TEMPERATURA W DZIEŃ</th>
                    <th>OPADY [mm/h]</th>
                    <th>CIŚNIENIE [hPa]</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $con = mysqli_connect("localhost", "root", "", "prognoza");
                $zap = "SELECT * FROM `pogoda` WHERE `miasta_id` = '1' order by `data_prognozy` asc;";
                $query = mysqli_query($con, $zap);
                while ($line = mysqli_fetch_row($query)) {
                    echo "<tr><td>" . $line[2] . "</td><td>" . $line[3] . "</td><td>" . $line[4] . "</td><td>" . $line[5] . "</td><td>" . $line[6] . "</td></tr>";
                }
                mysqli_close($con);
                ?>
            </tbody>
        </table>
    </main>
    <div class="bottom-left">
        <img src="obraz.jpg" alt="Polska, Wrocław">
    </div>
    <div class="bottom-right">
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </div>
    <footer>
        <p>Stronę wykonał: 00000000000</p>
    </footer>
</body>

</html>