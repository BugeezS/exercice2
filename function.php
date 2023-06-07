<?php

function capitalize ($name){
   return ucfirst($name);
}

echo capitalize("nadou");

echo date(" d m Y h:i:s");

function sum ($a , $b){
    if ( is_numeric($a) && is_numeric($b)){
    return $a +$b ;
}else{
    echo "Error: argument is the not a number.";
}
}
echo sum ("a",6);

function acronymGenerator($string) {
    $words = explode(" ", $string);
    $acronym = "";
    foreach ($words as $word) {
        $acronym .= strtoupper($word[0]);
    }
    return $acronym;
}

echo acronymGenerator("In code we trust!");

function replaceLetters($string) {
    $replacement = 'æ';
    $pattern = '/[ae]/i';
    return preg_replace($pattern, $replacement, $string);
}
$strings = [
    'caecotrophie',
    'chaenichthys',
    'microsphaera',
    'sphaerotheca'
];
foreach ($strings as $string) {
    $result = replaceLetters($string);
    echo $result . "\n";
}


function replaceAe($string) {
    $replacement = 'ae';
    $pattern = '/æ/i';
    return preg_replace($pattern, $replacement, $string);
}


$strings = [
    'cæcotrophie',
    'chænichthys',
    'microsphæra',
    'sphærotheca'
];

foreach ($strings as $string) {
    $result = replaceAe($string);
    echo $result . "\n";
}



function feedback($phrase, $type) {
    if ($type == "error") {
        echo "<div class='$type'>Error: $phrase.</div>";
    } elseif ($type == "notice") {
        echo "<div class='$type'>Notice: $phrase.</div>";
    } elseif ($type == "warning") {
        echo "<div class='$type'>Warning: $phrase.</div>";
    }
}

feedback("manger des pommes", "warning");




function generateRandomWord($minLength, $maxLength) {
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $length = mt_rand($minLength, $maxLength);
    $randomWord = '';
    for ($i = 0; $i < $length; $i++) {
        $randomWord .= $characters[mt_rand(0, strlen($characters) - 1)];
    }
    return $randomWord;
}

$word1 = generateRandomWord(1, 5);
$word2 = generateRandomWord(7, 15);

function decapitalize ($word){
    return  strtolower($word);
}
echo decapitalize ("MANGER");




function calculateConeVolume($ray,$height){

    $volume = $ray*$ray * 3.14 * $height * (1/3);

    echo "The volume of a cone which ray is $ray and height is $height = $volume";

}

calculateConeVolume(4,19);





?>

<!DOCTYPE html>
<html>
<head>
    <title>Generate a new word</title>
</head>
<body>
    <h1>Generate a new word</h1>
    <p><?php echo $word1; ?></p>
    <p><?php echo $word2; ?></p>
    <button onclick="location.reload()">Generate</button>
</body>
</html>
