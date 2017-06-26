

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CrazyDEv- Nossos Cursos</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/curso.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
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
      
    

   
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">CrazyDev
                    <small>| <a href="#">Nossos Cursos</a>
                    </small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    
                </ol>
            </div>
        </div>
     

       
        <div class="row">

           
            <div class="col-lg-8">

               

                <hr>

              

                <hr>
<?php
$id=($_GET['id']);
$pdo = new PDO('mysql:host=localhost;dbname=crud', 'root', '');
        
// define para que o PDO lance exceções caso ocorra erros
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$consulta = $pdo->query("SELECT * from users WHERE id ='" . $id . "'");
                    

       
      
?>
                <?php
    
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        
        
         $linha['id'];
         $linha['first_name'];
         $linha['last_name'];
         $linha['image'];
        // aqui eu mostro os valores de minha consulta        
          echo'
          <div class="row">
                <div class="col-lg-12">
                    <p>'.$linha['first_name'].'</p>
                </div>
            </div>
                <!-- Preview Image -->
                <img class="img-responsive" src="cadastro/upload/'.$linha['image'].'" alt="">

                <hr>

          <div class="row">
                <div class="col-lg-12">
                    <p>'.$linha['last_name'].'</p>
                </div>
            </div>
                
                 '    ;
        }
                ?>

            </div>
        </div>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; CrazyDev 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
