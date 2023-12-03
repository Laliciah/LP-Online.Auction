<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


* {
  box-sizing: border-box;
}

/* body specifications */
body {
  font-family: normal;
  padding: 0;
  background: black;
}

/* Style the navigation bar */
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  overflow: hidden;
  background-color: white;
}

li {
  float: right;
}

/*Especification link 'Obras' */

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}

/* Style the navigation bar links */
.topnav a {
  float: left;
  display: block;
  color: #1B1212;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* first picture specification*/
.michaelAngelo-image {
  background: url(michaelAngelo.jpg) no-repeat center; 
  background-size: cover;
  height: 500px;
  width: 1247px;
  opacity: 0.5;
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


/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
}

/* Clear floats after the columns */
.row::after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

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

<!-- Navigation bar: Beginning -->
<ul>
  <div class="topnav">
  <li><a href="#" style="float:right">Contato</a></li>
  <li><a href="#" style="float:right">Sobre Nós</a></li>
  <li><a href="#" style="float:right">Licitar</a></li>
  <li><a href="#" style="float:right">Obras</a></li>
  <li><a href="#" style="float:right">Página Inicial</a></li>
  <li><a href="#" style="float:left">Logotipo</a</li>
  </li>
  </div>
</ul>
<!-- Navigation bar: End -->

<!-- First part of the body (Michael Angelo's picture): Beginning -->
<div class="row">
  <div class="michaelAngelo-image">
  <div class="michaelAngelo-text">
    <h1 style="font-size:50px">ENCONTRE A PEÇA DOS SEUS SONHOS</h1>

  </div>
</div>
<!-- First part of the body (Michael Angelo's picture): End -->

<!-- Second part of the body (...): Beginning -->
    <div class="card">
      <h2>Second part of the body</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
 <!-- Second part of the body (...): End --> 
    
 <!-- Third part of the body (...): Beginning -->
 <div class="card">
      <h2>Third part of the body</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
 <!-- Third part of the body (...): End --> 

 <!-- Fourth part of the body (...): Beginning -->
 <div class="card">
      <h2>Fourth part of the body</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
 <!-- Fourth part of the body (...): End --> 
 
<!-- Footer: Beginning -->
<div class="footer">
  <h2>Footer</h2>
</div>
<!-- Footer: End -->

</body>
</html>
