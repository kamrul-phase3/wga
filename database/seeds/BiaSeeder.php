<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// TRUNCATE bias; TRUNCATE biadepartments; TRUNCATE biaservices;
class BiaSeeder extends Seeder {
    public function run() {
    	$bias = $this->biaItems();
        $servicesCommon = $this->servicesCommon();
        // BIA
        foreach ($bias as $bia) {
            $biaObj                = new \App\Bia();
            $biaObj->name          = $bia['name'];
            $biaObj->logo          = $bia['logo'];
            $biaObj->description   = $bia['description'];
            $biaObj->company_id    = $this->companyId($bia);
            $biaObj->save();
            // DEPARTMENTS
            if ( !empty($bia['departments']) ) {
                foreach ($bia['departments'] as $department) {
                    $departmentObj                          = new \App\BiaDepartment();
                    $departmentObj->companybiadepartment_id = $this->companybiadepartmentId($department);
                    $departmentObj->bia_id                  = $biaObj->id;
                    $departmentObj->menu_icon               = $department['menu_icon'];
                    $departmentObj->title_icon              = $department['title_icon'];
                    $departmentObj->gq_sp                   = $department['gq_sp'];
                    $departmentObj->gq_bl                   = $department['gq_bl'];
                    $departmentObj->se_6_vr                 = $department['se_6_vr'];
                    $departmentObj->se_6_tr                 = $department['se_6_tr'];
                    $departmentObj->se_7_nc                 = $department['se_7_nc'];
                    $departmentObj->se_7_dcl                = $department['se_7_dcl'];
                    $departmentObj->se_7_ecl                = $department['se_7_ecl'];
                    $departmentObj->se_9_oid                = $department['se_9_oid'];
                    $departmentObj->cp_spct                 = $department['cp_spct'];
                    $departmentObj->cp_tap                  = $department['cp_tap'];
                    $departmentObj->created_at 	            = date("Y-m-d H:i:s");
        	        $departmentObj->updated_at 	           = date("Y-m-d H:i:s");
                    $departmentObj->save();
                    // SERVICES
                    if ( !empty($department['services']) ) {
                        foreach ($department['services'] as $service) {
                            $serviceObj                         = new \App\Biaservice();
                            $serviceObj->name                   = $service['name'];
                            $serviceObj->department_id          = $departmentObj->id;
                            $serviceObj->financial_per_day      = $servicesCommon['financial_per_day'];
                            $serviceObj->impact                 = $servicesCommon['impact'];
                            $serviceObj->criteria_weights       = $servicesCommon['criteria_weights'];
                            $serviceObj->impact_criteria_field  = $servicesCommon['impact_criteria_field'];
                            $serviceObj->created_at             = date("Y-m-d H:i:s");
                            $serviceObj->updated_at             = date("Y-m-d H:i:s");
                            $serviceObj->save();
                        }
                    }
                }
            }
    	}
    }
    public function biaItems() {
    	return [
            [
                'name'          => 'Essex BIA (2020) - Finance Group',
                'display_name'  => 'Finance Group',
                'logo'          => 'icon-bia.png', 
                'company'   	=> 'County of Essex', 
                'description'   => '2020 Business Impact Analysis - Finance Group', 
                'departments'   => [
                    [
                        'name'          => 'Financial Services',
                        'bia_id'        => 0,
                        'menu_icon'     => 'icon-bia.png',
                        'title_icon'    => 'icon-bia.png',
                        'gq_sp'         => 4,
                        'gq_bl'         => 4,
                        'se_6_vr'       => 5,
                        'se_6_tr'       => 5,
                        'se_7_nc'       => 5,
                        'se_7_dcl'      => 7,
                        'se_7_ecl'      => 12,
                        'se_9_oid'      => 5,
                        'cp_spct'       => null,
                        'cp_tap'        => null,
                        'services'      => [
                            ['name'  => 'Strategic Financial Management'],
                            ['name'  => 'Portfolio Management and Reporting'],
                            ['name'  => 'Risk/Insurance Management'],
                            ['name'  => 'Regional Coordination'],
                            ['name'  => 'Strategic Asset Management'],
                            ['name'  => 'Coordination'],
                        ],
                    ],
                    [
                        'name'          => 'Accounting',
                        'bia_id'        => 0,
                        'menu_icon'     => 'icon-bia.png',
                        'title_icon'    => 'icon-bia.png',
                        'gq_sp'         => 4,
                        'gq_bl'         => 4,
                        'se_6_vr'       => 12,
                        'se_6_tr'       => 4,
                        'se_7_nc'       => 5,
                        'se_7_dcl'      => 15,
                        'se_7_ecl'      => 6,
                        'se_9_oid'      => 4,
                        'cp_spct'       => null,
                        'cp_tap'        => null,
                        'services'      => [
                            ['name'  => 'Recording of Financial Transactions'],
                            ['name'  => 'Recording of Sun Parlor Home Resident Accommodation and Trust Financial Transactions'],
                            ['name'  => 'Banking Services'],
                            ['name'  => 'Coordination'],
                            ['name'  => 'Coordination'],
                            ['name'  => 'Coordination'],
                            ['name'  => 'Coordination'],
                            ['name'  => 'Coordination'],
                            ['name'  => 'Coordination'],
                            ['name'  => 'Coordination'],
                            ['name'  => 'Coordination'],
                            ['name'  => 'Coordination'],
                        ],
                    ],
                    [
                        'name'          => 'Procurement',
                        'bia_id'        => 0,
                        'menu_icon'     => 'icon-bia.png',
                        'title_icon'    => 'icon-bia.png',
                        'gq_sp'         => 4,
                        'gq_bl'         => 4,
                        'se_6_vr'       => 6,
                        'se_6_tr'       => 3,
                        'se_7_nc'       => 6,
                        'se_7_dcl'      => 3,
                        'se_7_ecl'      => 1,
                        'se_9_oid'      => 8,
                        'cp_spct'       => null,
                        'cp_tap'        => null,
                        'services'      => [
                            ['name'  => 'Vendor Payment and Employee Reimbursement'],
                            ['name'  => 'Procurement'],
                            ['name'  => 'Reception'],
                        ],
                    ],
                    [
                        'name'          => 'Payroll',
                        'bia_id'        => 0,
                        'menu_icon'     => 'icon-bia.png',
                        'title_icon'    => 'icon-bia.png',
                        'gq_sp'         => 4,
                        'gq_bl'         => 4,
                        'se_6_vr'       => 6,
                        'se_6_tr'       => 4,
                        'se_7_nc'       => 4,
                        'se_7_dcl'      => 13,
                        'se_7_ecl'      => 3,
                        'se_9_oid'      => 6,
                        'cp_spct'       => 15,
                        'cp_tap'        => null,
                        'services'      => [
                            ['name'  => 'Payroll'],
                            ['name'  => 'Benefits'],
                            ['name'  => 'OMERS Pension Plan, WSIB'],
                            ['name'  => 'Budget Preparation'],
                            ['name'  => 'Budget Monitoring and Reporting'],
                        ],
                    ]
                ]
            ],
            // [
            //     'name'          => 'HWCDSB BIA (2020) – Curriculum, Student Achievement & Leadership Development',
            //     'logo'          => 'VfHyJJjEgiwXNygblBaAw1AQsjNblikqhziHaHr8.png', 
            //     'company_id'   	=> 0, 
            //     'description'   => '—', 
            //     'departments'   => [
            //         [
            //             'name'          => 'Department 1',
            //             'bia_id'        => 0,
            //             'menu_icon'     => '',
            //             'title_icon'    => '',
            //             'gq_sp'         => rand(1,3),
            //             'gq_bl'         => rand(1,3),
            //             'se_6_vr'       => rand(1,3),
            //             'se_6_tr'       => rand(1,3),
            //             'se_7_nc'       => rand(1,3),
            //             'se_7_dcl'      => rand(1,3),
            //             'se_7_ecl'      => rand(1,3),
            //             'se_9_oid'      => rand(1,3),
            //             'cp_spct'       => rand(1,3),
            //             'cp_tap'        => rand(1,3),
            //         ]
            //     ], 
            //     'services'      => [
            //         [
            //             'name'                  => 'Department 1',
            //             'bia_id'                => 0,
            //             'financial_per_day'     => 2,
            //             'impact'                => 1,
            //             'criteria_weights'      => 0,
            //             'impact_criteria_field' => null,
            //         ]
            //     ], 
            // ],
        ];
    }
    public function servicesCommon() {
        $br = '&#13;&#10;';
        return [
            'bia_id'                => 0,
            'financial_per_day'     => '0:$0 to $25,000'.$br.'1:$25,000 to $50,000'.$br.'4:$50,000 to $100,000'.$br.'8:$100,000 to $250,000'.$br.'16:Over $250,000',
            'impact'                => 'Reputation'.$br.'Operational'.$br.'Legal and Regulatory Compliance'.$br.'Health and Safety',
            'criteria_weights'      => '1:Normal'.$br.'2:Important'.$br.'3:Vital', 
            'impact_criteria_field' => 'BIA',
        ];
    }
    public function companyId($bia) {
        $company_id = 0;
        if ( isset($bia['company_id']) ) $company_id = $bia['company_id'];
        else {
            $company = \App\Company::where('name', $bia['company'])->first();
            if ( $company ) $company_id = $company->id;
        }
        return $company_id;
    }
    public function companybiadepartmentId($department) {
        $department_id = 0;
        if ( isset($department['name']) ) {
            $companyDepartment = \App\Companybiadepartment::where('name', '=', $department['name'])->firstOrFail();
            if ( $companyDepartment) $department_id = $companyDepartment->id;
        }
        return $department_id;
    }
}
