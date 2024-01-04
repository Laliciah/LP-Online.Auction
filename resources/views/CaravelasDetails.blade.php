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
            <img src="img/CarlosPinto-Caravelas.jpg" alt="Obra 1">
                <div class="details">
                    <h3>Carlos Pinto - Caravelas</h3>
                    <p>Pintura: Óleo sobre tela</p>
                    <p>Dimensões: Altura 60 cm, Largura 80 cm</p>
                    <p>Estado da obra: Ótimas condições</p>
                    <p>Categorias: Surrealismo</p>
                    <p>Em lugar imaginário entre o sonho e a realidade a bela jovem transborda em ansiedade e expectativa. Vislumbra o futuro e liberta a infância em navegação suave.</p>
                    <input type="hidden" name="obra" value="Carlos Pinto - Caravelas">
                    <a href="formsauction" class="button bid-button">Licitar</a>
                </div>
            </form>
        </div>

        <!-- Adicione mais obras de arte conforme necessário -->

    </div>

</body>


@endsection
