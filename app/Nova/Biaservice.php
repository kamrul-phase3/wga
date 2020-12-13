<?php

namespace App\Nova;

use App\Nova\Biadepartment;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Avatar;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Http\Requests\NovaRequest;

class Biaservice extends Resource {
    public static $displayInNavigation = true;
    public static $group = 'BIA';
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Biaservice::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = ['id', 'name'];
    public static function label() {
        return 'Services';
    }
    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request) {
        return [
            ID::make(__('ID'), 'id')->sortable(),
            BelongsTo::make(__('Department'), 'department', BiaDepartment::class)->displayUsing(function ($department) {
                return \App\Companybiadepartment::where('id', '=', $department->companybiadepartment_id)->first()->name;
            }),
            Text::make(__('Name'), 'name')->sortable(),
            Textarea::make(__('Financial (per day)'), 'financial_per_day')->hideFromIndex(),
            Textarea::make(__('Impact'), 'impact')->hideFromIndex(),
            Textarea::make(__('Criteria Weights'), 'criteria_weights')->hideFromIndex(),
            Select::make(__('Status'), 'status')->options(['published'=>'Published', 'active'=>'Active', 'draft'=>'Draft']),
        ];
    }
    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
