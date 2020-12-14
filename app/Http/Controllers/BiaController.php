<?php

namespace App\Http\Controllers;

use App\Bia;
use Illuminate\Http\Request;
use App\Helpers\Common;

class BiaController extends Controller 
{
    function assessment(Request $request, $biaId, $departmentId, $sectionId=null) 
    {
        $defaultArgs                = [
            ['bia_id', '=', $biaId],
            ['department_id', '=', $departmentId],
            ['section_id', '=', $sectionId],
        ];
        $helper                     = new \App\Helpers\BiaHelper($defaultArgs);
        $services                   = \App\Biaservice::where('department_id', '=', $departmentId)->get();
        $defaults                   = \App\BiaAssessment::where($defaultArgs)->get();
        $data                       = [];
        $data['biaId']              = (int) $biaId;
        $data['departmentId']       = (int) $departmentId;
        $data['sectionId']          = (int) $sectionId;
        $data['bia']                = \App\Bia::findOrFail($biaId)->first();


        $data['services']           = $services;
        if ($defaults) {
            foreach ($defaults as $default) {
                $data[$default->meta] = json_decode($default->data);
            }
        }
        if ( $sectionId == 3 ) {
            $data['section']        = 'plan';
            $data['questions']      = $helper->questions($services);
        } else if ( $sectionId == 2 ) {
            $data['section'] = 'service_process';
            // COMPANY DATA
            $data['mto_flds']       = [0 => 'Over 3-Days', 2 => '72-hours', 6 => '24-hours', 10 => '0-4 hours'];
            $data['service_flds']   = ['0' => '$0 to $10,000', '1' => '$10,000 to $50,000', '4' => '$50,000 to $150,000', '8' => '$150,000 to $300,000', '16' => 'Over $300,000'];
            $data['service_weights']= ['1' => 'Normal', '2' => 'Impoatant', '3' => 'Vital'];
            $data['impacts']        = ['Finance', 'Reputation', 'Operational', 'Legal and Regulatory Compliance', 'Health and Safety'];
            $data['impact_flds']    = ['0' => 'No to Low', '1' => 'Low to Moderate', '2' => 'Moderate to High', '5' => 'High', '7' => 'High to Catastrophic'];
            $data['rpo_flds']       = ['0-4 hours', '1-day', '3-days', '1-week'];
            $data['tiers']          = [
                ['id' => 'tier_1', 'name' => 'TIER 1 (0-4 HOURS)'], 
                ['id' => 'tier_2', 'name' => 'TIER 2 (24 - HOURS)'], 
                ['id' => 'tier_3', 'name' => 'TIER 3 (3 - DAYS)'], 
                ['id' => 'tier_4', 'name' => 'TIER 4 (7 - DAYS)'], 
                ['id' => 'tier_5', 'name' => 'TIER 5 (2-4 WEEKS)']
            ];
            $data['questions']      = $helper->questions($services);
        } else {
            $data['section']        = 'department_questionaire';
        }
        $data['helper']             = $helper;
        // dd($data);
        return view('bia.assessment', $data);
    }
    public function store(Request $request, $biaId, $departmentId, $sectionId) 
    {
        // $validator = Validator::make($request->all(), [
        //  'name' => 'required',
        //  'email' => 'required|email',
        //  'phone' => 'required|numeric'
        // ]);
        if (request()->ajax()) {
            $input = $this->clean($request->all());
            if ( !empty($input['meta']) ) {
                try{
                    $assessment = \App\BiaAssessment::searchBia($biaId)
                        ->searchDepartment($departmentId)
                        ->searchDepartment($departmentId)
                        ->searchMeta($input['meta'])
                        ->first();
                    if ( !$assessment ) $assessment = new \App\BiaAssessment;
                    $assessment->bia_id         = $biaId;
                    $assessment->department_id  = $departmentId;
                    $assessment->section_id     = $sectionId;
                    $assessment->meta           = $input['meta'];
                    $assessment->reset          = $input['reset'];
                    $assessment->data           = $input['data'];
                    $assessment->save();


                    return ['code' => 200, 'status' => 'success', 'message' => 'Inserted successfully'];
                }
                catch(Exception $e) {
                    return ['code' => 201, 'status' => 'failed', 'message' => 'operation failed'];
                }
            }
        } else {
            $param = ['bia'=>$biaId, 'department'=>$departmentId, 'section'=>$sectionId];
            $input = $this->clean($request->all());
            if ( !empty($input['meta']) ) {
                try{
                    $assessment = \App\BiaAssessment::searchBia($biaId)
                        ->searchDepartment($departmentId)
                        ->searchDepartment($departmentId)
                        ->searchMeta($input['meta'])
                        ->first();
                    if ( !$assessment ) $assessment = new \App\BiaAssessment;
                    $assessment->bia_id         = $biaId;
                    $assessment->department_id  = $departmentId;
                    $assessment->section_id     = $sectionId;
                    $assessment->meta           = $input['meta'];
                    $assessment->reset          = $input['reset'];
                    $assessment->data           = $input['data'];
                    $assessment->save();


                    return redirect()
                        ->route('bia.assessment', $param)
                        ->with('status2',"Insert successfully")
                        ->with('status',"Insert successfully");
                }
                catch(Exception $e){
                    return redirect()->route('bia.assessment', $param)->with('failed',"operation failed");
                }
            }
            return redirect()->route('bia.assessment', $param)->with('failed',"operation failed");
        }
    }
    function reset( Request $request, $biaId, $departmentId, $sectionId=null ) 
    {
        if ( request()->ajax() && !empty($biaId) ) {
            if ( !empty($biaId) && !empty($departmentId) && !empty($sectionId) ) {
                try{
                    $args   = [ ['bia_id', '=', $biaId] ];
                    if ( !empty($departmentId) ) $args[] = ['department_id', '=', $departmentId];
                    if ( !empty($sectionId) ) $args[] = ['section_id', '=', $sectionId];
                    $status = \App\BiaAssessment::where($args)->delete();
                    if ( $status ) return ['code' => 200, 'status' => 'success', 'message' => 'Data has been removed successfully'];
                }
                catch(Exception $e) {
                    return ['code' => 201, 'status' => 'failed', 'message' => 'operation failed'];
                }
            }
        }
        return ['code' => 202, 'status' => 'failed', 'message' => 'operation failed'];
    }
    public function clean($input) {
        $data = null;
        if ( isset($input['_token']) ) unset($input['_token']);

        if ( !empty($input['meta']) ) { $data['meta'] = $input['meta']; unset($input['meta']); } else { $data['meta'] = null; }
        if ( !empty($input['reset']) ) { $data['reset'] = $input['reset']; unset($input['reset']); } else { $data['reset'] = null; }
        $data['data'] = !empty($input) ? json_encode($input) : null;
        return $data;
    }
}
