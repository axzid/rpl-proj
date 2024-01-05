<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budaya extends Model
{
    use HasFactory;

    protected $table = 'budaya';

    protected $fillable = [
        'name',
        'description',
        'daerah_id',
        'cat_id',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }
}
