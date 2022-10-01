<?php    

class Model {
        public function __construct(
        private string $modelname,
        private Country $country,
        private string $datestart,
        private string $specific,
    ){}

    public function getModelname() : string {
        return $this->modelname;
    }
    public function getCountrycreator() : string {
        return $this->country;
    }
    public function getDatestart() : string {
        return $this->datestart;
    }
    public function getSpecific() : string {
        return $this->speific;
    }
}
