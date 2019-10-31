<?php

// Charge le contenu de header.php
include "templates/header.php";
// Même chose mais ne charge pas le reste s'il ne trouve pas le lien
// require("templates/header.php");
?>

<h1>Merveilleux</h1>
<p>Ceci est le contenu de ma page mais profite plutôt de ce coucher (ou lever ?) de soleil...</p>
<img src="fond.jpg" class="soleil">

<?php

// Charge le contenu de footer.php
include 'templates/footer.php';

// $_SESSION["username"] = "invité";

//echo "Konichiwa, $_SESSION[username]";

//var_dump($_SESSION);

