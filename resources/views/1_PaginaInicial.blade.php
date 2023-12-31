@extends('layouts.main')
@section('content')
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

  .imagem-responsiva {
    width: 100%;
    height: auto;
  }

  .titulo {
    font-size: 3em;
    font-weight: bold;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    text-align: center;
    margin-top: 50px;
    margin-bottom: 50px;
    color: black
  }

  .animation{
  width: 200px;
  height: 5px;
  background-color: #3498db;
  animation-name: example;
  animation-duration: 4s;
  margin: 0 auto;
  margin-bottom: 30px;
}
.animation2{
  width: 400px;
  height: 5px;
  background-color: #3498db;
  animation-name: example;
  animation-duration: 4s;
  margin: 0 auto;
  margin-bottom: 30px;
}


@keyframes example {
  from {background-color: #3498db;}
  to {background-color: white;}
}

/* First part of the body specification: Beginnig */
  /* Estilos para a galeria */
  .container {

    flex-direction: column;
    max-width: 1000px;
    margin: 0 auto;
  }
  .row {
    display: flex;
    flex-wrap: wrap;
  }
  .coluna {
    flex: 0 0 calc(33.33% - 20px);
    margin: 10px;
    text-align: center;
  }
  .botao {
    background: none;
    border: none;
    padding: 0;
    cursor: pointer;
  }
  .botao img {
    width: 100%;
    height: auto;
    display: block;
    border-radius: 8px;
  } 

/* First part of the body specificationd: End */

/* Second part of the body specificationd: Beginnig */
  /* Estilos para a caixa */
  .container2 {
    display: flex;
    justify-content: center;
    height: 30vh;
  }

  .blue-box {
    width: 100%;
    height: auto;
    background-color: #3498db;
    padding: 50px;
    margin-top: 30px;

  }

  .texto {
    flex: 1;
    padding: 50px;
    font-family:'Courier New', Courier, monospace;
  }

  .texto p {
    color: #fff;
    font-size: 1.5em;
    font-family:'Courier New', Courier, monospace;
  }

/* Second part of the body specificationd: End */

/* Third part of the body specificationd: Beginnig */
  .titulo2 {
    font-size: 1.5em;
    font-weight: bold;
    margin-bottom: 10px;
    color:#1E90FF;
    font-family:'Courier New', Courier, monospace;
  }
  .box {
    width: 100%;
    height: auto;
    padding: 20px;
    margin: 0 auto; /* Centraliza o container na página */
  }
  .column {
    float: left;
    width: 30%;
    padding: 30px;
  }
  .conteudo {
        font-size: 1.5em;
        font-family:'Courier New', Courier, monospace;
    }
    /* Clear floats after the columns */
  .row::after {
    content: "";
    display: table;
    clear: both;
    }

      /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
      @media screen and (max-width:600px) {
      .column {
          width: 100%;
      }
      }
/* Third part of the body specificationd: End */

</style>
</head>
<body>

  <img class="imagem-responsiva" src="/img/michaelAngelo.jpg" alt="Michael Angelo">
  <div class="titulo">
    PEÇAS PRINCIPAIS
  </div>
  <div CLASS="animation"> </div>
<!-- Firts part of the body: Beginning -->
  <div class="container">
    <div class="row">
      <div class="coluna">
        <a href="obras" class="botao">
          <img src="/img/SalvadorDali.jpg" alt="Salvador Dali">
        </a>
      </div>
      <div class="coluna">
        <a href="obras" class="botao">
          <img src="/img/JeanMichel.jpg" alt="Jean Michel">
        </a>
      </div>
      <div class="coluna">
        <a href="obras" class="botao">
          <img src="/img/PabloPicasso-marie.jpg" alt="Pablo Picasso">
        </a>
      </div>
    </div>
    <div class="row">
      <div class="coluna">
        <a href="obras" class="botao">
          <img src="/img/MichelBasquiat.jpg" alt="Michel Basquiat">
        </a>
      </div>
      <div class="coluna">
        <a href="obras" class="botao">
          <img src="/img/Klimt-DamaDourada.jpg" alt="Klimt">
        </a>
      </div>
      <div class="coluna">
        <a href="obras" class="botao">
          <img src="/img/CarlosPinto-Caravelas.jpg" alt="Carlos Pinto">
        </a>
      </div>
    </div>
  </div>

<!-- Firts part of the body: End -->

<!-- Second part of the body: Beginning -->
  <div class="container2">
    <div class="blue-box">
      <div class="texto">
        <h1>STAFF QUALIFICADO</h1>
          <p>A equipe do leilão é excecionalmente qualificada, destacando-se por sua paixão pela arte e profundo conhecimento no campo. Os leiloeiros, especialistas em arte e equipe administrativa combinam habilidades excepcionais para criar uma experiência de leilão de alto nível, assegurando autenticidade e eficiência em cada transação.</p>
      </div>
    </div>
  </div>
  
<!-- Second part of the body: End -->

<!-- Third part of the body: Beginnig -->
  <img class="imagem-responsiva" src="/img/galeria.jpg" alt="Exposição">
    <div class="titulo">
      O QUE NOSSOS CLIENTES DIZEM
    </div>
    <div CLASS="animation2"> </div>

  <div class="box">
      <div class="row">
        <div class="column">
        <div class="titulo2">
          Miguel Milhão
        </div>
          <div class="conteudo">
            "Incrível experiência na Xtoura leilões online de quadros! A facilidade de participar virtualmente tornou a aquisição de arte ainda mais acessível e emocionante."
          </div>
        </div>

        <div class="column">
            <div class="titulo2">
                Ruben Amorim
            </div>
            <div class="conteudo">
                "A plataforma de leilões online para quadros é intuitiva e eficiente. Encontrei peças incríveis e adorei a conveniência de participar de qualquer lugar."
            </div>
        </div>
        
        <div class="column">
            <div class="titulo2">
                Marco Galinha
            </div>
            <div class="conteudo">
                "Excelente serviço na casa de leilões de quadros! A equipe demonstrou profundo conhecimento artístico e tornou a minha participação no leilão uma verdadeira jornada cultural."
            </div>
        </div>
      </div>
    </div>
<!-- Third part of the body: End -->
</body>
</html>
@endsection