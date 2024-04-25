<?php
    class Exemple 
    {
        private $_prop1 = "";
        private $_prop2 = "";

        public function __construct(array $props) 
        {
            $this->hydrate($props);
        }

        private function hydrate(array $props)
        {
            foreach ($props as $key=>$value)
            {
                $methode = 'set' . ucfirst($key);
                // echo "<br>$methode" ;
                if (method_exists($this, $methode)) {$this->$methode($value);}
                else {echo "<br>la methode n'existe pas";}
            }
        }

        public function getProp1() {return $this->_prop1;}
        public function setProp1($prop1) {$this->_prop1 = $prop1;}

        public function getProp2() {return $this->_prop2;}
        public function setProp2($prop2) {$this->_prop2 = $prop2;}
    
    }

   

?>

<?php

    $o = new exemple(['prop1'=>'a', 'prop2'=>'b']);

    echo '<br>Prop1 = ' . $o->getProp1() ;
    echo '<br>Prop2 = ' . $o->getProp2() ;

?>