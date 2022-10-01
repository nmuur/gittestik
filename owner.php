<?php
    class Owner{
        private ?string $middlename = null;

        public function __construct(
            private string $ownername,
            private string $surname,
            private string $number,
            private string $email,
        ){}
        public function getOwnername() : string {
            return $this->ownername;
        }
        public function getSurname() : string {
            return $this->surname;
        }
        public function getNumber() : string {
            return $this->number;
        }
        public function getEmail() : string {
            return $this->email;
        }
        public function setMiddlename(string $middlename) : void {
            $this->middlename=$middlename;
        }
}    
