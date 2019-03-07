<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula - CSS</title>
        <link href="estilo.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php
            require_once 'menu.php';
        ?>
        <div style="width: 150px; height: 100px;
             background-color: #ccc;" >
            CSS dentro do Próprio elemento
        </div>
        
        <span>CSS dentro do arquivo</span>
        <span id="span02">Span2</span>
        <style>
            span{
                background-color: blue;
                color: white;
                padding: 30px;
            }
            #span02{
                background-color: black;
            }
        </style>
        
        
        
    </body>
</html>












