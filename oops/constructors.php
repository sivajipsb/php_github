<?php 

class Book{

    var $author;
    var $title;
    var $pages;
    function __construct($aauthor,$atitle,$apages)
    {
        $this->author=$aauthor;
        $this->title=$atitle;
        $this->pages=$apages;


    }
}
  $book1 = new Book("jkrowling","harrypotter",500);
  echo $book1->author;
?>