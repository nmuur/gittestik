<?php
    class Marka{
        public function __construct(
        private string $markaname,
        private Country $country,
        private string $ownerinfo,
    ){}

    public function getMarkaname() : string {
        return $this->markaname;
    }
    public function getCountryname() : string {
        return $this->country;
    }
    public function getOwnerinfo() : string {
        return $this->ownerinfo;
    }



}
