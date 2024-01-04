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
            <img src="img/JeanMichel.jpg" alt="Obra 2">
                <div class="details">
                    <h3>Jean Michel - Sem Título</h3>
                    <p>Pintura: Acrílico e oleado sobre tela</p>
                    <p>Dimensões: 205,74 cm , 175,9 cm</p>
                    <p>Estado da obra: Ótimas condições</p>
                    <p>Categorias: Neoexpressionismo</p>
                    <p>A pintura Sem título de Jean-Michel Basquiat mostra um crânio que parece estar entre a vida e a morte. Os olhos são apáticos, o rosto parece estranho, mas há cores vibrantes. Basquiat usou elementos de máscaras africanas para criar sua própria linguagem visual. Ele passou meses trabalhando nisso, diferente de suas pinturas rápidas. Apresentada em sua primeira exposição em Nova York, a intensidade pode refletir a pressão para ser um artista de sucesso comercial. Resumindo, é um autorretrato simbólico que mistura a identidade de Basquiat com influências artísticas e a pressão da fama.</p>
                    <input type="hidden" name="obra" value="Jean Michel - Sem Título">
                    <a href="formsauction" class="button bid-button">Licitar</a>
                </div>
            </form>
        </div>

        

    </div>

</body>


@endsection
