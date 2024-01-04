@extends('layouts.main')

@section('content')

<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
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
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 10px;
            background-color: #fff;
            border-radius: 8px;
            width: 300px;
        }

        .artwork img {
            max-width: 100%;
            height: auto;
            border-radius: 4px;
        }

        .details {
            margin-top: 10px;
        }

        .button {
            display: inline-block;
            padding: 8px 16px;
            margin-right: 10px;
            text-decoration: none;
            color: #fff;
            background-color: #4caf50;
            border-radius: 4px;
            cursor: pointer;
        }

        .bid-button {
            background-color: #007bff;
        }
    </style>
</head>
<body>

    <div class="gallery">
        <!-- Exemplo de obra de arte 1 -->
        <div class="artwork">
            <a href="CaravelasDetails">
                <img src="img/CarlosPinto-Caravelas.jpg" alt="Obra 1">
                <div class="details">
                    <h3>Caravelas</h3>
                    <p>Artista: Carlos Pinto</p>
                    <p>Ano: 2010</p>
                    <p>Código: 111-xtl </p>
                    <a href="CaravelasDetails" class="button">Mais Informações</a>
                    <a href="formsauction" class="button bid-button">Licitar</a>
                </div>
            </a>
        </div>

        <!-- Exemplo de obra de arte 2 -->
        <div class="artwork">
            <a href="JeanMichelSemTitulo">
                <img src="img/JeanMichel.jpg" alt="Obra 2">
                <div class="details">
                    <h3>Caveira sem título</h3>
                    <p>Artista: Jean-Michel Basquiat</p>
                    <p>Ano: 1981</p>
                    <p>Código: 112-xtl</p>
                    <a href="JeanMichelSemTitulo" class="button">Mais Informações</a>
                    <a href="formsauction" class="button bid-button">Licitar</a>
                </div>
            </a>
        </div>

        <!-- Adicione mais obras de arte conforme necessário -->

        <div class="artwork">
            <a href="DamaDouradaDetails">
                <img src="img/Klimt-DamaDourada.jpg" alt="Obra 2">
                <div class="details">
                    <h3>Retrato de Adele Bloch-Bauer I</h3>
                    <p>Artista: Gustav Klimt</p>
                    <p>Ano: 1907</p>
                    <p>Código: 113-xtl</p>
                    <a href="DamaDouradaDetails" class="button">Mais Informações</a>
                    <a href="formsauction" class="button bid-button">Licitar</a>
                </div>
            </a>
        </div>

        <div class="artwork">
            <a href="JeanMichelSemTitulo2">
                <img src="img/MichelBasquiat.jpg" alt="Obra 2">
                <div class="details">
                    <h3>Sem Título</h3>
                    <p>Artista: Jean-Michel Basquiat</p>
                    <p>Ano: 1982</p>
                    <p>Código: 114-xtl</p>
                    <a href="JeanMichelSemTitulo2" class="button">Mais Informações</a>
                    <a href="formsauction" class="button bid-button">Licitar</a>
                </div>
            </a>
        </div>

        <div class="artwork">
            <a href="MarieDetails">
                <img src="img/PabloPicasso-marie.jpg" alt="Obra 2">
                <div class="details">
                    <h3>Retrato de Marie-Thérèse Walter</h3>
                    <p>Artista: Pablo Picasso</p>
                    <p>Ano: 1927</p>
                    <p>Código: 115-xtl</p>
                    <a href="MarieDetails" class="button">Mais Informações</a>
                    <a href="formsauction" class="button bid-button">Licitar</a>
                </div>
            </a>
        </div>

        <div class="artwork">
            <a href="SalvadorDali">
                <img src="img/SalvadorDali.jpg" alt="Obra 2">
                <div class="details">
                    <h3>A persistência da Memória</h3>
                    <p>Artista: Salvador Dali</p>
                    <p>Ano: 1931</p>
                    <p>Código: 116-xtl</p>
                    <a href="SalvadorDali" class="button">Mais Informações</a>
                    <a href="formsauction" class="button bid-button">Licitar</a>
                </div>
            </a>
        </div>










    </div>

</body>



@endsection
