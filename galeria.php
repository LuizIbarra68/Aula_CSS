<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CSS - Galeria de Fotos</title>
    </head>
    <body>
        <?php
            require_once 'menu.php';
        ?>
        <h1>Galeria Responsiva de Fotos</h1>
        <div class="container">
            <div class="foto">
                <a target="_blank" href="galeria/aurora.jpg">
                    <img src="galeria/aurora.jpg" alt="Aurora Boreal"/>
                    
                </a>
                <div class="descricao">
                    Linda foto da aurora boreal
                </div>
                
            </div>
            
        </div>
       
        <div class="container">
            <div class="foto">
                <a target="_blank" href="galeria/casas.jpg">
                    <img src="galeria/casas.jpg" alt="Casas na montanha"/>
                    
                </a>
                <div class="descricao">
                    Casas encravadas na montanha
                </div>
                
            </div>
            
        </div>
        
        </div>
       
        <div class="container">
            <div class="foto">
                <a target="_blank" href="galeria/passarela.jpg">
                    <img src="galeria/passarela.jpg" alt="Passarela na floresta"/>
                    
                </a>
                <div class="descricao">
                    Passarela que atravessa a floresta
                </div>
                
            </div>
            
        </div>
        
        </div>
       
        <div class="container">
            <div class="foto">
                <a target="_blank" href="galeria/lago.jpg">
                    <img src="galeria/lago.jpg" alt="Lagoa Azul"/>
                    
                </a>
                <div class="descricao">
                    Bela lagoa azul nas montanhas
                </div>
                
            </div>
            
        </div>
        <style>
            .container{
                width: 24%;
                float: left;
                padding: 2px 5px;
            }
            
            @media only screen and ( max-width: 700px){
                .container{
                    width: 49%;
                    margin: 5px 2px;
                }
                .descricao{
                font-size: 14px;
                color: red;
            }
            }
            @media only screen and ( max-width: 500px){
                .container{
                    width: 100%;
                    
                }
                .descricao{
                    font-size: 22px;
                    color: blue;
                }
            }
            .foto{
                border: 1px solid black;
            }
            .foto img{
                width: 100%;
                height: auto;
            }
            .descricao{
                padding: 10px;
                text-align: center;
            }
        </style>
    </body>
</html>











