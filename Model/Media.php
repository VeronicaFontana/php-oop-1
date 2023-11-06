<?php

class Media{
  public $file_name;
  public $name;
  public $type = "image";

  public function _construct(string $_file_name, string $_name)
  {
    $this->file_name = $_file_name;
    $this->name = $_name;
  }
};