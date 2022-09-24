<?php

class User {

    private ?string $middlename = null;

    public function __construct(
        private string $familiya,
        private string $imya,
        private string $data,
    ) {}

    public function getFamiliya() : string {
        return $this->familiya;
    }

    public function getImya() : string {
        return $this->imya;
    }

    public function getData() : string {
        return $this->data;
    }

    public function setMiddlename(string $middlename) : void {
        $this->middlename=$middlename;
    }

    public function getFull() : string {
        return implode(' ', [
        $this->familiya,
        mb_substr($this->imya, 0, 1),
        ($this->middlename === null) ? '' : mb_substr($this->middlename, 0, 1)  
        ]);
       }
       
       public function __toString() : string {
         return $this->getFull();
       }
}




    $user1 = new User('Иванов', 'Иван', '2022-01-01');
    $user1->setMiddlename('pewpew');
    $user2 = new User('Петров', 'Петр', '2022-01-01');
    $user2->setMiddlename('pewpew');
    $user3 = new User('Сидоров', 'Сидор', '2022-01-01');


    echo implode (', ', [
        (string) $user1,
        (string) $user2,
        (string) $user3
    ]);

