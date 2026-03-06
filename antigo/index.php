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
    
    <title>Bootstrap 4</title>
  </head>
  <body class="bg-info">
      
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
            <a class="navbar-brand h1 mb-0" href="index.php">JackBravo21</a>   <!-- mb=margem bottom -->
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
                        <a class="nav-link ml-2" href="#">Início</a> 
                    <li class="nav-item">
                        <a class="nav-link" href="#">Perfil</a>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Serviços</a>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Depoimentos</a>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contatos</a>

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
                                <a class="dropdown-item" href="#">Facebook</a>
                                <a class="dropdown-item" href="#">Twitter</a>
                                <a class="dropdown-item" href="#">Instagram</a>
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

                        <h1><flex row class="bg-light text-primary">TV Interdimensional</flex></h1><br>
                        <flex row class="lead bg-light mr-0 ml-0 text-primary">O melhor da TV através das dimensões!</flex>
                    
                    
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
                    
                        <h1><flex row class="bg-light text-primary">Afagadores de Bolas</flex></h1><br>
                        <fex row class="lead bg-light text-primary">Um clássico de ação!</fex>
                    
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
                    
                        <h1><flex row class="bg-light text-primary">Plumbus</flex></h1><br>
                        <fex row class="lead bg-light text-primary">Todo mundo tem um plumbus em casa!</fex>
                    
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
                    
                        <h1><flex row class="bg-light text-primary">Bocadinhas</flex></h1><br>
                        <fex row class="lead bg-light text-primary">Você tem boca pequena? Bocadinhas!</fex>
                    
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
                    
                        <h1><flex row class="bg-light text-primary">Cavidades Oculares</flex></h1><br>
                        <fex row class="lead bg-light text-primary">As Incriveis Aventuras do Capitão Cavidade Ocular!</fex>
                    
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
                    
                        <h1><flex row class="bg-light text-primary">Pernas de bebe</flex></h1><br>
                        <fex row class="lead bg-light text-primary">Agora o agente Pernas de Bebe ganhará um parceiro com pernas normais!</fex>
                    
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
                    
                        <h1><flex row class="bg-light text-primary">Johnson Formiga nos meus olhos</flex></h1><br>
                        <fex row class="lead bg-light text-primary">Porque vc nunca mais verá um vendedor da mesma maneira!</fex>
                    
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
                    
                        <h1><flex row class="bg-light text-primary">Jan Quadrante 16 Vincent</flex></h1><br>
                        <fex row class="lead bg-light text-primary">Porque ele nao pode estar em dois quadrantes ao mesmo tempo!</fex>
                    
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
                    
                        <h1><flex row class="bg-light text-primary">Portas falsas de verdade</flex></h1><br>
                        <fex row class="lead bg-light text-primary">Para você que não pretende ir a lugar nenhum!</fex>
                    
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
                    
                        <h1><flex row class="bg-light text-primary">As Aventuras de Roupinho</flex></h1><br>
                        <fex row class="lead bg-light text-primary">O ladrão mais famoso, agora tem seu próprio programa!</fex>
                    
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
                    
                        <h1><flex row class="bg-light text-primary">Blip and Chitz</flex></h1><br>
                        <fex row class="lead bg-light text-primary">Nós temos chabos, flobos, e você pode atirar nas coisas!</fex>
                    
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
                    
                        <h1><flex row class="bg-light text-primary">Alien Invasion</flex></h1><br>
                        <fex row class="lead bg-light text-primary">Dois irmãos contra um armada mexicana e velinhas guerreiras.</fex>
                    
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
                    
                        <h1><flex row class="bg-light text-primary">Homem VS Carros</flex></h1><br>
                        <fex row class="lead bg-light text-primary">Quem vencerá essa baralha até a morte?</fex>
                    
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
                    
                        <h1><flex row class="bg-light text-primary">Floquinhos de Morango</flex></h1><br>
                        <fex row class="lead bg-light text-primary">Jhonnys Cartola agora terá que escapar.</fex>
                    
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
      
      <!-- 6.ScroolSpy -->
      <!-- Inicio do ScroolSpy -->
      
      <div class="container">
          
          <div class="row">
                <!-- esse "col-12", eh a divisao daquelas maximas colunas do bootstrap, antes era "col-xs-12", vai ocupar o valor de 12 colunas -->
                <div class="col-12 text-center my-5"> <!-- "my-5", "my" eh a margem em todo eixo Y da pagina, e de 1 a 5 eh o tamanho. -->
                    <!-- aqui vai tipo um boas vindas -->
                    <h1 class="display-3"><i class="fa fa-cogs text-primary" aria-hidden="true">
                        
                        </i>Seja bem vindo!<img class="img-top"  src="imgs/engrenagem.png" onmouseover="this.src='imgs/engrenagem.gif'" onmouseout="this.src='imgs/engrenagem.png'">
                    </h1> <!-- nova classe "display" recebe o valor de 1 a 5 para tamanho, "fa"=fontawesome "aria-hidden"=classe que representa o icone, "text-primary"= -->
                    <!-- subtitulo -->
                    <p>Ut turpis nisl, mattis in nibh a, tempor congue felis. Nunc sit amet pellentesque mauris.</p>
                </div>
          
          </div>      
          
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
      
      <!-- FIM do ScroolSpy -->
      
        <!-- ================================================================================================================= -->
        
     <!-- ================================================================================================================= -->
        
        <!-- 7.3. Cards com lista, Header e footer -->
              
        <!-- Inicio dos CARDS -->
              
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
                         <img class="card-img-top"  src="imgs/painel1.jpg" onmouseover="this.src='imgs/interdimensional1.gif'" onmouseout="this.src='imgs/painel1.jpg'" style="width: 348px; height: 153px;">
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
                                <a href="#" class="card-link text-center">Fotos</a>
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
                         <img class="card-img-top"  src="imgs/painel2.jpg" onmouseover="this.src='imgs/afagadores1.gif'" onmouseout="this.src='imgs/painel2.jpg'" style="width: 348px; height: 153px;">
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
                                <a href="#" class="card-link">Fotos</a>
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
                         <img class="card-img-top"  src="imgs/painel3.jpg" onmouseover="this.src='imgs/plumbus1.gif'" onmouseout="this.src='imgs/painel3.jpg'" style="width: 348px; height: 153px;">
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
                                <a href="#" class="card-link">Fotos</a>
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
                         <img class="card-img-top"  src="imgs/painel4.jpg" onmouseover="this.src='imgs/bocadinhas1.gif'" onmouseout="this.src='imgs/painel4.jpg'" style="width: 348px; height: 153px;">
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
                                <a href="#" class="card-link">Fotos</a>
                         </div>
                                                
                     </div>
                  
                  </div>   
                 
                  <div class="col-sm-6 col-md-4">
                  
                     <!-- Card 2 -->
                     <div class="card mb-5 text-center">
                         <!-- Imagem do card -->
                         <img class="card-img-top"  src="imgs/painel5.jpg" onmouseover="this.src='imgs/cavidadesoculares1.gif'" onmouseout="this.src='imgs/painel5.jpg'" style="width: 348px; height: 153px;">
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
                                <a href="#" class="card-link">Fotos</a>
                         </div>
                     </div>
                  
                  </div>   
                 
                  <div class="col-sm-6 col-md-4">
                  
                     <!-- Card 3 -->
                     <div class="card mb-5 text-center">
                         <!-- Imagem do card -->
                         <img class="card-img-top"  src="imgs/painel6.jpg" onmouseover="this.src='imgs/pernasdebebe1.gif'" onmouseout="this.src='imgs/painel6.jpg'" style="width: 348px; height: 153px;">
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
                                <a href="#" class="card-link">Fotos</a>
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
                         <img class="card-img-top"  src="imgs/painel7.jpg" onmouseover="this.src='imgs/formiga1.gif'" onmouseout="this.src='imgs/painel7.jpg'" style="width: 348px; height: 153px;">
                         <!-- Texto do card -->
                         <div class="card-body mb-0">
                             <h5 class="card-title text-center font-weight-bold">Johnson Formiga nos Meus Olhos</h5> <!-- titulo do card -->
                             <h6 class="card-subtitle mb-2 text-muted text-center">Ideal para quem gosta de um descontão</h6><!-- titulo do card -->
                                <p class="card-text">Temos todos os eletrônicos!</p>
                                <!-- Itens para chamar o modal: "data-toggle" , "data-target"=chama um conteudo pelo ID -->
                                <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal7">Saiba mais</a>
                                <a href="#" class="card-link">Fotos</a>
                         </div>
                     </div>
                  
                  </div>   
                 
                  <div class="col-sm-6 col-md-4">
                  
                     <!-- Card 2 -->
                     <div class="card mb-5 text-center">
                         <!-- Imagem do card -->
                         <img class="card-img-top"  src="imgs/painel8.jpg" onmouseover="this.src='imgs/jam4vicent1.gif'" onmouseout="this.src='imgs/painel8.jpg'" style="width: 348px; height: 153px;">
                         <!-- Texto do card -->
                         <div class="card-body mb-1">
                         <h4 class="card-title font-weight-bold">Jan Quadrante Vicent 16</h4> <!-- titulo do card -->
                             <h6 class="card-subtitle mb-3 text-muted">Ideal para adultos</h6><!-- titulo do card -->
                                <p class="card-text mb-4">Contem: Drama, violência, nudês.</p>
                                <!-- Itens para chamar o modal: "data-toggle" , "data-target"=chama um conteudo pelo ID -->
                                <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal8">Saiba mais</a>
                                <a href="#" class="card-link">Fotos</a>
                         </div>
                     </div>
                  
                  </div>   
                 
                  <div class="col-sm-6 col-md-4">
                  
                     <!-- Card 3 -->
                     <div class="card mb-5 text-center">
                         <!-- Imagem do card -->
                         <img class="card-img-top"  src="imgs/painel9.jpg" onmouseover="this.src='imgs/realfake1.gif'" onmouseout="this.src='imgs/painel9.jpg'" style="width: 348px; height: 153px;">
                         <!-- Texto do card -->
                         <div class="card-body mb-1">
                         <h4 class="card-title font-weight-bold">Portas Falsas de Verdade</h4> <!-- titulo do card -->
                             <h6 class="card-subtitle mb-3 text-muted">"Tá cansado de portas de verdade?"</h6><!-- titulo do card -->
                                <p class="card-text mb-4">Conheça as novas portas falsas de verdade!</p>
                                <!-- Itens para chamar o modal: "data-toggle" , "data-target"=chama um conteudo pelo ID -->
                                <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal9">Saiba mais</a>
                                <a href="#" class="card-link">Fotos</a>
                         </div>
                     </div>
                  
                  </div>   
                 
              </div>
        
        <!-- FIM dos CARDS -->              
              
        <!-- ================================================================================================================= -->
       
        
        <!-- FIM dos CARDS -->              
              
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
                        <img class="rounded mx-auto d-block" src="imgs/interdimensionalbox.jpg" style="width: 455px; height: 140px;">
                                                
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
                        
                        <img class="rounded mx-auto d-block" src="imgs/afagadoresgrupo.jpg" style="width: 400px; height: 400px;">
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
                                    
                                <img class="rounded mx-auto d-block" src="imgs/manualplumbus5.jpg" style="width: 250px; height: 300px;">    
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
                                                
                        <img class="rounded mx-auto d-block" src="imgs/bocadinhasimage2.jpg" style="width: 350px; height: 196px;">
                        
                        <br>
                        <p class="text-justify">
                            Bocadinhas é um restaurante exibido em um comercial da "Interdimensional Cable" 2: Tempting Fate. O tema principal do Bocadinhas é que tudo no menu é extremamente minúsculo, destinado a pessoas com bocas minúsculas. Todos mostrados no comercial tem grandes cabeças esféricas com pequenas características faciais. Em uma cena deletada, Rick diz que ele comeu lá e acha que a coisa toda é uma fachada para que o dono possa assediar as pessoas no banheiro.
                        </p>
                        <img class="rounded mx-auto d-block" src="imgs/bocadinhasimage.jpg" style="width: 350px; height: 196px;">
                                                
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
                            <img class="rounded mx-auto d-block" src="imgs/cco2.jpg" style="width: 350px; height: 196px;">
                            
                            <p class="text-justify">
                                Capitão Cavidade Ocular é um alienígena vestido de colam que usa um megafone, sua existência consiste em espancar qualquer um que seja apanhado com "Cavidades Oculares" de cereais. Ele é caracterizado em vários comerciais por toda a galáxia, como mostrado no episódio Interdimensional Cable 2: Tempting Fate. Ele afirma que só ele pode ter Cavidades Oculares. Rick Sanchez diz a Morty Smith para não ser pego com uma caixa de Cavidades Oculares quando o Capitão Cavidade Ocular estiver por perto, ou então ele vai começar a espancá-lo para pegar sua caixa de Cavidades Oculares de volta.
                            </p>
                            <p class="text-justify">
                                <cite title="Source Title" class="font-weight-bold">"Tem que tomar cuidado Morty, se aquele cara te pega com uma caixa de Cavidades Oculares, chegando detonando uma jenela e te da porrada! Mas vale o risco, eles derretem na boca! São deliciosos!"</cite>
                            </p>
                            <p class="text-justify">
                                Jerry Smith é mais tarde atacado pelo Capitão Cavidade Ocular na cena pós-créditos enquanto tenta roubar a caixa de Cavidades Oculares de Rick no seu armário. Enquanto Summer Smith e Morty tentam tirar o Capitão Cavidade Ocular de Jerry, Rick repreende Jerry por abrir a parte dele do armario e pegar a caixa de Cavidades, enquanto Morty pergunta por que ele ainda tinha uma caixa de Cavidades Oculares.
                        </p>
                        
                        <img class="rounded mx-auto d-block" src="imgs/ceo3.jpg" style="width: 350px; height: 196px;">
                                                
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
                        
                        <img class="rounded mx-auto d-block" src="imgs/pernasdebebe1.jpg" style="width: 350px; height: 196px;">
                        <br>
                        
                        <h4>Biografia</h4>
                        <p class="text-justify">
                        No episódio mostrado, Pernas de Bebê é dito ser um bom detetive, mas não é bom o suficiente por causa de suas pernas de bebê. Ele ganha um parceiro chamado Pernas Normais, ficando infeliz. Os dois são enviados para a captura de um criminoso que o Pernas de Bebê segue até um depósito. Quando o criminoso corre, Pernas de Bebê tenta persegui-lo, mas é lento e cai devido a suas pernas de bebê. Ele diz que aprendeu uma lição valiosa e o Pernas Normais persegue o criminoso, o pegando. Ambos recebem elogios de seu Capitão da Polícia antes de dizer a ambos para "Cair fora daqui".
                        </p>
                        
                        <img class="rounded mx-auto d-block" src="imgs/pernasdebebe3.jpg" style="width: 350px; height: 196px;">
                        <br>
                        
                        <p class="text-justify">
                        Pernas de Bebê tem a parte superior do corpo de um adulto maduro e a parte inferior do corpo de um bebê. Suas pernas são incrivelmente curtas em proporção ao resto de seu corpo. Ele tem cabelo penteado cinza escuro com uma listra cinza mais clara perto de sua têmpora, sobrancelhas cinza escuro e algumas falhas. Ele veste uma camisa bege com gravata escura e coldres de ombro marrom. Seu cinto combina com seus coldres de arma. Ele usa uma fralda e não usa sapatos.
                        </p>
                        
                        <img class="rounded mx-auto d-block" src="imgs/pernasdebebe2.jpg" style="width: 350px; height: 196px;">
                        <br>
                        
                        <p class="text-justify">
                        Pernas de Bebê é mostrado como um bom detetive de polícia, rastreando um assassino até um armazém, enquanto o Pernas Normais não conseguiu, e está bastante ciente de quão bom ele é. Ele costumava ser teimoso e que ele não precisa de um parceiro com pernas normais para compensar suas pernas de bebê, mas aprende ao perseguir o assassino que suas pernas de bebê, na verdade, limitá-o. Ele aceita Pernas Normais como seu parceiro depois de aprender essa lição.
                        </p>
                                                
                        <img class="rounded mx-auto d-block" src="imgs/pernasdebebe4.jpg" style="width: 350px; height: 196px;">
                                                
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
                        <img class="rounded mx-auto d-block" src="imgs/ants2.jpg" style="width: 350px; height: 196px;">
                        <br>
                        <h4>Trivialidades</h4>
                        <p class="text-justify">
                        Como dito, Johnson Formiga nos Meus Olhos não consegue ver nem sentir nada. Seu comercial termina com ele pegando fogo em sua loja, mas ninguém o ajuda. Seu destino é atualmente desconhecido.
                        </p>  
                        <img class="rounded mx-auto d-block" src="imgs/ants1.jpg" style="width: 350px; height: 196px;">
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
                        <img class="rounded mx-auto d-block" src="imgs/jan4vicent1.jpg" style="width: 350px; height: 196px;">
                        <br>    
                        <h4>História</h4>
                        <p class="text-justify">
                        Em um mundo devastado onde existe 8 Jan Michael Vincents. Em 16 quadrantes, só há tempo suficiente para 1 Jan Michael Vicent chegar a um quadrante, ele não pode estar em dois quadrantes ao mesmo tempo. Jan Michael Vicents são usados, descartados.<br>
                        Em Janeiro, a única esperança surge... é hora de Michaelar os seus Vicents.
                        </p>
                        <img class="rounded mx-auto d-block" src="imgs/jan4vicent2.jpg" style="width: 350px; height: 196px;">
                        <br>
                        <h4>Aparição:</h4>
                        <p class="text-justify">
                        Jan Quadrant Vincent 16 é um filme que existe em uma dimensão alternativa estrelada por Jan Michael Vincent. O trailer do filme foi exibido no episódio "Interdimensional Cable 2: Tempting Fate".
                        </p>
                        <img class="rounded mx-auto d-block" src="imgs/jan4vicent3.jpg" style="width: 350px; height: 196px;">
                                                
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
                        <img class="rounded mx-auto d-block" src="imgs/portasfalsas1.jpg" style="width: 350px; height: 196px;">
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
        
        <!-- 9.JUMBOTRON -->
              
        <!-- Inicio do dos Junbotron -->
              
              <div class="jumbotron jumbotron-fluid">
              
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
                                <a class="nav-link active" id="nav-pills-01" data-toggle="pill" href="#nav-item-01">Video 1</a>
                            </li>        
                            <li class="nav-item">
                                <a class="nav-link" id="nav-pills-02" data-toggle="pill" href="#nav-item-02">Video 2</a>
                            </li>                        
                            <li class="nav-item">
                                <a class="nav-link" id="nav-pills-03" data-toggle="pill" href="#nav-item-03">Video 3</a>
                            </li>                        
                        
                        
                        </ul>  
                      
                        <div class="tab-content" id="nav-pills-content">
                                
                            <!-- ============================"VIDEO_1"============================================== -->
                            
                            <div class="tab-pane fade show active" id="nav-item-01" role="tabpanel"><!-- Fade=efeito de exibicao -->
                            
                                    <div class="row">
                                    
                                        <div class="col-sm-6">
                                        
                                            <!-- EMBED do Youtube / 16by9 eh o tamanho do video -->
                                            <div class="embed-responsive embed-responsive-16by9">
                                                    <iframe class="embed-responsive" src="https://www.youtube.com/embed/TqiO8WdsMCA"></iframe>
                                            
                                            </div>
                                        
                                        </div>
                                        
                                        <div class="col-sm-6">
                                            
                                            <h1>Plumbus:</h1>
                                            <p>
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
                                                    <iframe class="embed-responsive" src="https://www.youtube.com/embed/8xobioTpWJI"></iframe>
                                            
                                            </div>
                                        
                                        </div>
                                        
                                        <div class="col-sm-6">
                                            
                                            <h1>Descricao:</h1>
                                            <p>
                                                Descricao: Suspendisse accumsan velit sed consequat lacinia. Phasellus id tristique nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque semper diam sollicitudin tellus interdum varius. Etiam finibus molestie metus in tincidunt. Aliquam quis tortor quis libero fermentum finibus.
                                            </p>
                                        
                                        </div>
                            
                                    </div>
                            
                                </div>
                            
                                <!-- ========================="VIDEO_3"================================================= -->
                            
                                <div class="tab-pane fade" id="nav-item-03" role="tabpanel">
                            
                                        <div class="row">
                                    
                                        <div class="col-sm-6">
                                        
                                            <!-- EMBED do Youtube / 16by9 eh o tamanho do video -->
                                            <div class="embed-responsive embed-responsive-1by1">
                                                    <iframe class="embed-responsive" src="https://www.youtube.com/embed/iQoIXo3B-Cc"></iframe>
                                            
                                            </div>
                                        
                                        </div>
                                        
                                        <div class="col-sm-6">
                                        
                                            <h1>Descricao:</h1>
                                            <p>
                                                Phasellus egestas, odio a lobortis dapibus, mi sem convallis est, et eleifend lectus erat non massa. In blandit, dolor vel dapibus scelerisque, velit ex posuere lectus, sed lacinia arcu lectus a nulla.
                                            </p>
                                        
                                        </div>
                            
                                    </div>
                            
                                </div>
                                        
                        </div>  
                      
                  </div>
              
              </div>
                  
            </div>
              
        <!-- FIM dos Junbotron -->
              
        <!-- ================================================================================================================= -->       
      
        <!-- 10.FORMULARIO -->
      
        <!-- Inicio do Formulario -->
      
        <div class="container" style="background-color:#00BFFF; ">
      
            <div class="row">
                
                <div class="col-12 text-center my-5">
                
                    <h1 class="display-4"><i class="fa fa-paper-plane text-primary" aria-hidden="true"></i>Macenas in titulo
                    <img class="img-top"  src="imgs/paperplane1.png" onmouseover="this.src='imgs/paperplane.gif'" onmouseout="this.src='imgs/paperplane1.png'"></h1>
                    
                </div>
             
            </div>
                     
                <div class="row justify-content-center mb-5">
                
                    <div class="col-sm-12 col-md-10 col-lg-8">
                    
                        <form>
                        
                            <div class="form-row"> <!-- ou soh row -->
                            
                                <div class="form-group col-sm-6">
                            
                                    <label for="inputNome">Seu nome</label>    
                                    <input type="text" class="form-control" id="inputNome" placeholder="Nome">
                                
                                </div>
                            
                                <div class="form-gorup col-sm-6">
                            
                                    <label for="inputSobrenome">Seu sobrenome</label>
                                    <input type="text" class="form-control" id="inputSobrenome" placeholder="Sobrenome">
                            
                                </div>
                            
                            </div>
                            
                            <div class="form-row"> <!-- ou soh row -->
                                
                                <div class="form-group col-sm-12">
                                
                                    <label for="inputEnd">Seu endereço</label>
                                    <input type="text" class="form-control" id="inputEnd" placeholder="Endereço completo">
                                
                                </div>
                                
                            </div>
                            
                            <div class="form-row"> <!-- ou soh row -->
                                
                                <div class="form-group col-sm-6">
                                
                                    <label for="inputCidade">Sua cidade</label>
                                    <input type="text" class="form-control" id="inputCidade" placeholder="Cidade">
                                
                                </div>
                                
                                <div class="form-group col-sm-4">
                                
                                    <label for="inputEst">Seu estado</label>
                                    <select id="inputEst" class="form-control">
                                    
                                        <option selected>Escolha...</option>
                                        <option>...</option>
                                        <option>...</option>
                                        <option>...</option>
                                        <option>...</option>
                                        <option>...</option>                                        
                                                                        
                                    </select>
                                
                                </div>
                                
                                <div class="form-group col-sm-2">
                                
                                    <label for="inputCEP">Seu CEP</label>
                                    <input type="text" id="inputCEP" class="form-control">
                                                                    
                                </div>
                            
                            </div>
                            
                            <div class="form-row">
                            
                                <div class="form-group col-sm-12">
                                
                                    <div class="form-check">
                                    
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox">Desejo receber novidades por e-mail      
                                        </label>
                                    
                                    </div>
                                
                                </div>
                            
                            </div>
                            
                            <div class="form-row">
                            
                                <div class="col-sm-6">
                                
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                            
                                </div>
                                    
                                <div class="col-sm-4">
                                    
                                    <button type="reset" class="btn btn-primary ml-0">Limpar</button>
                                                                    
                                </div>
                                
                                <!-- POPOVER Javascript -->
                                <div class="col-sm-2 mb-5">
                                
                                    <!-- "data-placement" eh onde ele vai aparecer, o "data-trigger=focus" sem ele, a ajuda fica aberta ate clicar novamente -->
                                    <a tabindex="0" class="btn btn-secondary ml-5" role="button" data-toggle="popover" data-placement="right" data-trigger="focus" title="Fique calmo" data-content="Estamos aqui para lhe ajudar, clique em enviar para nos enviar seus dados, e limpar para limpar o formulario.">Ajuda</a>
                                
                                </div>
                            
                            </div>
                                                    
                        </form>
                    
                    </div>
                
                </div>
            
           </div>
      
        <!-- FIM do Formulario -->
              
        <!-- ================================================================================================================= -->       
      
        <!-- RODAPE -->
      
        <div class="container" style="background-color:#FFE7BA; ">
      
        <div class="row">
      
            <div class="col-12 mb-3 mt-3"><hr></div>
            
            <!-- dividir em 3 colunas -->
            <div class="col-sm-4">
            
                <h3>Curso</h3>
                
                <p>
                    Nulla tempor magna id egestas pretium. Suspendisse potenti. Morbi euismod, neque eu finibus feugiat, sem dui ornare massa, id tempor lorem dui non libero. Sed et orci in orci laoreet finibus nec at mauris. Etiam sit amet eros congue, luctus ipsum ac, pretium metus. 
                </p>
                <p>
                    Sed augue massa, gravida non iaculis sed, varius at dui. Donec placerat odio tortor, vel vestibulum ex egestas at. Cras rhoncus consequat quam, id convallis elit rutrum non.
                </p>
                
            </div>
            
            <div class="col-sm-4">
            
                <h3>Menu</h3>
            
                <div class="list-group">
                    <!-- ao final "active" deixa ele ja pre selecionado -->
                    <!-- ao final "disable" deixa ele cinza fraco desabilitado -->
                    <!-- "list-group-item-COR (primary)" muda a cor do botao -->
                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">Perfil</a> 
                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">Serviços</a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">Depoimentos</a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">Contatos</a>
                </div>
      
            </div>
                
                <div class="col-sm-4">
                
                    <h3>Social</h3>
                    
                    <!-- o complemento "-vertical" faz com que os botoes sejam agrupados na vertical, se nao fica horizontal -->
                    <!-- "btn-block" faz o botao ocupar todo o espaco, "btn-group-lg" faz ficar do tamanho do menu  -->
                    <div class="btn-group-vertical btn-block btn-group-lg" role="group">
                        
                        <a class="btn btn-primary" href="#">Facebook</a>
                        <a class="btn btn-info" href="#">Twitter</a>
                        <a class="btn btn-warning" href="#">Instagran</a>
                    
                    </div>    
                        
                    <!-- o complemento "-vertical" faz com que os botoes sejam agrupados na vertical, se nao fica horizontal -->
                    <!-- "btn-block" faz o botao ocupar todo o espaco, "btn-group-lg" faz ficar do tamanho do menu  -->
                    <div class="btn-group-vertical btn-block btn-group-lg" role="group">
                                            
                        <!-- "outline" faz os menus ficarem apagados -->
                        <a class="btn btn-outline-primary" href="#"><i class="fab fa-facebook-square" aria-hidden="true"></i>Facebook</a>
                        <a class="btn btn-outline-info" href="#"><i class="fab fa-twitter-square" aria-hidden="true"></i>Twitter</a>
                        <a class="btn btn-outline-warning" href="#"><i class="fab fa-instagram" aria-hidden="true"></i>Instagran</a>
                                           
                    </div>
                
                </div>
                  
<div class="col-12 mt-3"><hr></div>
        
            
            <div class="col-12 mt-2">
            
                <blockquote class="blockquote text-center">
                
                    <p class="mb-0">O sucesso não é garantido, mas o fracasso é certo se você não estiver envolvido emocionamente em seu trabalho.</p>
                    <footer class="blockquote-footer">Biz Stone <cite title="Source Title">Fundador do Twitter</cite></footer>
                    
                </blockquote>                    
        
            </div>    
                        
        </div>
            
            
            
        <!-- FIM do RODAPE -->
              
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