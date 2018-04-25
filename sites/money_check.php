<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Check your money</title>
        <link rel="stylesheet" href="../src/styles/stylesheets/master.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    </head>
    <body>
        <!-- Loading validation script-->
        <script src="../src/scripts/javascript/main.js"></script>

        <!-- Creating menu-->
        <div id="menuBar">
            <div class="menuBundle">
                <img class="icon_image" src="../src/images/icon.png"></img>
                <h1 id="icon">Confirmify</h1>
            </div>

        <!-- Creating menu items-->
            <ul class="menuList">
                <li class="listItem" id="home"><a href="../index.php">Home</a></li>
                <li class="listItem active" id="checking"><a href="#">Money Check</a></li>
                <li class="listItem" id="blog"><a href="#">Blog</a></li>
            </ul>
        </div>

        <!-- Creating formhandler field -->
        <div class="formhandler">
            <div class="headline">
                <a href="#"><i class="fas fa-times icon"></i></a>
                <p class="text"><span class="colorGREEN">Check</span> if you have any <span class="colorRED">fake banknotes</span></p>
            </div>

        <!-- Placing input fields into formhandler -->
            <div id="checkingForm">
                <form name="form" action="../src/scripts/php/check.php" method="get">
                    <div class="inputblock">
                        <span id="feedback" class="ftext">Enter:</span><br />
                        <input id="letter" class="inputs" type="text" name="letter" placeholder="First two letters">
                        <input id="numbers" class="inputs second" type="text" name="numbers" placeholder="All 12 numbers">
                    </div>
                    <input id="submitbutton" type="submit" value="Check">
                </form>
            </div>
        </div>


    </body>
    <footer>
        <!-- Creating footerbar -->
        <div id="footerBar">
            <div class="footerBundle">
                <h1 class="icon">© ZombyMediaIC 2018</h1>
            </div>
    </footer>
</html>
