<?php

class Book
{
  private $title;

  function __construct()
  {

  }

  function setTitle($title)
  {
    $this->title = $title;
  }

  function getTitle()
  {
    return $this->title;
  }
}
 ?>
