<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home | Keaton Sant</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="homepage.css" />
    <script>
        function ShowGraph() {
            document.getElementById("a").innerHTML = "<img class='graph' src='unnamed-chunk-3-1.png'>";
            document.getElementById("b").innerHTML = "<img class='graph' src='unnamed-chunk-4-1.png'>";
            document.getElementById("c").innerHTML = "<img class='graph' src='unnamed-chunk-5-1.png'>";
            document.getElementById("new").innerHTML = "<h2 id='graph_title'>These graphs are an example of what I was able to do with the data from boardgamegeek.com</h2>";
            window.location="#graph_title";

        };
    </script>
</head>
<body>
    <div>
        <header>
            <h1>
                <?php
                    include 'header.php';
                ?>
            </h1>
        </header>
    </div>
    <div id="navbar" class="sticky">
            <a class="element" href="assignments.php">Assignments</a>
    </div>
    <div class="container">
        <div class="item_left">
            <img id="me" src="me.jpg" alt="A professional photograph of Keaton Sant">
        </div>
        <div class="item_right">
            <div class="sub_container">
                <div class="info info_title"><h1>Keaton Sant</h1></div>
                <hr>
                <div class="info info_text">
                    <p>
                        I am a <button class="data" onclick="ShowGraph()"><b>Data Scientist</b></button> at heart. 
                        I am currently studying at BYU-Idaho.
                        When a great set of data is set in front of me
                        I can't resist the urge to shuffle through it and 
                        create visualizations that best represent the marvels
                        concealed inside the data. Even when a chaotic data set 
                        is presented to me I feel confident in tidying the data and 
                        molding it to be a tool for uncovering it's own mysteries.
                        As I have progressed in this field,
                        I have found an interest in computer science and a love for coding.
                        
                    </p>
                    
                </div>
            </div>
        </div>  
    </div>
    <div class="graph_container"> 
        <div id="new"></div>
        <div id="a" class="space"></div>
        <div id="b" class="space"></div>
        <div id="c" class="space"></div>
    </div>
    <div>
        <footer>
            <p>This webpage was designed to introduce myself<br>
            and to provide a link to my assignments<br> 
            in Web Engineering 2 at BYU-I.</p>
            <p><b>&copy; 2019 Keaton Sant<b></p>
        </footer>
    </div>
</body>
</html> 