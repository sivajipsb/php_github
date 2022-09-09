<?php 

class Movie
{
   var $title;
   var $hero;
   var $language;

   function __construct($atitle,$ahero,$alanguage)
   {
     $this->title=$atitle;
     $this->title=$ahero;
     $this->language=$alanguage;
   }
}

$movie1=new Movie("rrr","ntr","telugu");
$movie2=new Movie("pushpa","alluarjun","telugu");

echo $movie1->title;


?>