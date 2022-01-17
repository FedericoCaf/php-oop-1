<?php

class Movie {
  public $name;
  public $genre;
  public $year;
  public $cast;
  public $review = 0;

   function __construct($_name)
     {
      $this->name = $_name;
     }

     public function getReview(){
       $messageReview = 'Capolavoro';
       if($this->review <= 3){
          $messageReview = 'Indecente';
       } elseif($this->review <= 5){
          $messageReview = 'Evitabile';
       } elseif($this->review <= 7){
          $messageReview = 'Discreto';
       } elseif($this->review <= 9){
          $messageReview = 'Ottimo';
       }

       return $messageReview;
     }

  }


