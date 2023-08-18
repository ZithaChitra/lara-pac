<?php

namespace JohnDoe\BlogPackage\Models;
require_once __DIR__.'/../../vendor/autoload.php';

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  use HasFactory;

    // Disable Laravel's mass assignment protection
    protected $guarded = [];
}

?>