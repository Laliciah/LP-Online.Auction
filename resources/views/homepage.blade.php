<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

* {
  box-sizing: border-box;
}

/* Body specifications: Beginning  #F0FFFF*/
body {
  font-family: normal;
  padding: 0;

}
/* Body specifications: End */

/* Style the navigation bar: Beginning */
.topnav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  overflow: hidden;
  background-color: #F0FFFF;
}

/* Style the navigation bar: End */


/* Style the navigation bar links: Beginnign */
.topnav a {
  float: left;
  display: block;
  color: #1B1212;
  text-align: center;
  padding: 30px 16px;
  text-decoration: none;
}
.logo {
  max-width: 70px;
  margin-right: 10px;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
/* Style the navigation bar links: End */


/* First part of the body specification (Michael Angelo's picture): Beginnig */
.michaelAngelo-image {
  background: url(michaelAngelo.jpg) no-repeat center; 
  background-size: cover;
  height: 500px;
  width: 1247px;
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

/* First part of the body specification (Michael Angelo's picture): End */

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
:root {
    --btn-text-font-size: 15px;
}
:root {
    --btn-text-direction: ltr;
    --btn-border-r-color: var(--btn-border-color);
    --btn-border-l-color: var(--btn-border-color);
    --btn-border-b-width: var(--btn-border-width);
    --btn-border-width: 0px;
    --btn-border-radius: 2px;
    --btn-border-t-width: var(--btn-border-width);
    --btn-border-tl-radius: var(--btn-border-radius);
    --btn-border-br-radius: var(--btn-border-radius);
    --btn-border-bl-radius: var(--btn-border-radius);
    --btn-bg-color: var(--color_1);
    --btn-border-color: rgb(33, 34, 38);
    --btn-border-tr-radius: var(--btn-border-radius);
    --btn-border-r-width: var(--btn-border-width);
    --btn-bg-image: none;
    --btn-border-b-color: var(--btn-border-color);
    --btn-border-l-width: var(--btn-border-width);
    --btn-border-t-color: var(--btn-border-color);
    --btn-text-align: center;
    --btn-text-color: rgb(255, 255, 255);
    --btn-text-decoration: none;
    --btn-text-font-weight: 400;
    --btn-text-font-family: Oswald;
    --btn-icon-color: rgb(247, 247, 247);
    --btn-icon-fill: rgb(247, 247, 247);
    --btn-icon-wrpr-display: none;
    --btn-hover-border-b-color: var(--btn-hover-border-color);
    --btn-hover-bg: var(--color_1);
    --btn-hover-border-t-color: var(--btn-hover-border-color);
    --btn-hover-border-r-color: var(--btn-hover-border-color);
    --btn-hover-border-l-color: var(--btn-hover-border-color);
    --btn-hover-border-color: rgba(0, 0, 0, 0);
    --btn-hover-text-color: var(--btn-text-color);
    --btn-hover-text-font-weight: var(--btn-text-font-weight);
    --btn-hover-text-decoration: var(--btn-text-decoration);
    --btn-hover-text-font-style: var(--btn-text-font-style);
}
:root {
    --color_1: rgba(25, 168, 222, 1);
    --color_2: rgba(25, 168, 222, 1);
    --color_3: rgba(25, 168, 222, 1);
    --color_4: rgba(14, 112, 178, 1);
}
*, :after, :before {
    box-sizing: border-box;
}
*, :after, :before {
    box-sizing: border-box;
}
html {
    font-family: Source Sans Pro;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
}





/* Footer: Beginnig */
.footer {
  padding: 150px;
  text-align: center;
  background: #343433;
  margin-top: 0px;
}
/* Footer: End */

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

<!-- Navigation bar: Beginning-->
  <div class="topnav">
      <img src="LogotipoXtoura.jpg" class="logo" alt="Logo">
    <a href="#" style="float:right">Contato</a>
    <a href="#" style="float:right">Sobre Nós</a>
    <a href="#" style="float:right">Licitar</a>
    <a href="#" style="float:right">Obras</a>
    <a href="#" style="float:right">Página Inicial</a>

  </div>
<!-- Navigation bar: End -->


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
    <img src="SalvadorDali.jpg" alt="Cinque Terre" width="600" height="400">
  <a href="#" class="button">Salvador Dali - A persitência da mémoria</a>
  </a>
</div>    

<!-- Photo 2 (Jean Michel - Sem Título) -->
  <div class="gallery">
    <a target="_blank" href="JeanMichel.jpg">
      <img src="JeanMichel.jpg" alt="Forest" width="600" height="400">
      <a href="#" class="button">Jean Michel Basquait - Sem Título</a>
    </a>
  </div>

  <!-- Photo 3 (Pablo Picasso - Marie-Thèrése Walter) -->  
  <div class="gallery">
    <a target="_blank" href="PabloPicasso-marie.jpg">
      <img src="PabloPicasso-marie.jpg" alt="Northern Lights" width="600" height="400">
      <a href="#" class="button">Pablo Picasso - Marie-Thèrése Walter</a>
    </a>
  </div>
<!-- Photo 4 (Michel Basquait - Sem Título) -->
  <div class="gallery">
    <a target="_blank" href="MichelBasquiat.jpg">
      <img src="MichelBasquiat.jpg" alt="Mountains" width="600" height="400">
      <a href="#" class="button">Jean Michel Basquait - Sem Título</a>
    </a>
  </div>
<!-- Photo 5 (Klimt - A Dama Dourada) -->
<div class="gallery">
    <a target="Klimt-DamaDourada.jpg" href="img_mountains.jpg">
      <img src="Klimt-DamaDourada.jpg" alt="Mountains" width="600" height="400">
      <a href="#" class="button">Klimt - A Dama Dourada</a>
    </a>
  </div>

<!-- Photo 6 (Carlos V. Pinto - Caravelas do Tempo) -->
<div class="gallery">
    <a target="_blank" href="CarlosPinto-Caravelas.jpg">
      <img src="CarlosPinto-Caravelas.jpg" alt="Mountains" width="600" height="400">
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
 <div class="u_1829469706 dmRespRow hasBackgroundOverlay dmSectionParallaxNew fullBleedChanged fullBleedMode skrollable skrollable-between" style="text-align: center; background-position: 50% 2.2869px;" id="1829469706" mode="4" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" data-bottom-top="background-position: 50% 100px;"> <div class="dmRespColsWrapper" id="1852553864"> <div class="u_1695794408 dmRespCol medium-3 large-3 small-6" id="1695794408" data-anim-desktop="fadeInUp" style="opacity: 1; transform: translate3d(0%, 0%, 0px); visibility: visible !important; transition-delay: unset !important; transition-duration: unset !important; animation-delay: unset !important; animation-duration: unset !important; transition-property: none !important;"> <div class="u_1243922539 dmNewParagraph" id="1243922539" style="transition:opacity 1s ease-in-out;display:block;line-height:initial;" data-element-type="paragraph" data-version="5"><h2 style="color:rgb(255, 255, 255);" class="text-align-center"><span style="color: rgb(255, 255, 255); display: initial;">850</span></h2></div> <div class="u_1356735535 dmDividerWrapper clearfix" id="1356735535" layout="divider-style-1" data-element-type="dDividerId" data-widget-version="2"><hr class="dmDivider" style="min-height: 2px; border:none; background:grey" id="1978427536"></div> 
 <div class="dmNewParagraph" id="1786637899" style="transition: opacity 1s ease-in-out;" data-element-type="paragraph" data-version="5"> <h3 class="text-align-center"><span style="display: initial; color: var(--color_1);">Leilões Ativos</span></h3> 
</div></div> 
 <div class="u_1637167589 dmRespCol medium-3 large-3 small-6" id="1637167589" data-anim-desktop="fadeInUp" style="opacity: 1; transform: translate3d(0%, 0%, 0px); visibility: visible !important; transition-delay: unset !important; transition-duration: unset !important; animation-delay: unset !important; animation-duration: unset !important; transition-property: none !important;"> <div class="u_1237704446 dmNewParagraph" id="1237704446" style="transition:opacity 1s ease-in-out;display:block;line-height:initial;" data-element-type="paragraph" data-version="5"> <h2 class="text-align-center"><span style="display: initial; color: rgb(255, 255, 255);">57.003</span></h2> 
</div> <div class="u_1504452023 dmDividerWrapper clearfix" id="1504452023" layout="divider-style-1" data-element-type="dDividerId" data-widget-version="2"><hr class="dmDivider" style="min-height: 2px; border:none; background:grey" id="1514170819"></div> 
 <div class="dmNewParagraph" id="1160039588" style="transition: opacity 1s ease-in-out;" data-element-type="paragraph" data-version="5"> <h3 class="text-align-center"><span style="color: var(--color_1); display: initial;">Leilões Terminados</span></h3> 
</div></div> 
 <div class="u_1039499883 dmRespCol medium-3 large-3 small-6" id="1039499883" data-anim-desktop="fadeInUp" style="opacity: 1; transform: translate3d(0%, 0%, 0px); visibility: visible !important; transition-delay: unset !important; transition-duration: unset !important; animation-delay: unset !important; animation-duration: unset !important; transition-property: none !important;"> <div class="u_1137153379 dmNewParagraph" id="1137153379" style="transition: opacity 1s ease-in-out; display: block;" data-element-type="paragraph" data-version="5"> <h2 class="text-align-center"><span style="display: initial; color: rgb(255, 255, 255);">3.548.429</span></h2> 
</div> <div class="u_1146568028 dmDividerWrapper clearfix" id="1146568028" layout="divider-style-1" data-element-type="dDividerId" data-widget-version="2"><hr class="dmDivider" style="min-height: 2px; border:none; background:grey" id="1493035655"></div> 
 <div class="dmNewParagraph" id="1694057405" style="transition: opacity 1s ease-in-out;" data-element-type="paragraph" data-version="5"> <h3 class="text-align-center"><span style="display: initial; color: var(--color_1);">Licitações<span class="ql-cursor">﻿</span></span></h3> 
</div></div> 
 <div class="u_1019793354 dmRespCol medium-3 large-3 small-6" id="1019793354" data-anim-desktop="fadeInUp" style="opacity: 1; transform: translate3d(0%, 0%, 0px); visibility: visible !important; transition-delay: unset !important; transition-duration: unset !important; animation-delay: unset !important; animation-duration: unset !important; transition-property: none !important;"> <div class="u_1676846422 dmNewParagraph" id="1676846422" style="transition: opacity 1s ease-in-out; display: block;" data-element-type="paragraph" data-version="5"> <h2 class="text-align-center"><span style="color: rgb(255, 255, 255); display: initial;">35.346</span></h2> 
</div> <div class="u_1860495887 dmDividerWrapper clearfix" id="1860495887" layout="divider-style-1" data-element-type="dDividerId" data-widget-version="2"><hr class="dmDivider" style="min-height: 2px; border:none; background:grey" id="1623411959"></div> 
 <div class="dmNewParagraph" id="1546100510" style="transition: opacity 1s ease-in-out;" data-element-type="paragraph" data-version="5"> <h3 class="text-align-center"><span style="color: var(--color_1); display: initial;">Quadros Vendidos</span></h3> 
</div></div> 
</div> 
</div>

<!-- Footer: Beginning -->
<div class="footer">
  <h2>Footer</h2>
</div>
<!-- Footer: End -->

</body>
</html>
