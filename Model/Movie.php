<?php

class Movie{
  public $title;
  public $genre;
  public $duration;

  public function _construct(string $_title,string $_genre,int $_duration){
    $this -> title = $_title;
    $this -> genre = $_genre;
    $this -> duration = $_duration;
  }

  public function setImage()
} 