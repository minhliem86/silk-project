<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    public $table = 'configurations';

    public $primaryKey = 'title';

    protected $fillable = ['title', 'ga_id'];
}