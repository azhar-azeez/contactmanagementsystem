<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;


class Contact extends Model
{
    use HasFactory;

    public static function forUser(int $userId) : Collection {
        return Contact::where('user_id', $userId)->get();
    }
}
