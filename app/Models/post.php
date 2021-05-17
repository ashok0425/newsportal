<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class post extends Model
{
    use HasFactory;
        public function category()
        {
            return $this->belongsTo(category::class);
        }
        public function subcategory()
        {
            return $this->belongsTo(subcategory::class);
        } public function district()
        {
            return $this->belongsTo(district::class);
        } public function subdistrict()
        {
            return $this->belongsTo(subdistrict::class);
        }
        public function user()
        {
            return $this->belongsTo(user::class);
        }
}
