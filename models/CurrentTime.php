<?php

namespace app\models;

use Yii;
use yii\base\Model;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class CurrentTime extends Model
{
    //test
    
    private $currTime;
    
    function __construct() {
        $this -> currTime = date("d.m.y. H:i:s");
    }
    public function getCurrentTime() {
         return $this -> currTime;     
    }    
    function setCurrentTime() {
        $this -> currTime = date("d.m.y. H:i:s");
    }
}

