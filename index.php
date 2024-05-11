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
                  <h3 class="font-1-xl  p-11">Magic Might</h3>
                  <span class="font-2-m c-8">R$ 2499 </span>
              </a>
            </li>

            <li>    
            <a href="">
                <img src="src\img\bicicletas\nimbus-home.jpg" alt="Bibicletas">
                <h3 class="font-1-xl  p-11">Nimbus Stark</h3>
                <span class="font-2-m c-8"> R$ 3400</span>
            </a>
            </li>
            <li>  
            <a href="">
                <img src="src\img\bicicletas\nebula-home.jpg" alt="Bibicletas">
                <h3 class="font-1-xl  p-11">Nebula Cosmic</h3>
                <span class="font-2-m c-8"> R$ 400 </span>
            </a>
            </li>
       
        </ul>
    </article>

    <article class="tecnologia-bg bg-p-11">
        <div class="tecnologia container">
            <div class="tecnologia-conteudo">
                <span class="font-2-lb c-5">Tecnologia Avançada</span>
                <h2 class="font-1-xxl w-0">você escolhe as suas cores e componentes<span class="ponto">.</span></h2>
                <p class="font-2-l c-5">Cada Bikcraft é única e possui a sua identidade. As medidas serão exatas para o seu corpo e altura, garantindo maior conforto e ergonomia na sua pedalada. Você pode também personalizar completamente as suas cores.</p>
                <a class="link" href="./bicicletas.html">Escolha um modelo</a>

            <div class="tecnologia-vantagens">
                <div>
                    <img src="src\img\icones\eletrica.svg" alt="">
                    <h3 class="font-1-m w-0">Motor Elétrico</h3>
                    <p class="font-2-s c-5">Toda Bikcraft é equipada com um motor elétrico que possui duração de até 120h. A bateria é recarregada com a sua energia gasta ao pedalar.</p>
                </div>
                <div>
                    <img src="src\img\icones\rastreador.svg" alt="">
                    <h3  class="font-1-m w-0">Rastreador</h3>
                    <p class="font-2-s c-5">Toda Bikcraft é equipada com um motor elétrico que possui duração de até 120h. A bateria é recarregada com a sua energia gasta ao pedalar.</p>
                </div>
            </div>
            </div>
            <div class="tecnologia-imagem">
                <img src="src\img\fotos\tecnologia.jpg" alt="">
            </div>
        </div>           
    </article>

    <section class="parceiros" aria-label="Nossos Parceiros">
    <h2 class="container font-1-xxl">Nossos parceiros <span class="ponto">.</span></h2>

    <ul>
        <li><img src="src\img\parceiros\caravan.svg" alt=""></li>
        <li><img src="src\img\parceiros\ranek.svg" alt=""></li>
        <li><img src="src\img\parceiros\handel.svg" alt=""></li>
        <li><img src="src\img\parceiros\dogs.svg" alt=""></li>
        <li><img src="src\img\parceiros\lescone.svg" alt=""></li>
        <li><img src="src\img\parceiros\flexblog.svg" alt=""></li>
        <li><img src="src\img\parceiros\wildbeast.svg" alt=""></li>
        <li><img src="src\img\parceiros\surfbot.svg" alt=""></li>
    </ul>

    </section>

    <script src="src\script\menu.js"></script>
</body>
</html>
