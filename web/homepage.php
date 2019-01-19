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
            alert("hello");
            document.getElementById("a").innerHTML = "Hello";
            document.getElementById("b").innerHTML = "Hello";
            document.getElementById("c").innerHTML = "hello";            
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
        <div id="a">help</div>
        <div id="b">help</div>
        <div id="c">help</div>
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