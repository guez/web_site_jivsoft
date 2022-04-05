<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'host',
        'userAgent',
        'url',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public static function storeRecord($request)
    {
        $model = new self($request->all());
        $model->save();
        return $model;
    }



}
