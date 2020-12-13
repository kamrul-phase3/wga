<?php

namespace App\Nova;

use App\Nova\Bia;
use App\Nova\Biaservice;
use App\Nova\Companybiadepartment;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Avatar;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Http\Requests\NovaRequest;

class Biadepartment extends Resource {
    public static $displayInNavigation = true;
    public static $group = 'BIA';
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\BiaDepartment::class;

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
        return 'Departments';
    }
    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request) {
        // $BiaDepartment = new \App\BiaDepartment;
        return [
            ID::make(__('ID'), 'id')->sortable(),
            BelongsTo::make(__('BIA'), 'bia', Bia::class),

            Select::make(__('Name'), 'companybiadepartment_id')->options(function() {
                $company_id = $this->bia()->pluck('company_id', 'id')->first();
                $data = \App\Companybiadepartment::where('company_id', '=', $company_id)->pluck('name', 'id')->toArray();
                return $data;
            })->displayUsingLabels()->nullable(),
            Avatar::make('Menu Icon', 'menu_icon')->hideFromIndex(),
            Avatar::make('Title Icon', 'title_icon')->hideFromIndex(),
            Number::make('GQ: sp', 'gq_sp')->hideFromIndex(),
            Number::make('GQ: bl', 'gq_bl')->hideFromIndex(),
            Number::make('SE: 6', 'se_6_vr')->hideFromIndex(),
            Number::make('SE: 6', 'se_6_tr')->hideFromIndex(),
            Number::make('SE: 7', 'se_7_nc')->hideFromIndex(),
            Number::make('SE: 7', 'se_7_dcl')->hideFromIndex(),
            Number::make('SE: 7', 'se_7_ecl')->hideFromIndex(),
            Number::make('SE: 9', 'se_9_oid')->hideFromIndex(),
            Number::make('CP: spct', 'cp_spct')->hideFromIndex(),
            Number::make('CP: tap', 'cp_tap')->hideFromIndex(),
            Select::make(__('Status'), 'status')->options(['published'=>'Published', 'active'=>'Active', 'draft'=>'Draft']),
            HasMany::make('Services', 'services', Biaservice::class),
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
