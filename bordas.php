<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CSS - Bordas</title>
    </head>
    <body>
        <?php
            require_once 'menu.php';
        ?>
        <h1>Bordas</h1>
        
        <div id="div01">Solid</div>
        <div id="div02">Double</div>
        <div id="div03">Dotted</div>
        <div id="div04">Dashed</div>
        <div id="div05">Várias bordas</div>
        <div id="div06"></div>
        <div id="div07"></div>
        <div id="div10"></div>
        
        
        <style>
            #div10{
                width: 100px; height: 100px;
                background-color: red;
                border-radius: 0px 100px 0px 0px;
            }
            
            #div07{
                width: 0px; height: 0px;
                border-color: white white white blue;
                border-width: 100px 0px 100px 200px;
                border-style: solid;
            }
            #div06{
                width: 200px; height: 200px;
                border-color: blue black red yellow;
                border-width: 5px 20px 40px 80px;
                border-style: solid;
            }
            #div05{
                width: 100px; height: 50px;
                border-color: blue black red yellow;
                border-width: 5px 10px 15px 20px;
                border-style: solid dotted double dashed;
            }
            div{
                width: 50px; height: 20px;
                margin: 5px;
            }
            #div04{
                border: dashed 2px red;
            }
            #div03{
                border: dotted 2px black;
            }
           
            #div01{
                border: solid 2px blue;
            }
            #div02{
                border: 2px green double;
            }
        </style>
        
        
        
    </body>
</html>












