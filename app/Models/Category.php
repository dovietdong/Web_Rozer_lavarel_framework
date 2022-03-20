<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = ['name', 'status'];
    // để lavarel không ghi đè lên trường creat_at trong DB của mình, nếu như ko ghi lệnh này sẽ lỗi và phải sửa lại tên trong DB là created_at
    public $timestamps = false;

    //kĩ thuật scope trong lavarel
    public function scopeSearch($query){
        $search_value = request()->search;
        if($search_value){
            $query = $query->where('name','LIKE','%'.$search_value.'%');
            //dd($search_value);
        }
        return $query;
    }
    
    //quan hệ 1-n (thêm s vào product)
    function products()
    {
        return $this->hasMany(product::class);
    }
}
