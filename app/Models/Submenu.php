<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    use HasFactory;

    protected $fillable = ['menu_id','name','fa_icon', 'desc'];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
