<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CSS - Margens e Peddings</title>
    </head>
    <body>
        <?php
            require_once 'menu.php';
        ?>
        <h1>Margin &AMP; Paddind</h1>
        
        <div id="div01">
            <div id="dentro"></div>
        </div>
        <div id="div03">
            <div id="div04"></div>
        </div>
        
        <style>
            #div03{
                width: 200px; height: 200px;
                background-color: purple;
                padding: 20px 5px 30px 50px;
            }
            #div04{
                width: 100%; height: 100%;
                background-color: red;
            }
            
            #div01{
                width: 200px; height: 200px;
                background-color: yellow;
                padding: 20px;
            }
            #dentro{
                width: 100px; height: 100px;
                background-color: blue; 
                margin-left: 30px;
            }
        </style>     
    </body>
</html>












