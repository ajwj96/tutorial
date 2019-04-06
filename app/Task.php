<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Task extends Model
{
    public function getStatusLabelAttribute()
    {
        return Carbon::createFromFormat('Y-m-d', $this->attributes['due_date'])
            ->format('Y/m/d');
    
        $status=$this->attributes['status'];
        switch($status){
            case 1:
                 return "未着手";
            case 2:
                 return "着手中";
            case 3:
                 return "完了";

        // 状態値
        $status = $this->attributes['status'];

        // 定義されていなければ空文字を返す
        if (!isset(self::STATUS[$status])) {
            return '';
        }

        return self::STATUS[$status]['label'];
    }


  
}
}
        
    