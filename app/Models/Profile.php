<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    use HasFactory;

    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo((User::class));
    }

    public function profileImage()
    {

        if ($this->image) {
            $img = $this->image;
        } else {
            $img = "uploads/styledoggo.jpg";
        }
        return '/storage/' . $img;
    }
}
