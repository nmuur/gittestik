<?php
   class Country {

    public function __construct(
        private string $name,
        private string $domain,
        private string $phoneCode,
    ){}
    
    public function getName() : string {
        return $this->name;
    }
    public function getDomen() : string {
        return $this->domain;
    }
    public function getPhonecode() : string {
        return $this->phoneCode;
    }
}    
