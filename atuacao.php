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
    
    <title>Atuação</title>
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
      
      
      
      
      
      
      
            
      <!-- 6.ScroolSpy -->
      <!-- Inicio do ScroolSpy -->
    <div class="container bg-white">
        
      <div class="container mt-5">
          
                    
          <h1 class="text-center mb-4">Atuação em Planetas:</h1>
          
          <div class="row mb-5"> <!-- "mb-5" eh o MARGEM BOTTOM tamanho 5 -->
                <!-- o "col-3" eh o tamanho de quantas colunas ele vai ocupar, as colunas do BS4 ja pre definidas -->
                <div class="col-sn-6 col-md-4 mb-3"> <!-- ou col-3 ou col-md-4, mb-3 eh a margem -->
                    <!-- id=nomedado, "navbar-light" porque eu quero o texto escuro, e "bg-light" eu quero que o background seja cinza claro -->
                    <nav id="navbarVertical" class="navbar navbar-light bg-light">
                        <!-- TITULO NAV, "nav-pills" eh o estilo, e "flex columm" eh para ser na vertical -->
                        <nav class="nav nav-pills flex-sm-column">
                            <!-- itens/links "tem que colocar o "#" do ID para funcionar -->
                            <a class="nav-link my-2" href="#item1">1.Terra</a>  <!-- "my-2"=margem top --> 
                                <!-- Sub-titulo -->
                                <nav class="nav nav-pills flex-columm">
                                    <!-- #item1-1 para organizar -->
                                    <a class="nav-link ml-3" href="#item1-1">1.1.Parte 1</a> <!-- "ml-3"=espacamento -->
                                    <a class="nav-link ml-3" href="#item1-2">1.2.Parte 2</a> <!-- "ml-3"=espacamento -->      
                                </nav>    
                            
                            <a class="nav-link my-2" href="#item2">2.Bird World</a> <!-- "my-2"=margem top --> 
                            <a class="nav-link my-2" href="#item3">3.Gazorpazorp</a> <!-- "my-2"=margem top --> 
                            <a class="nav-link my-2" href="#item4">4.Planeta Squanch</a>
                            <a class="nav-link my-2" href="#item5">5.Plutão</a>
                            <a class="nav-link my-2" href="#item6">6.Gear World</a>
                                                
                         </nav>
                    
                    </nav>
              
                </div>
              
                    <!-- Inicio do Conteudo do site -->
                <div class="col-sn-6 col-md-8 mb-3"> <!-- ou col-9 ou col-md-8, mb-3 eh a margem -->
                                                                    <!-- Crio a classe "scrollspysite" no arquivo CSS -->
                    <div data-spy="scroll" data-target="#navbarVertical" data-offset="0" class="scrollspySite">
                    <!-- Agora vou colocar todo o conteudo que quero uma rolagem -->
                    <!-- titulo com um ID -->
                    <h4 class="bg-white" id="item1">1.Terra</h4>
                    <p class="bg-white text-justify">
                        The Earth first appeared in the Pilot episode, where Rick took Morty for a flight and told him that he planted a Neutrino bomb on the face of the Earth and planned on using it to destroy the entire world with it and the recreate it, getting an all new fresh start with the world. He told Morty that they would also take Jessica with them, so that he could wipe out the entire human race and have Morty and Jessica repopulate the Earth. Morty quickly disagreed and forced Rick to land the space cruiser. Rick called off the plan and then landed, only for him to quickly O.D., activating the neutrino bomb, and causing the entire world to shake. Morty moaned in horror and the scene cut to the theme song. Obviously, the world was not destroyed as it was clearly seen in perfectly good tact and all humans were alive for the rest of the series.
                        <br>
                        The Earth's next appearance where it had a significant role with the plot of the episode, was in the episode Lawnmower Dog, where dogs took over the world and enslaved the entire human race. This was all until Rick and Morty returned home and when Snuffles saw Morty, he remembered him as the only human who treated him with respect and then he agreed to let the humans have their world back, while they left to go to live in their own personal dimension.
                    </p>    
                    <h5 class="bg-white" id="item1-1">1.1.Parte 1</h5>
                    <p class="bg-white text-justify">
                        In the episode Rick Potion #9, Rick made a love potion that got wildly out of hand, causing everyone in the entire world to mutate over into horrible creatures called Cronenbergs. The entire human race (excluding everyone blood-related to them) was mutated and Rick was too lazy to fix it, so instead, he and Morty just left Dimension C-137 and went to a replacement dimension, where alternate versions of himself and Morty did fix the problem and conveniently died soon after, so Rick and Morty quickly buried their dead bodies and took their places in life, living on this new version of Earth, which was so ridiculously identical to their own planet, that there was no reason to acknowledge it's difference ever again.
                        <br>
                        In the episode Get Schwifty, the Earth was transported to an alternate dimension known as the Cromulon Dimension, where they were confronted by a bunch of Cromulons who were watching them. They were then featured on a TV show called Planet Music, where a bunch of planets would be in a competition and the races on those planets would have to make a hit song. All of the planets, except for the winner would be vaporized out of existence. Rick and Morty entered the song Head Bent Over, and eventually won the competition, having earth teleported back to their currently unnamed replacement dimension, where it belongs.
                    </p>
                    <h5 class="bg-white" id="item1-2">1.2.Parte 2</h5>
                    <p class="bg-white text-justify">
                        In the episode The Wedding Squanchers, Intergalactic Jurisdiction found out about all of the crimes that Rick had been causing and The Smith Family had to evacuate the planet, knowing that they would be searching all over the Earth for him. They had to live on a new Earth-like planet, that was outside of Federal Jurisdiction. They eventually came across a dwarf planet called Dwarf Terrace-9, which was like an extremely tiny version of Earth with all of its features, except for Africa. Rick soon realized that it was unfair to make the rest of the family suffer for the crimes that only he committed and so he went to an intergalactic bar, called Intergalactic Jurisdiction, passing himself off as Jerry and telling on himself, and asking to have his family brought safely back to Earth. His plan worked, but when the Smiths came home, Earth was overpopulated by alien tourists. Ever since news got out about Rick's criminal history, Earth became a lot more popular around the galaxy and it had officially become a tourist attraction for alien races capable of interstellar travel.
                        <br>
                        By the time of The Rickshank Rickdemption, Earth is still occupied by the Galactic Federation. Jerry now works at an unknown occupation while Beth has lost her job as a horse surgeon due to the Federation's advanced medical knowledge. Despite the presence of aliens, the Smith family lives a semi-comfortable life on a pill-centric diet provided by a robotic butler named Conroy. Eventually however, through deception and cunning, Rick escapes from prison, rescues his grandchildren from the Citadel of Ricks and sends the Galactic economy into free-fall, causing the Federation to collapse on itself and resulting in the various alien races abandoning Earth. According to Summer, the surviving humans have started drawing and quartering any aliens unfortunate enough to remain.
                        <br>
                        As of Rickmancing the Stone, life on Earth seems to have more-or-less returned to normal. 
                    </p>
                        
                    <!-- Fim do primeiro item -->    
                    
                         
                    <h5 class="bg-white" id="item2">2.Bird World</h5>
                    <p class="bg-white text-justify">
                        Bird World is the planet where Birdperson lives. TV-signals from Earth take 20 years to reach this planet, meaning it's 20 light-years away from Earth.
                        <br>
                        It was first mentioned in the episode Ricksy Business, but it first appeared in the episode Get Schwifty. It was seen in Get Schwifty when Morty used Rick's Portal gun, cycling through dimensions until Birdperson took him in and charged the Portal Gun.
                        <br>
                        Bird People live in wooden structures often incorporated into trees, but do possess technology like TV. They primarily eats worms and have worm ranches around on the planet. When sending messages they tend to use robotic eggs with hologram messages. In Bird culture, mate-melding is the equivalent of marriage on Earth.   
                    </p>                     
                        
                        
                        
                    <h5 class="bg-white" id="item3">3.Gazorpazorp</h5>

                        <p class="bg-white text-justify">
                        Gazorpazorp is a planet in the Andromeda Galaxy.
                        <br>
                        As a result of conflicts, the two genders divided. While the females flourished and advanced, the males became primitive. The females created incubation sex robots in order to continue the growth of their race without having to procreate with males, retrieving them once the males finish copulation. Summer and Rick were forced into visiting the homeworld after a sex doll, bought by Rick at an interplanetary Pawn Shop, gave birth to Morty Jr.. In the end, however, they leave the planet, avoiding death by trial.
                        <br>
                        Gazorpians are large humanoid figures with six hands. They have two sets attached to their shoulders and waists as well as a pair on their head. It is revealed that both humanoids and animals have the trend of hands in place of their ears. Gazorpians, both male and female, age faster than human beings. It is seen that males have a neutral color of red skin while females have variations of yellow and orange.
                        <br>
                        The government is a matriarchy, with Ma-Sha as their leader. Their motto seems to be the Latin phrase "Sis Semper Calumniam" which roughly translates as "You're always slandering". They govern the planet from their utopian society underground, separated from the male part of the species. The men have no saying in the politics on this planet.
                        <br>
                        A common greeting among female Gazorpians is "I'm here if you need to talk.", while it is assumed the male Gazorpians merely grunt at each other.
                        <br>
                        Gazorpazorp's surface is a dusty and barren desert, covered with orange/red sand and few bushes. Large cliffs and mountains are found throughout the planet. The wasteland is littered with broken sex robots.
                        <br>
                        In a different timeline where the females didn't seperate themselves from the males; Gazorpian television features a show called "Gazorpazorpfield" whose eponymous protagonist resembles Earth's Garfield. It was also mentioned that their Lorenzo Music is still alive.
                        <br>
                        In this timeline, they also established the e-commerce marketplace "Gazorpazorpazon" (Gazorpian version of Amazon). One of its managers was interviewed on the intergalactic radio podcast 1% Visible.  
                    </p>
                    
                    <h5 class="bg-white" id="item4">4.Planeta Squanch</h5>
                    <p class="bg-white text-justify">
                        Planet Squanch is a planet that appeared in the episode The Wedding Squanchers. It is the planet where Squanchy comes from and it is 6,000 light years away from Earth.
                        <br>
                        Everything seen on Planet Squanch is either undisturbed nature or houses of inhabitants. These houses greatly resemble playing racks meant for cats with ladders, different levels and toys on strings.
                        <br>
                        The planet's ground is covered with red grass. A native plant on this planet is a succulent-like plant called "suckulents", which will suck out a human's blood in seconds flat.
                        <br>
                        Birdperson and Tammy, for unknown reasons, decided to hold their wedding on this planet. They invited a large group of friends and acquaintances to this special occasion, all of which were criminals in the eyes of the Galactic Federation. The Smith Family attended the wedding against Rick's wishes. Squanchy wed Birdperson and Tammy on a beach before a setting star.
                        <br>
                        Later at the wedding reception, Tammy exposed herself as an undercover agent for the Galactic Federation and shot Birdperson before Gromflomites crashed in through the roof and raided the event. The ensuing shootout killed most of the guests, with Squanchy's fate unknown. The Smith family managed to escape in a flying catering van.  
                    </p>

                    <!-- Subtitulo -->
                    <h5 class="bg-white" id="item5">5.Plutão</h5>
                    <p class="bg-white text-justify">
                        Pluto is a planet located in Earth's solar system. inhabited by sentient Plutonians. The planet is first mentioned in Something Ricked This Way Comes, when Jerry and Morty Smith are abducted and transported there.
                        <br>
                        Pluto is ruled by King Flippy Nips, a denier of Pluto's environmental shrinking crisis and close associate of Pluto's corporate leaders. His son, Scroopy Noopers, is an activist who aims to stop the mining operations responsible for Pluto's shrinking.
                        <br>
                        The appearance of Pluto is immensely dull with little-to-no details. The ground is mainly blue and the buildings are mushroom shaped. 
                        <br>
                        Pluto first appeared in Something Ricked This Way Comes, when Morty and his father Jerry were making a model of the solar system as a science project for school. When Jerry started to add Pluto to the model, Morty pointed out to him that Pluto was "no longer a planet." He then Googled it and confirmed that the celestial body is, in fact, no longer considered a planet, due to several other bodies in the solar system being larger and/or having more planetary mass than Pluto. Jerry, outraged at this change from the science he grew up with, called NASA to chew them out about Pluto, claiming that it is still a planet.
                        <br>
                        Unbeknownst to the Smiths, the Plutonians were monitoring Jerry's phone call, and decided to abduct him and Morty so the two could serve as representatives of Earth's science, and convince the Plutonians once and for all that Pluto is a planet.
                        <br>
                        After Jerry makes several public appearances to the Plutonians, claiming that Pluto is still a planet, Morty is taken aside by the environmental activist Scroopy Noopers, who shows Morty that the dwarf planet is shrinking due to mass mining of Pluto's resources; namely, plutonium. Noopers explains that if the mining continues, Pluto will continue to shrink until it "poofs" out of existence. Morty reveals this fact to Jerry, who finally folds and announces to the population of Pluto that it is no longer classifiable as a planet, enraging them and resulting in him and Morty being returned to Earth.
                        <br>
                        The future of the planet is unknown, but it is likely that the planet will continue to shrink until it is destroyed, or until the seismic activity caused by the mining of plutonium destroys all life on the planet, as well as the mining facilities. 
                    
                    </p>
                    
                    
                    <h5 class="bg-white" id="item6">6.Gear World</h5>
                    <p class="bg-white text-justify">
                        Gear World is a planet located in the Gear System. It's the home of Gearhead and other Gear People, and is a part of the Galactic Federation. It made its first appearance in the Rick and Morty episode, "Mortynight Run."
                        <br>
                        Rick and Morty brought Fart to Gearhead's workshop on Gear World after escaping the Galactic Federation. They were quickly betrayed by Gearhead who tipped off the police on their location. The ensuing spaceship chase went through a gear city where a large part of the city was destroyed when Fart showed a vision to one of the gear police officers, making him steer his ship into another creating a chain reaction. This allowed Rick, Morty, and Fart to escape.
                        <br>
                        Gear World did not see much change after the downfall of the Galactic Federation. Shortly after The Vindicators disbanded, Gear World experienced an alien terror attack, though its outcome is not known.
                        <br>
                        Gear World appears to be similar to Earth, except everything is gear-themed. All food is gear-shaped, and most likely made of gears. The planet is likely made of metal, and the cities are very industrial. Although they are robots, they still have genders, age, and feelings.
                        <br>
                        A number of wars have been fought on Gear World, called the Gear Wars, starting 754 years prior to the events in the episode "Ricksy Business". Festivals like Geartober are annual events on Gear World.
                        <br>
                        Twigs are considered highly dangerous to Gear People as they will intertwine with their gears and possibly stop different functions. Gearhead kept his twigs in a box labeled with a skull and bones, which might be a common practice on this planet. 
                    </p>
                                                            
                </div>
                <!-- FIM do Conteudo do site -->
                    
          </div>
      
      </div>      
      </div>
      </div>
      <!-- FIM do ScroolSpy -->
      
        <!-- ================================================================================================================= -->
      
      
      
      
      
      
      
      
      
      
      
      
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