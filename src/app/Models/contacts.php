<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contacts extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        // 'name',
        'gender',
        'email',
        'phone',
        'address',
        'building',
        'inquiry-type',
        'message',
    ]; // ユーザーからの入力を許可するフィールドのリスト

}
