<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    schema::create('posts', function (Blueprint $table) {
        $table->id();
        $table->timestamps();
        $table-> string('title');
        $table-> string('author');
        $table->text('post');
    });

}
