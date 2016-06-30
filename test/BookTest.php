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
    $books = ["PHP Book", "Ruby Book"];
    foreach($books as $book) {
      $slate = $this->createBook();
      $slate->setTitle($book);

      $this->assertEquals($book, $slate->getTitle());
    }
  }

  private function createBook()
  {
    return new Book();
  }
}
