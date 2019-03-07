<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CSS - Listas</title>
    </head>
    <body>
        <?php
            require_once 'menu.php';
        ?>
        <h1>Listas</h1>
       
        <div id="div01">
            <ol>
                <li>Internacional</li>
                <li>Grêmio</li>
                <li>Novo Hamburgo</li>
            </ol>
            
            <ul>
                <li>Cachorro</li>
                <li>Gato</li>
                <li>Pássaro</li>
            </ul>
            
        </div>
        <style>
            #div01 ul{
            /*  list-style-type: square;  */ 
                list-style-image: url('imagens/seta.png');
                
            }
            
            #div01 ol{
                list-style-type: lower-alpha;
                background-color: yellow;
                padding: 10px;
            }
            #div01 ol li{
                background-color: #ccc;
                margin: 10px 10px 10px 50px;
                
                padding: 10px;
            }
            
        </style>
    </body>
</html>












