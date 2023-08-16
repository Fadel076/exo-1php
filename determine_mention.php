<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Decision et mention</title>
</head>
<body>


<div class="container mt-5 text-center">
        <?php
        // Définir la moyenne obtenue au bac (à remplacer par la moyenne réelle)
        $moyenne = 13;

        // Définir les variables de décision et de mention
        $decision = $moyenne >= 10 ? "Admis" : "Éliminé";

        if ($moyenne >= 17) {
            $mention = "Excellent";
            $mentionColorClass = "text-success";
        } elseif ($moyenne >= 16) {
            $mention = "Très Bien";
            $mentionColorClass = "text-primary";
        } elseif ($moyenne >= 14) {
            $mention = "Bien";
            $mentionColorClass = "text-info";
        } elseif ($moyenne >= 12) {
            $mention = "Assez Bien";
            $mentionColorClass = "text-warning";
        } else {
            $mention = "Passable";
            $mentionColorClass = "text-danger";
        }
        ?>

        <h1>Résultats du Bac</h1>
        <p>La moyenne obtenue est : <?php echo $moyenne; ?></p>
        <p>La décision est : <?php echo $decision; ?></p>
        <p>La mention est : <span class="<?php echo $mentionColorClass; ?>" style="font-size: 14px;"><?php echo $mention; ?></span></p>
    </div>

   


<!-- Optional JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>