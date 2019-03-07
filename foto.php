<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>CSS - DROPDOWN foto</title>
        
    </head>
    <body>
        <?php
        require_once 'menu.php';
        ?>
        <h1>DropdownFoto</h1>
        
         <div id="dropdown">
             <img id="foto" src="imagens/beleza.jpg" width="100px" height="100px">
            <div id="itens">
               
                    <div id="fotomaior">
                        <img id="foto" src="imagens/beleza.jpg" width="1000px" height="800px">
                    </div>

            </div>
        </div>
        <div id="dropdown">
        
        <img id="foto2" src="imagens/natureza.jpg" width="100px" height="100px">
        <div id="itens">
            <div id="fotomaior2">
            <img id="foto" src="imagens/natureza.jpg" width="1000px" height="800px">
            </div>
        </div>
        </div>
            <style>
                #dropdown{
                    position: relative;
                    display: inline-block;
                                            
                }
                #itens{
                   display: none;
                   position: absolute;
                   min-width: 160px;
                }
                #dropdown:hover #itens{
                    display: block;
                   
                }
                
            </style>
    </body>
</html>
