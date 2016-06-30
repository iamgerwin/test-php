<?php

class Book
{
  private $title;
  private $author;

  function __construct($title = "None", $author = "None")
  {
    $this->title = $title;
    $this->author = $author;
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
  function setAuthor($author)
  {
    $this->author = $author;
  }

  function getAuthor()
  {
    return $this->author;
  }
 ?>
