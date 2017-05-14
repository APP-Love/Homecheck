<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="styles/SITE.css" />
	<link rel="stylesheet" type="text/css" href="styles/SITE2.css" />
        <title>
            <?php echo($titre); ?>
        </title>
    </head>
        <div id="global">

         <header>
            <div id="tete">
                <?php echo($entete); ?>
            </div>
         </header> 

            <hr/>   

            <body>
            <div id="corps">
              
                    <?php echo($contenu); ?>
                
            </div>
            </body>
            
            <hr />    

            <footer>
                <?php echo($pied); ?>
            </footer>>
        </div>
</html>