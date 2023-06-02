<?php
    $gender = $_GET['gender'];
    $human = "";
    $cat = "";
    $unicorn = "";

    $test_human = ($gender == 'human') ? $human ='<iframe src="https://giphy.com/embed/1n92hYPiFQ0efcCtrF" width="480" height="270" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p></p>' : false ; 
    $test_cat = ($gender == 'cat') ? $cat = '<iframe src="https://giphy.com/embed/ICOgUNjpvO0PC" width="480" height="359" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p></p>' : false ; 
    $test_unicorn = ($gender == 'unicorn') ? $unicorn ='<iframe src="https://giphy.com/embed/lN1MTl03Qls145LJ3w" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p></p>' : false ; 
    
    
    echo $human;
    echo $cat;
    echo $unicorn;

?>
<html>
    <body>
        <form action="" method="get">
            <label for="gender">Are you human, a cat or a unicorn ? </label>
            <label for="gender">Human :</label>
            <input type="radio" name="gender" value="human">
            <label for="gender">Cat : </label>
            <input type="radio" name="gender" value="cat">
            <label for="gender">Unicorn : </label>
            <input type="radio" name="gender" value="unicorn">
            <input type="submit" value="send">
        </form>
    </body>
</html>