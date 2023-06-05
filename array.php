<?php

// $me = array(
// 	'age'=> 45 ,
// 	'firstname' => 'Alexandre' ,
// 	'lastname'  => 'Plennevaux' ,
// 	'favourite_movies' => array('My Own Private Idaho', 'Her', 'Matrix')
// );
// $me['hobbies'] = array("jv","manger","lire","dormir");
// $me['mother'] = array();

// echo '<pre>';
// print_r($me);
// echo '</pre>';


$web_development = array(
    'frontend' => array(),
    'backend' => array()
);

array_push($web_development['frontend'], 'xhtml');
array_push($web_development['backend'], 'Ruby on Rails');
array_push($web_development['frontend'], 'CSS');
array_push($web_development['frontend'], 'Flash');
array_push($web_development['frontend'], 'JavaScript');

$web_development['frontend'][array_search('xhtml', $web_development['frontend'])] = 'html';

unset($web_development['frontend'][array_search('Flash', $web_development['frontend'])]);

print_r($web_development);

?>