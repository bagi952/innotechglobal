<?php
/**
 * Created by PhpStorm.
 * User: L502M
 * Date: 2/23/2016
 * Time: 4:18 PM
 */

class placesObject extends mainObject
{

    protected $ParentID;
    protected $Title;
    protected $PostalCode;
    protected $StateID;

    public function __construct()
    {
        parent::__construct();
    }

    public function getParentID(){
        return $this->ParentID;
    }

    public function setParentID($parent_id){
        $this->ParentID = $parent_id;
    }

    public function getTitle(){
        return $this->Title;
    }

    public function setTitle($Title){
        $this->Title = $Title;
    }

    public function getPostalCode(){
        return $this->PostalCode;
    }

    public function setPostalCode($PostalCode){
        $this->PostalCode = $PostalCode;
    }

    public function getStateID(){
        return $this->StateID;
    }

    public function setStateID($StateID){
        $this->StateID = $StateID;
    }
}