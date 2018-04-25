<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Check your money</title>
        <link rel="stylesheet" href="src/styles/stylesheets/master.css">
    </head>
    <body>
        <div id="menuBar">
            <div class="menuBundle">
                <img class="icon_image" src="src/images/icon.png"></img>
                <h1 id="icon">Confirmify</h1>
            </div>

            <ul class="menuList">
                <li class="listItem active" id="home"><a href="#">Home</a></li>
                <li class="listItem" id="checking"><a href="sites/money_check.php">Money Check</a></li>
                <li class="listItem" id="blog"><a href="#">Blog</a></li>
            </ul>
        </div>

        <div class="showcase case1">
            <img class="imageshow" src="src/images/money_check.png"></img>
            <div class="textarea">
                <p>The Site is checking if the banknote is real or fake money<br>
                It takes the serialnumber and slit it in three parts. <br><br>

                The
                <span class="color5">Country code</span>,
                <span class="color4">some numbers</span> and the
                <span class="color3">check sum</span><br>
                <span class="hint">The Colors have nothing to do with the illustration.</span>
                <br><br>

                Now the code is checking for the date where your banknote is created. <br>
                The <span class="color4">numbers</span> are replaced by the letters of the respective position.<br>
                <br>

                After that the calculator add all <span class="color4">numbers</span> to each other. <br>
                At this point the calculator is performing the modulo method. <br>
                The year where your banknote is created decide<br>
                wich version of modulo calculation is comming to use.<br><br>
                The sum of that have to be the <span class="color3">check sum</span>.
                </p>
            </div>
        </div>

    </body>
    <footer>
        <div id="footerBar">
            <div class="footerBundle">
                <h1 class="icon">© ZombyMediaIC 2018</h1>
            </div>
    </footer>
</html>
<!-- -->
