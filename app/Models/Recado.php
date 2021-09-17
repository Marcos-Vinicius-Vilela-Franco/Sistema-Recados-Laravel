<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recado extends Model
{
    use HasFactory;
    protected $table= 'recados';
    protected $fillable =['priori','recado','status','slug'];
    

    public function user(){
        return $this->BelongsToMany(User::class);
    }
}
