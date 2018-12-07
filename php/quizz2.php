<?php
    include "./header.php"; 
?>

<link rel="stylesheet" href="../css/header.css"/>
<head><link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" href="./style.css" />
  <!------ Include the above in your HEAD tag ---------->
</head>
<body>
  <div class="privew">
    <div class="questionsBox">
      <div class="questions">Lequel de ces principes ne fait pas partie de la « règle des trois » selon laquelle on ne peut survivre ?</div>
      <div class="funkyradio">
        <form action="" method="POST">
          <div class="funkyradio-default">
            <input type="radio" name="radio_1" id="radio1" />
            <label for="radio1">Trois minutes sans air</label>
          </div>
          <div class="funkyradio-default">
            <input type="radio" name="radio_2" id="radio2" />
            <label for="radio2">Trois heures sans un abri</label>
          </div>
          <div class="funkyradio-default">
            <input type="radio" name="radio_3" id="radio3" />
            <label for="radio3">Trois jours sans eau</label>
          </div>
          <div class="funkyradio-default">
            <input type="radio" name="radio_v" id="radio_v" />
            <label for="radio_v">Trois semaines sans manger</label>
          </div>
        </div>
        <div class="questionsRow"><button name="verif" type="submit">Valider</button></div>
      </form>
      <?php
            if(isset($_POST['verif'])){
              if(isset($_POST['radio_v'])){
                echo " c'est la bonne réponse";
              }
              else{
                echo "c'est la mauvaise réponse";
              }
            }
      ?>
    </div>
  </div>
</body>

<input type="button" onclick="maFunction()"  value="Solution!" class="btn btn-success">
    <script type="text/javascript">
        function maFunction(){
            alert("INDICE : T");
        }
    </script>