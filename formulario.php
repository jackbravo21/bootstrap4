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
    
    <title>Formulário</title>
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
      
      
      
      
      
      
      
      
      
           <!-- 10.FORMULARIO -->
      
        <!-- Inicio do Formulario -->
      
        <div class="container mt-5" style="background-color:#00BFFF; ">
      
            <div class="row">
                
                <div class="col-12 text-center my-5">
                
                    <h1 class="display-4"><i class="fa fa-paper-plane text-primary" aria-hidden="true"></i> Formulário de Cadastro
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
                                        <option>AC</option>
                                        <option>AL</option>
                                        <option>AM</option>
                                        <option>AP</option>
                                        <option>BA</option>
                                        <option>CE</option>
                                        <option>DF</option>
                                        <option>ES</option>
                                        <option>GO</option>
                                        <option>MA</option>
                                        <option>MG</option>
                                        <option>MT</option>
                                        <option>MS</option>
                                        <option>PA</option>
                                        <option>PB</option>
                                        <option>PE</option>
                                        <option>PI</option>
                                        <option>PR</option>
                                        <option>RJ</option>
                                        <option>RO</option>
                                        <option>RN</option>
                                        <option>RS</option>
                                        <option>SC</option>
                                        <option>SE</option>
                                        <option>SP</option>
                                        <option>TO</option>
                                                                        
                                    </select>
                                
                                </div>
                                
                                <div class="form-group col-sm-2">
                                
                                    <label for="inputCEP">Seu CEP</label>
                                    <input type="text" id="inputCEP" class="form-control" placeholder="XXXXX-XXX">
                                                                    
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