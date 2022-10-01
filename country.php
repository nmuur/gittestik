<?php
   class Country {

    public function __construct(
        private string $countryname,
        private string $domen,
        private string $phonecode,
    ){}
    
    public function getCountryname() : string {
        return $this->countryname;
    }
    public function getDomen() : string {
        return $this->domen;
    }
    public function getPhonecode() : string {
        return $this->phonecode;
    }
}  
