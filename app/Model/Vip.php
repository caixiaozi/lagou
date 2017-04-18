<?
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Vip extends Model
{
    protected $table = 'vip';

    protected $hidden = [
        '_token'
    ];
    protected $fillable = [
        'name', 'email', 'password'
    ];


}