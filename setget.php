<?php

class Movie{
    public $title;
   private $rating;

    function __construct($atitle,$arating)
    {
        $this->title=$atitle;
        $this->setmovie($arating);
    }

    function getmovie()
    {
       return $this->rating;
    }
   
    function setmovie($rating)
    {

        if($rating=="1"||$rating=="2"||$rating=="3"||$rating=="4"||$rating=="5")
        {
            $this->rating=$rating;
        }
        else{
            $this->rating="not a valid rating";
        }
        
    }
}

$movie1=new Movie("rrr","7");
   

    // $movie1->setmovie("10");
echo $movie1->getmovie();

?>