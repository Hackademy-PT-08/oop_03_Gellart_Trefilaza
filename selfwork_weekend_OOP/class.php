<?php


// Traccia 1:
// - Crea un file chiamato class.php e crea una classe astratta di tipo Categoria , con i relativi figli (ovvero che estendono Category) seguendo questa struttura:


//     Category
//     -- Attualita' 
//     -- Sport
//     -- Gossip
//     -- Storia


// - Tutte le classi dovranno avere un metodo astratto chiamato: getMyCategory() che mostri a schermo il valore relativo.

// Traccia 1:

abstract class Category{

    abstract public function getMyCategory();

};

class Attuality extends Category{
    public $attuality;

    public function __construct($_attuality){
        $this->attuality = $_attuality;
    }
    public function getMyCategory(){
        echo "You choose Attuality: $this->attuality" . "\n";
    }

};

class Sport extends Category{
    public $sport;

    public function __construct($_sport){
        $this->sport = $_sport;
    }
    public function getMyCategory(){
        echo "You choose Sport: $this->sport" . "\n";
    }
};

class Gossip extends Category{
    public $gossip;

    public function __construct($_gossip){
        $this->gossip = $_gossip;
    }
    public function getMyCategory(){
        echo "You choose Gossip: $this->gossip" . "\n";
    }
};

class Story extends Category{
    public $story;

    public function __construct($_story){
        $this->story = $_story;
    }
    public function getMyCategory(){
        echo "You choose Story: $this->story" . "\n";
    }
};

// $attuality = new Attuality("Business");
// $sport = new Sport("Basket");
// $gossip = new Gossip("New jordan 1 spiderman edition release!!");
// $story = new Story("WW2");


// $attuality->getMyCategory();
// $sport->getMyCategory();
// $gossip->getMyCategory();
// $story->getMyCategory();




?>