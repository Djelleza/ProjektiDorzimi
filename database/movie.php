<?php

class Movie{
    private $id;
    private $name;
    private $summary;
    private $image;
    private $editedBy;

    function __construct($id,$name,$summary,$image,$editedBy = null){
        $this->id=$id;
        $this->name=$name;
        $this->summary=$summary;
        $this->image=$image;
        $this->editedBy = $editedBy;
    }

    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function getSummary(){
        return $this->summary;
    }
    function getImage(){
        return $this->image;
    }

    function getEditedBy() {
        return $this->editedBy;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setSummary($summary) {
        $this->summary = $summary;
    }

    function setImage($image) {
        $this->image = $image;
    }
}

?>