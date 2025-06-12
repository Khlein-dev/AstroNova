<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOROSCOPE</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <br>

    <center>
        <div class="container">
            <h1 style="margin-top: -10px;">HOROSCOPE</h1>

            <p style="font-size: 18px; margin-top: -60px;">Welcome to the Horoscope Finder System!

                <br>
            <p style="font-size: 15px; text-align:justify; font-weight: lighter; word-spacing: 2px; margin-top: -15px;">
                Enter your birthday, and this
                system will instantly reveal your zodiac
                sign along with key personality traits
                and insights based on astrology.
            </p>
            </p>

            <hr style="height: 3px; border: none; background: linear-gradient(to right, #ffffff, #959595);">

            <form action="result.php" method="get">




                <div>
                    <input type="text" name="sname" placeholder="Enter Name" required>
                </div>






                <select name="month" required>


                    <option value="" disabled selected>Select Birth Month</option>

                    <?php
                    $m = ["January","February","March","April","May", "June","July","August","September","October","November","December"];

                    foreach ($m as $i => $month) {
                        print "<option value='" . ($i + 1) . "'>$month</option>";
                    }
                    ?>

                </select>

                <select name="day" required>

                    <option value="" disabled selected>Select Birth Day </option>


                    <?php
                    $d = 1;
                    while ($d <= 31) {
                        print "<option value = $d > $d\n";
                        $d = $d + 1;
                    }
                    ?>
                </select>






                <input type="submit" class="sub" value="HOROSCOPE" name="submit">


                <input type="reset" class="sub" value="CLEAR">

        </div>






        </form>





        </div>
    </center>


</body>

</html>