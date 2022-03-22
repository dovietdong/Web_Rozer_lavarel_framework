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
        $cat_id = request()->cat_id;
        if($cat_id){
            $query = $query->where('category_id',$cat_id);
            //dd($search_value);
        }
        return $query;
    }

    //quan hệ 1-1
    public function cat()
    {
        return $this->hasOne(category::class,'id','category_id');
    }

    //giá khuyến mãi
    function scopeSale($query, $limit=4)
    {
        $query = $query->where('sale_price','>','0')->limit($limit)->get();
        return $query;
    }
    //sản phẩm mới
    function scopeNew($query, $limit=4)
    {
        $query = $query->orderBY('id','DESC')->limit($limit)->get();
        return $query;
    }
}