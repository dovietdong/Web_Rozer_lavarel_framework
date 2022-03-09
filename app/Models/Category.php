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
}
