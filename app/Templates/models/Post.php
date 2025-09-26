<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Validation\Rule;
use App\Traits\QueryScopes;

class {$class} extends Model
{
    use HasFactory, SoftDeletes, QueryScopes;

    protected $fillable = [
        'image',
        'album',
        'publish',
        'follow',
        'order',
        'user_id',
        '{$module}_catalogue_id',
    ];

    protected $table = '{$module}s';

    public function languages(){
        return $this->belongsToMany(Language::class, '{$module}_language' , '{$module}_id', 'language_id')
        ->withPivot(
            'name',
            'canonical',
            'meta_title',
            'meta_keyword',
            'meta_description',
            'description',
            'content'
        )->withTimestamps();
    }
    public function {$module}_catalogues(){
        return $this->belongsToMany({$class}Catalogue::class, '{$module}_catalogue_{$module}' , '{$module}_id', '{$module}_catalogue_id');
    }
}
