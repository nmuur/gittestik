<?php
    class Brand{
        public function __construct(
        private string $name,
        private Country $country,
        private string $ownerinfo,
    ){}

    public function getName() : string {
        return $this->name;
    }
    public function getCountryname() : string {
        return $this->country;
    }
    public function getOwnerinfo() : string {
        return $this->ownerinfo;
    }



}
