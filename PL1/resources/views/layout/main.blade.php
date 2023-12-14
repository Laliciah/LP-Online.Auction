<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>

.logo {
  max-width: 50px; /* ajuste o tamanho máximo do logotipo conforme necessário */
  margin-right: 10px;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #FFFFFF;
  position: fixed;
  top: 0;
  width: 100%;
}

li {
  float: right;
}

li a {
  display: block;
  color: black;
  text-align: center;
  padding: 4px 12px;
  text-decoration: none;
  margin-left: 10px;
  margin: 2px 20px; /* Espaço entre os links */
}

li a:hover {
  background-color: #add8e6;

}

div{
  padding: 60px 10px;
}

.rodape {
  background-color: #333;
  color: white;
  text-align: center;
  padding: 10px 0;
  position: fixed;
  bottom: 0;
  width: 100%;
}


</style>
</head>
<body>
    <header>
        
            <nav>
                <ul>
                <a href="/">
                      <img src="img/xtouraleiloes.jpg" class="logo" alt="Logo"/>
                </a>
                    <li><a href="contactos">Contactos</a></li>
                    <li><a href="sobrenos">Sobre Nós</a></li>
                    <li><a href="licitar">Licitar</a></li>
                    <li><a href="obras">Obras</a></li>
                    <li><a href="paginainicial">Página Inicial</a></li>
                </ul>
            </nav>
        
    </header>



  <div class="rodape">
      <p>&copy; 2023 Sua Empresa. Todos os direitos reservados.</p>
  </div>



  @yield('content')
  

  @yield('footer')

    </body>
</html>