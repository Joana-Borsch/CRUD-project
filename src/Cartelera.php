<?php
namespace App;

class Cartelera{

    public function __construct($id="no id", $name="no name", $session="no session", $hall="no hall", $price="no price"){

        $this->id=$id;
        $this->name=$name;
        $this->session=$session;
        $this->hall=$hall;
        $this->price=$price;
    }

    public static function createMovie($id="no id", $name="no name", $session="no session", $hall="no hall", $price="no price"){

        $Movie1= new Cartelera($id, $name, $session, $hall, $price);
        return $Movie1;
    }



    public static function readMovieName($Movie){
        echo "$Movie->name";
        return $Movie->name;
    }
    public static function addMovieName($list, $movieName){
       
        array_push($list, $movieName);

        return $list;
    }
    public static function createEmptyList(){
        $list=array();
        return $list;
    }
    public static function deleteMovie($Movie, $listOfMovies){

        $id=$Movie->id;
        unset($listOfMovies[$id]);
        return $listOfMovies;
        
    }

    public static function generateID($list){
        $count=0;
        foreach ($list as &$value){
            $value->id=$count;
            $count++;
        }
        return $list;
    }

}