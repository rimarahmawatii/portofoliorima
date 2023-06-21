<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;
    protected $table = "portofolio";
    protected $PrimaryKey = "id";
    protected $guarded = [''];
    protected $KeyType ="string";
}
