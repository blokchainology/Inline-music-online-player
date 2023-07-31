<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Music Player</title>
    <!-- Use 24.css -->
    <link rel="stylesheet" href="https://blokchainology.com/CDN/min24.css">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body class="position-rel t-align-center">
    <h1 class=" dmagenta ">Music Player</h1>
    <div class="audio d-flex j-center mt-20">
        <audio   class="mt-20" controls src="<?php echo $_REQUEST['link'];?>"></audio>
    </div>

    <?php
        if(isset($_REQUEST['link'])){
            echo "<p class=' green'>Enjoy The Song :) </p>";  
        }elseif(!isset($_REQUEST['link'])){
            echo "<br><br>  ";    
            echo '<script>alert("Plase Enter Music link -> Syntax: https://blokchainlogy.com/inPlayer?link=MusicLink")</script>';
        }else {
            echo '<script>alert("Syntaxt Error -> Use this Syntax" . "https://blokchainlogy.com/inPlayer?link=MusicLink")</script>';
        }
    ?>

    <div class="footer position-ab w--100">
        <div class="d-flex j-evenly">
            <p class="m-10">Powered BY <a href="https://Blokchainology.com">Blokchainology</a></p>
            <h3 class="blue m-10">Zmat24</h3>
        </div>
    </div>
</body>
</html>
