<?php
    include "./header.php"; 
?>
<link rel="stylesheet" href="../css/header.css"/>
<!-- Zone de jeu -->
<canvas id="gc" width="400" height="400"></canvas>
<script>
//Quand la fenêtre est chargée alors on lance le jeu
window.onload=function() {
    canv=document.getElementById("gc");
    ctx=canv.getContext("2d");
    document.addEventListener("keydown",keyPush);
    setInterval(game,1000/10);
}
px=py=10;
gs=tc=20;
ax=ay=15;
xv=yv=0;
trail=[];
tail = 5;
count=0;
function game() {
    px+=xv;
    py+=yv;
    if(px<0) {
        px= tc-1;
    }
    if(px>tc-1) {
        px= 0;
    }
    if(py<0) {
        py= tc-1;
    }
    if(py>tc-1) {
        py= 0;
    }
    //On colore le fond
    ctx.fillStyle="#D9A05B";
    ctx.fillRect(0,0,canv.width,canv.height);
 
    //On colore le serpent et la boucle for permet de déplacer visuelement le serpent
    ctx.fillStyle="#F2CA99";
    for(var i=0;i<trail.length;i++) {
        ctx.fillRect(trail[i].x*gs,trail[i].y*gs,gs-2,gs-2);
        if(trail[i].x==px && trail[i].y==py) {
            tail = 5;
        }
    }
    //Actualisation du serpent
    trail.push({x:px,y:py});
    while(trail.length>tail) {
    trail.shift();
    }
    //Quand le serpent rencontre une pomme alors une pomme apparait de manière aléatoire et on incrémente de 1 le conteur
    if(ax==px && ay==py) {
        tail++;
        ax=Math.floor(Math.random()*tc);
        ay=Math.floor(Math.random()*tc);
        count++;
        if(count == 5){
            window.alert("Indice numéro 1 : E");
        }
    }
    ctx.fillStyle="#BF793B";
    ctx.fillRect(ax*gs,ay*gs,gs-2,gs-2);
}
    
    //Fonction qui permet de jouer avec les flèches du pavé
function keyPush(evt) {

    switch(evt.keyCode) {
        case 37:
            xv=-1;yv=0;
            break;
        case 38:
            xv=0;yv=-1;
            break;
        case 39:
            xv=1;yv=0;
            break;
        case 40:
            xv=0;yv=1;
            break;
    }
}
</script>


<input type="button" onclick="maFunction()"  value="Solution!" class="btn btn-success">
    <script type="text/javascript">
        function maFunction(){
            alert("INDICE : E");
        }
    </script>