<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class School extends Model
{
    use HasFactory, SoftDeletes;

    public const TYPE_STANDALONE = 'standalone';
    public const TYPE_GROUP = 'group';
    public const TYPE_AFFILIATE = 'affiliate';
    public static array $typeLabels = [
        self::TYPE_STANDALONE => '独立学校',
        self::TYPE_GROUP => '区域/教育集团总校',
        self::TYPE_AFFILIATE => '区域/教育集团分校',
    ];

    public $guarded = [];

    public $casts = [
        'name' => 'string',
        'type' => 'string',
        'logo' => 'string',
    ];

    public $attributes = [
        'type' => self::TYPE_STANDALONE,
    ];

    public function academicYear(): HasMany
    {
        return $this->hasMany(AcademicYear::class);
    }

    public function Semester(): HasMany
    {
        return $this->hasMany(Semester::class);
    }
}
