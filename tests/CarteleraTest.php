<?php
use PHPUnit\Framework\TestCase;
use App\Cartelera;

final class CarteleraTest extends TestCase
{
    
    public function test_create_movie(){
        
        $Movie= Cartelera::createMovie();

        var_dump($Movie);

        $this->assertSame($id, $Movie->id);
        $this->assertSame($name, $Movie->name);
        $this->assertSame($session, $Movie->session);

   }

   public function test_read_movie_name(){

        $Movie= Cartelera::createMovie(0, "Fast and Furious", 5, 1, 5.5);

        $MovieName= Cartelera::readMovieName($Movie);

        $this->assertSame($MovieName,$Movie->name);
   }

   public function test_create_empty_list(){

        $MovieList=Cartelera::createEmptyList();

        $this->assertEmpty($MovieList);
   }

   public function test_add_movie(){

        $exampleList=array();

        $Movie= Cartelera::createMovie(0, "No", 4, 1, 5.5);

        $UpdatedList= Cartelera::addMovieName($exampleList, $Movie);

        $this->assertContains($Movie, $UpdatedList);
   }
   
   public function test_delete_movie(){

        $Movie1= Cartelera::createMovie(0, "Fast and Furious", 5, 1, 5.5);
        $Movie2= Cartelera::createMovie(1, "Frozen", 5, 1, 5.5);
       
        $exampleList=[$Movie1,$Movie2];

        $MovieToDelete= $Movie1;

        $UpdatedList=Cartelera::deleteMovie($MovieToDelete, $exampleList);

        $this->assertNotContains($MovieToDelete, $UpdatedList);
   }

   public function test_generate_id(){

        $Movie1= Cartelera::createMovie();
        $Movie2= Cartelera::createMovie();
        $Movie3= Cartelera::createMovie();
       
        $List=[$Movie1,$Movie2, $Movie3];

        $UpdatedList= Cartelera::generateID($List);

        $this->assertSame(0,$Movie1->id);
        $this->assertSame(1,$Movie2->id);
        $this->assertSame(2,$Movie3->id);


   }
   

}
