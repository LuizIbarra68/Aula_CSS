<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CSS - Tabelas</title>
    </head>
    <body>
        <?php
            require_once 'menu.php';
        ?>
        <h1>Tabelas</h1>
        
        <table>
            <tr>
                <th>Nº</th>
                <th>Nome</th>
                <th>Nota</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Adalto</td>
                <td>10</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Pedro</td>
                <td>6,66</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Litel</td>
                <td>5</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Willian</td>
                <td>9,9</td>
            </tr>
            <tr>
                <td colspan="2">Média</td>
                <td>7,89</td>
            </tr>
        </table>
       
        <style>
            
            tr:nth-child(even){
                background-color: blue;
            }
            tr:last-child td{
                font-weight: bold;
                background-color: black;
            }
            table , th , td{
                border: solid 1px black;
            }
            table{
                background-color: #888;
                border-radius: 10px;
                padding: 5px;
            /*  border-collapse: collapse;  */
            }
            th:first-child{
                border-radius: 10px 0 0 0;
            }
            th:last-child{
                border-radius: 0 10px 0 0;
            }
            tr:last-child td:first-child{
                border-radius: 0 0 0 10px;
            }
            tr:last-child td:last-child{
                border-radius: 0 0 10px 0;
            }
            td{
/*                background-color: red;*/
                color: white;
                padding: 5px;
            }
            th{
                border-width: 3px;
                background-color: cyan;
            }
        </style>
    </body>
</html>












