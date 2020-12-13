@if ( $services )
{{-- Departmental Roles and Contacts --}}
{{-- <pre>{{ print_r($drc, true) }}</pre> --}}
<form class="row assessment-form"  method="POST">
    @csrf
    <input type="hidden" name="meta" value="drc">
    <input type="hidden" name="reset" value="1">
	<div class="col-lg-12">
		<div class="card card-custom mb-8">
			<div class="card-body">
				<div class="d-flex mb-8">
					<div class="title">
						<h3> 1. Departmental Roles and Contacts </h3>
						<p>List all essential personnel and any individuals who have been cross-trained to perform a service/process</p>
					</div>
					<div style="min-width: 100px;" class="text-right ml-auto">
                        <button type="submit" class="btn btn-success btn-save"> <i class="la la-file-alt"></i> Save </button>
                    </div>
				</div>
				<table class="table table-bordered">
					<tr class="bg-blue"> <th colspan="4">ESSENTIAL PERSONNEL AND CROSS-TRAINING</th> </tr>
					<tr class="bg-gray">
						<td> <strong>SERVICE/PROCESS</strong> </td>
						<td> <strong>PERFORMS THIS SERVICE/PROCESS</strong> </td>
						<td> <strong>CAN BE CROSS-TRAINED</strong> </td>
						<td> <strong>COMMENTS</strong> </td>
					</tr>
					@foreach ($services as $service)
                        @php
                            $spName = 'sp_'.$service->id;
                            $spVal = $drc->$spName ?? null;
                            $pspName = 'psp_'.$service->id;
                            $cbctName = 'cbct_'.$service->id;
                            $cmntName = 'cmnt_'.$service->id;
                        @endphp
                        <tr>
                            <th class="no-padding bg-light-gray"> {!! select($spName, '', 'form-control no-radius bg-light-gray', '', $questions, $spVal) !!} </th>
                            <td class="no-padding"> <textarea class="form-control no-radius" name="{{ $pspName }}"> {{ $drc->$pspName ?? null }} </textarea> </td>
                            <td class="no-padding"> <textarea class="form-control no-radius" name="{{ $cbctName }}"> {{ $drc->$cbctName ?? null }} </textarea> </td>
                            <td class="no-padding"> <textarea class="form-control no-radius" name="{{ $cmntName }}"> {{ $drc->$cmntName ?? null }} </textarea> </td>
                        </tr>
                    @endforeach
				</table>
				<p>List all modes of notification and communication e.g. contact lists, phones email, conference bridge etc.</p>
				<table class="table table-bordered">
					<tr class="bg-blue">
						<th colspan="4">MODES OF NOTIFICATION AND COMMUNICATION</th>
					</tr>
					<tr class="bg-gray">
						<td> <strong>SYSTEM</strong> </td>
						<td> <strong>HOW TO USE</strong> </td>
						<td> <strong>SUPPORT ITEMS</strong> </td>
						<td> <strong>ACCESS LIST</strong> </td>
					</tr>
					<tr>
						<td class="no-padding"> <textarea class="form-control no-radius" name="mnc_syst"> {{ $drc->mnc_syst ?? null }} </textarea> </td>
						<td class="no-padding"> <textarea class="form-control no-radius" name="mnc_htu"> {{ $drc->mnc_htu ?? null }} </textarea> </td>
						<td class="no-padding"> <textarea class="form-control no-radius" name="mnc_si"> {{ $drc->mnc_si ?? null }} </textarea> </td>
						<td class="no-padding"> <textarea class="form-control no-radius" name="mnc_al"> {{ $drc->mnc_al ?? null }} </textarea> </td>
					</tr>
				</table>
				<p>List all INTERNAL & EXTERNAL contacts required at the time of disaster</p>
				<table class="table table-bordered">
					<tr class="bg-blue">
						<th colspan="5">INTERNAL CONTACT LIST</th>
					</tr>
					<tr class="bg-gray">
						<td> <strong>POSITION</strong> </td>
						<td> <strong>NAME</strong> </td>
						<td> <strong>OFFICE PHONE</strong> </td>
						<td> <strong>CELL PHONE</strong> </td>
						<td> <strong>EMAIL</strong> </td>
					</tr>
					<tr>
						<td class="no-padding"> <textarea class="form-control no-radius" name="icl_pos"> {{ $drc->icl_pos ?? null }} </textarea> </td>
						<td class="no-padding"> <textarea class="form-control no-radius" name="icl_name"> {{ $drc->icl_name ?? null }} </textarea> </td>
						<td class="no-padding"> <textarea class="form-control no-radius" name="icl_ophn"> {{ $drc->icl_ophn ?? null }} </textarea> </td>
						<td class="no-padding"> <textarea class="form-control no-radius" name="icl_cphn"> {{ $drc->icl_cphn ?? null }} </textarea> </td>
						<td class="no-padding"> <textarea class="form-control no-radius" name="icl_email"> {{ $drc->icl_email ?? null }} </textarea> </td>
					</tr>
				</table>
				<table class="table table-bordered">
					<tr class="bg-blue">
						<th colspan="5">EXTERNAL CONTACT LIST</th>
					</tr>
					<tr class="bg-gray">
						<td> <strong>VENDOR/SUPPLIER</strong> </td>
						<td> <strong>CONTACT</strong> </td>
						<td> <strong>PHONE</strong> </td>
						<td> <strong>EMAIL</strong> </td>
						<td> <strong>COMMENTS</strong> </td>
					</tr>
					<tr>
						<td class="no-padding"> <textarea class="form-control no-radius" name="ecl_vs"> {{ $drc->ecl_vs ?? null }} </textarea> </td>
						<td class="no-padding"> <textarea class="form-control no-radius" name="ecl_contact"> {{ $drc->ecl_contact ?? null }} </textarea> </td>
						<td class="no-padding"> <textarea class="form-control no-radius" name="ecl_phn"> {{ $drc->ecl_phn ?? null }} </textarea> </td>
						<td class="no-padding"> <textarea class="form-control no-radius" name="ecl_email"> {{ $drc->ecl_email ?? null }} </textarea> </td>
						<td class="no-padding"> <textarea class="form-control no-radius" name="ecl_cmnt"> {{ $drc->ecl_cmnt ?? null }} </textarea> </td>
					</tr>
				</table>
				<div class="text-right">
                    <button type="submit" class="btn btn-success btn-save"> <i class="la la-file-alt"></i> Save </button>
                </div>
			</div>
		</div>
	</div>
</form>

{{-- <pre>{{ print_r($tap, true) }}</pre> --}}
<form class="row assessment-form"  method="POST">
    @csrf
    <input type="hidden" name="meta" value="tap">
    <input type="hidden" name="reset" value="1">
	<div class="col-lg-12">
		<div class="card card-custom mb-8">
			<div class="card-body">
				<div class="d-flex mb-8">
					<div class="title">
						<h3 class="mb-8"> 2. Team Action Plans </h3>
						<div class="card">
							<div class="card-body">
								<ul>
									<li class="mb-5">
										<strong> The Business Continuity Team Action Plan outlines the action to be taken and resources to be used to facilitate the continuity of critical business activities within the Primary Office in the event of prolonged business interruption due to major incident impacting core services. </strong>
									</li>
									<li class="mb-5">
										<strong> This plan is not a complete, step- by-step, how-to-do it manual since each crisis situation is unique, with varying levels of threats and business impact. </strong>
									</li>
									<li class="mb-5">
										<strong> The plan suggests action to take and is only guidelines to serve in managing incident. Real life decision for reacting to a major incident must be guide ultimately by the sound judgment and discretion of involved manager and staff. </strong>
									</li>
									<li class="mb-5">
										<strong> Procedures for dealing with day-to-day problems are not dealt with in this plan. Such problems should be taken up under the corporation standard operating procedures. </strong>
									</li>
								</ul>
							</div>
						</div>	
					</div>
				</div>
				<table class="table table-bordered">
					<tr class="bg-blue">
						<th colspan="4">STRATEGY</th>
					</tr>
					<tr class="bg-gray">
						<td> <strong>DAY 1</strong> </td>
						<td> <strong>DAY 2</strong> </td>
						<td> <strong>DAY 3</strong> </td>
						<td> <strong>DAY 7</strong> </td>
					</tr>
					<tr>
						<td class="no-padding"> <textarea class="form-control no-radius" name="day_1"> {{ $tap->day_1 ?? null }} </textarea> </td>
						<td class="no-padding"> <textarea class="form-control no-radius" name="day_2"> {{ $tap->day_2 ?? null }} </textarea> </td>
						<td class="no-padding"> <textarea class="form-control no-radius" name="day_3"> {{ $tap->day_3 ?? null }} </textarea> </td>
						<td class="no-padding"> <textarea class="form-control no-radius" name="day_7"> {{ $tap->day_7 ?? null }} </textarea> </td>
					</tr>
				</table>
				<div class="text-right">
                    <button type="submit" class="btn btn-success btn-save"> <i class="la la-file-alt"></i> Save </button>
                </div>
			</div>
		</div>
	</div>
</form>
@endif