<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model {
    use HasFactory;

    public function thumbnail()
    {
        $thumbnailPath = str_replace('photos', 'thumbnails', $this->path);
        return $thumbnailPath;
    }
}
