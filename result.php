<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result of your ASTRONOVA</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="images/logo.png">

</head>

<body>
    <center>

        <img src="images/logo.png" alt="logo" style="width: 120px; height: 120px;transform: translateY(-10px);">

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
                    <p style="font-size: 18px; font-weight:lighter; margin-top:-5px;">Born in January <?php print $_GET['day']; ?></p>


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

                        <br><br>

                        Capricorn is most compatible with Taurus, Virgo, and Scorpio.
                        These signs support Capricorn’s drive, goals, and structured mindset.
                        They value commitment and bring either stability or emotional strength.
                    </p>

                <?php
                }


                if ($d >= 20) {

                    print $_GET['sname'];
                    print " is an Aquarius";

                ?>

                    <p style="font-size: 18px; font-weight:lighter; margin-top:-5px;">Born in January <?php print $_GET['day']; ?></p>


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

                        <br><br>

                        Aquarius is most compatible with Gemini, Libra, and Sagittarius.
                        These signs connect with Aquarius’ uniqueness and forward-thinking views.
                        They enjoy mental stimulation and personal freedom.
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

                    <p style="font-size: 18px; font-weight:lighter; margin-top:-5px;">Born in February <?php print $_GET['day']; ?></p>


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

                        <br><br>

                        Aquarius is most compatible with Gemini, Libra, and Sagittarius.
                        These signs connect with Aquarius’ uniqueness and forward-thinking views.
                        They enjoy mental stimulation and personal freedom.
                    </p>

                <?php
                }

                if ($d >= 19) {

                    print $_GET['sname'];
                    print " is a Pisces ";

                ?>

                    <p style="font-size: 18px; font-weight:lighter; margin-top:-5px;">Born in February <?php print $_GET['day']; ?></p>


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

                        <br><br>

                        Pisces is most compatible with Cancer, Scorpio, and Taurus.
                        These signs understand Pisces’ emotional world and creativity.
                        They offer grounding or emotional support to balance Pisces’ sensitivity.
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

                    <p style="font-size: 18px; font-weight:lighter; margin-top:-5px;">Born in March <?php print $_GET['day']; ?></p>


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

                        <br><br>

                        Pisces is most compatible with Cancer, Scorpio, and Taurus.
                        These signs understand Pisces’ emotional world and creativity.
                        They offer grounding or emotional support to balance Pisces’ sensitivity.
                    </p>

                <?php
                }


                if ($d >= 21) {

                    print $_GET['sname'];
                    print " is an Aries";

                ?>

                    <p style="font-size: 18px; font-weight:lighter; margin-top:-5px;">Born in March <?php print $_GET['day']; ?></p>


                    <hr style="height: 3px; border: none; background: linear-gradient(to right, #ffffff, #959595);">

                    <center>
                        <img src="images/aries.png" style="width: 80px; height: 80px;">
                    </center>
                    <p style="font-size: 18px; font-weight:lighter; margin-top:  10px">
                        Aries is a Fire sign ruled by Mars and symbolized by the Ram.
                        <br><br>
                        Energetic, bold, and confident, Aries love taking the lead and facing challenges head-on.
                        They are passionate, competitive, and often seen as fearless and determined.

                        <br><br>

                        Aries is most compatible with Leo, Sagittarius, and Gemini.
                        These signs match Aries’ energy, passion, and love for excitement.
                        They understand Aries’ boldness and keep up with their fast-paced lifestyle.
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

                    <p style="font-size: 18px; font-weight:lighter; margin-top:-5px;">Born in April <?php print $_GET['day']; ?></p>



                    <hr style="height: 3px; border: none; background: linear-gradient(to right, #ffffff, #959595);">

                    <center>
                        <img src="images/aries.png" style="width: 80px; height: 80px;">
                    </center>
                    <p style="font-size: 18px; font-weight:lighter; margin-top:  10px">
                        Aries is a Fire sign ruled by Mars and symbolized by the Ram.
                        <br><br>
                        Energetic, bold, and confident, Aries love taking the lead and facing challenges head-on.
                        They are passionate, competitive, and often seen as fearless and determined.

                        <br><br>

                        Aries is most compatible with Leo, Sagittarius, and Gemini.
                        These signs match Aries’ energy, passion, and love for excitement.
                        They understand Aries’ boldness and keep up with their fast-paced lifestyle.
                    </p>
                    </p>

                <?php
                }


                if ($d >= 20) {

                    print $_GET['sname'];
                    print " is a Taurus";

                ?>

                    <p style="font-size: 18px; font-weight:lighter; margin-top:-5px;">Born in April <?php print $_GET['day']; ?></p>



                    <hr style="height: 3px; border: none; background: linear-gradient(to right, #ffffff, #959595);">

                    <center>
                        <img src="images/taurus.png" style="width: 80px; height: 80px;">
                    </center>
                    <p style="font-size: 18px; font-weight:lighter; margin-top:  10px">
                        Taurus is an Earth sign ruled by Venus and symbolized by the Bull.
                        <br><br>
                        Known for being patient, dependable, and grounded, Taureans enjoy comfort, beauty, and routine.
                        They are loyal, strong-willed, and value stability in all areas of life.

                        <br><br>

                        Taurus is most compatible with Virgo, Capricorn, and Cancer.
                        These signs appreciate Taurus' need for stability and loyalty.
                        They offer emotional depth or grounded support, which Taurus values deeply.
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

                    <p style="font-size: 18px; font-weight:lighter; margin-top:-5px;">Born in May <?php print $_GET['day']; ?></p>


                    <hr style="height: 3px; border: none; background: linear-gradient(to right, #ffffff, #959595);">

                    <center>
                        <img src="images/taurus.png" style="width: 80px; height: 80px;">
                    </center>
                    <p style="font-size: 18px; font-weight:lighter; margin-top:  10px">
                        Taurus is an Earth sign ruled by Venus and symbolized by the Bull.
                        <br><br>
                        Known for being patient, dependable, and grounded, Taureans enjoy comfort, beauty, and routine.
                        They are loyal, strong-willed, and value stability in all areas of life.

                        <br><br>

                        Taurus is most compatible with Virgo, Capricorn, and Cancer.
                        These signs appreciate Taurus' need for stability and loyalty.
                        They offer emotional depth or grounded support, which Taurus values deeply.
                    </p>

                <?php
                }


                if ($d >= 21) {

                    print $_GET['sname'];
                    print " is a Gemini";

                ?>

                    <p style="font-size: 18px; font-weight:lighter; margin-top:-5px;">Born in May <?php print $_GET['day']; ?></p>


                    <hr style="height: 3px; border: none; background: linear-gradient(to right, #ffffff, #959595);">

                    <center>
                        <img src="images/gemini.png" style="width: 80px; height: 80px;">
                    </center>
                    <p style="font-size: 18px; font-weight:lighter; margin-top:  10px">
                        Gemini is an Air sign ruled by Mercury and symbolized by the Twins.
                        <br><br>
                        Curious, witty, and social, Geminis thrive on communication, learning, and variety.
                        They are adaptable, expressive, and known for their lively and playful nature.

                        <br><br>

                        Gemini is most compatible with Libra, Aquarius, and Aries.
                        These signs enjoy Gemini’s lively mind and love for conversation.
                        They bring the same curiosity and open-minded energy.
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

                    <p style="font-size: 18px; font-weight:lighter; margin-top:-5px;">Born in June <?php print $_GET['day']; ?></p>


                    <hr style="height: 3px; border: none; background: linear-gradient(to right, #ffffff, #959595);">

                    <center>
                        <img src="images/gemini.png" style="width: 80px; height: 80px;">
                    </center>
                    <p style="font-size: 18px; font-weight:lighter; margin-top:  10px">
                        Gemini is an Air sign ruled by Mercury and symbolized by the Twins.
                        <br><br>
                        Curious, witty, and social, Geminis thrive on communication, learning, and variety.
                        They are adaptable, expressive, and known for their lively and playful nature.

                        <br><br>

                        Gemini is most compatible with Libra, Aquarius, and Aries.
                        These signs enjoy Gemini’s lively mind and love for conversation.
                        They bring the same curiosity and open-minded energy.
                    </p>

                <?php
                }


                if ($d >= 21) {

                    print $_GET['sname'];
                    print " is a Cancer";

                ?>

                    <p style="font-size: 18px; font-weight:lighter; margin-top:-5px;">Born in June <?php print $_GET['day']; ?></p>


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

                        <br><br>

                        Cancer is most compatible with Taurus, Virgo, and Pisces.
                        These signs provide emotional security and support.
                        They connect well with Cancer’s nurturing and sensitive nature.
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

                    <p style="font-size: 18px; font-weight:lighter; margin-top:-5px;">Born in July <?php print $_GET['day']; ?></p>



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

                        <br><br>

                        Cancer is most compatible with Taurus, Virgo, and Pisces.
                        These signs provide emotional security and support.
                        They connect well with Cancer’s nurturing and sensitive nature.
                    </p>

                <?php
                }


                if ($d >= 23) {

                    print $_GET['sname'];
                    print " is a Leo";

                ?>

                    <p style="font-size: 18px; font-weight:lighter; margin-top:-5px;">Born in July <?php print $_GET['day']; ?></p>


                    <hr style="height: 3px; border: none; background: linear-gradient(to right, #ffffff, #959595);">

                    <center>
                        <img src="images/leo.png" style="width: 80px; height: 80px;">
                    </center>
                    <p style="font-size: 18px; font-weight:lighter; margin-top:  10px">
                        Leo is a Fire sign ruled by the Sun and symbolized by the Lion.
                        <br><br>
                        Confident, charismatic, and passionate, Leos love to shine and be appreciated for who they are.
                        They are generous, loyal, and driven by creativity and recognition.

                        <br><br>

                        Leo is most compatible with Aries, Sagittarius, and Libra.
                        These signs share Leo’s enthusiasm, passion, and sense of adventure.
                        They admire Leo’s confidence and bring warmth in return.
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

                    <p style="font-size: 18px; font-weight:lighter; margin-top:-5px;">Born in August <?php print $_GET['day']; ?></p>



                    <hr style="height: 3px; border: none; background: linear-gradient(to right, #ffffff, #959595);">

                    <center>
                        <img src="images/leo.png" style="width: 80px; height: 80px;">
                    </center>
                    <p style="font-size: 18px; font-weight:lighter; margin-top:  10px">
                        Leo is a Fire sign ruled by the Sun and symbolized by the Lion.
                        <br><br>
                        Confident, charismatic, and passionate, Leos love to shine and be appreciated for who they are.
                        They are generous, loyal, and driven by creativity and recognition.

                        <br><br>

                        Leo is most compatible with Aries, Sagittarius, and Libra.
                        These signs share Leo’s enthusiasm, passion, and sense of adventure.
                        They admire Leo’s confidence and bring warmth in return.
                    </p>

                <?php
                }


                if ($d >= 23) {

                    print $_GET['sname'];
                    print " is a Virgo";

                ?>

                    <p style="font-size: 18px; font-weight:lighter; margin-top:-5px;">Born in August <?php print $_GET['day']; ?></p>


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

                        <br><br>

                        Virgo is most compatible with Taurus, Capricorn, and Scorpio.
                        These signs match Virgo’s practicality and desire for meaningful connection.
                        They respect Virgo’s attention to detail and steady approach to life.
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

                    <p style="font-size: 18px; font-weight:lighter; margin-top:-5px;">Born in September <?php print $_GET['day']; ?></p>


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

                        <br><br>

                        Virgo is most compatible with Taurus, Capricorn, and Scorpio.
                        These signs match Virgo’s practicality and desire for meaningful connection.
                        They respect Virgo’s attention to detail and steady approach to life.

                    </p>

                <?php
                }

                if ($d >= 23) {

                    print $_GET['sname'];
                    print " is a Libra";

                ?>

                    <p style="font-size: 18px; font-weight:lighter; margin-top:-5px;">Born in September <?php print $_GET['day']; ?></p>



                    <hr style="height: 3px; border: none; background: linear-gradient(to right, #ffffff, #959595);">

                    <center>
                        <img src="images/libra.png" style="width: 80px; height: 80px;">
                    </center>
                    <p style="font-size: 18px; font-weight:lighter; margin-top:  10px">
                        Libra is an Air sign ruled by Venus and symbolized by the Scales.
                        <br><br>
                        Diplomatic, charming, and fair-minded, Libras seek balance in relationships and life.
                        They value harmony, beauty, and are known for their strong sense of justice.

                        <br><br>

                        Libra is most compatible with Gemini, Aquarius, and Leo.
                        These signs enjoy Libra’s charm and need for balance.
                        They bring harmony, creativity, and stimulating conversation.
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

                    <p style="font-size: 18px; font-weight:lighter; margin-top:-5px;">Born in October <?php print $_GET['day']; ?></p>



                    <hr style="height: 3px; border: none; background: linear-gradient(to right, #ffffff, #959595);">

                    <center>
                        <img src="images/libra.png" style="width: 80px; height: 80px;">
                    </center>
                    <p style="font-size: 18px; font-weight:lighter; margin-top:  10px">
                        Libra is an Air sign ruled by Venus and symbolized by the Scales.
                        <br><br>
                        Diplomatic, charming, and fair-minded, Libras seek balance in relationships and life.
                        They value harmony, beauty, and are known for their strong sense of justice.

                        <br><br>

                        Libra is most compatible with Gemini, Aquarius, and Leo.
                        These signs enjoy Libra’s charm and need for balance.
                        They bring harmony, creativity, and stimulating conversation.
                    </p>

                <?php
                }


                if ($d >= 23) {

                    print $_GET['sname'];
                    print " is a Scorpio";

                ?>

                    <p style="font-size: 18px; font-weight:lighter; margin-top:-5px;">Born in October <?php print $_GET['day']; ?></p>


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

                        <br><br>

                        Scorpio is most compatible with Cancer, Pisces, and Virgo.
                        These signs connect with Scorpio’s emotional depth and loyalty.
                        They value trust and intimacy in the same way Scorpio does.
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

                    <p style="font-size: 18px; font-weight:lighter; margin-top:-5px;">Born in November <?php print $_GET['day']; ?></p>


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

                        <br><br>

                        Scorpio is most compatible with Cancer, Pisces, and Virgo.
                        These signs connect with Scorpio’s emotional depth and loyalty.
                        They value trust and intimacy in the same way Scorpio does.
                    </p>

                <?php
                }

                if ($d >= 22) {

                    print $_GET['sname'];
                    print " is an Sagittarius";

                ?>

                    <p style="font-size: 18px; font-weight:lighter; margin-top:-5px;">Born in November <?php print $_GET['day']; ?></p>


                    <hr style="height: 3px; border: none; background: linear-gradient(to right, #ffffff, #959595);">

                    <center>
                        <img src="images/sagittarius.png" style="width: 80px; height: 80px;">
                    </center>
                    <p style="font-size: 18px; font-weight:lighter; margin-top:  10px">
                        Sagittarius is a Fire sign ruled by Jupiter and symbolized by the Archer.
                        <br><br>
                        Adventurous, optimistic, and curious, Sagittarians love exploring new ideas,
                        places, and experiences. They value freedom, honesty, and have a strong sense of purpose.

                        <br><br>

                        Sagittarius is most compatible with Aries, Leo, and Aquarius.
                        These signs share Sagittarius’ love for freedom, exploration, and big ideas.
                        They are open-minded and enjoy life’s adventures.
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

                    <p style="font-size: 18px; font-weight:lighter; margin-top:-5px;">Born in December <?php print $_GET['day']; ?></p>


                    <hr style="height: 3px; border: none; background: linear-gradient(to right, #ffffff, #959595);">

                    <center>
                        <img src="images/sagittarius.png" style="width: 80px; height: 80px;">
                    </center>
                    <p style="font-size: 18px; font-weight:lighter; margin-top:  10px">
                        Sagittarius is a Fire sign ruled by Jupiter and symbolized by the Archer.
                        <br><br>
                        Adventurous, optimistic, and curious, Sagittarians love exploring new ideas,
                        places, and experiences. They value freedom, honesty, and have a strong sense of purpose.

                        <br><br>

                        Sagittarius is most compatible with Aries, Leo, and Aquarius.
                        These signs share Sagittarius’ love for freedom, exploration, and big ideas.
                        They are open-minded and enjoy life’s adventures.
                    </p>

                <?php
                }


                if ($d >= 22) {

                    print $_GET['sname'];
                    print " is a Capricorn";

                ?>

                    <p style="font-size: 18px; font-weight:lighter; margin-top:-5px;">Born in December <?php print $_GET['day']; ?></p>



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

                        <br><br>

                        Capricorn is most compatible with Taurus, Virgo, and Scorpio.
                        These signs support Capricorn’s drive, goals, and structured mindset.
                        They value commitment and bring either stability or emotional strength.
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