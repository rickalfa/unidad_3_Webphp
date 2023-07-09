<?php 


abstract class Model {

    abstract function get($id);
    abstract function set($id, $dates = array());
    abstract function delete($id);
    abstract function create($dates = array());



}