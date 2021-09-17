<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recado_superior extends Model
{
    use HasFactory;
    protected $table= 'recado_superior';
    protected $fillable =['priori','recado','slug'];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
