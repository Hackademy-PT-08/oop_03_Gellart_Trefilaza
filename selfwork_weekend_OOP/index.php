<?php

// Traccia 2:
// - Crea un nuovo file chiamato index.php e, importando la classe appena creata, crea una classe Post con i seguenti attributi:
//     - Titolo
//     - Categoria
//     - Tag

// - Crea delle istanze di classe Post, iniettando la dipendenza Categoria all’interno dell’attributo dedicato. Crea anche dei metodi per visualizzare gli articoli completi.

// require "class.php";

// class Post{
//     public $title;
//     public $category;
//     public $tag;

//     public function __construct($_title, Category $_category, $_tag){
//         $this->title = $_title;
//         $this->category = $_category;
//         $this->tag = $_tag;
//     }

//     public function completePost(){
//         return  $this->title. $this->category->getMyCategory() . $this->tag  . "\n";
//     }
// }

// $post = new Post("Breaking news", new Sport("Basket") , "156");
// $post->completePost()
// // $post->category->getMyCategory()

// Traccia 4:
// - Crea un trait chiamato “Calculator“ definendo le seguenti operazioni tra numeri:
//     public function sum($a, $b) {
//       return $a + $b;
//     }

//     public function sub($a, $b) {
//       return $a - $b;
//     }

//     public function mul($a, $b) {
//       return $a * $b;
//     }

//     public function div($a, $b) {
//       return $a / $b;
//     }

//     public function sqr($a){
//       return sqrt($a);
//     }

// - Crea quindi una classe Rettangolo con i seguenti attributi:
//     - Base (b);
//     - Altezza (h);
// - Il tuo compito sarà quello di creare 3 metodi che andranno a calcolare:
//     - Area → b * h
//     - Perimetro → b * 2 + h * 2
//     - Diagonale → √ hˆ2 + bˆ2 (Tutto sotto radice)
// - Tutte queste operazioni pero' dovranno essere richiamate dal trait Calculator

trait Calculator{
    public function sum($a, $b)
    {
        return $a + $b;
    }

    public function sub($a, $b)
    {
        return $a - $b;
    }

    public function mul($a, $b)
    {
        return $a * $b;
    }

    public function div($a, $b)
    {
        return $a / $b;
    }

    public function sqr($a)
    {
        return sqrt($a);
    }

}


class Rectangle{
    use Calculator;
    public $base;
    public $height;

    public function __construct($_base, $_height){

        $this->base = $_base;
        $this->height = $_height;
    }
    
    // area
    public function calculateArea(){

        echo "Area:" . $this->mul($this->base, $this->height) . "\n";
    }

    // perimeter
    public function calculatePerimeter(){

        $longLate = $this->mul($this->base, 2);
        $heightLate = $this->mul($this->height, 2);

        echo "Perimeter:" . $this->sum($longLate, $heightLate) . "\n";
    }

    // diagonal
    public function findDiagonal(){

        $diagBase = $this->mul($this->base, 2);
        $diagHeight = $this->mul($this->height, 2);
        $diagSum = $this->sum($diagBase, $diagHeight);

        echo "Root:" . $this->sqr(number_format($diagSum,2)) . "\n";

    }
}

$area = new Rectangle(5,9);

$area->calculateArea();
$area->calculatePerimeter();
$area->findDiagonal();