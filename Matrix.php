<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Matrix
 *
 * @author Petty
 */
class Matrix {
    /**
     * 
     * @var type int
     */

    public $rows;  
    public $columns;
    public $matrix = [[]];
    public $maxElement = PHP_INT_MIN;
    public $minElement = PHP_INT_MAX;
   
    /**
     * 
     * @param type $rows
     * @param type $columns
     */

    public function __construct($rows, $columns) {

        $this->rows = $rows;
        $this->columns = $columns;
        
    }
    /**
     * Vytvoří matrici ve velikosti zadané uživatelem 
     * a naplní ji náhodnými čísly od -100 do 100
     * $param int $r / řádek
     * $param int $c  / sloupec
     */
        public function createMatrix() {
        $r = $this->rows;
        $c = $this->columns;
echo('<table border="2">');
//Cyklus pro vytvoření pole
        for ($i = 0; $i < $r; $i++) {
           echo('<tr>'); 
            for ($j = 0; $j < $c; $j++) {
               // Naplní pole náhodnými čísly v zadaném rozmezí
                $this->matrix[$i][$j] = rand(-100, 100);
               // Vygeneruje tabulku
                echo('<td>' . $this->matrix[$i][$j] . '</td>');
            }
           echo('</tr>'); 
        }
        echo('</table>');
    }
    /**
     * Nalezne minimální prvek v matrici a vypíše jej
     * $param int $minElement
     */

    public function findMin() {
        if ($this->matrix[rand(-100,100)] < $this->minElement) {
            /** @var type int $minElement */
            $this->minElement = $this->matrix[rand()];
         }
       echo("Minimální prvek je " . $this->minElement . " ;)");
    }
/**
 * Nalezne maximální prvek v matrici a vypíše jej
 * $param int $maxElement
 */
    public function findMax() {
        
        if ($this->matrix[rand()] > $this->maxElement) {
            /** @var type $maxElement */
            $this->maxElement = $this->matrix[rand()];
           }
       echo ("Maximální prvek je " . $this->maxElement . " ;)");
    }
/**
 * Výpis / vyobrazení matice po 
 */
   /** public function extract() {
        echo('<table border="2">');
        for ($i = 0; $i < $this->r; $i++) {
            echo('<tr>');
            for ($j = 0; $j < $this->c; $j++) {
                
                    echo('<td>' . $this->matrix[$i][$j] . '</td>');
                
            }
            echo('</tr>');
        }
        echo('</table>');
       // echo("<p>Maximus v poli je " . $this->maxElement . " a minimus je " . $this->minElement . " .<br /></p>");
        echo('<br />');
    } */

  public function _toString() {
      return $this;
    }

}
