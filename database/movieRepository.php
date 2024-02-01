<?php
include_once 'databaseConnection.php';

class MovieRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }

    function insertMovie($movie){
        $conn = $this->connection;
    
        $id = $movie->getId();
        $name = $movie->getName();
        $summary = $movie->getSummary();
        $image = $movie->getImage();
        // $editedBy = $movie->getEditedBy();
        $editedBy = ($movie->getEditedBy() !== null) ? $movie->getEditedBy() : 'no edit';
    
        $sql = "INSERT INTO movie (id, name, summary, image,editedBy) VALUES (?, ?, ?, ?,?)";
        $statement = $conn->prepare($sql);
        $statement->execute([$id, $name, $summary, $image,$editedBy]);
    }

    function getAllMovies(){
        $conn= $this->connection;
        $sql ="SELECT * FROM movie";

        $statement=$conn-> query($sql);
        $movie =$statement ->fetchAll();
        return $movie;
    }

    function getMovieById($id){
        $conn=$this->connection;
        $sql ="SELECT * FROM movie WHERE id=?";

        $statement= $conn->prepare($sql);
        $statement->execute([$id]);
        $movie =$statement->fetch();

        return $movie;
    }

    function updateMovie($id,$name,$summary,$image){
        $conn=$this->connection;
        $sql= "UPDATE movie SET name=?, summary=?, image=?, editedBy=? WHERE id=?";
        
        $editedBy = isset($_SESSION['user']) ? $_SESSION['user'] : 'unknown';
        $statement =$conn->prepare($sql);
        $statement-> execute([$name,$summary,$image,$editedBy,$id]);

    }

    function deleteMovie($id){
        $conn = $this->connection;
        $sql="DELETE FROM movie WHERE id=?";

        $statement =$conn->prepare($sql);
        $statement->execute([$id]);
    }
    function getAllMovieNames(){
        $conn = $this->connection;
        $sql = "SELECT name FROM movie";
        
        $statement = $conn->query($sql);
        $movieNames = $statement->fetchAll(PDO::FETCH_COLUMN);
        
        return $movieNames;
    }


}


?>