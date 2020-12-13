<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanybiadepartmentSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $departments = $this->departments();
    	foreach ($departments as $department) {
	     	DB::table('companybiadepartments')->insert([
	            'name' 			=> $department['name'],
	            'company_id' 	=> $department['company_id'],
	            'created_at' 	=> date("Y-m-d H:i:s"),
	            'updated_at' 	=> date("Y-m-d H:i:s"),
	        ]);
    	}
    }
    public function departments() {
    	return [
            ['name' => 'Communications', 'company' => 'County of Essex', 'company_id' => 1],
            ['name' => 'Communications', 'company' => 'County of Essex', 'company_id' => 2],

            ['name' => 'Procurement', 'company' => 'County of Essex', 'company_id' => 3],
            ['name' => 'Payroll', 'company' => 'County of Essex', 'company_id' => 3],
            ['name' => 'Planning Services', 'company' => 'County of Essex', 'company_id' => 3],
            ['name' => 'Emergency Management Coordination', 'company' => 'County of Essex', 'company_id' => 3],
            ['name' => 'Infrastructure Services', 'company' => 'County of Essex', 'company_id' => 3],
            ['name' => 'Financial Services', 'company' => 'County of Essex', 'company_id' => 3],
            ['name' => 'Office of the CAO', 'company' => 'County of Essex', 'company_id' => 3],
            ['name' => 'Human Resources', 'company' => 'County of Essex', 'company_id' => 3],
            ['name' => 'Accounting', 'company' => 'County of Essex', 'company_id' => 3],
            ['name' => 'Essex Windsor Solid Waste Authority', 'company' => 'County of Essex', 'company_id' => 3],
            ['name' => 'Essex Windsor EMS', 'company' => 'County of Essex', 'company_id' => 3],
            ['name' => 'Council Services', 'company' => 'County of Essex', 'company_id' => 3],
            ['name' => 'Housing and Support Programs', 'company' => 'County of Essex', 'company_id' => 3],
    		['name' => 'Communications', 'company' => 'County of Essex', 'company_id' => 3],
    	];
    }
}
