<?php
use yii\base\model;

class ItemImage extends Model{
    public $file1;

    public function rule(){
        return [
            [['file1'],'file','skipOnEmpty'=>false,'extensions'=>'gif,jpg,png'],
        ];
    }
}