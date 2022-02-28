<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $page_content
 */
class Group extends Model
{
    use HasFactory;


    public function getAgeAsString() {

        $values = json_decode($this->age);

        return "$values->min - $values->max";
    }
}
