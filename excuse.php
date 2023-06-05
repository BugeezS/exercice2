<?php
$name = $_GET['name'];
$gender = $_GET['gender'];
$teacher = $_GET['teacher'];
$reason = $_GET['reason'];
$date = date("d m Y");

$wich_gender = ($gender == "Boy") ? "Mon fils" : "Ma fille";

$illnessExcuses = array(
    "<p>Fait le $date</p>
    <p>Madame/Monsieur la/le Principal(e) $teacher du collège,</p>
    <p>Je vous demande de bien vouloir excuser l'absence de $wich_gender, $name, élève en classe de 5°B dans votre collège. $wich_gender est au lit avec une forte fièvre. Le docteur qui l'a vu(e) hier au soir a diagnostiqué une angine blanche et a prescrit du repos à la chambre pendant cinq jours au minimum.</p>
    <p>Ci-joint le certificat médical établi par notre médecin généraliste.</p>
    <p>Veuillez agréer, Madame/Monsieur la/le Principal(e), l'expression de mes sentiments sincères.</p>",
    "<p>Fait le $date</p>
    <p>Madame/Monsieur la/le Principal(e) $teacher du collège,</p>
    <p>Je vous informe que $wich_gender, $name, élève en classe de 5°B dans votre collège, ne pourra pas assister aux cours aujourd'hui en raison d'une gastro-entérite sévère. La nuit dernière a été difficile avec des vomissements et une forte fièvre. Le médecin traitant a recommandé un repos complet à la maison pour éviter la propagation de l'infection.</p>
    <p>Je vous prie de bien vouloir excuser son absence et de lui transmettre les devoirs manqués afin qu'il puisse les rattraper.</p>
    <p>Je reste à votre disposition pour toute information supplémentaire.</p>
    <p>Je vous remercie de votre compréhension.</p>",
    "<p>Fait le $date</p>
    <p>Madame/Monsieur la/le Principal(e) $teacher du collège,</p>
    <p>Je vous adresse ce mot pour vous informer que $wich_gender, $name, élève en classe de 5°B dans votre collège, est malade aujourd'hui et ne pourra donc pas assister aux cours. Il/elle a développé une forte grippe avec des symptômes tels que fièvre, toux et maux de tête.</p>
    <p>Le médecin a recommandé une période de repos à la maison afin de permettre à $wich_gender de récupérer rapidement.</p>
    <p>Nous vous prions d'excuser cette absence et nous nous engageons à fournir les devoirs manqués dès son rétablissement.</p>
    <p>Je vous remercie de votre compréhension.</p>",
    "<p>Fait le $date</p>
    <p>Madame/Monsieur la/le Principal(e) $teacher du collège,</p>
    <p>Je vous adresse ce mot pour vous informer que $wich_gender, $name, élève en classe de 5°B dans votre collège, est actuellement souffrant(e) d'une bronchite sévère. Les symptômes incluent une toux persistante, des difficultés respiratoires et une grande fatigue.</p>
    <p>Le médecin traitant a recommandé un repos absolu à la maison pour permettre à $wich_gender de se rétablir. Par conséquent, il/elle ne pourra pas assister aux cours aujourd'hui.</p>
    <p>Nous vous prions de bien vouloir excuser cette absence et nous nous engageons à fournir les devoirs manqués dès que l'état de santé de $wich_gender le permettra.</p>
    <p>Je vous remercie de votre compréhension.</p>"
);

$deathExcuses = array(
    "<p>Fait le $date</p>
    <p>Madame/Monsieur la/le Principal(e) $teacher du collège,</p>
    <p>Je vous demande de bien vouloir excuser l'absence de $wich_gender, $name, élève en classe de 5°B dans votre collège, suite au décès de son grand-père. Cette triste nouvelle a profondément affecté $wich_gender, et il/elle a besoin de temps pour faire face à cette perte.</p>
    <p>Nous vous prions d'accepter nos excuses pour cette absence et de lui accorder votre compréhension et votre soutien pendant cette période difficile.</p>
    <p>Je vous remercie de votre bienveillance.</p>",
    "<p>Fait le $date</p>
    <p>Madame/Monsieur la/le Principal(e) $teacher du collège,</p>
    <p>Je vous adresse ce mot pour vous informer que $wich_gender, $name, élève en classe de 5°B dans votre collège, ne pourra pas assister aux cours aujourd'hui en raison d'un décès survenu dans notre famille. Il/elle est profondément attristé(e) par cette perte et a besoin de temps pour se recueillir et soutenir les membres de notre famille.</p>
    <p>Nous vous prions d'excuser son absence et de lui transmettre les devoirs manqués afin qu'il/elle puisse les rattraper dès son retour en classe.</p>
    <p>Je vous remercie de votre compréhension et de votre soutien en cette période difficile.</p>",
    "<p>Fait le $date</p>
    <p>Madame/Monsieur la/le Principal(e) $teacher du collège,</p>
    <p>Je vous informe avec une grande tristesse que $wich_gender, $name, élève en classe de 5°B dans votre collège, ne pourra pas se rendre à l'école aujourd'hui en raison du décès de son animal de compagnie bien-aimé. Cette perte a profondément affecté $wich_gender, et il/elle a besoin de temps pour faire son deuil et se remettre de cette triste nouvelle.</p>
    <p>Nous vous prions d'excuser son absence et de lui transmettre les devoirs manqués afin qu'il/elle puisse les rattraper dès son retour en classe.</p>
    <p>Je vous remercie de votre compréhension et de votre soutien en cette période difficile.</p>",
    "<p>Fait le $date</p>
    <p>Madame/Monsieur la/le Principal(e) $teacher du collège,</p>
    <p>Je vous prie de bien vouloir excuser l'absence de $wich_gender, $name, élève en classe de 5°B dans votre collège, en raison du décès d'un proche membre de notre famille. Cette perte inattendue nous a tous bouleversés, et $wich_gender a besoin de temps pour se remettre émotionnellement et pour soutenir sa famille dans cette épreuve difficile.</p>
    <p>Nous vous remercions de votre compréhension et nous nous engageons à fournir les devoirs manqués dès que possible.</p>
    <p>Je vous remercie pour votre bienveillance.</p>"
);

$activityExcuses = array(
    "<p>Fait le $date</p>
    <p>Madame/Monsieur la/le Principal(e) $teacher du collège,</p>
    <p>Je vous prie de bien vouloir excuser l'absence de $wich_gender, $name, élève en classe de 5°B de votre collège pour la journée du mardi.</p>
    <p>Nous avons autorisé $wich_gender à participer à une sortie éducative organisée par l'école. Cette activité est directement liée au programme scolaire et offre une opportunité unique d'apprentissage pour les élèves.</p>
    <p>Je tiens à souligner que cette sortie a été approuvée par l'équipe pédagogique et qu'elle contribuera grandement à l'enrichissement de l'éducation de mon enfant.</p>
    <p>Nous nous engageons à fournir tout le matériel nécessaire et à assurer le suivi des devoirs manqués afin de garantir la continuité de son apprentissage.</p>
    <p>Veuillez agréer, Madame/Monsieur la/le Principal(e), l'expression de mes sentiments respectueux.</p>",
    "<p>Fait le $date</p>
    <p>Madame/Monsieur la/le Principal(e) $teacher du collège,</p>
    <p>Je vous adresse ce mot pour vous informer que $wich_gender, $name, élève en classe de 5°B dans votre collège, ne pourra pas être présent(e) en classe aujourd'hui.</p>
    <p>Nous avons accordé à $wich_gender la permission de participer à une activité extra-scolaire d'une grande importance. Cette activité est en lien direct avec le programme scolaire et offre des opportunités uniques d'apprentissage et de développement personnel.</p>
    <p>Nous vous prions d'excuser son absence et de lui fournir les devoirs manqués afin qu'il/elle puisse les rattraper à son retour en classe.</p>
    <p>Nous restons disponibles pour toute communication supplémentaire.</p>",
    "<p>Fait le $date</p>
    <p>Madame/Monsieur la/le Principal(e) $teacher du collège,</p>
    <p>Je vous prie d'excuser l'absence de $wich_gender, $name, élève en classe de 5°B de votre collège pour la journée d'aujourd'hui.</p>
    <p>Nous avons autorisé $wich_gender à participer à une sortie éducative qui complète le programme scolaire et offre une expérience d'apprentissage enrichissante. Cette activité a été soigneusement sélectionnée et approuvée par l'équipe pédagogique.</p>
    <p>Nous nous engageons à fournir les informations et les devoirs manqués afin de permettre à $wich_gender de rattraper son retard et de continuer à progresser dans sa scolarité.</p>
    <p>Je vous remercie de votre compréhension.</p>",
    "<p>Fait le $date</p>
    <p>Madame/Monsieur la/le Principal(e) $teacher du collège,</p>
    <p>Je vous informe que $wich_gender, $name, élève en classe de 5°B de votre collège, sera absent(e) aujourd'hui.</p>
    <p>Nous avons autorisé $wich_gender à participer à une activité extra-scolaire d'une grande importance. Cette activité est en lien direct avec les objectifs pédagogiques et offre des opportunités d'apprentissage pratiques et concrètes.</p>
    <p>Nous nous engageons à fournir tous les détails de l'activité et à assurer le suivi des devoirs manqués afin que $wich_gender puisse maintenir sa progression académique.</p>
    <p>Je vous remercie de votre compréhension et de votre soutien.</p>"
);

$choiceExcuses = array(
    "<p>Fait le $date</p>
    <p>Madame/Monsieur la/le Principal(e) $teacher du collège,</p>
    <p>Je vous prie de bien vouloir excuser l'absence de $wich_gender, $name, élève en classe de 5°B de votre collège pour la journée du mardi.</p>
    <p>En raison d'une situation imprévue et exceptionnelle, $wich_gender ne pourra pas assister aux cours aujourd'hui.</p>
    <p>Nous nous engageons à fournir tous les devoirs manqués et à organiser un rendez-vous pour rattraper le contenu manqué dès que possible.</p>
    <p>Je vous remercie pour votre compréhension.</p>",
    "<p>Fait le $date</p>
    <p>Madame/Monsieur la/le Principal(e) $teacher du collège,</p>
    <p>Je vous prie d'excuser l'absence de $wich_gender, $name, élève en classe de 5°B de votre collège pour la journée d'aujourd'hui.</p>
    <p>En raison de circonstances personnelles, $wich_gender ne pourra pas être présent(e) en classe.</p>
    <p>Nous nous engageons à fournir les devoirs manqués et à assurer le suivi du contenu afin que $wich_gender puisse rattraper le retard rapidement.</p>
    <p>Je vous remercie de votre compréhension.</p>",
    "<p>Fait le $date</p>
    <p>Madame/Monsieur la/le Principal(e) $teacher du collège,</p>
    <p>Je vous prie de bien vouloir excuser l'absence de $wich_gender, $name, élève en classe de 5°B dans votre collège pour la journée du mardi.</p>
    <p>Une situation imprévue nous oblige à garder $wich_gender à la maison aujourd'hui.</p>
    <p>Nous nous engageons à fournir les devoirs manqués et à prendre les mesures nécessaires pour que $wich_gender puisse continuer à suivre le programme scolaire sans interruption.</p>
    <p>Je vous remercie pour votre compréhension.</p>",
    "<p>Fait le $date</p>
    <p>Madame/Monsieur la/le Principal(e) $teacher du collège,</p>
    <p>Je vous prie d'excuser l'absence de $wich_gender, $name, élève en classe de 5°B de votre collège pour la journée d'aujourd'hui.</p>
    <p>En raison d'une situation exceptionnelle, $wich_gender ne pourra pas assister aux cours.</p>
    <p>Nous nous engageons à fournir les devoirs manqués et à collaborer étroitement avec l'équipe enseignante pour que $wich_gender puisse rattraper rapidement tout le contenu manqué.</p>
    <p>Je vous remercie de votre compréhension.</p>"
);


function getRandomExcuse($excuses) {
    $randomIndex = array_rand($excuses);
    return $excuses[$randomIndex];
}


if ($reason == "Illness") {
    $excuses = $illnessExcuses;
} elseif ($reason == "Death") {
    $excuses = $deathExcuses;
} elseif ($reason == "Activity") {
    $excuses = $activityExcuses;
} else {
    $excuses = $choiceExcuses;
}


$excuse = getRandomExcuse($excuses);


echo $excuse;
?>
<html>
    <body>
        <form action="" method="get">
            <label for="name">Name: </label><br>
            <input type="text" name="name" id="name"><br>
            <label for="gender">Gender: </label><br>
            <select name="gender" id="gender">
                <option value="Girl">Girl</option>
                <option value="Boy">Boy</option>
            </select><br>
            <label for="teacher">Name of the teacher: </label><br>
            <input type="text" name="teacher" id="teacher"><br>
            <label for="reason">Choose the reason: </label><br>
            <label for="reason">Illness: </label>
            <input type="radio" name="reason" id="reason" value="illness">
            <label for="reason">Death of a pet (or a family member): </label>
            <input type="radio" name="reason" id="reason" value="death">
            <label for="reason">Significant extra-curricular activity:</label>
            <input type="radio" name="reason" id="reason" value="activity">
            <label for="reason">Any other excuse of your choice</label>
            <input type="radio" name="reason" id="reason" value="choice"><br>
            <input type="submit" value="Send">
        </form>
    </body>
</html>
