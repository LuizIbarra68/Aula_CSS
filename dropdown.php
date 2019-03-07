<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>CSS - DROPDOWN</title>
    </head>
    <body>
        <?php
        require_once 'menu.php';
        ?>
        <h1>Dropdown</h1>
        <div id="dropdown">
            <button id="botao">Menu</button>
            <div id="itens">
                <a href="http://senacrs.com.br">senac</a>
                <a href="http://fb.com">facebook</a>
                <a href="http://twitter.com">twitter</a>
            </div>
        </div>
        
        <div id="dropdown">
            <button id="botao">Menu</button>
            <div id="itens">
                <a href="http://senacrs.com.br">senac</a>
                <a href="http://fb.com">facebook</a>
                <a href="http://twitter.com">twitter</a>
            </div>
        </div>
        <style>
            #botao{
                background-color: #4b5;
                color: white;
                padding: 10px;
                border: none;
                cursor: pointer;
            }
            #dropdown{
                position: relative;
                display: inline-block;
            }
            #itens{
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px;
                
            }
            #itens a{
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }
            #itens a:hover{
                background-color: #ccff00;
            }
            #dropdown:hover #botao{
                background-color: #cc0066;
            }
            #dropdown:hover #itens{
                display: block;
            }
        </style>
        
        
    </body>
</html>
