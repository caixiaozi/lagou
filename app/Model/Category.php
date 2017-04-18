<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
protected $table = 'category';
public $timestamps = true;
    protected $hidden = [
        '_token',
    ];
protected $fillable = ['name', 'pid','path','display'];
}