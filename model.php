<?php    

class Model {
        public function __construct(
        private string $name,
        private Country $country,
        private string $dateStart,
        private string $specific,
    ){}

    public function getName() : string {
        return $this->name;
    }
    public function getCountry() : string {
        return $this->country;
    }
    public function getDateStart() : string {
        return $this->dateStart;
    }
    public function getSpecific() : string {
        return $this->specific;
    }
}
