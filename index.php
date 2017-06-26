



    
<!DOCTYPE html>
    <html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CrazyDev</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		
		<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>		
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"></script>
    


    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!--  CSS -->
    <link href="css/curso.css" rel="stylesheet">

    <!-- Fontes -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  
    

</head>

<body>

    <!-- Navegação -->
   <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
           
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">CrazyDev</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">CrazyDev- Living Projects</a>
            </div>
            <!-- Coletar os links, formulários e outros conteúdos de navegação para alternar -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                   
                    
                    
                  
                    
                  
                    
                </ul>
            </div>
            
        </div>
 
    </nav>

    <!-- Header Slide-->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- imagens do slide -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('http://blog.sharenext.com.br/wp-content/uploads/2016/07/workshop-1-1.jpg');"></div>
                <div class="carousel-caption">
                    <h2>WORKSHOP</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://www.tech-heavensolution.com/wp-content/uploads/2016/05/TECHtraining_1360x370.jpg');"></div>
                <div class="carousel-caption">
                    <h2>TREINAMENTOS</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://sitsolution.in/wp-content/uploads/2017/04/web-design-development.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Desenvolvimento</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
    <div class="container"><br></div>
<div class="container">
  <div class="jumbotron">
    <h1>CrazyDev Cursos e Treinamentos</h1> 
    <p>Sabe aquela galera insana por desenvolvimento, então chegou o momento de trocarmos aquela ideia sobre novas 
    maneiras de desenvolver software com dicas legais dos ninjas da programação, falaremos tambem sobre mobile e living projects e muito mais, aqui na CrazyDev preparamos porgramadores para o mercado de trabalho. </p> 
  </div>
 
</div>
    
      <!-- Conteúdo da página -->
    <div class="container">
 <?php

$pdo = new PDO('mysql:host=localhost;dbname=crud', 'root', '');
        
// define para que o PDO lance exceções caso ocorra erros
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$consulta = $pdo->query("SELECT * from users  limit 15 ");

       
      
?>
        

  

        
      
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">
          Nossos Cursos
    </h1>
   </div>
    <div  class="col-xs-12 col-md-12">
  <table width='90%'>
   <tr>
    <td> 
       
      <?php
    
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        
        
         
         $linha['first_name'];
         $linha['last_name'];
         $linha['image'];
        // aqui eu mostro os valores de minha consulta        
          echo'

              <div class="col-sm-3 col-sm-offset-1">
                <div class="panel panel-default" >
                  <div class="panel-heading" >
                    
                     <img class="img-responsive img-portfolio img-hover" src="cadastro/upload/'.$linha['image'].'" width="680px" >
                  

                  </div>


                <div class="panel-heading" >
                  <h4><i class="fa fa-fw fa-check" id="first_name"></i>'. $linha['first_name'].'</h4>

                </div>

                 <div>
                   <p class="panel-heading">'.$linha['last_name'].'</p>
                 </div>
                    </br>
                 <div class="panel-heading" >
                   <a href="detalhes.php?id='.$linha['id'].'" class="btn btn-warning">Saber Mais</a>
                 </div>


              </div>
            </div>


        </div>
';


          }
        
 ?>
        
    </td>
         </tr>
            </table>
    <div class="col-md-3" >
                <div class="panel panel-default" >
                    <div class="panel-heading" >

                       <a href="cadastro/cadastro.php" ><img class="img-responsive img-portfolio img-hover" src="img/add.jpg" alt="" align="center" ></a>
            </div>
        </div>
    </div>

        </div>
        <br>
       
        
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
                <!-- MAPA DO LUGAR-->
                <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d117652.56467878116!2d-43.36755387256443!3d-22.8527069790137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1498302655434" width="600" height="450" frameborder="0" style="border:0" allowfullscreen>></iframe>
            </div>
            <!-- CONTATO -->
            <div class="col-md-4 ">
                <h3>Onde Estamos ?</h3>
                <p>
                   Avenida Rio Branco,  90210<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">P</abbr>: (21) 2757-2757/p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">E</abbr>: <a href="mailto:name@example.com">crazydev@eventos.com</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr>: Segunda: 9:00 as 17:00</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>

        <hr>
        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>E ai ficou interessado ? clica ai do lado</p>
                </div>
                <div class="col-md-4">

                    <button type="button" id="add_button" data-toggle="modal" data-target="#add_new_record_modal" class="btn btn-info btn-lg">Inscreva-se</button>
                </div>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; CrazyDev-living projects 2017</p>
                </div>
            </div>
        </footer>

    </div>
    </div>
 
        </body>
</html>


    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Ativa o carrossel -->
    <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
    </script>



        <!-- MODAL APARECE PARA VISITANTES -->

<div class="modal fade" id="memberModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
       <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span>  </button>
            <div class="modal-foote" style="background:orange" width="100%"><center><h2>Olá Visitante</h2></center> </div>
              </div>
                    
                 <div class="modal-body">

                     <p>Desde já quero agradecer a sua visita.
                        e já aproveitando , venho lhe fazer um convite, para comparacer na CrazyDEv para loucos por desenvolvimento.
                        um evento descontraido com dicas,abordando várias linguagens, JAVA,PHP,PYTHON e outras mais, falaremos
                        também sobre living projects, como tratarmos os projetos como organismos vivos e muito mais  </p>

                       <p>Entre em contato para maiores informações</p>
                        <div class="modal-foote" style="background:orange" heigth="70px"><center><h4>CrazyDEv </h4></center> </div>
              </div>
                      </div>
                       <div class="modal-footer">
                         <button type="button" id="add_button" data-toggle="modal" data-target="#add_new_record_modal" class="btn btn-info btn-lg">Inscreva-se</button>

                         <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
    </div>
 </div>
</div>

                                  <!-- MODAL CADASTRO DE VISITANTES -->

    <div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Registro</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="first_name">Nome</label>
                        <input type="text" id="first_name"  class="form-control" required/>
                    </div>

                    <div class="form-group">
                        <label for="last_name">Sobrenome</label>
                        <input type="text" id="last_name"  class="form-control" required/>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="text" id="email" class="form-control" required/>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                  <!--AQUI CHAMO FUNÇÃO INSERT-->
                    <button type="button" class="btn btn-primary" onclick="addRecord()">Registrar</button>
                </div>
            </div>
        </div>
    </div>
    
  <!--marca registra no storage os visitantes-->

    <script type="text/javascript">


        if (localStorage)
        {

            if(! localStorage.getItem('ja_visitei'))
            {

                $('#memberModal').modal('show');

                localStorage.setItem('ja_visitei', 'verdadeiro');
            }

        }
    </script>


