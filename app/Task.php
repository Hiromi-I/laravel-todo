<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    const STATUS = [
        0 => '未着手',
        1 => '進行中',
        2 => '完了',
    ];

    protected $fillable = ['name', 'status'];

    public function getStatusLabelAttribute()
    {
        $status = $this->attributes['status'];
        if (isset(self::STATUS[$status])) {
            return self::STATUS[$status];
        } else {
            return '異常';
        }
    }
}
