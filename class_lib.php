<?php
    class ravenclaw
    {
        public $name;
        private $password;
        public static $maxHouseNumber = 4;

        public static function validateHouses($houses){
            if(strlen($houses) >= self::$maxHouseNumber){
                return true;
            }
            else{
                return false;
            }
        }


        function __construct($diadem_name)
        {
            $this->name = $diadem_name;
        }

        protected function set_name($new_name)
        {
            $this->name = $new_name;
        }

        public function get_name()
        {
            return $this->name;
        }
    }

    abstract class founders {
        public $name;
        public $color;

        public function describe(){
            return $this->name . ' is ' . $this->color . '</br>';
        }

        abstract public function personality();
    }

    class Rowena extends founders{
        public function describe(){
            return parent::describe();
        }

        public function personality(){
            return 'Wisdom' . '</br>';
        }
    }

    class Helga extends founders{
          public function describe(){
              return parent::describe();
         }

      public function personality(){
          return 'Loyalty' . '</br>';
        }
    }

    class Salzar extends founders{
         public function describe(){
             return parent::describe();
     }

    public function personality(){
        return 'Ambition' . '</br>';
        }
    }

    class Godric extends founders{
      public function describe(){
          return parent::describe();
    }

     public function personality(){
         return 'Bravery' . '</br>';
      }
    }

    class Hufflepuff extends ravenclaw{

        protected function set_name($new_name){
            if ($new_name == "The Cup") {
                $this->name = $new_name;
            }
            else if($new_name == "The Cup"){
                ravenclaw::set_name($hufflepuff_name);
            }
        }
        function __construct($hufflepuff_name)
        {
            $this->set_name($hufflepuff_name);
        }
    }

