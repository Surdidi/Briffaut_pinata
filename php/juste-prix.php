<?php
    include "header.php"; 
?>
<link rel="stylesheet" href="../css/header.css"/>

    <body>
	    <center><h1>Devinez le prix de ce skin Fortnite</h1></center>
		<center><img src="../img/faucheur.jpg" style="border-radius:15px;"/></center/><br>
        <form>
            <p>
                <center><label for="nb">Votre nombre : </label><input id="nb" type="nombre" name="nb"/></center><br />
                <center><input id="clickme" type="button" value="Valider" /></center>
            </p>
        </form>
        <p id="res"></p>
         
        <script type="text/javascript">
            var nb = 2000;
            var bouton = document.getElementById('clickme');
            var score = 0;
             
             
            bouton.addEventListener('click', function(e){
                e.preventDefault();
                var valeur_saisie = document.getElementById('nb');
                var saisie = parseInt(valeur_saisie.value);
                 
                 
                 
                      if(score < 10)
                      {
                        if(saisie < nb)
                        {
                            document.getElementById('res').innerHTML = "<center>Trop petit</center>";
                            score++;
                                         
                        }
                        else if(saisie > nb)
                        {
                            document.getElementById('res').innerHTML = "<center>Trop grand</center>";
                            score++;
                             
                        }
                        else
                        {
                            document.getElementById('res').innerHTML = "<center>Gagné ! votre indice est N</center>";
                            var score_final = 10 - score;
                            alert('Le prix de ce skin était ' + nb + ' Vbucks. Votre score est de : ' + score_final);
 
                             
                             
                        }
                      }
                      else
                      {
                        alert('Vous avez effectués 10 essais, vous avez perdu');
                      }
 
 
                 
 
 
                 
            }, false);
        </script>
         
         
    </body>
</html>

<input type="button" onclick="maFunction()"  value="Solution!" class="btn btn-success">
    <script type="text/javascript">
        function maFunction(){
            alert("INDICE : N");
        }
    </script>
