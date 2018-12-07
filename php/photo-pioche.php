<?php
    include "header.php"; 
?>
<link rel="stylesheet" href="../css/header.css"/>

    <body>
<center><br>
        <img src="../img/image.jpg" class="img-rounded" width="55%"></img>

        <form action="photo-pioche.php" method="post">

            <p>
<br>
            <input name="mot_de_passe" />

            <input class="btn btn-success" type="submit" value="Valider" />

            </p>

        </form>

</center>    

    </body>
	<?php

    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "pioche") // Si le mot de passe est bon

    {

    // On affiche les codes

    ?>
	    
<center>
        <p><strong>Indice est : 9</strong></p>   
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
            alert("INDICE : 9");
        }
    </script>