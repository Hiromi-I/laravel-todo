<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name'];

    public function getStatusLabelAttribute()
    {
        switch($this->attributes['status']) {
            case 0:
                return '未着手';
            case 1:
                return '進行中';
            case 2:
                return '完了';
            default:
                return '異常';
        }


    }
}
