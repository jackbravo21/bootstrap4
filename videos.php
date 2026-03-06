<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS (chamando bootstrap local)-->
    <link rel="stylesheet" href="node_modules/bootstrap/copiler/bootstrap.css">
    <!-- CSS Style criado por mim (chamando local)-->
    <link rel="stylesheet" href="style/css/style.css">
      <!-- Font Awesome -->
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="node_modules/font-awesome_baixado/css/fontawesome.css">  
    <link rel="stylesheet" href="node_modules/font-awesome_baixado/css/solid.css">
      
    <!-- Font Awesome FUNCIONAL -->  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">  
  
 
    <!-- script para "popover" funcionar -->  
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    
    <title>Vídeos</title>
  </head>
  <body class="bg" style='background-color:#F0FFFF;' >
      
      <!-- ================================================================================================================= -->      
      
      <!-- 1.NAVBAR -->
      
  <!-- classes "navbar" -->
  <!-- o navbar-expand-lg = vai exibir o navbar expandido do tamanho lg, pode ser "sm", ou "mg" -->
  <!-- navbar-light = vai me dar as cores com cinza escuro para me dar contraste no bg-light = cinza claro do background do navbar  -->
      
      <!-- Esse era o original -->
      <!-- <nav class="navbar navbar-expand-lg navbar-light bg-gradient-light" > --> <!-- se mudar o bg-"valor", muda o fundo da barra -->
        <!-- ou -->  
      <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-light" style="background-color:#dff1ffff; "> <!-- #e3f2fd; --> 
          <!-- navbar-fixed-top = deixa a barra navbar fixa no topo, coloca-se depois do 1º navbar -->
      
        <!-- coloco tudo dentro do container, para poder deixar mais central -->
        <div class="container">
          
          <!-- navbar-band = que eh o nome destaque do lado esquerdo do navbar -->
            <a class="navbar-brand h1 mb-0" href="../index.php">JackBravo21</a>   <!-- mb=margem bottom -->
          <!-- botao clicavel do navbar recolhivel -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <!-- dentro desse button vai um icone -->
                <span class="navbar-toggle-icon"></span>                  
                </button>
                <!-- criar o conteudo do navbar -->
              <div class="collapse navbar-collapse" id="navbarSite"> <!-- id= tem que ser o mesmo do data-target -->
              <!-- dentro dessa div eu vou criar uma lista que vao ser chamados pelo navbar -->
                  <ul class="navbar-nav mr-auto"> <!-- "mr"= margem right (alinhamento), "ml"= margem left (alinhamento) -->
                    <!-- itens -->
                    <li class="nav-item">
                        <!-- ml-2 = margem left com espacamento 2 da esquerda -->
                        <a class="nav-link ml-2" href="index.php">Principal</a> 
                    <li class="nav-item">
                        <a class="nav-link" href="atuacao.php">Atuação</a>
                    <li class="nav-item">
                        <a class="nav-link" href="conteudo.php">Conteúdo</a>
                    <li class="nav-item">
                        <a class="nav-link" href="videos.php">Vídeos</a>
                    <li class="nav-item">
                        <a class="nav-link" href="formulario.php">Formulário</a>
                    <li class="nav-item">
                        <a class="nav-link" href="menus.php">Menus</a>    

                      </li>

                  </ul>      
                  
              
                  <!-- isso vai me dar a essa ul alinhado para a direita -->
                  <ul class="navbar-nav ml-auto">
                      
                      <!-- lista com menu dropdown dentro -->
                      <li class="nav-item dropdown">
                      
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">
                                Social
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="https://www.facebook.com/" target="_blanck">Facebook</a>
                                <a class="dropdown-item" href="https://twitter.com/" target="_blanck">Twitter</a>
                                <a class="dropdown-item" href="https://www.instagram.com/?hl=pt-br">Instagram</a>
                            </div>
                          
                      </li>                                    
                      
                  </ul>

                                  
                  
                  <!-- barra de busca -->
                  <form class="form-inline">
                    <!-- ml = tamanho da margem a esquerda, mr = tamanho da margem a direita -->
                    <input class="form-control ml-3 mr-2" type="search" placeholder="Buscar..."> 
                  <!-- botao (btn-default fica transparente) -->  
                    <button class="btn btn-dark" type="Submit">OK</button>   
                  </form>

                  
                  <!-- isso vai me dar a essa ul alinhado para a direita -->
                  <ul class="navbar-nav ml-auto">
                      
                      <!-- lista com menu dropdown dentro -->
                      <li class="nav-item dropdown">
                      
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">
                                Idioma
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"><img src="imgs/br.jpg"> Português</a>
                                <a class="dropdown-item" href="#"><img src="imgs/in.jpg"> English</a>
                                <a class="dropdown-item" href="#"><img src="imgs/es.jpg"> Español</a>
                                <a class="dropdown-item" href="#"><img src="imgs/it.jpg"> Italiano</a>
                                <a class="dropdown-item" href="#"><img src="imgs/al.jpg"> Alienigena</a>
                            </div>
                          
                      </li>                                    
                      
                  </ul>                  
                  
                  
              </div>

        </div>    
                
      </nav>
      
      <!-- FIM do Navbar -->
      
      <!-- ================================================================================================================= -->
      
      <!-- 2.CARROCEL -->
      <!-- Formado por 4 partes: "imagens, caption=texto na frente da imagem, indicadores=mostra qual imagem, controles=botoes -->
      
      <div id="carouselSite" class="carousel slide" data-ride="carousel">
          
          <!-- ================================================================================================================= -->
          
          <!-- 4.CONTROLE_Central -->
          <!-- Inicio do CONTROLE central dos Slides -->
          
          <!-- Necessita criar uma lista -->
          <ol class="carousel-indicators">
              <!-- e coloco o nome do id que eu defini "id carouselSite", "data-slide-to" eu atrelo ao slide que ele for -->
            <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
            <li data-target="#carouselSite" data-slide-to="1"></li>
            <li data-target="#carouselSite" data-slide-to="2"></li>
            <li data-target="#carouselSite" data-slide-to="3"></li>
            <li data-target="#carouselSite" data-slide-to="4"></li>
            <li data-target="#carouselSite" data-slide-to="5"></li>
            <li data-target="#carouselSite" data-slide-to="6"></li>
            <li data-target="#carouselSite" data-slide-to="7"></li>
            <li data-target="#carouselSite" data-slide-to="8"></li>
            <li data-target="#carouselSite" data-slide-to="9"></li>
            <li data-target="#carouselSite" data-slide-to="10"></li>
            <li data-target="#carouselSite" data-slide-to="11"></li>
            <li data-target="#carouselSite" data-slide-to="12"></li>
            <li data-target="#carouselSite" data-slide-to="13"></li>
            <li data-target="#carouselSite" data-slide-to="14"></li>
          </ol>
                    
          <!-- FIM do controle central dos Slides -->
          
          <!-- ================================================================================================================= -->
          
       <!-- Imagens que vao rodar, itens do carousel -->
        <div class="carousel-inner active">
                <!-- active define qual vai comecar a rodar -->
                <div class="carousel-item active">
                    <!-- Colocar as imagens -->
<!-- class="img-fluid (faz a imagem ocupar todo o espaco da div), d-block (faz com a imagem apareca em todas as resolucoes de tela, ocupando todo o espaco horizontalmente)" -->
                    <img src="imgs/painel1_.jpg" class="img-fluid d-block">
                    
                    <!-- ================================================================================================================= -->
                    <!-- 5.Textos dos slides -->
                    <!-- Inicio dos textos  -->
                    
                    <!-- "d-none" eh para o texto nao quebrar, "d-nd-block" faz ele nao exibir nos tamanhos menores que md, text-dark=texto preto -->
                    <div class="carousel-caption d-none d-md-block text-dark">
                    
                        <!--
                        <h1 class="bg-secondary text-white">TV Interdimensional</h1>
                        <p class="lead bg-secondary text-white">O melhor da TV através das dimensões!</p>
                        -->

                        <h1><flex row class="bg-dark text-primary">TV Interdimensional</flex></h1><br>
                        <flex row class="lead bg-dark mr-0 ml-0 text-primary">O melhor da TV através das dimensões!</flex>
                    
                    
                    </div>
                    
                    <!-- FIM dos textos -->
                    <!-- ================================================================================================================= -->
                    
                </div>
            
                <div class="carousel-item">
                    <img src="imgs/painel2_.jpg" class="img-fluid d-block">
            
                    <!-- ================================================================================================================= -->
                    <!-- 5.Textos dos slides -->
                    <!-- Inicio dos textos  -->
                    
                    <div class="carousel-caption d-none d-md-block text-dark">
                    
                        <h1><flex row class="bg-dark text-primary">Afagadores de Bolas</flex></h1><br>
                        <fex row class="lead bg-dark text-primary">Um clássico de ação!</fex>
                    
                    </div>
                    
                    <!-- FIM dos textos -->
                    <!-- ================================================================================================================= -->
            
            
                </div>    
            
                <div class="carousel-item">    
                    <img src="imgs/painel3_.jpg" class="img-fluid d-block">
                
                    <!-- ================================================================================================================= -->
                    <!-- 5.Textos dos slides -->
                    <!-- Inicio dos textos  -->
                    
                    <div class="carousel-caption d-none d-md-block text-dark">
                    
                        <h1><flex row class="bg-dark text-primary">Plumbus</flex></h1><br>
                        <fex row class="lead bg-dark text-primary">Todo mundo tem um plumbus em casa!</fex>
                    
                    </div>
                    
                    <!-- FIM dos textos -->
                    <!-- ================================================================================================================= -->           
            
                </div>    
                <div class="carousel-item">    
                    <img src="imgs/painel4_.jpg" class="img-fluid d-block">
                
                    <!-- ================================================================================================================= -->
                    <!-- 5.Textos dos slides -->
                    <!-- Inicio dos textos  -->
                    
                    <div class="carousel-caption d-none d-md-block text-dark">
                    
                        <h1><flex row class="bg-dark text-primary">Bocadinhas</flex></h1><br>
                        <fex row class="lead bg-dark text-primary">Você tem boca pequena? Bocadinhas!</fex>
                    
                    </div>
                    
                    <!-- FIM dos textos -->
                    <!-- ================================================================================================================= -->           
            
                </div>    
            
            <div class="carousel-item">    
                    <img src="imgs/painel5_.jpg" class="img-fluid d-block">
                
                    <!-- ================================================================================================================= -->
                    <!-- 5.Textos dos slides -->
                    <!-- Inicio dos textos  -->
                    
                    <div class="carousel-caption d-none d-md-block text-dark">
                    
                        <h1><flex row class="bg-dark text-primary">Cavidades Oculares</flex></h1><br>
                        <fex row class="lead bg-dark text-primary">As Incriveis Aventuras do Capitão Cavidade Ocular!</fex>
                    
                    </div>
                    
                    <!-- FIM dos textos -->
                    <!-- ================================================================================================================= -->           
            
                </div>    
            
            <div class="carousel-item">    
                    <img src="imgs/painel6_.jpg" class="img-fluid d-block">
                
                    <!-- ================================================================================================================= -->
                    <!-- 5.Textos dos slides -->
                    <!-- Inicio dos textos  -->
                    
                    <div class="carousel-caption d-none d-md-block text-dark">
                    
                        <h1><flex row class="bg-dark text-primary">Pernas de bebe</flex></h1><br>
                        <fex row class="lead bg-dark text-primary">Agora o agente Pernas de Bebe ganhará um parceiro com pernas normais!</fex>
                    
                    </div>
                    
                    <!-- FIM dos textos -->
                    <!-- ================================================================================================================= -->           
            
                </div>    
            
            <div class="carousel-item">    
                    <img src="imgs/painel7_.jpg" class="img-fluid d-block">
                
                    <!-- ================================================================================================================= -->
                    <!-- 5.Textos dos slides -->
                    <!-- Inicio dos textos  -->
                    
                    <div class="carousel-caption d-none d-md-block text-dark">
                    
                        <h1><flex row class="bg-dark text-primary">Johnson Formiga nos meus olhos</flex></h1><br>
                        <fex row class="lead bg-dark text-primary">Porque vc nunca mais verá um vendedor da mesma maneira!</fex>
                    
                    </div>
                    
                    <!-- FIM dos textos -->
                    <!-- ================================================================================================================= -->           
            
                </div>    
            
            <div class="carousel-item">    
                    <img src="imgs/painel8_.jpg" class="img-fluid d-block">
                
                    <!-- ================================================================================================================= -->
                    <!-- 5.Textos dos slides -->
                    <!-- Inicio dos textos  -->
                    
                    <div class="carousel-caption d-none d-md-block text-dark">
                    
                        <h1><flex row class="bg-dark text-primary">Jan Quadrante 16 Vincent</flex></h1><br>
                        <fex row class="lead bg-dark text-primary">Porque ele nao pode estar em dois quadrantes ao mesmo tempo!</fex>
                    
                    </div>
                    
                    <!-- FIM dos textos -->
                    <!-- ================================================================================================================= -->           
            
                </div>    
            
            <div class="carousel-item">    
                    <img src="imgs/painel9_.jpg" class="img-fluid d-block">
                
                    <!-- ================================================================================================================= -->
                    <!-- 5.Textos dos slides -->
                    <!-- Inicio dos textos  -->
                    
                    <div class="carousel-caption d-none d-md-block text-dark">
                    
                        <h1><flex row class="bg-dark text-primary">Portas falsas de verdade</flex></h1><br>
                        <fex row class="lead bg-dark text-primary">Para você que não pretende ir a lugar nenhum!</fex>
                    
                    </div>
                    
                    <!-- FIM dos textos -->
                    <!-- ================================================================================================================= -->           
            
                </div>    
            
            <div class="carousel-item">    
                    <img src="imgs/painel10_.jpg" class="img-fluid d-block">
                
                    <!-- ================================================================================================================= -->
                    <!-- 5.Textos dos slides -->
                    <!-- Inicio dos textos  -->
                    
                    <div class="carousel-caption d-none d-md-block text-dark">
                    
                        <h1><flex row class="bg-dark text-primary">As Aventuras de Roupinho</flex></h1><br>
                        <fex row class="lead bg-dark text-primary">O ladrão mais famoso, agora tem seu próprio programa!</fex>
                    
                    </div>
                    
                    <!-- FIM dos textos -->
                    <!-- ================================================================================================================= -->           
            
                </div>    
            
            <div class="carousel-item">    
                    <img src="imgs/painel11_.jpg" class="img-fluid d-block">
                
                    <!-- ================================================================================================================= -->
                    <!-- 5.Textos dos slides -->
                    <!-- Inicio dos textos  -->
                    
                    <div class="carousel-caption d-none d-md-block text-dark">
                    
                        <h1><flex row class="bg-dark text-primary">Blip and Chitz</flex></h1><br>
                        <fex row class="lead bg-dark text-primary">Nós temos chabos, flobos, e você pode atirar nas coisas!</fex>
                    
                    </div>
                    
                    <!-- FIM dos textos -->
                    <!-- ================================================================================================================= -->           
            
                </div>    
            
            <div class="carousel-item">    
                    <img src="imgs/painel12_.jpg" class="img-fluid d-block">
                
                    <!-- ================================================================================================================= -->
                    <!-- 5.Textos dos slides -->
                    <!-- Inicio dos textos  -->
                    
                    <div class="carousel-caption d-none d-md-block text-dark">
                    
                        <h1><flex row class="bg-dark text-primary">Alien Invasion</flex></h1><br>
                        <fex row class="lead bg-dark text-primary">Dois irmãos contra um armada mexicana e velinhas guerreiras.</fex>
                    
                    </div>
                    
                    <!-- FIM dos textos -->
                    <!-- ================================================================================================================= -->           
            
                </div>    
            
            <div class="carousel-item">    
                    <img src="imgs/painel13_.jpg" class="img-fluid d-block">
                
                    <!-- ================================================================================================================= -->
                    <!-- 5.Textos dos slides -->
                    <!-- Inicio dos textos  -->
                    
                    <div class="carousel-caption d-none d-md-block text-dark">
                    
                        <h1><flex row class="bg-dark text-primary">Homem VS Carros</flex></h1><br>
                        <fex row class="lead bg-dark text-primary">Quem vencerá essa baralha até a morte?</fex>
                    
                    </div>
                    
                    <!-- FIM dos textos -->
                    <!-- ================================================================================================================= -->           
            
                </div>    
            
            <div class="carousel-item">    
                    <img src="imgs/painel14_.jpg" class="img-fluid d-block">
                
                    <!-- ================================================================================================================= -->
                    <!-- 5.Textos dos slides -->
                    <!-- Inicio dos textos  -->
                    
                    <div class="carousel-caption d-none d-md-block text-dark">
                    
                        <h1><flex row class="bg-dark text-primary">Floquinhos de Morango</flex></h1><br>
                        <fex row class="lead bg-dark text-primary">Jhonnys Cartola agora terá que escapar.</fex>
                    
                    </div>
                    
                    <!-- FIM dos textos -->
                    <!-- ================================================================================================================= -->           
            
                </div>    
            
        </div>
        <!-- FIM do Carrocel de imagens -->
          
          <!-- ================================================================================================================= -->
          
          <!-- inicio do segundo bloco de conteudo do carrocel -->
          
          <!-- 3.BOTOES -->
          
          <!-- carousel-control-prev = faz ir para tras, #carouselSite=vai o id do carousel criado, prev=anterior -->
          <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
                <!-- Volta -->
                <span class="carousel-control-prev-icon"></span><!-- icone -->
                <span class="sr-only">Anterior</span>
          </a>
                <!-- avanca -->
          <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="sr-only">Avancçar</span>          
          </a>
          
      </div>     

        <!-- FIM dos botoes -->
            
        <!-- ================================================================================================================= -->
      <!-- ================================================================================================================= -->
      
      
      
   
      
      
      
      
       <!-- 9.JUMBOTRON -->
              
        <!-- Inicio do dos Junbotron -->
              
              <div class="jumbotron jumbotron-fluid mt-5">
              
                  <div class="container">
                      
                      <!-- linha -->
                      <div class="row">
                      
                        <div class="col-12 text-center">
                          
                            <!-- "i class" eh o icone de camera -->
                            <h1 class="display-4"><i class="fas fa-video text-primary"></i> Área dos videos:
                            <img class="img-top"  src="imgs/filmadora1.png" onmouseover="this.src='imgs/filmadora.gif'" onmouseout="this.src='imgs/filmadora1.png'"></h1>
                            <p class="lead">
                            Aqui você pode ver uma amostra de alguns programas.
                            </p>
                            <hr>
                            
                        </div>
                      
                      </div>
                  
                    <!-- Menu de navegacao -->
                    <div class="col-12">
                                          
                        <ul class="nav nav-pills justify-content-center mb-4" id="pills-nav" role="tablist"><!-- nav-pills=botoes -->
                            
                            <!-- itens do Menu -->
                            <li class="nav-item">
                                <a class="nav-link active" id="nav-pills-01" data-toggle="pill" href="#nav-item-01">Plumbus</a>
                            </li>        
                            <li class="nav-item">
                                <a class="nav-link" id="nav-pills-02" data-toggle="pill" href="#nav-item-02">Pernas de Bebê</a>
                            </li>                        
                            <li class="nav-item">
                                <a class="nav-link" id="nav-pills-03" data-toggle="pill" href="#nav-item-03">Jan 4 Vicent</a>
                            </li>                        
                            <li class="nav-item">
                                <a class="nav-link" id="nav-pills-04" data-toggle="pill" href="#nav-item-04">Bocadinhas</a>
                            </li>                        
                            <li class="nav-item">
                                <a class="nav-link" id="nav-pills-04" data-toggle="pill" href="#nav-item-05">Afagadores de Bolas</a>
                            </li>                        
                            <li class="nav-item">
                                <a class="nav-link" id="nav-pills-04" data-toggle="pill" href="#nav-item-06">Cap Cavidade Ocular</a>
                            </li>                        
                        
                        
                        </ul>  
                      
                        <div class="tab-content" id="nav-pills-content">
                                
                            <!-- ============================"VIDEO_1"============================================== -->
                            
                            <div class="tab-pane fade show active" id="nav-item-01" role="tabpanel"><!-- Fade=efeito de exibicao -->
                            
                                    <div class="row">
                                    
                                        <div class="col-sm-6">
                                        
                                            <!-- EMBED do Youtube / 16by9 eh o tamanho do video -->
                                            <div class="embed-responsive embed-responsive-16by9">
                                                    <iframe class="embed-responsive" src="https://www.youtube.com/embed/UY2fNDcADXE"></iframe>
                                            
                                            </div>
                                        
                                        </div>
                                        
                                        <div class="col-sm-6">
                                            
                                            <h1>Plumbus:</h1>
                                            <p class="text-justify">
                                                Todos tem um Plumbus em casa.
                                                Primeiro, eles pegam o jinglebop e amaciam com um monte de Shilim. O Shilim é então reaproveitado para lotes futuros.
                                                Eles pegam o jinglebop e passam pelo grumbo onde o fleeb é esfregado nele. É importante que o fleeb seja esfregado, porque é no fleeb que tem todo o suco de fleeb.
                                                Ai aparece um shilami e ele esfrega e cospe nele. Eles cortam o fleeb, há muitos rizards no caminho. Os plenfs são esfregados nos shumbles e os plubis e grumbus são retirados, e assim temos um bom e velho plumbus...
                                            </p>
                                        
                                        </div>
                            
                                    </div>
                                    
                             </div>
                            
                             <!-- ============================"VIDEO_2"============================================== -->
                            
                                <div class="tab-pane fade" id="nav-item-02" role="tabpanel">
                            
                                   <div class="row">
                                    
                                        <div class="col-sm-6">
                                        
                                            <!-- EMBED do Youtube / 16by9 eh o tamanho do video -->
                                            <div class="embed-responsive embed-responsive-16by9">
                                                    <iframe class="embed-responsive" src="https://www.youtube.com/embed/-o0Qp5J_Oo8"></iframe>
                                            
                                            </div>
                                        
                                        </div>
                                        
                                        <div class="col-sm-6">
                                            
                                            <h1>Pernas de Bebê</h1>
                                            <p class="text-justify">
                                                Um agente com pernas de bebê irá aprontar todas, tentando pegar os bandidos com suas pernas de bebê, mas agora ele terá ajuda, o pernas normais!
                                            </p>
                                        
                                        </div>
                            
                                    </div>
                            
                                </div>
                            
                                <!-- ========================="VIDEO_3"================================================= -->
                            
                                <div class="tab-pane fade" id="nav-item-03" role="tabpanel">
                            
                                        <div class="row">
                                    
                                        <div class="col-sm-6">
                                        
                                            <!-- EMBED do Youtube / 16by9 eh o tamanho do video -->
                                            <div class="embed-responsive embed-responsive-16by9">
                                                    <iframe class="embed-responsive" src="https://www.youtube.com/embed/nLB4dU3Yc6M"></iframe>
                                            
                                            </div>
                                        
                                        </div>
                                        
                                        <div class="col-sm-6">
                                        
                                            <h1>Jan Michael Vicent</h1>
                                            <p class="text-justify">
                                                In this summer, you need the Jan Michael Vicent!
                                            </p>
                                        
                                        </div>
                            
                                    </div>
                            
                                </div>
                            <!-- ============================"VIDEO_4"============================================== -->
                            
                                <div class="tab-pane fade" id="nav-item-04" role="tabpanel">
                            
                                   <div class="row">
                                    
                                        <div class="col-sm-6">
                                        
                                            <!-- EMBED do Youtube / 16by9 eh o tamanho do video -->
                                            <div class="embed-responsive embed-responsive-16by9">
                                                    <iframe class="embed-responsive" src="https://www.youtube.com/embed/ppOQy5eeenA"></iframe>
                                            
                                            </div>
                                        
                                        </div>
                                        
                                        <div class="col-sm-6">
                                            
                                            <h1>Bocadinhas</h1>
                                            <p class="text-justify">
                                                Não deixe de comer no Sr. Bocadinhas (Bocadiiiinhaaaas), porém cuidado com os banheiros.<br>
                                                Nota: Me incomoda muito aquele garçom encoxando o Sr. Bocadinhas (Bocadiiiinhaaaas) o tempo todo.
                                            </p>
                                        
                                        </div>
                            
                                    </div>
                            
                                </div>
                            
                                <!-- ========================="VIDEO_4"================================================= -->
                            
                            <!-- ============================"VIDEO_5"============================================== -->
                            
                                <div class="tab-pane fade" id="nav-item-05" role="tabpanel">
                            
                                   <div class="row">
                                    
                                        <div class="col-sm-6">
                                        
                                            <!-- EMBED do Youtube / 16by9 eh o tamanho do video -->
                                            <div class="embed-responsive embed-responsive-16by9">
                                                    <iframe class="embed-responsive" src="https://www.youtube.com/embed/N3zA1f9Zro0"></iframe>
                                            
                                            </div>
                                        
                                        </div>
                                        
                                        <div class="col-sm-6">
                                            
                                            <h1>Afagadores de bolas</h1>
                                            <p class="text-justify">
                                                "Afagadores de Bolas" é um programa de televisão sobre uma equipe de pessoas diferentes que lutam no/pelo exército. A mesma série é mostrada para arejar em diferentes dimensões e realidades. Eles parecem ser uma paródia direta do "The A-Team" e outros shows que retratam uma equipe de desajustados com seus próprios conjuntos de habilidades e personalidades específicas. 
                                            </p>
                                        
                                        </div>
                            
                                    </div>
                            
                                </div>
                            
                                <!-- ========================="VIDEO_5"================================================= -->
                             <!-- ============================"VIDEO_5"============================================== -->
                            
                                <div class="tab-pane fade" id="nav-item-06" role="tabpanel">
                            
                                   <div class="row">
                                    
                                        <div class="col-sm-6">
                                        
                                            <!-- EMBED do Youtube / 16by9 eh o tamanho do video -->
                                            <div class="embed-responsive embed-responsive-16by9">
                                                    <iframe class="embed-responsive" src="https://www.youtube.com/embed/C2WIvJUBbJw"></iframe>
                                            
                                            </div>
                                        
                                        </div>
                                        
                                        <div class="col-sm-6">
                                            
                                            <h1>Capitão Cavidade Ocular</h1>
                                            <p class="text-justify">
                                                Eu sou o Capitão Cavidade Ocular, se você tiver cavidades oculares eu vou entrar na sua casa arrebentando sua janela e te dando porrada!
                                            </p>
                                        
                                        </div>
                            
                                    </div>
                            
                                </div>
                            
                                <!-- ========================="VIDEO_5"================================================= -->
                            
                        </div>  
                      
                  </div>
              
              </div>
                  
            </div>
              
        <!-- FIM dos Junbotron -->
      
      
      
      
      
      
      
      
      
      
      
      <!-- ================================================================================================================= -->
                  <!-- ================================================================================================================= -->
      
            <!-- RODAPE VERDADEIRO -->
            
            
            <hr class="mb-0">
            <div class="jumbotron jumbotron-fluid mb-0 mt-3" style='background-color:#dff1ffff;'>
                
                <div class="container">
                
                <div class="row-0">
      
                                
                    <h4><p class="text-center text-muted"><em>Este é um site fictício, nada deste conteúdo existe ou pode ser comprado aqui.
                        <br>
                        Apenas as imagens são do desenho "Rick N Morty", conteúdo do canal "Adult Swing".
                        <br>
                        Todo o restante do conteúdo é de propriedade deste site, como imagens das engrenagens, cameras, avião de papel, etc... criadas por mim.
                        </em></p></h4>
                    
                
                </div>
                
                </div>
                
            </div>
                
            
            <!-- FIM DO RODAPE VERDADEIRO -->
            
            <!-- ================================================================================================================= -->
      
            
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS (caminhos locais)-->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/pooper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    
    <!-- Java Script do botao Ajuda da linha 1058 -->
    <script>
        
        $(document).ready(function(){
        $('[data-toggle="popover"]').popover();   
        });
  
    </script>  
      
  </body>
</html>