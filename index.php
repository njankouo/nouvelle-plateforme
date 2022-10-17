<?php

        include 'functions/main-functions.php';

        $pages = scandir('pages/');
        if(isset($_GET['page']) && !empty($_GET['page'])){
            if(in_array($_GET['page'].'.php',$pages)){
                $page = $_GET['page'];
            }else{
                $page = "error";
            }
        }else{
            $page = "home";
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

     <!--link rel="stylesheet" href="./css/style.css"-->
     <?php
          $pages_css = scandir('css/');
          if(in_array($page.'.css',$pages_css)){
              //include 'css/'.$page.'.css';
              echo ('<link rel="stylesheet" href="./css/'.$page.'.css">');
          }
     ?>

             
</head>
<body>
    <a id="button" class=""></a>
    <header>
        <?php
            
             if($page=="home" ){
                include "body/topbar_ns.php";
            }else if($page=="blog"){
                include "body/topbar_bg.php";
            }else if($page=="singleblog"){
                include "body/topbar_sbg.php";
            }else if($page=="mediatheque"){
                include "body/topbar_med.php";
            }else if($page=="singlemedia"){
                include "body/topbar_smed.php";
            }
            else if($page=="login"){
                include "body/topbar_lg.php";
            }
            else if($page=="signup"){
                include "body/topbar_sg.php";
            }
            else{
                include "body/topbar_ns.php";

            }


            
        ?>
    </header>
    <main>
        
    <?php
            include 'pages/'.$page.'.php';
    ?>

    </main>
    <footer class="page-footer red darken-4">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">La PlateForme</h5>
              <p class="grey-text text-lighten-4">Mini texte pour la presententation ou ending plateforme.</p>
            </div>
            <div class="col l4 offset-l2 s12">
              <h5 class="white-text">Links</h5>
              <ul>
                <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container  test_footer">
          
          <p class="grey-text text-lighten-4 right social_link" >
            <a href=""><img src="./image/facebook.png" alt="" class="responsive-img"></a>
            <a href=""><img src="./image/twitter.png" alt="" class="responsive-img"></a>
            <a href=""><img src="./image/youtube.png" alt="" class="responsive-img"></a>
          </p>
          <p class="copy_right">© 2022 2NCorporate Sarl</p>
          </div>
        </div>
      </footer>
    
</body>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <?php
          $pages_js = scandir('js/');
          if(in_array($page.'.func.js',$pages_js)){
              
              echo ('<script  src="js/'.$page.'.func.js"></script>');
          }
     ?>
</html>
