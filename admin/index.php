<?php

        include '../functions/main-functions.php';

        $pages = scandir('pages/');
        if(isset($_GET['page']) && !empty($_GET['page'])){
            if(in_array($_GET['page'].'.php',$pages)){
                $page = $_GET['page'];
            }else{
                $page = "error";
            }
        }else{
            $page = "dashboard";
        }
        $pages_functions = scandir('functions/');
        if(in_array($page.'.func.php',$pages_functions)){
            include 'functions/'.$page.'.func.php';
        }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo($page)?></title>
   
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="css/style.css">
     <?php
          $pages_css = scandir('css/');
          if(in_array($page.'.css',$pages_css)){
              //include 'css/'.$page.'.css';
              echo ('<link rel="stylesheet" href="css/'.$page.'.css">');
          }
     ?>

             
</head>
<body id="body">
    <a id="button" class=""></a>
    <header>
        <?php 
             
                include "body/topbar.php";
            
        ?>
    </header>
    <main>
        
    <?php
            include 'pages/'.$page.'.php';
    ?>

    </main>
    
    
</body>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="js/admin.js"></script>




  <?php
          $pages_js = scandir('js/');
          if(in_array($page.'.func.js',$pages_js)){
              
              echo ('<script  src="js/'.$page.'.func.js"></script>');
          }
     ?>
</html>