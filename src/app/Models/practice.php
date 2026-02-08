<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'practice';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'category_id',
        'first_name',
        'last_name',
        'gender',
        'email',
        'tel',
        'address',
        'building',
        'detail',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'gender' => 'integer',
        'category_id' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Get the category that owns the contact.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the full name attribute.
     *
     * @return string
     */
    public function getFullNameAttribute()
    {
        return $this->last_name . '　' . $this->first_name;
    }

    /**
     * Get the gender label.
     *
     * @return string
     */
    public function getGenderLabelAttribute()
    {
        return match($this->gender) {
            1 => '男性',
            2 => '女性',
            3 => 'その他',
            default => '未設定',
        };
    }

    /**
     * Get the formatted tel attribute.
     *
     * @return string
     */
    public function getFormattedTelAttribute()
    {
        return $this->tel;
    }

    /**
     * Scope a query to filter by category.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  int  $categoryId
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeByCategory($query, $categoryId)
    {
        return $query->where('category_id', $categoryId);
    }

    /**
     * Scope a query to filter by gender.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  int  $gender
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeByGender($query, $gender)
    {
        return $query->where('gender', $gender);
    }
}