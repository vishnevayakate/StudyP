<?php
namespace app\models;

use Yii;
use yii\base\Model;

class StorageTime extends Model
{
    public $time;
    
    
    
    
    
    public function rules()
    {
        return [
            [['time'], 'required']           
        ];
    }
}
