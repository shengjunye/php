<?php
class clXML{
    private $arxiu;
    private $llibres;

    function __construct(){
        try{
            if(!file_exists("LLIBRE.XML")){
                throw new Exception("Error en llegir l'arxiu LLIBRES.XML</br>");
            }
            $this->arxiu = "LLIBRE.XML";
            $this->llibres = simplexml_load_file($this->arxiu) or die("Error: Cannot create object");
            $this->index = 0;
        } catch(Exception $e) {
            echo $e->getMessage();
            echo "Linea de l'error: ". $e->getLine();
        }
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
        try {
            if(){
                
            }
            echo "Autor: " . $this->llibres->book[$index]->author . "<br/>";
            echo "Titol: " . $this->llibres->book[$index]->title . "<br/>";
            echo "Genere: " . $this->llibres->book[$index]->genre . "<br/>";
            echo "Preu: " . $this->llibres->book[$index]->price . "<br/>";
            echo "Data publicació: " . $this->llibres->book[$index]->publish_date . "<br/>";
            echo "Descripció: " . $this->llibres->book[$index]->description;
        } catch(Exception $e){

        }

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