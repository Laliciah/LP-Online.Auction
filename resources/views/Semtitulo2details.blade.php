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
            <img src="img/MichelBasquiat.jpg" alt="Obra 2">
                <div class="details">
                    <h3>Jean Michel - Sem Título</h3>
                    <p>Pintura: Acrílica, tinta spray e óleo sobre tela</p>
                    <p>Dimensões: 183,2 cm , 173 cm</p>
                    <p>Estado da obra: Ótimas condições</p>
                    <p>Categorias: Neoexpressionismo</p>
                    <p>A pintura mostra o estilo único de Basquiat e o seu importante tema de recuperação da identidade cultural negra, simbolizado pelas suas representações de caveiras que estão ligadas às máscaras africanas. A representação incompleta aumenta a aura misteriosa que envolve o crânio.</p>
                    <input type="hidden" name="obra" value="Jean Michel - Sem Título">
                    <a href="formsauction" class="button bid-button">Licitar</a>
                </div>
            </form>
        </div>

        

    </div>

</body>


@endsection
