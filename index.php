<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>Bikcraft - Bicicletas Elétricas</title>
    <link rel="stylesheet" href="src\css\style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <header id="header-bg">          
        <div class="header container">
            <a id="logo" href=""><img src="src\img\bikcraft.svg" alt="Logo"></a>
            <nav id="nav" aria-label="primaria">
                <button id="btn-mobile" area-expanded="false">
                    <span id="hamburguer"></span>
                </button>
                <ul class="menu">
                    <li><a href="bicicleta">Bicicleta</a></li>
                    <li><a href="formacao">Seguros</a></li>
                    <li><a href="contato">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="introducao-bg">
        <div class="introducao container">
            <div class="introducao-conteudo">
                <h1 class="texto-grande">Bicicletas feitas sob medida<span class="ponto">.</span></h1>
                <p class="texto-medio">
                Bicicletas elétricas de alta precisão e qualidade, feitas sob medida para o cliente. Explore o mundo na sua velocidade com a Bikcraft.
                </p>
                <a href="./bicicletas.html" class="botao">Escolha a sua</a>
            </div>           
                <img src="src\img\fotos\introducao.jpg" alt="Bicicleta elétrica preta"></img>         
        </div>
    </main>

    <article class="bicicletas-lista">
        <h2 class="font-1-xxl">Escolha a sua <span class="ponto">.</span></h2>

        <ul>
            <li>
              <a href="">
                  <img src="src\img\bicicletas\magic-home.jpg" alt="Bibicletas">
                  <h3 class="texto-grande p-11">Magic Might</h3>
                  <span class="font-2-m c-8">RS 2499 </span>
              </a>
            </li>

            <li>    
            <a href="">
                <img src="src\img\bicicletas\nimbus-home.jpg" alt="Bibicletas">
                <h3 class="texto-grande p-11">Nimbus Stark</h3>
                <span class="font-2-m c-8"> R$ 3400</span>
            </a>
            </li>
            <li>  
            <a href="">
                <img src="src\img\bicicletas\nebula-home.jpg" alt="Bibicletas">
                <h3 class="texto-grande p-11">Nebula Cosmic</h3>
                <span class="font-2-m c-8"> R$ 400 </span>
            </a>
            </li>
       
        </ul>
    </article>

    <script src="src\script\menu.js"></script>
</body>
</html>