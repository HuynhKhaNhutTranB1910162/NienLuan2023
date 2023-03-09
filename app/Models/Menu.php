<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'parent_id',
        'description',
        'content',
        'active',
    ];
    // public function getParents(){
    //     return Menu::whereNull('parent_id')->with('childrens')->get(['id','name']) ;
    // }


}
