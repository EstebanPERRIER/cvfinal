<html>
    <head>
        <link rel="stylesheet" href="test.css" />
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>

    <body>
    <header id="haut">
        <ul class="liste"> 
            <li><a href="#Accueil">Accueil </a> </li>
            <li><a href="#A_propos">A propos </a> </li>
            <li><a href="#Compétences">Compétences</a></li>
            <li><a href="#Formation">Formation</a></li>
            <li><a href="#Expérience">Expérience</a></li>
            <li><a href="#Contact">Contact</a></li>
        </ul>
    </header>
        <main>
               
                <section id="Accueil">
                <div id="menu">
                    <?php include("php/experience.php"); ?>
                    </div>   
                </section>
                
            <div id="contenu">    
                
                
                <section id="A_propos">
                <?php include("php/A_propos.php"); ?>
                </section>
                
                <section id="Compétences">
                <?php include("php/competence.php"); ?>




                <section id="Expérience"> 
                <?php include("php/stage.php"); ?>
                </section> 
                
                
                                   
                </section>

                <section id="Formation">
                <?php include("php/formation.php"); ?>
                
                                   
                </section>  

                 
                </section>

                <section id="contact">
                <?php include("php/contact.php"); ?>

                   
                </section>  
                       
               
            
                

                
            
                
            
            
        </main>
    </body> 
    <footer>
        ZEBI
    </footer>
</html>