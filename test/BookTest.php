<?php
require_once __DIR__. '/../Book.php';

class BookTest extends PHPUnit_Framework_TestCase
{

  private $book;

  function setUp()
  {
    $this->book = new Book();
  }

  function testHasATitle()
  {
    $this->book->setTitle("Nice Book");

    $this->assertEquals("Nice Book", $this->book->getTitle());
  }
}
