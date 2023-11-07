<?php

class TvSerie extends Production{
  public $season;

  public function __construct(int $_season,string $_title,string $_genre, array $_cast, Media $_image = null){
    $this->season = $_season;

    parent::_construct( $_title, $_genre,  $_cast,  $_image);
  }
}