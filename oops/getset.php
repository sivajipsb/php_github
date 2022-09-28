<?php 

class Movie{
    public $title;
    private $rating;

    function  __construct($atitle,$arating)
    {
        $this->title=$atitle;
        $this->setrating($arating);

    }
   
    function getrating(){
        return $this->rating;
    }

    function setrating($rating)
    {
        if($rating==1||$rating==2||$rating==3)
        return $this->rating=$rating;
        else{
            $this->rating="not rated";
        }
    }
}

$avatar = new Movie("avtar","2");

$avatar->setrating("dog");
echo $avatar->getrating();
?>