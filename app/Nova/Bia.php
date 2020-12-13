<?php

namespace App\Nova;

use App\User;
use App\Company;
use App\BiaDepartment;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Avatar;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Http\Requests\NovaRequest;

class Bia extends Resource {
    public static $displayInNavigation = true;
    public static $group = 'BIA';
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Bia::class;

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

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public static function label() {
        return 'Bias';
    }
    public function fields(Request $request) {
        return [
            ID::make(__('ID'), 'id')->sortable(),
            Avatar::make('Logo', 'logo'),
            Text::make(__('Name'), 'name')->sortable(),
            Textarea::make('Description', 'description'),
            BelongsTo::make(__('Company'), 'company', config('novatoolpermissions.companyResource', 'App\Nova\Company')),
            HasMany::make(__('Departments'), 'departments', config('novatoolpermissions.biadepartmentResource', 'App\Nova\BiaDepartment')),
            Select::make(__('Status'), 'status')->options(['published'=>'Published', 'active'=>'Active', 'draft'=>'Draft']),
            // HasMany::make('BIA Departments', 'bia_departments', BiaDepartments::class)->nullable(),
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
