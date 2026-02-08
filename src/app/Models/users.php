<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory, Notifiable;

    /**
     * 複数代入可能な属性
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * 非表示にする属性
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * キャストする属性
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * このユーザーが作成したお問い合わせ（任意）
     * ログインユーザーとお問い合わせを紐付ける場合
     */
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
