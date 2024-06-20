<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SolutionForest\FilamentTree\Concern\ModelTree;
use Z3d0X\FilamentFabricator\Facades\FilamentFabricator;

class Menu extends Model
{
    use ModelTree;

    protected $fillable = [
        "parent_id",
        "title",
        "order",
        "title",
        "category",
        "route",
        "direct_link",
        "page_id",
        "type",
        "redText",
        "is_active",
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'redText' => 'boolean',
        'page_id' => 'int'
    ];

    protected $appends = [
        'link'
    ];

    public function getLinkAttribute()
    {
        try {
            $type = $this->getAttribute('type');
            return match ($type) {
                'page' => FilamentFabricator::getPageUrlFromId($this->getAttribute('page_id')),
                'direct_link' => $this->getAttribute('direct_link'),
                'route' => route($this->getAttribute('route')),
                default => '#',
            };
        } catch (\Exception $e) {
            return '#';
        }
    }
}
