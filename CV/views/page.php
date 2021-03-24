<!DOCTYPE html>
<html>
    <head>
        <title>Aboubakar Diakite</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" ></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>       
        <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="Css/style.css" >
    </head>
    
    <body data-spy="scroll" data-target=".navbar" data-offset="60">   
     
        <nav class="navbar navbar-default navbar-fixed-top">
            <?php 
                require_once("menu.php");
            ?>
        
        </nav>
         <section id="about" class="container-fluid">
            <?php
                require_once("header.php");
            ?>
         </section>

         <section id="apropo">
            <?php
                require_once("apropo.php");
            ?>
         </section>

        <section id="formation" style="margin-top: 100px">
            <?php
                require_once("formation.php");
            ?>
        </section>
        
        
        
        
        <section id="experience" style="margin-top: 100px">
            <?php
                require_once("projetAca.php");
            ?>
        </section>
        
       
        <section id="skills">
            <?php
                require_once("competence.php");
            ?>
        </section>
        
    

        <section id="contact">
            <?php
                require_once("contact.php");
            ?>
        </section>

        
        
        <footer class="text-center">
                    <?php
                        require_once("footer.php");
                    ?>
        </footer>
        <script src="Js/script.js"></script>
        <script src="Js/script1.js"></script>
    </body>
</html>