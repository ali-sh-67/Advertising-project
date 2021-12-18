<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'Ads_id', 
        'description',       
        'created_at',
        'updated_at',
    ];
    public function Ad()
    {
        return $this->belongsTo(Ad::class,'Ads_id','id');
    }
    public function User()
    {

        return $this->belongsTo(User::class, 'user_id','id');
    }
    
}
