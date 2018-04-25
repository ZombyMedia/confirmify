<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Check your money</title>
        <link rel="stylesheet" href="../../styles/stylesheets/master.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    </head>
    <body>
        <!-- Loading validation script-->
        <script src="../../scripts/javascript/main.js"></script>

        <!-- Creating menu-->
        <div id="menuBar">
            <div class="menuBundle">
                <img class="icon_image" src="../../images/icon.png"></img>
                <h1 id="icon">Confirmify</h1>
            </div>

        <!-- Creating menu items-->
            <ul class="menuList">
                <li class="listItem" id="home"><a href="../../../index.php">Home</a></li>
                <li class="listItem active" id="checking"><a href="#">Money Check</a></li>
                <li class="listItem" id="blog"><a href="#">Blog</a></li>
            </ul>
        </div>

        <!-- Creating formhandler field -->
        <div class="formhandler">
            <div class="headline">
                <a href="#"><i class="fas fa-times icon"></i></a>
                <p class="text">RESULT</p>
            </div>

        <!-- Placing input fields into formhandler -->
            <div id="checkingForm">
                <?php
                $letters = $_GET['letter'];
                $numbers = $_GET['numbers'];

                $char_count = strlen($numbers);
                $letter_count = strlen($letters);

                $letters = strtolower($letters);

                $alphchars = array(
                    "a" => 1,
                    "b" => 2,
                    "c" => 3,
                    "d" => 4,
                    "e" => 5,
                    "f" => 6,
                    "g" => 7,
                    "h" => 8,
                    "i" => 9,
                    "j" => 10,
                    "k" => 11,
                    "l" => 12,
                    "m" => 13,
                    "n" => 14,
                    "o" => 15,
                    "p" => 16,
                    "q" => 17,
                    "r" => 18,
                    "s" => 19,
                    "t" => 20,
                    "u" => 21,
                    "v" => 22,
                    "w" => 23,
                    "x" => 24,
                    "y" => 25,
                    "z" => 26,
                );

                if ($char_count != 10) {
                    echo 'You need exacly 10 numbers to continue';
                } else {
                    list ($char1, $char2) = str_split($letters, 1);

                    $char1 = $alphchars[$char1];
                    $char2 = $alphchars[$char2];

                    list ($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8, $num9, $num10) = str_split($numbers, 1);

                    $checksum = $num10;

                    $result = $char1 + $char2 + $num1 + $num2 + $num3 + $num4 + $num5 + $num6 + $num7 + $num8 + $num9;

                    if ($letter_count === 1) {
                        ?> <p class='output'>Not supported at the moment</p><?php
                    } elseif ($letter_count === 2) {
                        $result = $result % 9;
                        checking($result, $checksum);
                    } else {
                        ?> <p class='output'>ERROR: To many letters in use</p> <?php
                    }


                }

                function checking($mod, $checksum) {

                    $checksum = (int)$checksum;

                    if (8 - $mod === 0) {
                        ?> <p class="output correct">The Banknote is correct [USED: MOD8]</p><?php
                        calculationshow();
                    } elseif (7 - $mod === 0) {
                        ?> <p class="output correct">The Banknote is correct [USED: MOD7]</p><?php
                        calculationshow();
                    } else {
                        ext_checking($mod, $checksum);
                    }
                }
                function ext_checking($mod, $checksum) {
                    if (8 - $mod === $checksum) {
                        ?> <p class="output correct">The Banknote is correct [USED: MOD8]</p><?php
                        calculationshow();
                    } elseif (7 - $mod === $checksum) {
                        ?> <p class="output correct">The Banknote is correct [USED: MOD7]</p><?php
                        calculationshow();
                    } else {
                        ?> <p class="output fake">The Banknote is maybe a fake</p> <?php
                        calculationshow();
                    }
                }

                function calculationshow() {
                    ?>
                    <div class="normal">
                        <p class="output">⌄ The script is translating the Alphabetical chars into numbers</p>
                        <p class="output">⌄ Add all numbers together and calculating the modulo</p>
                        <p class="output">⌄ Checking if the result is equals the checksum</p>
                    </div>

                    <a href="../../../sites/money_check.php"><p id="back">Back</p></a>
                    <?php
                }

                ?>

            </div>
        </div>
    </div>

        <div id="footerBar">
            <div class="footerBundle">
                <h1 class="icon">© ZombyMediaIC 2018</h1>
            </div>
        </div>
    </body>
</html>
