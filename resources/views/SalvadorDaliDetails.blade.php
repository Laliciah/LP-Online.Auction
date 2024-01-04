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
        <div class="artwork">
            <form action="2_Obras" method="get">
            <img src="img/SalvadorDali.jpg" alt="Obra 1">
                <div class="details">
                    <h3>A Persistência da Memória</h3>
                    <p>Pintura: Óleo sobre tela</p>
                    <p>Dimensões: 24 cm , 33 cm </p>
                    <p>Estado da obra: Ótimas condições</p>
                    <p>Categorias: Surrealismo </p>
                    <p>Nesta pintura surrealista de Salvador Dalí, que levou menos de cinco horas para ser concluída, o artista retratou um ambiente costeiro da Catalunha, onde vivia. A obra apresenta elementos irreais, como relógios derretidos, em sintonia com a visão de Dalí de materializar a "irracionalidade concreta". A paisagem ao fundo mostra um penhasco e o mar, sem simbolismos metafóricos, representando a realidade. No canto esquerdo, formigas reunidas em um dos relógios simbolizam a putrefação, um elemento recorrente nas obras de Dalí. A pintura provocou espanto e admiração na esposa do artista, e ele questionou se ela esqueceria a imagem ao longo dos anos, recebendo a resposta de que seria inesquecível.</p>
                    <input type="hidden" name="obra" value="Carlos Pinto - Caravelas">
                    <a href="formsauction" class="button bid-button">Licitar</a>
                </div>
            </form>
        </div>

        

    </div>

</body>


@endsection
