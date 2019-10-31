<?php
include 'templates/header.php';
?>
<?php
?>
<div class="div2">
    <h1>Formulaire</h1>
</div>


<!-- Formulaire qui utilise la méthode "POST" et qui va faire une redirection sur le data.php.
 <form action="data.php" method="POST">
        <label for="name">Nom :</label>
        <input type="text" id="name" class="form-control" name="name" placeholder="Glace au chocolat" required>
        <label for="Address">Addresse :</label>
        <input type="text" required>
        <input type="submit" class="validation">
</form>

<img src="fond.jpg" class="flip-horizontal-bottom">
<img src="fond2.jpg" class="flip-horizontal-bottom"> -->

<form action="admin.php" method="POST">
        <label for="username">Pseudo :</label>
        <input type="text" id="name" class="form-control" name="username" placeholder="Jean-Kevin" required>
        <label for="job">Mot de passe :</label>
        <input type="password" id="password" class="form-control" name="password" required>
        <input type="submit" class="validation">
</form>

<?php
include 'templates/footer.php';

        if(isset($_POST) && !empty($_POST)) { ?>
                      <?php header("Location: admin.php");?>
        <?php} else {?>
                <?php header("Location: login.php");
        }

echo '<p>Vous êtes ici : <a href="./index.php">Index du forum</a> --> Connexion';