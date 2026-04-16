<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['key', 'value'];
    
    // Helper to get setting value quickly
    public static function get(string $key, $default = null)
    {
        $setting = self::where('key', $key)->first();
        return $setting ? $setting->value : $default;
    }
    
    // Helper to set setting value quickly
    public static function set(string $key, $value)
    {
        self::updateOrCreate(['key' => $key], ['value' => $value]);
    }
}
