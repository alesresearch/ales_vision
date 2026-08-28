<?php

namespace App\Models;
use Ramsey\Uuid\Uuid;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'title', 'type', 'id_video', 'url_video', 'return_link', 'no_detection_label', 'start_label' ];

    public static function boot()
    {
        parent::boot();

        self::creating(function($model){
            $model->uuid = Uuid::uuid4();
            // ... code here
        });

        self::created(function($model){
            // ... code here
        });

        self::updating(function($model){
            // ... code here
        });

        self::updated(function($model){
            // ... code here
        });

        self::deleting(function($model){
            // ... code here
        });

        self::deleted(function($model){
            // ... code here
        });
    

}

}
