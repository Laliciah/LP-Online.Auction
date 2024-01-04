<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

/* Style the navigation bar: Beginning */
    .topnav {
    list-style-type: none;
    position: -webkit-sticky;
    position: sticky;
    overflow: hidden;
    background-color: white;
    }

/* Style the navigation bar: End */

/* Style the navigation bar links: Beginnign */
    .topnav a {
    float: left;
    display: block;
    color: black;
    text-align: center;
    padding: 40px 16px;
    text-decoration: none;
    }
    .logo {
    max-width: 80px;
    margin-right: 10px;
    }

    /* Change color on hover */
    .topnav a:hover {
    background-color: #ddd;
    color: black;
    }

    @media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}
/* Style the navigation bar links: End */

/* Footer: Beginnig */
    .footer {
    background-color: #363636;
        color: white;
        height: auto;
        width: 100%;
        font-size: 14px;
        font-family: helvetica;
    }

    .footer a{
        text-decoration: none;
        color: white;
    }
    .footer p{
        margin-bottom: 5px;
    }
    .footer-div{
        display: flex;
        flex-wrap: wrap;
        width:100%;
        margin: auto;
        align-items: stretch;
        padding: 60px 10px 40px 10px;
    }
    .footer-div-1, .footer-div-2, .footer-div-3, .footer-div-4{
        display: flex;
        width: calc(100% / 4 - 20px);
        padding: 10px;
    }
    .footer span{
        font-size: 20px;
        color: white;
    }
    .footer-direitos{
        width: calc(100% - 20px);
        background-color: black;
        padding: 10px;
        margin: 0px;
        text-align: center;
    }
    /*mobile*/
    @media (max-width: 768px) {
        .footer-div-1, .footer-div-2, .footer-div-3, .footer-div-4{
            width: calc(50% - 20px);
            padding: 10px;
        }
        .footer-div{
            padding: 60px 0px 40px 0px;
        }
    }

/* Footer: End */

</style>
</head>
<body>


<!-- Navigation bar: Beginning-->
    <div class="topnav">
        <img src="/img/LogotipoXtoura.jpg" class="logo" alt="Logo">
        <a href="teste" style="float:right">Cadastrar</a>
        <a href="sobre" style="float:right">Sobre Nós</a>
        <a href="formsauction" style="float:right">Licitar</a>
        <a href="obras" style="float:right">Obras</a>
        <a href="/" style="float:right">Página Inicial</a>

    </div>
<!-- Navigation bar: End -->


@yield('content')


<!-- Footer: Beginning -->


    <footer class="footer" id="contato">
        <div class="footer-div">

            <div class="footer-div-1">
                <div class="footer-div-1-coluna">
                    <!-- elemento -->
                            <img src="/img/LogotipoXtoura.jpg" class="logo" alt="Logo">
                   
                </div>
            </div>

            <div class="footer-div-3">
                <div class="footer-div-3-coluna">
                    <!-- elemento -->
                    <span><b>Localização</b></span>
                    <p>1570 Broadway New York NY US 10036</p>
                </div>
            </div>

            <div class="footer-div-2">
                <div class="footer-div-2-coluna">
                    <!-- elemento -->
                    <span><b>Contatos</b></span>
                    <p>contato@Xtoura.pt</p>
                    <p>555-555-5555</p>
                </div>
            </div>

        

        </div>
        <p class="footer-direitos">Copyright © 2023 – Todos os Direitos Reservados.</p>
    </footer>

<!-- Footer: End -->

</body>
</html>
