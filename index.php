<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html lang="cs-cz">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Min Max OOP</title>
        <link href="styl.css" rel="stylesheet">
    </head>
    <body>
        <p>Zadejte do formuláře počet sloupců a řádků od 1 do 9.</p>
        <form method="POST">
            Počet sloupců<br />
            <input name="rows" type="number" /><br />
            Počet řádků<br />
            <input name="columns" type="number" /><br /><br />
            <input type="submit" value="Vytvoř pole" />
        </form>
        <?php
          mb_internal_encoding('UTF-8');
           require_once('class/Matrix.php');
         if ($_POST) {
            $rows = $_POST['rows'];
            $columns = $_POST['columns'];
            
            $matrix = new Matrix($rows, $columns);
            //$matrix->extract($rows, $columns);
            $matrix->createMatrix($rows, $columns);
            $matrix->findMin();
            $matrix->findMax();
            
         }
            ?>
    </body>
</html>
