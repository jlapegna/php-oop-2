<!--
REPO: php-oop-2
GOAL:
- Definire la classe Persona caratterizzata da nome e cognome
- Definire la classe Ospite (che eredita da Persona) caratterizzata da nome, cognome e anno di nascita
- Definire la classe Pagante (che eredita da Persona) caratterizzata da nome, cognome e indirizzo (di residenza)
- Per ogni classe definire costruttore e toString in maniera appropriata, eventualmente richiamando i metodi della classe padre
- Eseguire dei test, istanziando ogni classe definita e testando la correttezza dei risultati attesi -->

<?php

  class Person {

    public $name;
    public $lastName;

    function __construct($name, $lastname){
      $this -> name = $name;
      $this -> lastName = $lastname;
    }

    function __toString(){
      return $this -> name . " " .
             $this -> lastName;
    }
  }

  class Guest extends Person {

    public $birthYear;

    function __construct($name, $lastname, $birthYear) {
      parent:: __construct ($name, $lastname);
      $this -> dateOfBirth = $birthYear;
    }

    function __toString() {
      return parent:: __toString() . " "
      . $this -> dateOfBirth;
    }
  }

  class PaidGuest extends Person {

    public $address;

    function __construct($name, $lastname, $address) {

      parent:: __construct ($name, $lastname);
      $this -> address = $address;
    }

    function __toString(){

      return parent:: __toString() . " "
            . $this -> address;

    }
  }

  $person1 = new Person ("Robin", "Hood");
  $person2 = new Person ("Friar", "Tuck");

  echo $person1 . "<br>";
  echo $person2 . "<br>";

  $guest = new Guest ("Maid", "Marian", "2000");
  echo "Guest: " . $guest . "<br>";

  $paidGuest = new PaidGuest ("Little", "John", "3000", "Nottingham Forest");
  echo "Paid Guest: " . $paidGuest . "<br>";
