<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function dependencies(Request $request, $companyId)
    {
    	$helper = new \App\Helpers\BiaHelper;
    	$company = Company::findOrFail($companyId);

    	$input = $request->input('input') ?? null;
    	$defaultDependencies = $request->input('dependencies') ?? null;
        $dependencyType = $request->input('dependency_type') ?? null;
        if ( $dependencyType ) {
    	   return $helper->advisory_checkbox_array($company->$dependencyType, $defaultDependencies, $input);
        }
        return false;
    }
}
