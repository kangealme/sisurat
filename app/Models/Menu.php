<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'desc','role_id'];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function submenus()
    {
        return $this->hasMany(Submenu::class);
    }
}
