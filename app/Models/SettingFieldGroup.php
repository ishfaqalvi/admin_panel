<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SettingFieldGroup extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'description'
    ];

    public function fields() : HasMany {
        return $this->hasMany(SettingField::class, 'setting_field_group_id');
    }
}
