<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result of your Horoscope</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <center>
        <div class="container">
            <?php

            $m = $_GET["month"];
            $d = $_GET['day'];

            if ($m == 1) // january
            {
                if ($d <= 19) {

                    print $_GET['sname'];
                    print " is a Capricorn";


            ?>


                    <hr style="height: 3px; border: none; background: linear-gradient(to right, #ffffff, #959595);">

                    <center>
                        <img src="images/capricorn (2).png" style="width: 80px; height: 80px;">
                    </center>
                    <p style="font-size: 18px; font-weight:lighter; margin-top: 10px">
                        Capricorn is an Earth sign ruled by Saturn and symbolized by the Sea-Goat.
                        <br><br>
                        Known for being hardworking, practical, and responsible,
                        Capricorns value structure, stability, and long-term goals.
                        They are loyal, disciplined, and often seen as wise and dependable.
                    </p>

                <?php
                }




                if ($d >= 20) {

                    print $_GET['sname'];
                    print " is an Aquarius";

                ?>


                    <hr style="height: 3px; border: none; background: linear-gradient(to right, #ffffff, #959595);">

                    <center>
                        <img src="images/aquarius.png" style="width: 80px; height: 80px;">
                    </center>
                    <p style="font-size: 18px; font-weight:lighter; margin-top:  10px">
                        Aquarius is an Air sign ruled by Uranus and symbolized by the Water Bearer.
                        <br><br>
                        Known for being independent, innovative, and open-minded,
                        Aquarians value freedom, ideas, and individuality.
                        They are friendly, forward-thinking, and often seen as unique and visionary.
                    </p>

                <?php
                }
            }

            if ($m == 2) // February
            {
                if ($d <= 18) {

                    print $_GET['sname'];
                    print " is an Aquarius";

                ?>


                    <hr style="height: 3px; border: none; background: linear-gradient(to right, #ffffff, #959595);">

                    <center>
                        <img src="images/aquarius.png" style="width: 80px; height: 80px;">
                    </center>
                    <p style="font-size: 18px; font-weight:lighter; margin-top:  10px">
                        Aquarius is an Air sign ruled by Uranus and symbolized by the Water Bearer.
                        <br><br>
                        Known for being independent, innovative, and open-minded,
                        Aquarians value freedom, ideas, and individuality.
                        They are friendly, forward-thinking, and often seen as unique and visionary..
                    </p>

                <?php
                }

                if ($d >= 19) {

                    print $_GET['sname'];
                    print " is a Pisces ";

                ?>


                    <hr style="height: 3px; border: none; background: linear-gradient(to right, #ffffff, #959595);">

                    <center>
                        <img src="images/pisces.png" style="width: 80px; height: 80px;">
                    </center>
                    <p style="font-size: 18px; font-weight:lighter; margin-top:  10px">
                        Pisces is a Water sign ruled by Neptune and symbolized by the Fish.
                        Compassionate, dreamy, and creative,
                        Pisceans are deeply intuitive and emotionally connected to others.
                        <br><br>
                        They are sensitive, imaginative, and often drawn to art and spirituality.
                        dependable and wise beyond their years.
                    </p>

                <?php
                }
            }

            if ($m == 3) // march
            {
                if ($d <= 20) {

                    print $_GET['sname'];
                    print " is a Pisces";

                ?>


                    <hr style="height: 3px; border: none; background: linear-gradient(to right, #ffffff, #959595);">

                    <center>
                        <img src="images/pisces.png" style="width: 80px; height: 80px;">
                    </center>
                    <p style="font-size: 18px; font-weight:lighter; margin-top:  10px">
                        Pisces is a Water sign ruled by Neptune and symbolized by the Fish.
                        Compassionate, dreamy, and creative,
                        Pisceans are deeply intuitive and emotionally connected to others.
                        <br><br>
                        They are sensitive, imaginative, and often drawn to art and spirituality.
                        dependable and wise beyond their years.
                    </p>

                <?php
                }


                if ($d >= 21) {

                    print $_GET['sname'];
                    print " is an Aries";

                ?>


                    <hr style="height: 3px; border: none; background: linear-gradient(to right, #ffffff, #959595);">

                    <center>
                        <img src="images/aries.png" style="width: 80px; height: 80px;">
                    </center>
                    <p style="font-size: 18px; font-weight:lighter; margin-top:  10px">
                        Aries is a Fire sign ruled by Mars and symbolized by the Ram.
                        <br><br>
                        Energetic, bold, and confident, Aries love taking the lead and facing challenges head-on.
                        They are passionate, competitive, and often seen as fearless and determined.
                    </p>

                <?php
                }
            }

            if ($m == 4) // april
            {
                if ($d <= 19) {

                    print $_GET['sname'];
                    print " is an Aries";

                ?>


                    <hr style="height: 3px; border: none; background: linear-gradient(to right, #ffffff, #959595);">

                    <center>
                        <img src="images/aries.png" style="width: 80px; height: 80px;">
                    </center>
                    <p style="font-size: 18px; font-weight:lighter; margin-top:  10px">
                        Aries is a Fire sign ruled by Mars and symbolized by the Ram.
                        <br><br>
                        Energetic, bold, and confident, Aries love taking the lead and facing challenges head-on.
                        They are passionate, competitive, and often seen as fearless and determined.
                    </p>
                    </p>

                <?php
                }


                if ($d >= 20) {

                    print $_GET['sname'];
                    print " is a Taurus";

                ?>


                    <hr style="height: 3px; border: none; background: linear-gradient(to right, #ffffff, #959595);">

                    <center>
                        <img src="images/taurus.png" style="width: 80px; height: 80px;">
                    </center>
                    <p style="font-size: 18px; font-weight:lighter; margin-top:  10px">
                        Taurus is an Earth sign ruled by Venus and symbolized by the Bull.
                        <br><br>
                        Known for being patient, dependable, and grounded, Taureans enjoy comfort, beauty, and routine.
                        They are loyal, strong-willed, and value stability in all areas of life.
                    </p>

                <?php
                }
            }

            if ($m == 5) // may
            {
                if ($d <= 20) {

                    print $_GET['sname'];
                    print " is a Taurus";

                ?>


                    <hr style="height: 3px; border: none; background: linear-gradient(to right, #ffffff, #959595);">

                    <center>
                        <img src="images/taurus.png" style="width: 80px; height: 80px;">
                    </center>
                    <p style="font-size: 18px; font-weight:lighter; margin-top:  10px">
                        Taurus is an Earth sign ruled by Venus and symbolized by the Bull.
                        <br><br>
                        Known for being patient, dependable, and grounded, Taureans enjoy comfort, beauty, and routine.
                        They are loyal, strong-willed, and value stability in all areas of life.
                    </p>

                <?php
                }


                if ($d >= 21) {

                    print $_GET['sname'];
                    print " is a Gemini";

                ?>


                    <hr style="height: 3px; border: none; background: linear-gradient(to right, #ffffff, #959595);">

                    <center>
                        <img src="images/gemini.png" style="width: 80px; height: 80px;">
                    </center>
                    <p style="font-size: 18px; font-weight:lighter; margin-top:  10px">
                        Gemini is an Air sign ruled by Mercury and symbolized by the Twins.
                        <br><br>
                        Curious, witty, and social, Geminis thrive on communication, learning, and variety.
                        They are adaptable, expressive, and known for their lively and playful nature.
                    </p>

                <?php
                }
            }

            if ($m == 6) // june
            {
                if ($d <= 20) {

                    print $_GET['sname'];
                    print " is a Gemini";

                ?>


                    <hr style="height: 3px; border: none; background: linear-gradient(to right, #ffffff, #959595);">

                    <center>
                        <img src="images/gemini.png" style="width: 80px; height: 80px;">
                    </center>
                    <p style="font-size: 18px; font-weight:lighter; margin-top:  10px">
                        Gemini is an Air sign ruled by Mercury and symbolized by the Twins.
                        <br><br>
                        Curious, witty, and social, Geminis thrive on communication, learning, and variety.
                        They are adaptable, expressive, and known for their lively and playful nature.
                    </p>

                <?php
                }


                if ($d >= 21) {

                    print $_GET['sname'];
                    print " is a Cancer";

                ?>


                    <hr style="height: 3px; border: none; background: linear-gradient(to right, #ffffff, #959595);">

                    <center>
                        <img src="images/cancer.png" style="width: 80px; height: 80px;">
                    </center>
                    <p style="font-size: 18px; font-weight:lighter; margin-top:  10px">
                        Cancer is a Water sign ruled by the Moon and symbolized by the Crab.
                        <br><br>
                        Emotional, caring, and deeply intuitive, Cancers value home,
                        family, and close connections.
                        They are protective, loyal, and known for their strong empathy and sensitivity.
                    </p>

                <?php
                }
            }

            if ($m == 7) // july
            {
                if ($d <= 22) {

                    print $_GET['sname'];
                    print " is a Cancer";

                ?>


                    <hr style="height: 3px; border: none; background: linear-gradient(to right, #ffffff, #959595);">

                    <center>
                        <img src="images/cancer.png" style="width: 80px; height: 80px;">
                    </center>
                    <p style="font-size: 18px; font-weight:lighter; margin-top:  10px">
                        Cancer is a Water sign ruled by the Moon and symbolized by the Crab.
                        <br><br>
                        Emotional, caring, and deeply intuitive, Cancers value home,
                        family, and close connections.
                        They are protective, loyal, and known for their strong empathy and sensitivity.
                    </p>

                <?php
                }


                if ($d >= 23) {

                    print $_GET['sname'];
                    print " is a Leo";

                ?>


                    <hr style="height: 3px; border: none; background: linear-gradient(to right, #ffffff, #959595);">

                    <center>
                        <img src="images/leo.png" style="width: 80px; height: 80px;">
                    </center>
                    <p style="font-size: 18px; font-weight:lighter; margin-top:  10px">
                        Leo is a Fire sign ruled by the Sun and symbolized by the Lion.
                        <br><br>
                        Confident, charismatic, and passionate, Leos love to shine and be appreciated for who they are.
                        They are generous, loyal, and driven by creativity and recognition.
                    </p>

                <?php
                }
            }

            if ($m == 8) // august
            {
                if ($d <= 22) {

                    print $_GET['sname'];
                    print " is a Leo";

                ?>


                    <hr style="height: 3px; border: none; background: linear-gradient(to right, #ffffff, #959595);">

                    <center>
                        <img src="images/leo.png" style="width: 80px; height: 80px;">
                    </center>
                    <p style="font-size: 18px; font-weight:lighter; margin-top:  10px">
                        Leo is a Fire sign ruled by the Sun and symbolized by the Lion.
                        <br><br>
                        Confident, charismatic, and passionate, Leos love to shine and be appreciated for who they are.
                        They are generous, loyal, and driven by creativity and recognition.
                    </p>

                <?php
                }


                if ($d >= 23) {

                    print $_GET['sname'];
                    print " is a Virgo";

                ?>


                    <hr style="height: 3px; border: none; background: linear-gradient(to right, #ffffff, #959595);">

                    <center>
                        <img src="images/virgo.png" style="width: 80px; height: 80px;">
                    </center>
                    <p style="font-size: 18px; font-weight:lighter; margin-top:  10px">
                        Virgo is an Earth sign ruled by Mercury and symbolized by the Maiden.
                        <br><br>
                        Practical, detail-oriented, and intelligent,
                        Virgos are known for their strong work ethic and need for order.
                        They are helpful, observant, and value precision and purpose.
                    </p>

                <?php
                }
            }

            if ($m == 9) // september
            {
                if ($d <= 22) {

                    print $_GET['sname'];
                    print " is a Virgo";

                ?>


                    <hr style="height: 3px; border: none; background: linear-gradient(to right, #ffffff, #959595);">

                    <center>
                        <img src="images/virgo.png" style="width: 80px; height: 80px;">
                    </center>
                    <p style="font-size: 18px; font-weight:lighter; margin-top:  10px">
                        Virgo is an Earth sign ruled by Mercury and symbolized by the Maiden.
                        <br><br>
                        Practical, detail-oriented, and intelligent,
                        Virgos are known for their strong work ethic and need for order.
                        They are helpful, observant, and value precision and purpose.
                    </p>

                <?php
                }

                if ($d >= 23) {

                    print $_GET['sname'];
                    print " is a Libra";

                ?>


                    <hr style="height: 3px; border: none; background: linear-gradient(to right, #ffffff, #959595);">

                    <center>
                        <img src="images/libra.png" style="width: 80px; height: 80px;">
                    </center>
                    <p style="font-size: 18px; font-weight:lighter; margin-top:  10px">
                        Libra is an Air sign ruled by Venus and symbolized by the Scales.
                        <br><br>
                        Diplomatic, charming, and fair-minded, Libras seek balance in relationships and life.
                        They value harmony, beauty, and are known for their strong sense of justice.
                    </p>

                <?php
                }
            }

            if ($m == 10) // october
            {
                if ($d <= 22) {

                    print $_GET['sname'];
                    print " is a Libra";

                ?>


                    <hr style="height: 3px; border: none; background: linear-gradient(to right, #ffffff, #959595);">

                    <center>
                        <img src="images/libra.png" style="width: 80px; height: 80px;">
                    </center>
                    <p style="font-size: 18px; font-weight:lighter; margin-top:  10px">
                        Libra is an Air sign ruled by Venus and symbolized by the Scales.
                        <br><br>
                        Diplomatic, charming, and fair-minded, Libras seek balance in relationships and life.
                        They value harmony, beauty, and are known for their strong sense of justice.
                    </p>

                <?php
                }


                if ($d >= 23) {

                    print $_GET['sname'];
                    print " is a Scorpio";

                ?>


                    <hr style="height: 3px; border: none; background: linear-gradient(to right, #ffffff, #959595);">

                    <center>
                        <img src="images/scorpio.png" style="width: 80px; height: 80px;">
                    </center>
                    <p style="font-size: 18px; font-weight:lighter; margin-top:  10px">
                        Scorpio is a Water sign ruled by Pluto and symbolized by the Scorpion.
                        <br><br>
                        Intense, passionate, and deeply emotional,
                        Scorpios are known for their loyalty and mysterious aura.
                        They are driven, resourceful, and often seek truth and transformation.
                    </p>

                <?php
                }
            }

            if ($m == 11) // november
            {
                if ($d <= 21) {

                    print $_GET['sname'];
                    print " is a Scorpio";

                ?>


                    <hr style="height: 3px; border: none; background: linear-gradient(to right, #ffffff, #959595);">

                    <center>
                        <img src="images/scorpio.png" style="width: 80px; height: 80px;">
                    </center>
                    <p style="font-size: 18px; font-weight:lighter; margin-top:  10px">
                        Scorpio is a Water sign ruled by Pluto and symbolized by the Scorpion.
                        <br><br>
                        Intense, passionate, and deeply emotional,
                        Scorpios are known for their loyalty and mysterious aura.
                        They are driven, resourceful, and often seek truth and transformation.
                    </p>

                <?php
                }

                if ($d >= 22) {

                    print $_GET['sname'];
                    print " is an Sagittarius";

                ?>


                    <hr style="height: 3px; border: none; background: linear-gradient(to right, #ffffff, #959595);">

                    <center>
                        <img src="images/sagittarius.png" style="width: 80px; height: 80px;">
                    </center>
                    <p style="font-size: 18px; font-weight:lighter; margin-top:  10px">
                        Sagittarius is a Fire sign ruled by Jupiter and symbolized by the Archer.
                        <br><br>
                        Adventurous, optimistic, and curious, Sagittarians love exploring new ideas,
                        places, and experiences. They value freedom, honesty, and have a strong sense of purpose.
                    </p>

                <?php
                }
            }

            if ($m == 12) // december
            {
                if ($d <= 21) {

                    print $_GET['sname'];
                    print " is a Sagittarius";

                ?>


                    <hr style="height: 3px; border: none; background: linear-gradient(to right, #ffffff, #959595);">

                    <center>
                        <img src="images/sagittarius.png" style="width: 80px; height: 80px;">
                    </center>
                    <p style="font-size: 18px; font-weight:lighter; margin-top:  10px">
                        Sagittarius is a Fire sign ruled by Jupiter and symbolized by the Archer.
                        <br><br>
                        Adventurous, optimistic, and curious, Sagittarians love exploring new ideas,
                        places, and experiences. They value freedom, honesty, and have a strong sense of purpose.
                    </p>

                <?php
                }


                if ($d >= 22) {

                    print $_GET['sname'];
                    print " is a Capricorn";

                ?>


                    <hr style="height: 3px; border: none; background: linear-gradient(to right, #ffffff, #959595);">

                    <center>
                        <img src="images/capricorn (2).png" style="width: 80px; height: 80px;">
                    </center>
                    <p style="font-size: 18px; font-weight:lighter; margin-top:  10px">
                        Capricorn is an Earth sign ruled by Saturn and symbolized by the Sea-Goat.
                        <br><br>
                        Known for being hardworking, practical, and responsible,
                        Capricorns value structure, stability, and long-term goals.
                        They are loyal, disciplined, and often seen as wise and dependable.
                    </p>






            <?php
                }
            }









            ?>

            <center>
                <button onclick="window.location.href='horoscope.php'">Back</button>
            </center>

        </div>
    </center>





</body>

</html>