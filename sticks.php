<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sticks</title>
    <style>
        body{
            position: absolute;
        }
        div{
            display: block;
            border: solid black 2px;
            height: 50vh;
            width: 55vw;
            position: relative;
            left: 35%;
            top: 40%;
        }
        form, h2, h4{
            position: relative;
            left: 40%; 
            top: 20%;
        }
        h2, input{
            font-family: Georgia;
            font-size: 27px;
        }
        p{
            position: relative;
            left: 35%;
            font-family: Georgia;
            font-size: 19px;
            margin-top: 6rem;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        print_r($_POST);
        $sticks = 21;
        $playerTurn = 1;

        if(!empty($_POST['numSticks'])){
            $sticks = $_POST['numSticks'];
        }

        if(!empty($_POST['turn'])){
            if($_POST['turn'] == 1)
            $playerTurn = 2;
        }

        $sticks = $sticks - $_POST['sticksToDraw']; //sticks - så många vi drar (minus)
    ?>

    <p>Two players take turn on drawing sticks. Maximum 5 sticks at a time. 
    </br>The one who draws the last stick looses</p>
    <div>

    <h2>Sticks: <?=$sticks?></h2>
    <h4>It´s player <?=$playerTurn?>'s turn</h4>

    <form method="POST" action="sticks.php">
        <input type="number" name="sticksToDraw" value="1" min="1" max="5" />
        <input type="submit" value="Take">
        <input type="hidden" name="numSticks" value="<?php echo $sticks; ?>">
        <input type="hidden" name="turn" value="<?php echo $playerTurn; ?>">
    </form>
    </div>
</body>
</html>