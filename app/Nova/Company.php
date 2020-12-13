<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Avatar;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\BelongsToMany;
use Benjaminhirsch\NovaSlugField\Slug;
use Benjaminhirsch\NovaSlugField\TextWithSlug;
use Laravel\Nova\Http\Requests\NovaRequest;
use Whitecube\NovaFlexibleContent\Flexible;

class Company extends Resource {
    public static $displayInNavigation = true;
    public static $group = 'Company';
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Company::class;

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
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),
            Avatar::make('Logo', 'logo'),
            TextWithSlug::make(__('Name'), 'name')->sortable()->slug('slug'),
            Slug::make(__('Slug'), 'slug')->rules('required')->creationRules('unique:companies')->updateRules('unique:companies,slug,{{resourceId}}')->sortable(),
            Textarea::make('Description', 'description'),
            Flexible::make('External Dependencies')->addLayout('External Dependency', 'wysiwyg', [
                Text::make('ID'),
                Text::make('Title')
            ])->button('Add New'),
            Flexible::make('Upstream Dependencies')->addLayout('Upstream Dependency', 'wysiwyg', [
                Text::make('ID'),
                Text::make('Title')
            ])->button('Add New'),
            Flexible::make('Desktop Applications')->addLayout('Desktop Application', 'wysiwyg', [
                Text::make('ID'),
                Text::make('Title')
            ])->button('Add New'),
            Text::make(__('Users'), function () { return count($this->users); })->onlyOnIndex(),
            Text::make(__('Departments'), function () { return count($this->Departments); })->onlyOnIndex(),

            hasMany::make(__('Users'), 'users', config('novatoolpermissions.userResource', 'App\Nova\User')),
            hasMany::make(__('Bias'), 'bias', config('novatoolpermissions.biaResource', 'App\Nova\Bia')),
            hasMany::make(__('Departments'), 'departments', config('novatoolpermissions.companybiadepartmentResource', 'App\Nova\Companybiadepartment')),
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
