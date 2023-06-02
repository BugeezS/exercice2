<?php
$i = $_GET['number'];

switch ($i) {
    case $i <= 4:
        echo "This work is really bad. What a dumb kid!";
        break;
    case $i >= 5 && $i <=9: 
        echo "This is not sufficient. More studying is required.";
        break;
    case $i = 10 : 
        echo "barely enough!";
        break;
    case $i >= 11 && $i <=14 :
        echo  "Not bad!";
        break; 
    case $i >= 15 && $i <= 18 : 
        echo "Bravo, bravissimo!";
        break; 
    case $i >= 19 && $i <= 20 :
        echo "Too good to be true : confront the cheater!";
        break;
}


?>
<html>
    <body>
        <form action="" method="get">
            <label for="number">Enter note : </label>
            <input type="number" name="number">
            <input type="submit" value="Send">
        </form>
    </body>
</html>