<?php

namespace Database\Seeders;

use App\User;
use App\Company;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder {
    public function run() {
        $users = array_merge($this->phase3Users(), $this->advisors(), $this->viewers());
    	foreach ($users as $user) {
            // SEED USER
            $obj = new User();
            $obj->name = $user['name'];
            $obj->email = $user['email'];
            $obj->password = !empty($user['password']) ? bcrypt($user['password']) : bcrypt('@Hello244');
            $obj->company_id = $this->companyId($user);
            $obj->save();
            // USER ROLES
            $role_id = !empty($user['role_id']) ? $user['role_id'] : 3;
            DB::table('role_user')->insert([
                'role_id' => $role_id,
                'user_id' => $obj->id,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
    	}
    }
    public function phase3Users() {
        return [
            ['name' => 'Kamrul', 'email' => 'kamrul.phase3@gmail.com', 'role' => 'Admin', 'role_id' => 1, 'company_id' => 0 ],
            // ['name' => 'Sajol' , 'email'=> 'sajol.phase3@gmail.com', 'role' => 'Advisor', 'role_id' => 1, 'company_id' => 0 ],
            // ['name' => 'Moynul', 'email' => 'mainul.phase3@gmail.com', 'role' => 'Advisor', 'role_id' => 1, 'company_id' => 0 ],
            // ['name' => 'Bappy' , 'email'=> 'bappy.phase3@gmail.com', 'role' => 'Advisor', 'role_id' => 1, 'company_id' => 0 ],
            ['name' => 'Nur', 'email' => 'nur.mohammad@gmail.com', 'role' => 'Admin', 'role_id' => 1, 'company_id' => 0 ],
        ];
    }
    public function advisors() {
        return [
            // ['name' => 'PORTAL ADMIN PORTAL ADMIN', 'email' => 'info@wgadvisory.ca', 'role' => 'Advisor', 'role_id' => 2, 'company_id' => 0 ],
            ['name' => 'Advisor Wgadvisory', 'email' => 'advisor@wgadvisory.ca', 'role' => 'Advisor', 'role_id' => 2, 'company_id' => 0 ],
            // ['name' => 'Gary Walker', 'email' => 'gjwalker@wgadvisory.ca', 'role' => 'Advisor', 'role_id' => 2, 'company_id' => 0 ],
            // ['name' => 'Gary Walker', 'email' => 'vandelay@wgadvisory.ca', 'role' => 'Advisor', 'role_id' => 2, 'company_id' => 0 ]
        ];
    }
    public function viewers() {
        return [
            [
                'username' => 'Allen.McMillen@opb.ca',
                'name' => 'Allen McMillen',
                'email' => 'Allen.McMillen@opb.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Ontario Pension Board (OPB)',
            ],
            [
                'username' => 'ARushton',
                'name' => 'Amber Rushton',
                'email' => 'Amber.Rushton@burlington.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'City of Burlington',
            ],
            [
                'username' => 'bperry',
                'name' => 'Ben Perry',
                'email' => 'ben.perry@perrygroupconsulting.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Town of Caledon',
            ],
            [
                'username' => 'brian whitelaw',
                'name' => 'Brian Whitelaw',
                'email' => 'brian.whitelaw@perrygroupconsulting.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'County of Essex',
                'company_id' => 3,
            ]
        ];
    }
    public function viewers_all() {
        return [
            [
                'username' => 'aamundson',
                'name' => 'Alex Amundson',
                'email' => 'Alex.Amundson@grey.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Grey County',
            ],
            [
                'username' => 'AArora',
                'name' => 'Ankur Arora',
                'email' => 'ankur.arora@caledon.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Town of Caledon',
            ],
            [
                'username' => 'abuand@whitby.ca',
                'name' => 'Dennis Abuan',
                'email' => 'abuand@whitby.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Town of Whitby',
            ],
            [
                'username' => 'adama',
                'name' => 'Adam Aubin',
                'email' => 'adam@southstormont.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Township of South Stormont',
            ],
            [
                'username' => 'adundas',
                'name' => 'Andrew Dundas',
                'email' => 'dundasa@whitby.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Town of Whitby',
            ],
            [
                'username' => 'Allen.McMillen@opb.ca',
                'name' => 'Allen McMillen',
                'email' => 'Allen.McMillen@opb.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Ontario Pension Board (OPB)',
            ],
            [
                'username' => 'ARushton',
                'name' => 'Amber Rushton',
                'email' => 'Amber.Rushton@burlington.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'City of Burlington',
            ],
            [
                'username' => 'bperry',
                'name' => 'Ben Perry',
                'email' => 'ben.perry@perrygroupconsulting.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Town of Caledon',
            ],
            [
                'username' => 'brian whitelaw',
                'name' => 'Brian Whitelaw',
                'email' => 'brian.whitelaw@perrygroupconsulting.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'County of Essex',
            ],
            [
                'username' => 'Brian.Richards@grey.ca',
                'name' => 'Brian Richards',
                'email' => 'Brian.Richards@grey.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Grey County',
            ],
            [
                'username' => 'brianwhitelaw557@gmail.com',
                'name' => 'Brian Whitelaw',
                'email' => 'brianwhitelaw557@gmail.com',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'County of Essex',
            ],
            [
                'username' => 'bwhitelaw@wgadvisory.ca',
                'name' => 'Brian Whitelaw',
                'email' => 'bwhitelaw@wgadvisory.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'National Bank of Dominica',
            ],
            [
                'username' => 'cbailey',
                'name' => 'Chris Bailey',
                'email' => 'cbailey@middlesex.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Middlesex County',
            ],
            [
                'username' => 'charlene.english@ajax.ca',
                'name' => 'Charlene English',
                'email' => 'charlene.english@ajax.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Town of Ajax',
            ],
            [
                'username' => 'chris.walker@ajax.ca',
                'name' => 'Chris Walker',
                'email' => 'chris.walker@ajax.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Town of Ajax',
            ],
            [
                'username' => 'ciannaveic@hwcdsb.ca',
                'name' => 'Cheryl Ciannavei',
                'email' => 'ciannaveic@hwcdsb.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Hamilton-Wentworth Catholic District School Board',
            ],
            [
                'username' => 'cortinaa@hwcdsb.ca',
                'name' => 'Angelo Cortina',
                'email' => 'cortinaa@hwcdsb.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Hamilton-Wentworth Catholic District School Board',
            ],
            [
                'username' => 'costanza',
                'name' => 'George Costanza',
                'email' => 'costanza@vandelay.com',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Vandelay Industries',
            ],
            [
                'username' => 'Daniel Munns',
                'name' => 'Daniel Munns',
                'email' => 'MunnsD@whitby.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Town of Whitby',
            ],
            [
                'username' => 'debilw',
                'name' => 'Debi Lucas-Switzer',
                'email' => 'debi@southstormont.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Township of South Stormont',
            ],
            [
                'username' => 'dshowler',
                'name' => 'Debbie Showler',
                'email' => 'showlerd@whitby.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Town of Whitby',
            ],
            [
                'username' => 'ebritnell',
                'name' => 'Erin Britnell',
                'email' => 'Erin.Britnell@caledon.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Town of Caledon',
            ],
            [
                'username' => 'edavis',
                'name' => 'Evan Davis',
                'email' => 'Evan.Davis@grey.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Grey County',
            ],
            [
                'username' => 'gbezruki',
                'name' => 'Garry Bezruki',
                'email' => 'garry.bezruki@perrygroupconsulting.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Town of Caledon',
            ],
            [
                'username' => 'GHogan',
                'name' => 'Geoff Hogan',
                'email' => 'geoff.hogan@perrygroupconsulting.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'City of Guelph',
            ],
            [
                'username' => 'hansend@hwcdsb.ca',
                'name' => 'David Hansen',
                'email' => 'hansend@hwcdsb.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Hamilton-Wentworth Catholic District School Board',
            ],
            [
                'username' => 'HChodha',
                'name' => 'Hits Chodha',
                'email' => 'Hits.Chodha@ajax.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Town of Ajax',
            ],
            [
                'username' => 'jettent',
                'name' => 'Tony Jetten',
                'email' => 'jettent@whitby.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Town of Whitby',
            ],
            [
                'username' => 'jgignac',
                'name' => 'Jim Gignac',
                'email' => 'jgignac@countyofessex.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'County of Essex',
            ],
            [
                'username' => 'jmaceachern',
                'name' => 'Jody MacEachern',
                'email' => 'jody.maceachern@grey.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Grey County',
            ],
            [
                'username' => 'kbyrne',
                'name' => 'Kevin Byrne',
                'email' => 'kbyrne@wgadvisory.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Hamilton-Wentworth Catholic District School Board',
            ],
            [
                'username' => 'Kramer',
                'name' => 'Cosmo Kramer',
                'email' => 'Kramer@vandelay.com',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Town of Innisfil',
            ],
            [
                'username' => 'loriann@southstormont.ca',
                'name' => 'Loriann Harbers',
                'email' => 'loriann@southstormont.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Township of South Stormont',
            ],
            [
                'username' => 'lumleyt',
                'name' => 'Tracy Lumley',
                'email' => 'lumleyt@whitby.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Town of Whitby',
            ],
            [
                'username' => 'macphersonr',
                'name' => 'Rod Macpherson',
                'email' => 'macphersonr@whitby.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Town of Whitby',
            ],
            [
                'username' => 'mark.wilton@ajax.ca',
                'name' => 'Mark Wilton',
                'email' => 'mark.wilton@ajax.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Town of Ajax',
            ],
            [
                'username' => 'mcalvert',
                'name' => 'Morgan Calvert',
                'email' => 'mcalvert@middlesex.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Middlesex County',
            ],
            [
                'username' => 'MColquhoun',
                'name' => 'Murray Colquhoun',
                'email' => 'MurrayC@haltonhills.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Town of Halton Hills',
            ],
            [
                'username' => 'mlamb',
                'name' => 'Margaret Lamb',
                'email' => 'mlamb@middlesex.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Middlesex County',
            ],
            [
                'username' => 'myardy',
                'name' => 'Melissa Yardy',
                'email' => 'Melissa.Yardy@caledon.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Town of Caledon',
            ],
            [
                'username' => 'NAlleyne',
                'name' => 'Nicholas Alleyne',
                'email' => 'nicholas.alleyne@caledon.ca ',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Town of Caledon',
            ],
            [
                'username' => 'necker',
                'name' => 'Neil Ecker',
                'email' => 'Neil.Ecker@grey.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Grey County',
            ],
            [
                'username' => 'Nicole.Cooper@ajax.ca',
                'name' => 'Nicole Cooper',
                'email' => 'Nicole.Cooper@ajax.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Town of Ajax',
            ],
            [
                'username' => 'pacep@hwcdsb.ca',
                'name' => 'Paola Paola Pace-Gubekjian',
                'email' => 'pacep@hwcdsb.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Hamilton-Wentworth Catholic District School Board',
            ],
            [
                'username' => 'pdillane',
                'name' => 'Patti Dillane',
                'email' => 'patti.dillane@perrygroupconsulting.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Town of Whitby',
            ],
            [
                'username' => 'randy.bennett@burlington.ca',
                'name' => 'Randy Bennett',
                'email' => 'randy.bennett@burlington.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'City of Burlington',
            ],
            [
                'username' => 'sabrinakc',
                'name' => 'Sabrina Kassim',
                'email' => 'sabrina.kassim-carbonneau@ajax.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Town of Ajax',
            ],
            [
                'username' => 'schase',
                'name' => 'Susan Chase',
                'email' => 'susan.chase@perrygroupconsulting.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Town of Ajax',
            ],
            [
                'username' => 'SEugene@nbd.dm',
                'name' => 'Sheldon Eugene',
                'email' => 'SEugene@nbd.dm',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'National Bank of Dominica',
            ],
            [
                'username' => 'sjones',
                'name' => 'Sheila Jones',
                'email' => 'sheila.jones@burlington.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'City of Burlington',
            ],
            [
                'username' => 'spiper@nbd.dm',
                'name' => 'Suzanne Piper',
                'email' => 'spiper@nbd.dm',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'National Bank of Dominica',
            ],
            [
                'username' => 'whitelawb',
                'name' => 'Brian Whitelaw',
                'email' => 'brian.whitelaw@sympatico.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'Haldimand County',
            ],
            [
                'username' => 'wstamour',
                'name' => 'Wendy St.Amour',
                'email' => 'wstamour@countyofessex.ca',
                'role' => 'Viewer',
                'role_id' => 3,
                'company' => 'County of Essex',
            ],
        ];
    }
    public function companyId($user) {
        $company_id = 0;
        if ( isset($user['company_id']) ) $company_id = $user['company_id'];
        else {
            $company = Company::where('name', $user['company'])->first();
            if ( $company ) $company_id = $company->id;
        }
        return $company_id;
    }
}
