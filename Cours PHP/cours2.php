
/* $fruit = "Mangue";
$vegetable = "Concombre";

echo "Je suis fan de $fruit <br>";
echo "J'ai un $vegetable";

$myString = "navet";
$myNumber = 30;
$myFloat = 3.55;
$myBool = true;
$myArray = ["Salade", "Tomates", "Oignons", 22, false, []];

// var_dump($myArray[2]);

// echo $myArray[1];

$myArray = [
    "name" => "Quentin",
    "age" => 22,
    "mycity" => "Lyon",
    "favorite_chocolate" => "White",
];

echo "Bonjour, je me nomme $myArray[name], j'ai $myArray[age] ans, j'habite à $myArray[mycity] et mon chocolat préféré est le chocolat $myArray[favorite_chocolate] !"; 
*/
/*
 $myNumber = 5;

if($myNumber == 5) {
    echo "Ok";
} else {
        echo "C'est pas";
}

$myNumber = 30;

if($myNumber == 5 & $myNumber < 10) {
    echo "Pas mal";
} else {
    echo "C'est pas bon";
}

$myNumber = 30;

if($myNumber == 30 & $myNumber < 10 & is_integer($myNumber)) {
    echo "Et si on testait tes nerfs ?";
} else {
        echo "Faux !";
}

$myNumber = 30;

if(isset($myNumber) && !empty($myNumber)) {
    echo "Tu te débrouilles pas trop mal";
} else {
        echo "Vous ne passerez...pas !";
}
*/
/*
$number = 0;

while ($number < 10) {
    $number++;
    echo "Mon nombre vaut désormais : $number <br>";
}
echo "On est sortis de la boucle";

$aliments = ["Tomatoes", "Potatoes", "Chips", "Water", "Oranges", "Saint-Moret"];

echo "Voici ma liste de course : <br>";

foreach($aliments as $aliment) {
    echo($aliment);
}

$students = ["Adam", "Soline", "Elisabeth", "Lasmy", "Océane", "Quentin", "Quentin", "Orkun", "Lucas", "Benoît", "Angiolino", "Norhen"];

//foreach($students as $student) {
//   echo($student);
// }

echo"seconde partie : <br> $students[0], $students[5], $students[6]";


$informations = [
    "name" => "Naruto",
    "age" => 18,
    "favorite_food" => "Ramen",
    "favorite_color" => "Orange",
    "height" => 180,
    "is_alive" => true
];

echo "La taille de mon personnage est : $informations[favorite_food]";

foreach($informations as $key => $value) {
    echo"$value <br>";
}

echo $informations["height"];

function sayHi() {
    $message = "Hello";
    // echo $message;
}
sayHi();

function mongâteaupréféré() {
    $message = "Charlotte au chocolat";
    echo $message;
}
/*
mongâteaupréféré();

function sayMessage($monSuperMessagedAmour) {
    echo $monSuperMessagedAmour;
}
sayMessage("Coucou");

$myArray = [];
function hello($myArray) {
    echo $myArray;
}

$city = "Lyon";

function showCity($city) {
    echo $city;
}

showCity($city);

$flavour1 = "framboise";
$flavour2 = "moutarde";

function flavoursonMyMCFlurry($flavour1, $flavour2) {
    echo "Je veux mon MC flurry avec $flavour1 comme saveur ainsi que $flavour2";
}
flavoursonMyMCFlurry($flavour1,$flavour2);
*/

// session_id("Toto");
// permet de démarrer une session

<label for="gender">Sexe :</label>
                <select name="gender" form="carform">
                        <option value="Mâle">Mâle Alpha</option>
                        <option value="Femelle">Femelle Delta</option>
                        <option value="opel">Non-binaire</option>
                        <option value="audi">Asexué</option>
                </select>
                        <br>
        <label for="mail">E-mail :</label>
        <input type="select" id="mail" class="form-control" name="mail" placeholder="lucas@worker74.fr" required>
                        <br>
        <label for="color">Couleur préféré :</label>
                        <br>
        <input type="checkbox" name="color" value="yellow1"> Jaune <br>
        <input type="checkbox" name="color" value="yellow2"> Jaune<br>
        <input type="checkbox" name="color" value="yellow3"> Jaune<br>
        <input type="checkbox" name="color" value="none" checked> Aucune<br>