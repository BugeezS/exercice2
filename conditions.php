<?php 

// 1.1 Clean your room Exercise 

// $room_is_filthy = true;

// if( $room_is_filthy == true ){
// 	echo "Yuk, Room is dirty : let's clean it up !";
// 	cleanup_room();
// 	echo "<br>Room is now clean!";
// 	$room_is_filthy = false;
// } else {
// 	echo "<br>Nothing to do, room is neat.";
// }


// 1.2 Clean your room Exercise, improved

// // Create the array of possible states
// $possible_states = array(
//     0=>"disgusting",
//     1=>"dirty",
// )
// ;

// // When testing, change the index value to navigate to the possible array values
// $room_filthiness = $possible_states[0]; 

// if( $room_filthiness == "disgusting" ){
// 	echo "Yuk, Room is Disgusting! Let's clean it up !";
// } else if( $room_filthiness == "dirty"){
// 	echo "Yuk, Room is dirty : let's clean it up !";
// // ...
// } else {
// 	echo "<br>Nothing to do, room is neat.";
// }


// // 2. "Different greetings according to time" Exercise

// $now = date("H") ; // How to get the current time in PHP ? Google is your friend ;-)

// // Test the value of $now and display the right message according to the specifications.
// if( $now > 5 and $now < 9 ){
//     echo "Good morning !";
// }else if ($now > 9 and $now < 12) {
//     echo "Good Day !";
// }else if ($now > 12 and $now < 16){
//     echo "Good afternoon ! ";
// }else if ($now > 16 and $now < 21){
//     echo "Good evening !";
// }else if ($now > 21 and $now < 5){
//     echo "Good night ! ";
// }


// 3. "Different greetings according to age" Exercise

// if (isset($_GET['age'])) {
//     $age = $_GET['age'];
//     $gender = $_GET['gender'];
//     $lang = $_GET['english'];

//     if ($age < 12) {
//         if ($gender == 'W') {
//             if ($lang == "Y") {
//                 echo "Hello Miss";
//             } elseif ($lang == "N") {
//                 echo "Aloha Miss";
//             }
//         } elseif ($gender == 'M') {
//             if ($lang == "Y") {
//                 echo "Hello Boy";
//             } elseif ($lang == "N") {
//                 echo "Aloha Boy";
//             }
//         }
//     } elseif ($age >= 12 and $age < 18) {
//         if ($gender == 'W') {
//             if ($lang == "Y") {
//                 echo "Hello Miss Teen";
//             } elseif ($lang == "N") {
//                 echo "Aloha Miss Teen";
//             }
//         } elseif ($gender == 'M') {
//             if ($lang == "Y") {
//                 echo "Hello Mister Teen";
//             } elseif ($lang == "N") {
//                 echo "Aloha Mister Teen";
//             }
//         }
//     } elseif ($age >= 18 and $age < 115) {
//         if ($gender == 'W') {
//             if ($lang == "Y") {
//                 echo "Hello Madam";
//             } elseif ($lang == "N") {
//                 echo "Aloha Madam";
//             }
//         } elseif ($gender == 'M') {
//             if ($lang == "Y") {
//                 echo "Hello Mister";
//             } elseif ($lang == "N") {
//                 echo "Aloha Mister";
//             }
//         }
//     } elseif ($age >= 115) {
//         echo "Wow! Still alive? Are you a robot, like me? Can I hug you?";
//     }
// }

// Form (incomplete)
// <!-- <html>
//     <body>
//         <form method="get" action="">
//         <label for="age">Age : </label>
//         <input type="text" name="age">
//         <label for= "gender"> Gender </label>
//         <label for= "gender"> H : </label>
//         <input type="radio" name="gender" value="M">
//         <label for= "gender"> F : </label>
//         <input type="radio" name="gender" value="W">
//         <label for= "english"> Do you speak english ?  </label>
//         <label for= "gender"> Y : </label>
//         <input type="radio" name="english" value="Y">
//         <label for= "gender"> N : </label>
//         <input type="radio" name="english" value="N">
//         <input type="submit" name="submit" value="Greet me now">
//     </form>
//     </body>
// </html> -->

// if(isset($_GET['name'])){
//     $name = $_GET['name'];
//     $gender = $_GET['gender'];
//     $age = $_GET['age'];
//     $message = "Sorry you don't fit the criteria";

//     if ($gender == "F" && $age < 40 && $age > 21){
//         $message = "welcome to the team !";
//     }
// }
// echo $message; 









// <html>
//     <body>
//         <form method="get">
//             <label for="name"> Enter your name </label>
//             <input type="text" name="name">
//             <label for="gender"> Gender : </label>
//             <select name="gender" id="gender">
//                 <option value="H">Homme</option>
//                 <option value="F">Femme</option>
//             </select>
//             <label for="age"> Age : </label>
//             <input type="number" name="age">
//             <input type="submit" name="submit" value="Send">
//         </form>
//     </body>
// </html>



// if(isset($_GET['number'])){
//     $number = $_GET['number'];

//     if($number < 4){
//         echo "This work is really bad. What a dumb kid! ";
//     }elseif($number >= 5 && $number <= 9 ){
//         echo "This is not sufficient. More studying is required.";
//     }else if ($number = 10 ){
//         echo "barely enough!";
//     }elseif( $number >= 11 && $number <= 14 ){
//         echo "Not bad!";
//     }elseif($number >= 15 && $number <=18){
//         echo  "Bravo, bravissimo!";
//     }elseif ($number <= 19){
//         echo "Too good to be true : confront the cheater!";
//     }
// }


// <html>
//     <body>
//         <form action="" method="get">
//             <label for="number">Enter note : </label>
//             <input type="number" id="number">
//             <input type="submit" value="Send">
//         </form>
//     </body>
// </html>












?>