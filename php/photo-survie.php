<?php
    include "header.php"; 
?>
<link rel="stylesheet" href="../css/header.css"/>

    <body>
<center><br>
        <img src="../img/IMG_7909.JPG" class="img-rounded" width="55%"></img>

        <form action="photo-survie.php" method="post">

            <p>
<br>
            <input name="mot_de_passe" />

            <input class="btn btn-success" type="submit" value="Valider" />

            </p>

        </form>

</center>    

    </body>
	<?php

    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "survie") // Si le mot de passe est bon

    {

    // On affiche les codes

    ?>
	    
<center>
        <p><strong>Votre indice : R</strong></p>   
</center>
        
        <?php

    }

    else // Sinon, on affiche un message d'erreur

    {

        echo '<center><p>Mot de passe incorrect</p></center>';

    }

    ?>

</html>

<input type="button" onclick="maFunction()"  value="Solution!" class="btn btn-success">
    <script type="text/javascript">
        function maFunction(){
            alert("INDICE : R");
        }
    </script>