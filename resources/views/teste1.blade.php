<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


/* First part of the body specification: Beginnig */
.michaelAngelo-image {
  background: url(/img/michaelAngelo.jpg) no-repeat center; 
  background-size: cover;
  height: 500px;
  width: 1666px;
}

.michaelAngelo-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

h1 {
  color: white;
  text-shadow: 2px 2px 4px #000000;
}

/* First part of the body specification: End */

/* Second part of the body specification (Photo gallery): Beginning */
div.gallery {
  margin: 20px;
  border: 1px solid white;
  background-color: #03A9FC;
  float: left;
  width: 300px;
}

div.gallery:hover {
  border: px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
.center-text {
  text-align: center;
  position: absolute;
  top: 110%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: black;
}

.button {
  background-color: #03A9FC;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 13px;
  margin: 4px 2px;
  cursor: pointer;
}

/* Second part of the body specification (Photo gallery): End */

/* Third part of the body specification (...): Beginnig */
.center1-text {
  text-align: center;
  position: absolute;
  top: 260%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: black;
}
/* Third part of the body specification (...): End */

/* Fourth part of the body specification (...): Beginnig */
/* Fourth part of the body specification (...): End*/

/* Add a card effect for articles */
.card {
  background-color: #F0FFFF;
  padding: 100px;
  margin-top: 0px;
}
/* Fourth part of the body specification (...): Beginnig trabalho*/

ft5



/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>



 <!-- Firts part of the body (Michael Angelo's picture): Beginning -->
<div class="row">
  <div class="leftcolumn">
  <div class="michaelAngelo-image">
  <div class="michaelAngelo-text">
    <h1 style="font-size:50px">ENCONTRE A PEÇA DOS SEUS SONHOS</h1>

  </div>
</div>
<!-- First part of the body (Micheal Angelo's picture): End-->


<!-- Second part of the body (Photo gallery): Beginning -->
<div class="card">
  <div class="center-text">
    
      <h2 style="font-size: 30PX"> PEÇAS PRINCIPAIS </h2>
  </div>
<!-- Photo 1 (Salvador Dali - A persitência da mémoria) -->
  <div class="gallery">
  <a target="_blank" href="SalvadorDali.jpg">
    <img src="/img/SalvadorDali.jpg" alt="Cinque Terre" width="600" height="400">
  <a href="#" class="button">Salvador Dali - A persitência da mémoria</a>
  </a>
</div>    

<!-- Photo 2 (Jean Michel - Sem Título) -->
  <div class="gallery">
    <a target="_blank" href="JeanMichel.jpg">
      <img src="/img/JeanMichel.jpg" alt="Forest" width="600" height="400">
      <a href="#" class="button">Jean Michel Basquait - Sem Título</a>
    </a>
  </div>

  <!-- Photo 3 (Pablo Picasso - Marie-Thèrése Walter) -->  
  <div class="gallery">
    <a target="_blank" href="PabloPicasso-marie.jpg">
      <img src="/img/PabloPicasso-marie.jpg" alt="Northern Lights" width="600" height="400">
      <a href="#" class="button">Pablo Picasso - Marie-Thèrése Walter</a>
    </a>
  </div>
<!-- Photo 4 (Michel Basquait - Sem Título) -->
  <div class="gallery">
    <a target="_blank" href="MichelBasquiat.jpg">
      <img src="/img/MichelBasquiat.jpg" alt="Mountains" width="600" height="400">
      <a href="#" class="button">Jean Michel Basquait - Sem Título</a>
    </a>
  </div>
<!-- Photo 5 (Klimt - A Dama Dourada) -->
<div class="gallery">
    <a target="Klimt-DamaDourada.jpg" href="img_mountains.jpg">
      <img src="/img/Klimt-DamaDourada.jpg" alt="Mountains" width="600" height="400">
      <a href="#" class="button">Klimt - A Dama Dourada</a>
    </a>
  </div>

<!-- Photo 6 (Carlos V. Pinto - Caravelas do Tempo) -->
<div class="gallery">
    <a target="_blank" href="CarlosPinto-Caravelas.jpg">
      <img src="/img/CarlosPinto-Caravelas.jpg" alt="Mountains" width="600" height="400">
      <a href="#" class="button">Carlos V. Pinto - Caravelas do Tempo</a>
    </a>
  </div>

    </div>
  </div>

 <!-- Second part of the body (...): End --> 
    

 <!-- Third part of the body (...): Beginning -->
 <div class="card">
    <div class="center1-text">
      <h2>Third part of the body</h2>
    </div>
  </div>
 <!-- Third part of the body (...): End --> 


 <!-- Fourth part of the body (...): Beginning -->
 <div class="card">
      <h2>Fourth part of the body</h2>
      <h2>Fourth part of the body</h2>
      <h2>Fourth part of the body</h2>
      <h2>Fourth part of the body</h2>
      <h2>Fourth part of the body</h2>
      <h2>Fourth part of the body</h2>
      <h2>Fourth part of the body</h2>
  </div>
 <!-- Fourth part of the body (...): End --> 


</body>
</html>