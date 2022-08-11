<?php

class Car
{
  public $color;
  public $wheels = 4;
  public $speed = 180;
  public $name = "volvo";

  public function Hello(){
    echo "Hello {$this->name}";
  }
}
