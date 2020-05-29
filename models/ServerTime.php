<?php

namespace app\models;

use Yii;
use yii\base\Model;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class ServerTime extends Model
{
    private $serverTime;
    
    function __construct() {
        $this -> serverTime = date("d.m.y. H:i:s");
    }
    public function getTime(){
        return $this->serverTime;
    }
}
