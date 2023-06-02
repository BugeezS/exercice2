<?php 
    $gender = $_GET['gender'];
    $is_female = ($gender == "F") ? "Femme" : "Homme";
    $message = "Hello $is_female";
    echo $message;

?>
<html>
    <form action="" method="get">
        <body>
        <select name="gender" id="gender">
                <option value="H">Homme</option>
                <option value="F">Femme</option>
            </select>
            <input type="submit" value="send">
        </body>
    </form>
</html>