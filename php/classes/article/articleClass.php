<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once  __DIR__ .'/../../mysql.php';

class article{
    private $id;
    private $Picture, $Title, $ShortPiece, $Article, $video, $editor, $ArtDate,  $category;
    
    function __construct($id) {
        $this->id = $id;
        $q = "select * from `article` where id = ?";
        $param = [$id];
        $sql = new sql();
        $row = $sql->select($q, $param);
        foreach ($row as $r){
            $this->Picture= $r[1];
            $this->Title= $r[2];
            $this->ShortPiece= $r[3];
            $this->Article= $r[4];
            $this->video= $r[4];
            $this->editor= $r[6]; 
            $this->ArtDate= $r[7];
            $this->category= $r[8];
        }
    }
    
    private function Update(String $tab, String $val) {
        $q="update `media`.`article` set $tab = ?";
        $params=[$val];
        $sql = new sql();
        $sql->insert($q, $params);
    }

    function getPicture() {
        return $this->Picture;
    }

    function getTitle() {
        return $this->Title;
    }

    function getShortPiece() {
        return $this->ShortPiece;
    }

    function getArticle() {
        return $this->Article;
    }

    function getVideo() {
        return $this->video;
    }

    function getEditor() {
        return $this->editor;
    }

    function getArtDate() {
        return $this->ArtDate;
    }

    function getCategory() {
        return $this->category;
    }

    function setPicture($Picture): void {
        $this->Picture = $Picture;
        Update("Picture",$Picture);
    }

    function setTitle($Title): void {
        $this->Title = $Title;
        Update("Title",$Title);
    }

    function setShortPiece($ShortPiece): void {
        $this->ShortPiece = $ShortPiece;
        Update("ShortPiece",$ShortPiece);
    }

    function setArticle($Article): void {
        $this->Article = $Article;
        Update("Article",$Article);
    }

    function setVideo($video): void {
        $this->video = $video;
        Update("video",$video);
    }

    function setEditor($editor): void {
        $this->editor = $editor;
        Update("editor",$editor);
    }

    function setArtDate($ArtDate): void {
        $this->ArtDate = $ArtDate;
        Update("ArtDate",$ArtDate);
    }

    function setCategory($category): void {
        $this->category = $category;
        Update("category",$category);
    }


}
