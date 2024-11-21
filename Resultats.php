<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultats</title>
    <link rel="stylesheet"href="styles.css">
</head>
<body>
    <?php
    include"header.php";
    ?>
  <h2>Resultats</h2>
    <form action="Resultats.php"method="POST">
        <label>Etudiant:</label><br>
        <input type="text"name="etudiant"required><br>
        <label>Annee de Concours:</label><br>
        <input type="text"name="prenom"required><br>
        <label>Note:</label><br>
        <input type="text"name="note"required><br>
        <label>Place:</label><br>
        <input type="palce"name="palce"required><br>
        
        <button type="submit">Ajouter</button>
        <button type="submit">Modifier</button>
        <button type="submit">Visualiser</button>
        


    </form> 
</body>
</html>