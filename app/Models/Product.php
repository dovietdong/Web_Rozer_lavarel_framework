<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['name', 'price','sale_price','image','descriptions','category_id','status'];
    // để lavarel không ghi đè lên trường creat_at trong DB của mình, nếu như ko ghi lệnh này sẽ lỗi và phải sửa lại tên trong DB là created_at
    public $timestamps = false;

    //kĩ thuật scope trong lavarel
    function scopeSearch($query){
        $search_value = request()->search;
        if($search_value){
            $query = $query->where('name','LIKE','%'.$search_value.'%');
            //dd($search_value);
        }
        return $query;
    }
}
