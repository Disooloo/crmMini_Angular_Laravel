<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leads extends Model
{
    use HasFactory;
    protected $fillable = ['link', 'is_express_delivery', 'comment', 'category_id', 'status_id'];

    public function statuses()
    {
        return $this->belongsTo(Statuses::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
