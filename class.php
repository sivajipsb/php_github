 <?php 

// class Movie
// {
//    var $title;
//    var $hero;
//    var $language;

//    function __construct($atitle,$ahero,$alanguage)
//    {
//      $this->title=$atitle;
//      $this->title=$ahero;
//      $this->language=$alanguage;
//    }
// }

// $movie1=new Movie("rrr","ntr","telugu");
// $movie2=new Movie("pushpa","alluarjun","telugu");

// echo $movie1->title;

class cricket{
  var $india;
  var $austraila;
  var $england;

  function __construct($aindia,$aaustraila,$aengland)
  {
      $this->india=$aindia;
      $this->austraila=$aaustraila;
      $this->england=$aengland;
  }
}

$cricket1 = new cricket("sachin","ponting","root");
 echo "$cricket1->india";
 ?> 