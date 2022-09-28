<?php   echo "hello class";


class Book {
   
    var $title;
    var $author;
    var $pages;

}

$book1 = new Book;
$book1->title="harry potter";
$book1->author="jk rowling";
$book1->pages=600;

// like this we can get any number of book templates;

echo $book1->title;
?>