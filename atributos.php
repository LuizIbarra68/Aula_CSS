<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CSS - Seletores CSS por Atributos</title>
    </head>
    <body>
        <?php
            require_once 'menu.php';
        ?>
        <h1>Seletores CSS por Atributos</h1>
        <p class="primeiro_paragrafo">Animais</p>
        <p class="animais_caninos">
            Cachorros
            <a target="_blank" href="#"> Ver exemplo</a>
        </p>
        
        <p class="animais_felinos">
            Gatos, onça ...
            <a href="#">Ver exemplo</a>
        </p>
        
        <style>
            P{
                color: blue;
            }
            [class*="mais"]{
                color: green;
            }
            a{
                color: black
            }
            a[target="_blank"]{
                color: #888;
            }
            
        </style>
    </body>
</html>












