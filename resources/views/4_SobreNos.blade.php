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
/* First part of the body specification: Beginnig */
    .container{
        width: auto;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: 100px;
        padding-right: 500px;
        margin-top: 20px; 
        margin-bottom: 30px;
        margin-right: 30px;
    }

    .titulo {
                font-size: 1.5em;
                font-weight: bold;
                margin-bottom: 10px;
                color:#1E90FF
    }

    .conteudo {
                font-size: 1.5em;
    }

</style>
</head>
<body>

<!-- Firts part of the body: Beginning -->
     <img class="imagem-responsiva" src="/img/sobre1.jpg" alt="Us" width="1666" height="500">
     <div class="container">
        <div class="titulo">
           Nossa História
        </div>
        <div class="conteudo">
            Fundada em 2023, nossa empresa de leilões online tornou-se uma referência notável no cenário artístico, consolidando-se como uma plataforma de destaque com um sucesso extraordinário. Especializados na venda de quadros de alguns dos maiores nomes da arte, conquistamos a confiança de colecionadores e amantes da arte em todo o mundo.
        </div>
        <div class="conteudo">
            Nosso modelo de negócios inovador combina a tradição dos leilões com a conveniência e acessibilidade do ambiente online, proporcionando uma experiência envolvente e eficiente para compradores e vendedores. Ao longo dos anos, conquistamos milhões de euros em faturamento, marcando presença nos mercados globais e contribuindo para a disseminação da arte em um ambiente digital.
        </div>
        <div class="conteudo">
           Trabalhamos incansavelmente para oferecer uma seleção exclusiva de obras de artistas renomados, proporcionando aos nossos clientes a oportunidade única de adquirir peças icônicas. A transparência, autenticidade e a paixão pela arte são os pilares que sustentam nosso sucesso, enquanto continuamos a levar a experiência de leilões online a novas alturas, conectando colecionadores a obras de arte extraordinárias e valiosas.
        </div>
    </div>

    <div class="container">
        <div class="titulo">
           Nossa Missão
        </div>
        <div class="conteudo">
            Proporcionar uma experiência de compra e venda tranquila e agradável.
        </div>
        <div class="conteudo">
            Nossos padrões de integridade, experiência e sofisticação são nossos diferenciais.
        </div>
    </div>
<!-- First part of the body: End-->
    
<!-- Second part of the body: Beginning -->
    <img class="imagem-responsiva" src="/img/sobre2.jpg" alt="Us">

<!-- Second part of the body: End-->
     
<h1>teste  4 </h1>


@endsection