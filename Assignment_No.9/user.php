<?php


class user
{
  public function __call($name, $arguments)
  {
    echo "<pre>";
    print_r($arguments);
  }
}