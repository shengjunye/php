<?php
class clXML{
    private $arxiu;
    private $llibres;

    function __construct(){
        $this->arxiu = "LLIBRES.XML";
        $this->llibres = simplexml_load_file($this->arxiu) or die("Error: Cannot create object");
        $this->index = 0;
    }

    public function setIndex($index){
        $this->index = $index;
    }
    public function getLlibres(){
        return $this->llibres;
    }
    public function getIndex(){
        return $this->index;
    }
    public function nodeXML($index){
        $index = (int) $index;
        echo "Autor: " . $this->llibres->book[$index]->author . "<br/>";
        echo "Titol: " . $this->llibres->book[$index]->title . "<br/>";
        echo "Genere: " . $this->llibres->book[$index]->genre . "<br/>";
        echo "Preu: " . $this->llibres->book[$index]->price . "<br/>";
        echo "Data publicació: " . $this->llibres->book[$index]->publish_date . "<br/>";
        echo "Descripció: " . $this->llibres->book[$index]->description;
    }

    public function readalltitles() {
        echo "<ul>";
        foreach($this->llibres->children() as $book) {
            echo "<li>" . $book->title . "</li>";
        } 
        echo "</ul>";
    }

    public function ultimNode(){
        return $this->llibres->count()-1;
    }
}
?>