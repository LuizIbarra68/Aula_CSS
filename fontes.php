<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CSS - Fontes</title>
    </head>
    <body>
        <?php
            require_once 'menu.php';
        ?>
        <h1>Fontes</h1>
       
        <div id="div01">
            Bom dia meus chuchuzinhos! 
            <a href="#">Clique aqui</a> para começar a aula.
        </div>
        <div id="div02">
            Bom dia meus chuchuzinhos!
        </div>
        <style>
            a{ 
                color: yellow;
            }
            a:visited{
                color: red;
            }
            a:hover{
                color: black;
            }
            a:active{
                color: blue;
            }
            #div01 a{
                text-decoration: none;
               
            }
            #div02{
                font-variant: small-caps;
            }
            #div01{
                font-family: "Times New Roman", Times, serif;
                font-style: italic;
                font-size: 1em;
                font-weight: bold;
            }
            
            div{
                font-family: "Times New Roman", Times, serif;
                font-style: italic;
                font-size: 1em;
                font-weight: bold;
            }
        </style>
    </body>
</html>












