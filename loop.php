<?php
    $pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');

    foreach($pronouns as $key){
        echo ucfirst ($key) . "code";
    }


    $number = 1 ; 

    while ($number <= 120){
        echo $number . "";
        $number++;

    }

    for ($num = 1; $num <= 120; $num++) {
        echo $num . " ";
    }

    $namesTeam = array("Abel", "Alexandra","Anthony","Benjamin","Bruno","Delphine","Emilien","Ethan","Ismaël","Jodie","Julien","Louka","Loïc","Luciano","Marine","Nikko","Noa","Steve","Sylvain","Willy");

    foreach ($namesTeam as $nameTeam) {
        echo $nameTeam . "<br>";
    }


    $countries = array(
        'BE'=>'Belgium',
        'NER'=>'Niger',
        'TGO'=>'Togo',
        'ZAF'=>'South Africa',
        'ARG'=>'Argentina',
        'AUS'=>'Australia',
        'AUT'=>'Austria',
        'GER'=>'Germany',
        'PL'=>'Poland',
        'RU'=>'Russia'
    );

?>

<form>
    <label for="country">Select a country:</label>
    <select id="country" name="country">
        <?php foreach ($countries as $iso => $name) { ?>
            <option value="<?php echo $iso; ?>"><?php echo $name; ?></option>
        <?php } ?>
    </select>
    <input type="submit" value="Submit">
</form>