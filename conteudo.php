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
    
    <title>Conteúdo</title>
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
      
          
      
      
      <div class="container mt-3">
      
            <!-- 7.3. Cards com lista, Header e footer -->
              
        <!-- Inicio dos CARDS -->
          <br>
          <h1 class="text-center mb-5">Conteúdo:</h1>
          
              <div class="row justify-content-sm-center"> <!-- "justify-content-sm-center" centraliza, o sn eh o tamanho -->
              
                 <div class="col-sm-6 col-md-4">
                  
                     <!-- Card 1 -->
                     <div class="card mb-5 text-center">
                         <!-- Inicio do Header -->
                         <div class="card-header text-center alert alert-danger role='alert'">
                         Nº1 - TOP3
                         </div>
                         <!-- FIM do Header -->                         
                         <!-- Imagem do card -->
                         <img class="card-img-top img-fluid d-block rounded mx-auto"  src="imgs/painel1.jpg" onmouseover="this.src='imgs/interdimensional1.gif'" onmouseout="this.src='imgs/painel1.jpg'" style="width: 348px; height: 153px;">
                         <!-- Texto do card -->
                         <div class="card-body">
                             <h4 class="card-title text-center">Interdimensional Cable II</h4> <!-- titulo do card -->
                             <h6 class="card-subtitle mb-2 text-muted text-center">Ideal para adultos de todas as espécies</h6><!-- titulo do card -->
                                <p class="card-text text-center">Conheça nossa programação:</p>
                         </div>
                            <!-- List Group -->
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item text-center alert alert-danger role='alert'">Violência</li>
                                <li class="list-group-item text-center alert alert-danger role='alert'">Nudês</li>
                                <li class="list-group-item text-center alert alert-danger role='alert'">Luzes piscantes</li>
                            </ul>
                            <!-- FIM do list Group -->
                         <div class="card-body">
                                <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal1">Saiba mais</a>
                                <!-- POPOVER Javascript -->
                                <!-- "data-placement" eh onde ele vai aparecer, o "data-trigger=focus" sem ele, a ajuda fica aberta ate clicar novamente -->
                                    <a tabindex="0" class="card-link ml-4" role="button" data-toggle="popover" data-placement="right" data-trigger="focus" title="Interdimensional Cabe II" data-content="Conteúdo disponível, para maiores informações, clique no botão ao lado e Saiba mais.">Info</a>
                                
                             
                             
                             
                         </div>
                         <!-- Inicio do rodape -->
                         <div class="card-footer text-muted text-center">
                         1º em audiência no seu segmento
                         </div>
                         <!-- FIM do rodape -->
                         
                     </div>
                  
                  </div>   
                 
                  <div class="col-sm-6 col-md-4">
                  
                     <!-- Card 2 -->
                     <div class="card mb-5 text-center">
                         <!-- Inicio do Header -->
                         <div class="card-header text-center alert alert-warning role='alert'">
                         Nº2 - TOP3
                         </div>
                         <!-- FIM do Header -->  
                         <!-- Imagem do card -->
                         <img class="card-img-top rounded mx-auto d-block img-fluid d-block"  src="imgs/painel2.jpg" onmouseover="this.src='imgs/afagadores1.gif'" onmouseout="this.src='imgs/painel2.jpg'" style="width: 348px; height: 153px;">
                         <!-- Texto do card -->
                         <div class="card-body">
                         <h4 class="card-title text-center">Afagadores de Bolas</h4> <!-- titulo do card -->
                             <h6 class="card-subtitle mb-2 text-muted text-center">Ideal para adultos de todas as espécies</h6><!-- titulo do card -->
                                <p class="card-text text-center">Conheça nossa programação:</p>
                         </div>
                            <!-- List Group -->
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item text-center alert alert-danger role='alert' ">Violência</li>
                                <li class="list-group-item text-center alert alert-success role='alert' ">Humor</li>
                                <li class="list-group-item text-center alert alert-primary role='alert' ">Séries</li>
                            </ul>
                            <!-- FIM do list Group -->
                         <div class="card-body">
                                <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal2">Saiba mais</a>
                                <a tabindex="0" class="card-link ml-4" role="button" data-toggle="popover" data-placement="right" data-trigger="focus" title="Afagadores de Bolas" data-content="Conteúdo disponível, para maiores informações, clique no botão ao lado e Saiba mais.">Info</a>
                         </div>
                         <!-- Inicio do rodape -->
                         <div class="card-footer text-muted text-center">
                         1º em audiência no seu segmento
                         </div>
                         <!-- FIM do rodape -->
                     </div>
                  
                  </div>   
                 
                  <div class="col-sm-6 col-md-4">
                  
                     <!-- Card 3 -->
                     <div class="card mb-5 text-center">
                         <!-- Inicio do Header -->
                         <div class="card-header text-center alert alert-success role='alert'">
                         Nº3 - TOP3
                         </div>
                         <!-- FIM do Header -->  
                         <!-- Imagem do card -->
                         <img class="card-img-top rounded mx-auto d-block img-fluid d-block"  src="imgs/painel3.jpg" onmouseover="this.src='imgs/plumbus1.gif'" onmouseout="this.src='imgs/painel3.jpg'" style="width: 348px; height: 153px;">
                         <!-- Texto do card -->
                         <div class="card-body">
                         <h4 class="card-title text-center">Plumbus</h4> <!-- titulo do card -->
                             <h6 class="card-subtitle mb-2 text-muted text-center">Ideal para todos</h6><!-- titulo do card -->
                                <p class="card-text text-center">Conheça nossa programação:</p>
                         </div>
                            <!-- List Group -->
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item text-center alert alert-success role='alert' ">"Como eles fazem isso?"</li>
                                <li class="list-group-item text-center alert alert-success role='alert' ">Documentário</li>
                                <li class="list-group-item text-center alert alert-success role='alert' ">História</li>
                            </ul>
                            <!-- FIM do list Group -->
                         <div class="card-body">
                                <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal3">Saiba mais</a>
                                <a tabindex="0" class="card-link ml-4" role="button" data-toggle="popover" data-placement="right" data-trigger="focus" title="Plumbus" data-content="Conteúdo disponível, para maiores informações, clique no botão ao lado e Saiba mais.">Info</a>
                         </div>
                         <!-- Inicio do rodape -->
                         <div class="card-footer text-muted text-center">
                         1º em audiência no seu segmento
                         </div>
                         <!-- FIM do rodape -->
                     </div>
                  
                  </div>   
                 
              </div>      
          
          <!-- ================================================================================================================= -->
                                  
        <!-- ================================================================================================================= -->
        
        <!-- 7.2. Cards com lista -->
              
        <!-- Inicio dos CARDS -->
              
              <div class="row justify-content-sm-center"> <!-- "justify-content-sm-center" centraliza, o sn eh o tamanho -->
              
                 <div class="col-sm-6 col-md-4">
                  
                     <!-- Card 1 -->
                     <div class="card mb-5 text-center">
                         <!-- Imagem do card -->
                         <img class="card-img-top rounded mx-auto d-block img-fluid d-block"  src="imgs/painel4.jpg" onmouseover="this.src='imgs/bocadinhas1.gif'" onmouseout="this.src='imgs/painel4.jpg'" style="width: 348px; height: 153px;">
                         <!-- Texto do card -->
                         <div class="card-body">
                             <h4 class="card-title text-center">Bocadinhas</h4> <!-- titulo do card -->
                             <h6 class="card-subtitle mb-2 text-muted text-center">Ideal para quem tem boca pequena</h6><!-- titulo do card -->
                                <p class="card-text text-center">Conheça nosso restaurante:</p>
                         </div>
                            <!-- List Group -->
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item text-center">Lazaínhas</li>
                                <li class="list-group-item text-center">Camaroêszinhos</li>
                                <li class="list-group-item text-center">Hummmm... Pizzinhas</li>
                            </ul>
                            <!-- FIM do list Group -->
                         <div class="card-body">
                                <!-- Itens para chamar o modal: "data-toggle" , "data-target"=chama um conteudo pelo ID -->
                                <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal4">Saiba mais</a>
                                <a tabindex="0" class="card-link ml-4" role="button" data-toggle="popover" data-placement="right" data-trigger="focus" title="Bocadinhas" data-content="Conteúdo disponível, para maiores informações, clique no botão ao lado e Saiba mais.">Info</a>
                         </div>
                                                
                     </div>
                  
                  </div>   
                 
                  <div class="col-sm-6 col-md-4">
                  
                     <!-- Card 2 -->
                     <div class="card mb-5 text-center">
                         <!-- Imagem do card -->
                         <img class="card-img-top rounded mx-auto d-block img-fluid d-block"  src="imgs/painel5.jpg" onmouseover="this.src='imgs/cavidadesoculares1.gif'" onmouseout="this.src='imgs/painel5.jpg'" style="width: 348px; height: 153px;">
                         <!-- Texto do card -->
                         <div class="card-body">
                         <h4 class="card-title">Capitão Cavidade Ocular</h4> <!-- titulo do card -->
                             <h6 class="card-subtitle mb-2 text-muted">Ideal para seres sem cavidades oculares</h6><!-- titulo do card -->
                                <p class="card-text">Conheça suas aventuras:</p>
                         </div>
                            <!-- List Group -->
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Não coma cavidades oculares</li>
                                <li class="list-group-item">- Chega quebrando uma janela!</li>
                                <li class="list-group-item">- Te dá muita porrada!</li>
                            </ul>
                            <!-- FIM do list Group -->
                         <div class="card-body">
                                <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal5">Saiba mais</a>
                                <a tabindex="0" class="card-link ml-4" role="button" data-toggle="popover" data-placement="right" data-trigger="focus" title="Capitão Cavidades Oculares" data-content="Conteúdo disponível, para maiores informações, clique no botão ao lado e Saiba mais.">Info</a>
                         </div>
                     </div>
                  
                  </div>   
                 
                  <div class="col-sm-6 col-md-4">
                  
                     <!-- Card 3 -->
                     <div class="card mb-5 text-center">
                         <!-- Imagem do card -->
                         <img class="card-img-top rounded mx-auto d-block img-fluid d-block"  src="imgs/painel6.jpg" onmouseover="this.src='imgs/pernasdebebe1.gif'" onmouseout="this.src='imgs/painel6.jpg'" style="width: 348px; height: 153px;">
                         <!-- Texto do card -->
                         <div class="card-body">
                         <h4 class="card-title">Pernas de Bebê</h4> <!-- titulo do card -->
                             <h6 class="card-subtitle mb-2 text-muted">Ideal para todos os seres e idades</h6><!-- titulo do card -->
                                <p class="card-text">Conheça nosso seriado:</p>
                         </div>
                            <!-- List Group -->
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Engraçado</li>
                                <li class="list-group-item">Divertido</li>
                                <li class="list-group-item">Educativo</li>
                            </ul>
                            <!-- FIM do list Group -->
                         <div class="card-body">
                                <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal6">Saiba mais</a>
                                <a tabindex="0" class="card-link ml-4" role="button" data-toggle="popover" data-placement="right" data-trigger="focus" title="Pernas de Bebê" data-content="Conteúdo disponível, para maiores informações, clique no botão ao lado e Saiba mais.">Info</a>
                         </div>
                     </div>
                  
                  </div>   
                 
              </div>
        
        <!-- FIM dos CARDS -->              
              
        <!-- ================================================================================================================= -->  
        
           <!-- 7. Cards -->      
        <!-- Inicio dos CARDS -->
              
              <div class="row justify-content-sm-center"> <!-- "justify-content-sm-center" centraliza, o sn eh o tamanho -->
              
                 <div class="col-sm-6 col-md-4">
                  
                     <!-- Card 1 -->
                     <div class="card mb-5 text-center">
                         <!-- Imagem do card -->
                         <img class="card-img-top rounded mx-auto d-block img-fluid d-block"  src="imgs/painel7.jpg" onmouseover="this.src='imgs/formiga1.gif'" onmouseout="this.src='imgs/painel7.jpg'" style="width: 348px; height: 153px;">
                         <!-- Texto do card -->
                         <div class="card-body mb-0">
                             <h5 class="card-title text-center font-weight-bold">Johnson Formiga nos Meus Olhos</h5> <!-- titulo do card -->
                             <h6 class="card-subtitle mb-2 text-muted text-center">Ideal para quem gosta de um descontão</h6><!-- titulo do card -->
                                <p class="card-text">Temos todos os eletrônicos!</p>
                                <!-- Itens para chamar o modal: "data-toggle" , "data-target"=chama um conteudo pelo ID -->
                                <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal7">Saiba mais</a>
                                <a tabindex="0" class="card-link ml-4" role="button" data-toggle="popover" data-placement="right" data-trigger="focus" title="Jhonson Formiga nos Meus Olhos" data-content="Conteúdo disponível, para maiores informações, clique no botão ao lado e Saiba mais.">Info</a>
                         </div>
                     </div>
                  
                  </div>   
                 
                  <div class="col-sm-6 col-md-4">
                  
                     <!-- Card 2 -->
                     <div class="card mb-5 text-center">
                         <!-- Imagem do card -->
                         <img class="card-img-top rounded mx-auto d-block img-fluid d-block"  src="imgs/painel8.jpg" onmouseover="this.src='imgs/jam4vicent1.gif'" onmouseout="this.src='imgs/painel8.jpg'" style="width: 348px; height: 153px;">
                         <!-- Texto do card -->
                         <div class="card-body mb-1">
                         <h4 class="card-title font-weight-bold">Jan Quadrante Vicent 16</h4> <!-- titulo do card -->
                             <h6 class="card-subtitle mb-3 text-muted">Ideal para adultos</h6><!-- titulo do card -->
                                <p class="card-text mb-4">Contem: Drama, violência, nudês.</p>
                                <!-- Itens para chamar o modal: "data-toggle" , "data-target"=chama um conteudo pelo ID -->
                                <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal8">Saiba mais</a>
                                <a tabindex="0" class="card-link ml-4" role="button" data-toggle="popover" data-placement="right" data-trigger="focus" title="Jan Quadrante Vicente 16" data-content="Conteúdo disponível, para maiores informações, clique no botão ao lado e Saiba mais.">Info</a>
                         </div>
                     </div>
                  
                  </div>   
                 
                  <div class="col-sm-6 col-md-4">
                  
                     <!-- Card 3 -->
                     <div class="card mb-5 text-center">
                         <!-- Imagem do card -->
                         <img class="card-img-top rounded mx-auto d-block img-fluid d-block"  src="imgs/painel9.jpg" onmouseover="this.src='imgs/realfake1.gif'" onmouseout="this.src='imgs/painel9.jpg'" style="width: 348px; height: 153px;">
                         <!-- Texto do card -->
                         <div class="card-body mb-1">
                         <h4 class="card-title font-weight-bold">Portas Falsas de Verdade</h4> <!-- titulo do card -->
                             <h6 class="card-subtitle mb-3 text-muted">"Tá cansado de portas de verdade?"</h6><!-- titulo do card -->
                                <p class="card-text mb-4">Conheça as novas portas falsas de verdade!</p>
                                <!-- Itens para chamar o modal: "data-toggle" , "data-target"=chama um conteudo pelo ID -->
                                <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal9">Saiba mais</a>
                                <a tabindex="0" class="card-link ml-4" role="button" data-toggle="popover" data-placement="right" data-trigger="focus" title="Portas Falsas de verdade!" data-content="Conteúdo disponível, para maiores informações, clique no botão ao lado e Saiba mais.">Info</a>
                         </div>
                     </div>
                  
                  </div>   
                 
              </div>
        
        <!-- FIM dos CARDS -->              
      
      
      
  <!-- ================================================================================================================= -->  
       <!-- ================================================================================================================= -->  
      
      
              
        <!-- 8.MODAL -->
        
        <!-- INICIO do 1.MODAL -->
              
        <!-- "fade"=aparece mais devagar, id eh nos que escolhemos e o "tabindex eh excencial para o modal funciona com tabulacao de conteudo -->
        <div class="modal fade" id="siteModal1" tabindex="-1" role="dialog"> 
              
            <!-- Na classe modal, ele pode ter varios tamanhos, o padrao que eh sem comando nenhum, ou ter "modal-lg"=grande ou "modal-sm"=pequeno  -->
            <!-- Padrão: <div class="modal-dialog" role="document"> -->
            <div class="modal-dialog" role="document">
                
                <!-- A partir daqui eh o conteudo do modal, ele tem 3 tipos: "cabecalho, conteudo e rodape" -->
                <div class="modal-content">
                
                    <div class="modal-header">
                        <!-- titulo -->
                        <h3 class="moda-title">Interdimensional Cable II</h3>
                        <!-- Botao estilo Modal -->
                        <button type="button" class="close" data-dismiss="modal"> 
                            <!-- Aparencia do botao -->
                            <span>&times;</span><!-- ou coloca no lugar do "X" o codigo "&times;" que eh o padrao do windows -->
                        </button>
                    </div>
            
                    <div class="modal-body">
                    
                        <p>
                            A "Interdimensional Cable II" é uma caixa de cabo inventada por Rick que dá acesso a programas de televisão em todas as dimensões.
                        </p>    
                        <h4>História</h4>
                        <p class="text-justify">
                            Rick introduziu no episódio Rixty Minutes. É uma Box de TV a cabo que tem acesso a todos os programas de TV em todo o multiverso. A box do cabo interdimensional pode receber todos os canais de TV de todos os planetas, dimensões, universos, realidade, etc... e transmiti-los diretamente em qualquer televisão à qual esteja ligado. Rick cria anexando Xanthenite Cristalizado na caixa.
                        </p>
                        <img class="rounded mx-auto d-block img-fluid d-block" src="imgs/interdimensionalbox.jpg" style="width: 455px; height: 140px;">
                                                
                    </div>
                
                    <div class="modal-footer">
                
                        <!-- Botao padrao das classes do bootstrap -->
                        <!-- "btn btn-danger" eh a cor vermelha, e "data-dismiss" eh comando para fechar o target "modal" -->
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    
                    </div>
                </div>
                
            </div>
            
            <!-- Final do conteudo dentro do Modal -->
            
        </div>
              
        <!-- FIM do 1.MODAL -->      
              
        
        <!-- INICIO do 2.MODAL -->
              
        <!-- "fade"=aparece mais devagar, id eh nos que escolhemos e o "tabindex eh excencial para o modal funciona com tabulacao de conteudo -->
        <div class="modal fade" id="siteModal2" tabindex="-1" role="dialog"> 
              
            <!-- Na classe modal, ele pode ter varios tamanhos, o padrao que eh sem comando nenhum, ou ter "modal-lg"=grande ou "modal-sm"=pequeno  -->
            <!-- Padrão: <div class="modal-dialog" role="document"> -->
            <div class="modal-dialog modal-lg" role="document">
                
                <!-- A partir daqui eh o conteudo do modal, ele tem 3 tipos: "cabecalho, conteudo e rodape" -->
                <div class="modal-content">
                
                    <div class="modal-header">
                        <!-- titulo -->
                        <h3 class="moda-title">Afagadores de Bolas (Ball Fondlers):</h3>
                        <!-- Botao estilo Modal -->
                        <button type="button" class="close" data-dismiss="modal"> 
                            <!-- Aparencia do botao -->
                            <span>&times;</span><!-- ou coloca no lugar do "X" o codigo "&times;" que eh o padrao do windows -->
                        </button>
                    </div>
            
                    <div class="modal-body">
                    
                        <p class="text-justify">
                        "Afagadores de Bolas" é um programa de televisão sobre uma equipe de pessoas diferentes que lutam no/pelo exército. A mesma série é mostrada para arejar em diferentes dimensões e realidades. Eles parecem ser uma paródia direta do "The A-Team" e outros shows que retratam uma equipe de desajustados com seus próprios conjuntos de habilidades e personalidades específicas.
                        </p>

                        <h3>Enredo</h3>

                        <p class="text-justify">
                            Afagadores de Bolas é um show que mostra um desenho muito cru, composto de um homem usando fones de ouvido especilista em veículos, um crocodilo antropomórfico com um pirulito na boca especialista em armas e lutas, uma mulher amazona especialista com rifle de assalto e espadas, e um alto homem afro-americano fortão com duas chuquinhas no cabelo. Todas essas quatro pessoas são militares e circulam pelo mundo, combatendo outras pessoas em guerras, resgatando pessoas e protegendo o  perímetro e suas próprias vidas.                 
                        </p>
                        
                        <ul>
                            <li>Átila Starwar - O homem negro com o icônico estilo de cabelo "Ball Fondlers".</li>
                            <li>Benjamin - Um homem de aparência bizarra com fones de ouvido.</li>
                            <li>Fulgora - Uma mulher amazona.</li>
                            <li>Loggins - Um homem parecido com um crocodilo.</li>
                        </ul>
                        
                        <img class="rounded mx-auto d-block img-fluid d-block" src="imgs/afagadoresgrupo.jpg" style="width: 400px; height: 400px;">
                        <br>
                        
                        <h3>História:</h3>
                        
                        <p class="text-justify">
                            "Afagadores de Bolas" apareceu pela primeira vez no episódio "Rixty Minutes" como um dos muitos shows que Rick mostrou ao resto da família Smith em seu aparelho de televisão interdimensional. Rick estava orgulhoso de apresentá-los porque ele realmente amava esse show e era extremamente popular em todos os tipos de diferentes dimensões. Summer e Morty eventualmente ficaram muito intrigados e atraídos para os fãs do programa.
                        </p>
                        <p class="text-justify">
                            Rick foi visto por um breve período assistindo ao filme "Fondlers" no episódio "Something Ricked This Way Comes", pouco antes de Summer entrar para contar sobre sua separação com o Sr. Indispensável e a perda de seu emprego.
                        </p>
                        <p class="text-justify">
                            Foi revelado que Afagadores de Bolas foi ao ar na outra dimensão, como foi visto na TV em outra dimensão no episódio "Mortynight Run", onde estava na TV pendurada na oficina de Gearhead. Morty estava admirado, observando enquanto esperava que a Nave de Rick fosse consertado.
                        </p>
                        <p class="text-justify">
                            No início do episódio "The Ricks Must Be Crazy", Rick, Summer e Morty viajaram para uma realidade alternativa, na qual a linha do tempo era diferente e o "Ball Fondlers" era ainda mais popular do que o deles, dando ao filme um maior orçamento e melhores valores de produção. Eles foram vistos saindo dos cinemas depois de assistir a um longa-metragem que foi surpreendente para Summer, observando que era PG-13.
                        </p>
                        <p class="text-justify">
                            Em Rick e Morty, número 6, os "Ball Fondlers" entram nas selvas da América Central e tentam salvar um senador dos Estados Unidos de um exército rebelde hostil.
                        </p>
                        
                    </div>
                
                    <div class="modal-footer">
                
                        <!-- Botao padrao das classes do bootstrap -->
                        <!-- "btn btn-danger" eh a cor vermelha, e "data-dismiss" eh comando para fechar o target "modal" -->
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    
                    </div>
                </div>
                
            </div>
            
            <!-- Final do conteudo dentro do Modal -->
            
        </div>          
              
        <!-- FIM do 2.MODAL -->      
              
        
        <!-- INICIO do 3.MODAL -->
              
        <!-- "fade"=aparece mais devagar, id eh nos que escolhemos e o "tabindex eh excencial para o modal funciona com tabulacao de conteudo -->
        <div class="modal fade" id="siteModal3" tabindex="-1" role="dialog"> 
              
            <!-- Na classe modal, ele pode ter varios tamanhos, o padrao que eh sem comando nenhum, ou ter "modal-lg"=grande ou "modal-sm"=pequeno  -->
            <!-- Padrão: <div class="modal-dialog" role="document"> -->
            <div class="modal-dialog modal-lg" role="document">
                
                <!-- A partir daqui eh o conteudo do modal, ele tem 3 tipos: "cabecalho, conteudo e rodape" -->
                <div class="modal-content">
                
                    <div class="modal-header">
                        <!-- titulo -->
                        <h1 class="moda-title">Plumbus</h1>
                        <!-- Botao estilo Modal -->
                        <button type="button" class="close" data-dismiss="modal"> 
                            <!-- Aparencia do botao -->
                            <span>&times;</span><!-- ou coloca no lugar do "X" o codigo "&times;" que eh o padrao do windows -->
                        </button>
                    </div>
            
                    <div class="modal-body">
                    
                        <!-- BODY COM VARIAS COLUNAS para exibir conteudo diferente -->
                        
                        <div class="modal-fluid">
                        
                            <!-- Criando uma tabela para divir -->
                            <div class="row">
                            
                                <!-- dividir em duas colunas, o valor eh 6 para cada, porque o maximo do BT4 eh 12 -->
                                
                                <!-- 1 coluna -->
                                <div class="col-4">
                                    
                                    <h5 class="font-weight-bold">O que se sabe sobre o Plumbus:</h5>
                                <p class="text-justify">
                                Um Plumbus é um dispositivo doméstico para todos os fins. Todo mundo sabe o que faz, então não há razão para explicá-lo. Foi exibido pela primeira vez no episódio "Interdimensional Cable 2: Tempting Fate", onde foi visto duas vezes na TV Interdimensional. Primeiro, quando o Roupinho roubou um do local de trabalho e novamente em um episódio de "How They Do It", que mostra aos espectadores como os plumbus são feitos. É descrito como um item doméstico comum e de escritório que também é usado como peça de destaque em uma sala. De acordo com o Roupinho, os Plumbus valem seis "Brapples" e meio.
                                </p>
                                </div>
                                
                                <!-- 2 coluna -->
                                <div class="col-4">                                                                    
                                <h5 class="font-weight-bold">Manual oficial:</h5>
                                <p class="text-justify">
                                Segundo o manual oficial do plumbus, o mesmo é usado para tudo, des de limpeza doméstica, fritar ovos (comida), e até mesmo como marido. Portanto se entende que o Plumbus pode ser usado para tudo. Segundo ainda o manual oficial, as peças podem ser vendidas separadamente para reposição.
                                </p>
                                    
                                <img class="rounded mx-auto d-block img-fluid d-block" src="imgs/manualplumbus5.jpg" style="width: 250px; height: 300px;">    
                                </div>
                                
                                <!-- 3 coluna -->
                                <div class="col-4">                                    
                                <h5 class="font-weight-bold">Como é feito?</h5>
                                <p class="text-justify">
                                Hoje no como eles fazem isso: Plumbus!<br>
                                Todos tem um Plumbus em casa.<br>
                                Primeiro, eles pegam o jinglebop e amaciam com um monte de Shilim. O Shilim é então reaproveitado para lotes futuros.
                                Eles pegam o jinglebop e passam pelo grumbo, onde o fleeb é esfregado nele. É importante que o fleeb seja esfregado, porque é no fleeb que tem todo o suco de fleeb.<br>
                                Ai aparece um shilami e ele esfrega e cospe nele. Eles cortam o fleeb, há muitos rizards no caminho. Os plenfs são esfregados nos shumbles e os plubis e grumbus são retirados, e assim temos um bom e velho plumbus... 
                                </p>                                
                                </div>
                                
                            </div>
                        
                        </div>
                                                                        
                    </div>
                
                    <div class="modal-footer">
                
                        <!-- Botao padrao das classes do bootstrap -->
                        <!-- "btn btn-danger" eh a cor vermelha, e "data-dismiss" eh comando para fechar o target "modal" -->
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    
                    </div>
                </div>
                
            </div>
            
            <!-- FIM do 3.MODAL -->  
            
        </div>            
          
          <!-- INICIO do 4.MODAL -->
              
        <!-- "fade"=aparece mais devagar, id eh nos que escolhemos e o "tabindex eh excencial para o modal funciona com tabulacao de conteudo -->
        <div class="modal fade" id="siteModal4" tabindex="-1" role="dialog"> 
              
            <!-- Na classe modal, ele pode ter varios tamanhos, o padrao que eh sem comando nenhum, ou ter "modal-lg"=grande ou "modal-sm"=pequeno  -->
            <!-- Padrão: <div class="modal-dialog" role="document"> -->
            <div class="modal-dialog" role="document">
                
                <!-- A partir daqui eh o conteudo do modal, ele tem 3 tipos: "cabecalho, conteudo e rodape" -->
                <div class="modal-content">
                
                    <div class="modal-header">
                        <!-- titulo -->
                        <h3 class="moda-title">Bocadinhas</h3>
                        <!-- Botao estilo Modal -->
                        <button type="button" class="close" data-dismiss="modal"> 
                            <!-- Aparencia do botao -->
                            <span>&times;</span><!-- ou coloca no lugar do "X" o codigo "&times;" que eh o padrao do windows -->
                        </button>
                    </div>
            
                    <div class="modal-body">
                    
                        <p class="text-justify">
                            <cite title="Source Title" class="font-weight-bold">“Temos lazaínhas, pizzinhas, tortinhas. Mmm! Ovinhos fritos! Ow CACETE... temos até pessoaszinhas!"</cite></p>
                                                
                        <img class="rounded mx-auto d-block img-fluid d-block" src="imgs/bocadinhasimage2.jpg" style="width: 350px; height: 196px;">
                        
                        <br>
                        <p class="text-justify">
                            Bocadinhas é um restaurante exibido em um comercial da "Interdimensional Cable" 2: Tempting Fate. O tema principal do Bocadinhas é que tudo no menu é extremamente minúsculo, destinado a pessoas com bocas minúsculas. Todos mostrados no comercial tem grandes cabeças esféricas com pequenas características faciais. Em uma cena deletada, Rick diz que ele comeu lá e acha que a coisa toda é uma fachada para que o dono possa assediar as pessoas no banheiro.
                        </p>
                        <img class="rounded mx-auto d-block img-fluid d-block" src="imgs/bocadinhasimage.jpg" style="width: 350px; height: 196px;">
                                                
                    </div>
                
                    <div class="modal-footer">
                
                        <!-- Botao padrao das classes do bootstrap -->
                        <!-- "btn btn-danger" eh a cor vermelha, e "data-dismiss" eh comando para fechar o target "modal" -->
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    
                    </div>
                </div>
                
            </div>
            
            <!-- Final do conteudo dentro do Modal -->
            
        </div>
          
          <!-- FIM do 4.MODAL -->  
          
          
          <!-- INICIO do 5.MODAL -->
              
        <!-- "fade"=aparece mais devagar, id eh nos que escolhemos e o "tabindex eh excencial para o modal funciona com tabulacao de conteudo -->
        <div class="modal fade" id="siteModal5" tabindex="-1" role="dialog"> 
              
            <!-- Na classe modal, ele pode ter varios tamanhos, o padrao que eh sem comando nenhum, ou ter "modal-lg"=grande ou "modal-sm"=pequeno  -->
            <!-- Padrão: <div class="modal-dialog" role="document"> -->
            <div class="modal-dialog modal-lg" role="document">
                
                <!-- A partir daqui eh o conteudo do modal, ele tem 3 tipos: "cabecalho, conteudo e rodape" -->
                <div class="modal-content">
                
                    <div class="modal-header">
                        <!-- titulo -->
                        <h3 class="moda-title">Capitão Cavidade Ocular</h3>
                        <!-- Botao estilo Modal -->
                        <button type="button" class="close" data-dismiss="modal"> 
                            <!-- Aparencia do botao -->
                            <span>&times;</span><!-- ou coloca no lugar do "X" o codigo "&times;" que eh o padrao do windows -->
                        </button>
                    </div>
            
                    <div class="modal-body">
                    
                         
                        <h4>História</h4>
                        <p class="text-justify">
                            <cite title="Source Title" class="font-weight-bold">Eu sou o Capitão Cavidade Ocular! Eu sou o único que tem permissão para ter Cavidades Oculares!</cite>
                            <br><br>
                            <img class="rounded mx-auto d-block img-fluid d-block" src="imgs/cco2.jpg" style="width: 350px; height: 196px;">
                            
                            <p class="text-justify">
                                Capitão Cavidade Ocular é um alienígena vestido de colam que usa um megafone, sua existência consiste em espancar qualquer um que seja apanhado com "Cavidades Oculares" de cereais. Ele é caracterizado em vários comerciais por toda a galáxia, como mostrado no episódio Interdimensional Cable 2: Tempting Fate. Ele afirma que só ele pode ter Cavidades Oculares. Rick Sanchez diz a Morty Smith para não ser pego com uma caixa de Cavidades Oculares quando o Capitão Cavidade Ocular estiver por perto, ou então ele vai começar a espancá-lo para pegar sua caixa de Cavidades Oculares de volta.
                            </p>
                            <p class="text-justify">
                                <cite title="Source Title" class="font-weight-bold">"Tem que tomar cuidado Morty, se aquele cara te pega com uma caixa de Cavidades Oculares, chegando detonando uma jenela e te da porrada! Mas vale o risco, eles derretem na boca! São deliciosos!"</cite>
                            </p>
                            <p class="text-justify">
                                Jerry Smith é mais tarde atacado pelo Capitão Cavidade Ocular na cena pós-créditos enquanto tenta roubar a caixa de Cavidades Oculares de Rick no seu armário. Enquanto Summer Smith e Morty tentam tirar o Capitão Cavidade Ocular de Jerry, Rick repreende Jerry por abrir a parte dele do armario e pegar a caixa de Cavidades, enquanto Morty pergunta por que ele ainda tinha uma caixa de Cavidades Oculares.
                        </p>
                        
                        <img class="rounded mx-auto d-block img-fluid d-block" src="imgs/ceo3.jpg" style="width: 350px; height: 196px;">
                                                
                    </div>
                
                    <div class="modal-footer">
                
                        <!-- Botao padrao das classes do bootstrap -->
                        <!-- "btn btn-danger" eh a cor vermelha, e "data-dismiss" eh comando para fechar o target "modal" -->
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    
                    </div>
                </div>
                
            </div>
            
            <!-- Final do conteudo dentro do Modal -->
            
        </div>
          <!-- FIM do 5.MODAL -->  
          
          <!-- INICIO do 6.MODAL -->
              
        <!-- "fade"=aparece mais devagar, id eh nos que escolhemos e o "tabindex eh excencial para o modal funciona com tabulacao de conteudo -->
        <div class="modal fade" id="siteModal6" tabindex="-1" role="dialog"> 
              
            <!-- Na classe modal, ele pode ter varios tamanhos, o padrao que eh sem comando nenhum, ou ter "modal-lg"=grande ou "modal-sm"=pequeno  -->
            <!-- Padrão: <div class="modal-dialog" role="document"> -->
            <div class="modal-dialog modal-lg" role="document">
                
                <!-- A partir daqui eh o conteudo do modal, ele tem 3 tipos: "cabecalho, conteudo e rodape" -->
                <div class="modal-content">
                
                    <div class="modal-header">
                        <!-- titulo -->
                        <h3 class="moda-title">Pernas de Bebê</h3>
                        <!-- Botao estilo Modal -->
                        <button type="button" class="close" data-dismiss="modal"> 
                            <!-- Aparencia do botao -->
                            <span>&times;</span><!-- ou coloca no lugar do "X" o codigo "&times;" que eh o padrao do windows -->
                        </button>
                    </div>
            
                    <div class="modal-body">
                    
                        <h4>História</h4>
                        <p class="text-justify">
                            Pernas de Bebê é uma personagem que apareceu em Rixty Minutes. Trata-se de um detetive de uma série de TV, que desvenda mistérios de assassinatos em uma dimensão alternativa, apresentando ele e um parceiro chamado Pernas Normais. Pernas de Bebe é um adulto maduro com as pernas de bebê. Ele tem uma voz aguda e nasal.
                        </p>
                        
                        <img class="rounded mx-auto d-block img-fluid d-block" src="imgs/pernasdebebe1.jpg" style="width: 350px; height: 196px;">
                        <br>
                        
                        <h4>Biografia</h4>
                        <p class="text-justify">
                        No episódio mostrado, Pernas de Bebê é dito ser um bom detetive, mas não é bom o suficiente por causa de suas pernas de bebê. Ele ganha um parceiro chamado Pernas Normais, ficando infeliz. Os dois são enviados para a captura de um criminoso que o Pernas de Bebê segue até um depósito. Quando o criminoso corre, Pernas de Bebê tenta persegui-lo, mas é lento e cai devido a suas pernas de bebê. Ele diz que aprendeu uma lição valiosa e o Pernas Normais persegue o criminoso, o pegando. Ambos recebem elogios de seu Capitão da Polícia antes de dizer a ambos para "Cair fora daqui".
                        </p>
                        
                        <img class="rounded mx-auto d-block img-fluid d-block" src="imgs/pernasdebebe3.jpg" style="width: 350px; height: 196px;">
                        <br>
                        
                        <p class="text-justify">
                        Pernas de Bebê tem a parte superior do corpo de um adulto maduro e a parte inferior do corpo de um bebê. Suas pernas são incrivelmente curtas em proporção ao resto de seu corpo. Ele tem cabelo penteado cinza escuro com uma listra cinza mais clara perto de sua têmpora, sobrancelhas cinza escuro e algumas falhas. Ele veste uma camisa bege com gravata escura e coldres de ombro marrom. Seu cinto combina com seus coldres de arma. Ele usa uma fralda e não usa sapatos.
                        </p>
                        
                        <img class="rounded mx-auto d-block img-fluid d-block" src="imgs/pernasdebebe2.jpg" style="width: 350px; height: 196px;">
                        <br>
                        
                        <p class="text-justify">
                        Pernas de Bebê é mostrado como um bom detetive de polícia, rastreando um assassino até um armazém, enquanto o Pernas Normais não conseguiu, e está bastante ciente de quão bom ele é. Ele costumava ser teimoso e que ele não precisa de um parceiro com pernas normais para compensar suas pernas de bebê, mas aprende ao perseguir o assassino que suas pernas de bebê, na verdade, limitá-o. Ele aceita Pernas Normais como seu parceiro depois de aprender essa lição.
                        </p>
                                                
                        <img class="rounded mx-auto d-block img-fluid d-block" src="imgs/pernasdebebe4.jpg" style="width: 350px; height: 196px;">
                                                
                    </div>
                
                    <div class="modal-footer">
                
                        <!-- Botao padrao das classes do bootstrap -->
                        <!-- "btn btn-danger" eh a cor vermelha, e "data-dismiss" eh comando para fechar o target "modal" -->
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    
                    </div>
                </div>
                
            </div>
            
            <!-- Final do conteudo dentro do Modal -->
          </div>
            
            <!-- FIM do 6.MODAL -->  
            
            
            <!-- INICIO do 7.MODAL -->
              
        <!-- "fade"=aparece mais devagar, id eh nos que escolhemos e o "tabindex eh excencial para o modal funciona com tabulacao de conteudo -->
        <div class="modal fade" id="siteModal7" tabindex="-1" role="dialog"> 
              
            <!-- Na classe modal, ele pode ter varios tamanhos, o padrao que eh sem comando nenhum, ou ter "modal-lg"=grande ou "modal-sm"=pequeno  -->
            <!-- Padrão: <div class="modal-dialog" role="document"> -->
            <div class="modal-dialog" role="document">
                
                <!-- A partir daqui eh o conteudo do modal, ele tem 3 tipos: "cabecalho, conteudo e rodape" -->
                <div class="modal-content">
                
                    <div class="modal-header">
                        <!-- titulo -->
                        <h3 class="moda-title">Johnson Formiga nos Meus Olhos</h3>
                        <!-- Botao estilo Modal -->
                        <button type="button" class="close" data-dismiss="modal"> 
                            <!-- Aparencia do botao -->
                            <span>&times;</span><!-- ou coloca no lugar do "X" o codigo "&times;" que eh o padrao do windows -->
                        </button>
                    </div>
            
                    <div class="modal-body">
                    
                        <cite title="Source Title" class="font-weight-bold">"Eu sou Johnson Formiga nos Meus Olhos, tu está preto, não consigo ver nada, e também não sinto nada!”</cite>
                        <br><br>                                                
                        <h4>Aparição</h4>
                        <p class="text-justify">
                        Johnson Formiga nos Meus Olhos é o dono de uma loja que aparece em um comercial da Rixty Minutes para sua loja de eletrônicos.
                        </p>
                        <img class="rounded mx-auto d-block img-fluid d-block" src="imgs/ants2.jpg" style="width: 350px; height: 196px;">
                        <br>
                        <h4>Trivialidades</h4>
                        <p class="text-justify">
                        Como dito, Johnson Formiga nos Meus Olhos não consegue ver nem sentir nada. Seu comercial termina com ele pegando fogo em sua loja, mas ninguém o ajuda. Seu destino é atualmente desconhecido.
                        </p>  
                        <img class="rounded mx-auto d-block img-fluid d-block" src="imgs/ants1.jpg" style="width: 350px; height: 196px;">
                        <br>
                        <p class="text-justify">
                        Sua loja vende TVs, microondas e rádios, entre outras coisas, como anunciado em seu comercial. No entanto, ele não pode dizer qual é a maioria dos itens.
                        Sem o conhecimento dele, a maioria dos objetos que ele vende são gratuitos.
                        Johnson Formiga nos Meus Olhos sofre de uma condição neurológica que não permite que ele veja ou sinta.
                        </p>
                        
                                                
                    </div>
                
                    <div class="modal-footer">
                
                        <!-- Botao padrao das classes do bootstrap -->
                        <!-- "btn btn-danger" eh a cor vermelha, e "data-dismiss" eh comando para fechar o target "modal" -->
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    
                    </div>
                </div>
                
            </div>
            
            <!-- Final do conteudo dentro do Modal -->
            
          </div>
            
            <!-- FIM do 7.MODAL -->  
            
            
                 <!-- INICIO do 8.MODAL -->
              
        <!-- "fade"=aparece mais devagar, id eh nos que escolhemos e o "tabindex eh excencial para o modal funciona com tabulacao de conteudo -->
        <div class="modal fade" id="siteModal8" tabindex="-1" role="dialog"> 
              
            <!-- Na classe modal, ele pode ter varios tamanhos, o padrao que eh sem comando nenhum, ou ter "modal-lg"=grande ou "modal-sm"=pequeno  -->
            <!-- Padrão: <div class="modal-dialog" role="document"> -->
            <div class="modal-dialog" role="document">
                
                <!-- A partir daqui eh o conteudo do modal, ele tem 3 tipos: "cabecalho, conteudo e rodape" -->
                <div class="modal-content">
                
                    <div class="modal-header">
                        <!-- titulo -->
                        <h3 class="moda-title">Jan Quadrant Vincent 16</h3>
                        <!-- Botao estilo Modal -->
                        <button type="button" class="close" data-dismiss="modal"> 
                            <!-- Aparencia do botao -->
                            <span>&times;</span><!-- ou coloca no lugar do "X" o codigo "&times;" que eh o padrao do windows -->
                        </button>
                    </div>
            
                    <div class="modal-body">
                        <cite title="Source Title" class="font-weight-bold">"Chamando todos os Jan Michael Vicents! Chamando todos os Jan Michael Vicents!”</cite>
                        <br><br>
                        <img class="rounded mx-auto d-block img-fluid d-block" src="imgs/jan4vicent1.jpg" style="width: 350px; height: 196px;">
                        <br>    
                        <h4>História</h4>
                        <p class="text-justify">
                        Em um mundo devastado onde existe 8 Jan Michael Vincents. Em 16 quadrantes, só há tempo suficiente para 1 Jan Michael Vicent chegar a um quadrante, ele não pode estar em dois quadrantes ao mesmo tempo. Jan Michael Vicents são usados, descartados.<br>
                        Em Janeiro, a única esperança surge... é hora de Michaelar os seus Vicents.
                        </p>
                        <img class="rounded mx-auto d-block img-fluid d-block" src="imgs/jan4vicent2.jpg" style="width: 350px; height: 196px;">
                        <br>
                        <h4>Aparição:</h4>
                        <p class="text-justify">
                        Jan Quadrant Vincent 16 é um filme que existe em uma dimensão alternativa estrelada por Jan Michael Vincent. O trailer do filme foi exibido no episódio "Interdimensional Cable 2: Tempting Fate".
                        </p>
                        <img class="rounded mx-auto d-block img-fluid d-block" src="imgs/jan4vicent3.jpg" style="width: 350px; height: 196px;">
                                                
                    </div>
                
                    <div class="modal-footer">
                
                        <!-- Botao padrao das classes do bootstrap -->
                        <!-- "btn btn-danger" eh a cor vermelha, e "data-dismiss" eh comando para fechar o target "modal" -->
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    
                    </div>
                </div>
                
            </div>
            
            <!-- Final do conteudo dentro do Modal -->
            
          </div>
            
            <!-- FIM do 8.MODAL -->  
            
            
            <!-- INICIO do 9.MODAL -->
              
        <!-- "fade"=aparece mais devagar, id eh nos que escolhemos e o "tabindex eh excencial para o modal funciona com tabulacao de conteudo -->
        <div class="modal fade" id="siteModal9" tabindex="-1" role="dialog"> 
              
            <!-- Na classe modal, ele pode ter varios tamanhos, o padrao que eh sem comando nenhum, ou ter "modal-lg"=grande ou "modal-sm"=pequeno  -->
            <!-- Padrão: <div class="modal-dialog" role="document"> -->
            <div class="modal-dialog" role="document">
                
                <!-- A partir daqui eh o conteudo do modal, ele tem 3 tipos: "cabecalho, conteudo e rodape" -->
                <div class="modal-content">
                
                    <div class="modal-header">
                        <!-- titulo -->
                        <h3 class="moda-title">Portas Falsas de Verdade</h3>
                        <!-- Botao estilo Modal -->
                        <button type="button" class="close" data-dismiss="modal"> 
                            <!-- Aparencia do botao -->
                            <span>&times;</span><!-- ou coloca no lugar do "X" o codigo "&times;" que eh o padrao do windows -->
                        </button>
                    </div>
            
                    <div class="modal-body">
                    
                        <cite title="Source Title" class="font-weight-bold">"Hey, tá cansado de portas de verdade bagunçando a sua casa, quando você as abre, elas dão mesmo para algum lugar, pra algum outro cômodo? Conheças novas portas falsas de verdade, encha um quarto inteiro com elas!”</cite>
                        <br><br> 
                        <img class="rounded mx-auto d-block img-fluid d-block" src="imgs/portasfalsas1.jpg" style="width: 350px; height: 196px;">
                        <br>
                        <h4>História</h4>
                        <p class="text-justify">
                            O Portas Falsas de Verdade é um personagem que apareceu em Rixty Minutes. Ele é um ser interdimensional que vende portas falsas em uma empresa que tem tudo a ver com portas que não abrem nem levam a lugar nenhum. O comercial então vai até ele saindo do estúdio, ficando preso no trânsito e dirigindo para casa. Ele faz um sanduíche e revela que o verdadeiro comercial de portas falsas ainda está em curso quando ele se muda para a mesma sala em que ele começou. Ele então diz para ligar e pedir portas falsas reais, então diz: "Nem mesmo hesite" "Nem se preocupe" "É bom pensar duas vezes", "Com o que você está preocupado? venha pegar PORTAS FALSAS!" "Entre aqui rápido... Saia mais rápido, com um monte de portas falsas em seus braços."
                        </p>
                                                                        
                    </div>
                
                    <div class="modal-footer">
                
                        <!-- Botao padrao das classes do bootstrap -->
                        <!-- "btn btn-danger" eh a cor vermelha, e "data-dismiss" eh comando para fechar o target "modal" -->
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    
                    </div>
                </div>
                
            </div>
            
            <!-- Final do conteudo dentro do Modal -->
            
          </div>
            
            <!-- FIM do 2.MODAL -->  
            
                      
    <!-- FIM do container -->
            </div>
          
        <!-- FIM do 3.MODAL -->
              
        <!-- FIM dos MODAL -->
      
      
      
      
      
      
      
      
      
      
      
      <!-- ================================================================================================================= -->
                  <!-- ================================================================================================================= -->
      
             <!-- RODAPE VERDADEIRO -->
            
            <hr class="mb-0">
            <div class="jumbotron jumbotron-fluid mb-0 mt-0" style='background-color:#dff1ffff;'>
                
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