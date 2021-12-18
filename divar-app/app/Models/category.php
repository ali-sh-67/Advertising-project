<?php



namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;


    protected $table = 'categorys';//this rename table for change migration name
    protected $fillable = [
        'id',
        'user_id',
        'name',
        'name_en',
        'parent_id',
        'icon',        
        'created_at',
        'updated_at',
    ];


    public function Ad()
    {
        return $this->hasMany(Ad::class,'category_id','id');
    }


    public function scoperoot($query)
    {
        $query->where('parent_id', 0);

    }

    public function children()
    {
        return $this->hasMany(category::class, 'parent_id');
    }

    public function User()
    {

        return $this->belongsTo(User::class, 'user_id','id');
    }


/**
 * The attributes that should be hidden for serialization.
 *
 * @var array
 */
protected
$hidden = [
];
}
