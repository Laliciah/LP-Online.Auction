@extends('layouts.main')

@section('content')



<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f9f9f9;
        margin: 0;
        padding: 0;
    }

    .gallery {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        padding: 20px;
    }

    .artwork {
        border: 2px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        margin: 10px;
        width: 300px;
        transition: transform 0.3s ease-in-out;
    }

    .artwork:hover {
        transform: scale(1.05);
    }

    .artwork img {
        width: 100%;
        height: auto;
        border-bottom: 2px solid #ddd;
    }

    .details {
        padding: 15px;
    }

    .details h3 {
        margin-top: 0;
        font-size: 1.2em;
        color: #333;
    }

    .details p {
        margin: 8px 0;
        color: #666;
    }

    .button {
        display: inline-block;
        padding: 8px 16px;
        margin-top: 10px;
        text-decoration: none;
        color: #fff;
        background-color: #3498db;
        border-radius: 4px;
        transition: background-color 0.3s ease-in-out;
    }

    .button:hover {
        background-color: #2980b9;
    }
</style>
</head>
<body>

    <div class="gallery">
        <!-- Detalhes para a obra de arte "Carlos Pinto - Caravelas" -->
        <div class="artwork">
            <form action="2_Obras" method="get">
            <img src="img/PabloPicasso-marie.jpg" alt="Obra 1">
                <div class="details">
                    <h3>Retrato de Marie-Thérèse Walter</h3>
                    <p>Pintura: Óleo sobre tela</p>
                    <p>Dimensões: 100 cm, 81 cm</p>
                    <p>Estado da obra: Ótimas condições</p>
                    <p>Categorias: Dissociação cubista da perspetiva </p>
                    <p>Em 1927, a jovem Marie-Thérèse Walter, de 17 anos, foi abordada por Pablo Picasso ao sair das Galerias Lafayette em Paris. O renomado pintor convidou-a para posar em seus retratos, iniciando uma relação que evoluiria para uma musa e amante. Picasso destacou a construção sólida da cabeça e a anatomia distintiva de Marie-Thérèse como elementos propícios para interpretação escultural.
Na década de 1930, Picasso explorou temas eróticos e sensuais em sua arte, consolidando o que viria a ser conhecido como o "estilo Picasso". Esse período foi marcado pela dissociação cubista da perspectiva, reprodução subjetiva do real e simbologia infantil. O Retrato de Marie-Thérèse Walter é um exemplo dessa fase, onde os pilares estilísticos do artista se manifestam de maneira proeminente.</p>
                    <input type="hidden" name="obra" value="Carlos Pinto - Caravelas">
                    <a href="formsauction" class="button bid-button">Licitar</a>
                </div>
            </form>
        </div>

        <!-- Adicione mais obras de arte conforme necessário -->

    </div>

</body>


@endsection
