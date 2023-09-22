<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SettingField extends Model
{
    use HasFactory;

    protected $fillable = [
        'setting_field_group_id', 'type', 'name', 'label', 'placeholder', 'options', 'is_required'
    ];

    public function group() : BelongsTo {
        return $this->belongsTo(SettingFieldGroup::class, 'setting_field_group_id');
    }
}
