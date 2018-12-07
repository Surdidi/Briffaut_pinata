<?php
	include "./header.php"; 
?>
<link rel="stylesheet" href="../css/header.css"/>

<!-- This document was created with HomeSite v2.5 -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>

<head>

<title>Pendu</title>
<script LANGUAGE="JavaScript">
<!--
	
	
	var listemot = new Array(0);
	
	var motcache = "";
	var playedchar = new Array(26);
	var played = 0;
	var nbplayed = 0;
	var Pieces = new Array(6);
	var table;
	var affiche;

	//on récupère les gifs pour l'animation du pendu
	Pieces[0] = '../img/pied.gif';
	Pieces[1] = '../img/mat.gif';
	Pieces[2] = '../img/potence.gif';
	Pieces[3] = '../img/tete.gif';
	Pieces[4] = '../img/bras.gif';
	Pieces[5] = '../img/jambes.gif';
	
	//on défini le mot 
	listemot[0] = "FORTNITE";
	

	
	/*function Aleatoire(mini,maxi) {
		var x = -1;
	
		while (x < mini) {
			x = Math.round(Math.random() * maxi);
		}
	
		return x;
	}*/
	//on initialise le jeu (choix mot, affichage de départ)
	function Initialise() {
		//affectation du mot
		motcache = listemot[0]; 
		//on récupère la longueur du mot
		table = new Array(motcache.length); 
		affiche = new Array(motcache.length);
		played = 0;
		nbplayed = 0;
		for (var x = 0; x < motcache.length; x++) {
			//on stock les lettre du mot 
			table[x] = motcache.charAt(x);
			//on stock des - qui seront remplacés par les lettres trouvées
			//le tout dans l'ordre du mot
			affiche[x] = "- ";
		}
		//On enregistre les gifs
		for (var x = 0; x < 6; x++) {
			document.images[x].src = "../img/dot.gif";
		}
		out = "";
		//pour afficher les - * nbr de lettre du mot
		for (var x = 0; x < motcache.length; x++) {
			out = out + affiche[x];
		}
		for (var x = 0; x <= nbplayed; x++) {
			playedchar[x] = "";
		}
		
		document.PENDU.MotCache.value = out;
		document.PENDU.Caractere.value = "";
		document.PENDU.CarJoues.value = "";
		//on donne le focus sur le champ de saisie
		document.PENDU.Caractere.focus();
	}
	//détermine si le joueur a gagné ou perdu
	function Continue() {
		//si le joueur à joué 6 fois il a perdu
		if (played == 6) {
			window.alert("Vous avez perdu!");
			out = "";
			for (var x = 0; x < motcache.length; x++) {			
			}
			document.PENDU.MotCache.value = out;
		}
		//sinon il a gagné
		else {
			if (table.join() == affiche.join()) {
				window.alert("Vous avez gagné! Votre O");
			}
		}
	}
	
	//permet de tester le caractère saisie
	function OKToPlay(carac) {
		//si l'on a joué 6 fois
		if (played == 6) {
			return 1;
		}
		else {
			//si le mot saisie est égale au mot mystère
			if (table.join() == affiche.join()) {
				return 2;
			}
			//si aucun caractère n'est saisie
			else {
				if (carac == "") {
					return 3;
				}
				//on vérifie si le caractère a déjà été saisie
				else {
					var exist = false;
					for (var x = 0; x < nbplayed; x++) {
						if (playedchar[x] == carac) {
							exist = true;
						}
					}
					if (exist) {
						return 4;
					}		
				}
			}
		}
		return 0;
	}
	
	function TestCar() {
		var good = false;
		propose = document.PENDU.Caractere.value;
		propose = propose.toUpperCase();
		var test = OKToPlay(propose);
	
		if (test == 0) {
			playedchar[nbplayed] = propose;
			for (var x = 0; x < motcache.length; x++) {
				//on teste si la lettre saisie est dans le mot
				if (propose == table[x]) {
					affiche[x] = propose;
					good = true;
				}
			}
			//si la lettre est bien dans le mot on l'affiche
			if (good) {
				out = "";
				for (var x = 0; x < motcache.length; x++) {
					out = out + affiche[x];
				}
				document.PENDU.MotCache.value = out;
			}
			//sinon on affiche un gifs en fonction du nombre de coup
			else {
				document.images["PENDU"+played].src = Pieces[played];
				played++;
			}
			out = "";
			for (var x = 0; x <= nbplayed; x++) {
				out = out + playedchar[x];
			}
			nbplayed++;
			document.PENDU.CarJoues.value = out;
			document.PENDU.Caractere.value = "";
	
			Continue();
		}
		//on affiche un message en fonction des test du caractère saisie
		else {
			if (test == 1) {
				window.alert("Vous avez perdu!");
				document.PENDU.Caractere.value = "";
			}
			if (test == 2) {
				window.alert("Vous avez gagné! Votre indice est T");
				document.PENDU.Caractere.value = "";
			}
			if (test == 3) {
				window.alert("Vous devez saisir un caractère!");
				document.PENDU.Caractere.value = "";
			}
			if (test == 4) {
				window.alert("Caractère déjà proposé!");
				document.PENDU.Caractere.value = "";
			}
		}
		document.PENDU.Caractere.focus();
	}
	

	</script>
</head>
<center>
<body LINK="Yellow" VLINK="#FFFFBE" ALINK="Lime" onLoad="Initialise();">


<table BORDER="0" CELLSPACING="0" CELLPADDING="0" style="border-radius: 10px" style="border-radius: 10px">
  <tr>
    <th COLSPAN="6" VALIGN="MIDDLE" ALIGN="CENTER"><font SIZE="+2">
    &nbsp;&nbsp;&nbsp;&nbsp; <font color="#FFFF00"></font></font></th>
<!-- potence -->
  </tr>
  <tr>
    <td ROWSPAN="5" ALIGN="CENTER" VALIGN="TOP" BGCOLOR="#FF5E35"style="border-radius: 10px"width="250"><form NAME="PENDU">
      <u><sub><p>Mot :</sub></u><br>
      <input TYPE="TEXT" NAME="MotCache" SIZE="12" MAXLENGTH="10"><br>
      <u><sub>Caractères joués :</sub></u><br><br>
      <textarea NAME="CarJoues" ROWS="2" COLS="20"></textarea><br>
      <br>
      <input TYPE="TEXT" NAME="Caractere" SIZE="2" MAXLENGTH="1"><br>
      <br>
      <input TYPE="BUTTON" VALUE="Proposer" onClick="TestCar();"class="button button2"><br>
      <br>
      <input TYPE="BUTTON" VALUE="Rejouer" onClick="Initialise();"class="button button2">
    </form>
    <p>&nbsp;</td>
    <td></td>
    <td COLSPAN="4" ALIGN="LEFT" VALIGN="BOTTOM"><img SRC="../img/dot.gif" WIDTH="113" HEIGHT="14" BORDER="0" NAME="PENDU2"></td>
  </tr>
<!-- tête -->
  <tr>
    <td></td>
    <td ROWSPAN="3" ALIGN="CENTER" VALIGN="MIDDLE" HEIGHT="193"><img SRC="../img/dot.gif" WIDTH="27" HEIGHT="193" BORDER="0" NAME="PENDU1"></td>
    <td VALIGN="BOTTOM" ALIGN="right" HEIGHT="61"><img SRC="../img/dot.gif" height="45.5" BORDER="0" NAME="PENDU3"></td>
    <td></td>
    <td></td>
  </tr>
<!-- bras -->
  <tr>
    <td WIDTH="100"></td>
    <td ALIGN="right" HEIGHT="38"><img SRC="../img/dot.gif" height="54.75" BORDER="0" NAME="PENDU4"></td>
    <td></td>
    <td></td>
  </tr>
<!-- jambes -->
  <tr>
    <td></td>
    <td ALIGN="right" VALIGN="TOP" HEIGHT="84"><img SRC="../img/dot.gif" height="25.25" BORDER="0" NAME="PENDU5"></td>
    <td></td>
    <td></td>
  </tr>
<!-- pieds -->
  <tr>
    <td COLSPAN="4" ALIGN="CENTER" VALIGN="TOP" HEIGHT="150"><img SRC="../img/dot.gif"  BORDER="0" NAME="PENDU0"></td>
    <td></td>
  </tr>
</table>

</body>
</html>

<input type="button" onclick="maFunction()"  value="Solution!" class="btn btn-success">
	<script type="text/javascript">
		function maFunction(){
			alert("INDICE : T");
		}
	</script>