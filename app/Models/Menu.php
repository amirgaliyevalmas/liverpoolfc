<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property mixed id
 */
class Menu extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'menus';
    protected $guarded = false;

    protected $fillable = ['title','sort','url','slug'];

}
