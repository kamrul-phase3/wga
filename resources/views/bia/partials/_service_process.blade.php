{{-- {{ dd($service_weights ?? null) }} --}}
@if ( $services )
    <div class="row d-none">
        <div class="col-lg-12">
            <div class="card card-custom mb-8">
                <div class="card-body">
                    <div class="d-flex mb-8">
                        <div class="title">
                            <h3> 1. Provide a high level description of how your business line supports the mission and corporate priorities: </h3>
                            <p>*For Financial Impact - Corporation needs to determine the thresholds that determine the five levels of severity</p>
                        </div>
                    </div>
                    @foreach ($services as $service)
                        @php
                            $serviceId = 'service_'.$service->id;
                            $ser = $$serviceId ?? false;
                            $avg = $$serviceId->avg ?? 0;
                            $serviceCalculation = $helper->serviceCalculation($avg);
                        @endphp
                        {{-- <pre>@php print_r($service ?? null) @endphp</pre> --}}
                        @if ( !empty($impacts) )
                            @php
                            @endphp
                            <form class="assessment-form assessment-services"  method="POST">
                                @csrf
                                <input type="hidden" name="meta" value="service_{{ $service->id }}">
                                <input type="hidden" name="reset" value="1">
                                <input type="hidden" name="avg" class="hidden-avg" value="{{ $avg }}">
                                <div style="min-width: 100px;" class="text-right ml-auto">
                                    <button type="submit" class="btn btn-success btn-save"> <i class="la la-file-alt"></i> Save </button>
                                </div>
                                <table class="table table-bordered">
                                    <tr class="bg-gray">
                                        <th class="invisible"></th>
                                        <th class="invisible"></th>
                                        <th class="invisible"></th>
                                        <th class="invisible"></th>
                                        <th>CRITICALITY LEVEL</th>
                                        <th>CRITICALITY RATING</th>
                                        <th style="width:135px;">CALCULATED RTO</th>
                                    </tr>
                                    <tr>
                                        <th class="bg-gray">SERVICE/PROCESS</th>
                                        <th colspan="3" class="bg-gray">PROCESSING OF BUILDING PERMIT APPLICATIONS</th>
                                        <th class="{{ $serviceCalculation->bg }}"><span class="level">{{ $serviceCalculation->level }}</span></th>
                                        <th class="{{ $serviceCalculation->bg }}"><span class="total">{{ $avg }}</span></th>
                                        <th class="{{ $serviceCalculation->bg }}"><span class="rto">{{ $serviceCalculation->rto }}</span></th>
                                    </tr>
                                    <tr class="bg-blue">
                                        <td> <strong>IMPACT</strong> </td>
                                        <td> <strong>1 DAY</strong> </td>
                                        <td> <strong>3 DAYS</strong> </td>
                                        <td> <strong>1 WEEK</strong> </td>
                                        <td> <strong>2 WEEK</strong> </td>
                                        <td> <strong>4 WEEK</strong> </td>
                                        <td> <strong>WEIGHT</strong> </td>
                                    </tr>
                                    @foreach ($impacts as $impact)
                                        @php
                                            $impactId = idFromString($impact);
                                            $day_1_name = $impactId.'_day_1';
                                            $day_1_val = $$serviceId->$day_1_name ?? false;
                                            $day_1_cls = $helper->colorByValue($day_1_val);
                                            $day_3_name = $impactId.'_day_3';
                                            $day_3_val = $$serviceId->$day_3_name ?? false;
                                            $day_3_cls = $helper->colorByValue($day_3_val);
                                            $week_1_name = $impactId.'_week_1';
                                            $week_1_val = $$serviceId->$week_1_name ?? false;
                                            $week_1_cls = $helper->colorByValue($week_1_val);
                                            $week_2_name = $impactId.'_week_2';
                                            $week_2_val = $$serviceId->$week_2_name ?? false;
                                            $week_2_cls = $helper->colorByValue($week_2_val);
                                            $week_4_name = $impactId.'_week_4';
                                            $week_4_val = $$serviceId->$week_4_name ?? false;
                                            $week_4_cls = $helper->colorByValue($week_4_val);
                                            $weight_name = $impactId.'_weight';
                                            $weight_val = $$serviceId->$weight_name ?? false;
                                            $weight_cls = $helper->colorByValueForWeight($weight_val);
                                            $fields = $impactId == 'finance' ? $service_flds : $impact_flds;
                                            $mto_name = $impactId.'_mto';
                                            $mto_val = $$serviceId->$mto_name ?? false;
                                        @endphp
                                        <tr>
                                            <td class=""> <strong class="text-uppercase">{{ $impact }}</strong> </td>
                                            <td class="no-padding {{ $day_1_cls }}"> {!! select($day_1_name, '', 'form-control no-radius bg-transparent', '', $fields, $day_1_val) !!} </td>
                                            <td class="no-padding {{ $day_3_cls }}"> {!! select($day_3_name, '', 'form-control no-radius bg-transparent', '', $fields, $day_3_val) !!} </td>
                                            <td class="no-padding {{ $week_1_cls }}"> {!! select($week_1_name, '', 'form-control no-radius bg-transparent', '', $fields, $week_1_val) !!} </td>
                                            <td class="no-padding {{ $week_2_cls }}"> {!! select($week_2_name, '', 'form-control no-radius bg-transparent', '', $fields, $week_2_val) !!} </td>
                                            <td class="no-padding {{ $week_4_cls }}"> {!! select($week_4_name, '', 'form-control no-radius bg-transparent', '', $fields, $week_4_val) !!} </td>
                                            <td class="no-padding {{ $weight_cls }}"> {!! select($weight_name, '', 'form-control no-radius bg-transparent biaWeight', '', $service_weights, $weight_val) !!} </td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="6" class="text-right"><strong>Maximum Tolerable Outage (MTO)</strong></td>
                                        <td class="no-padding"> {!! select($mto_name, '', 'form-control no-radius bg-transparent esc', '', $mto_flds, $mto_val) !!} </td>
                                    </tr>
                                </table>
                            </form>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{-- critical impact critera --}}
    {{-- <pre>{{ print_r($cic ?? null, true) }}</pre> --}}
    <form class="row assessment-form d-none"  method="POST">
        @csrf
        <input type="hidden" name="meta" value="cic">
        <input type="hidden" name="reset" value="1">
        <div class="col-lg-12">
            <div class="card card-custom mb-8">
                <div class="card-body">
                    <div class="d-flex mb-8">
                        <div class="title">
                            <h3> 2. For each service/process provide additional details for critical impact critera </h3>
                            <p>Examples Include: Financial, Reputation, Operational, Legal and Regulatory Compliance, Contractual Compliance, Health and Safety</p>
                        </div>
                        <div style="min-width: 100px;" class="text-right ml-auto">
                            <button type="submit" class="btn btn-success btn-save"> <i class="la la-file-alt"></i> Save </button>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <tr class="bg-gray">
                            <th style="width: 300px;">(SERVICE/PROCESS)</th>
                            <th>COMMENTS</th>
                        </tr>
                        @foreach ($services as $service)
                            @php
                                $id = $service->id;
                            @endphp
                            <tr>
                                <td class="bg-light-gray"> <strong class="text-uppercase">{{ $service->name }}</strong> </td>
                                <td class="no-padding"> <textarea class="form-control no-radius" name="{{ $id }}">{{ $cic->$id ?? null }}</textarea> </td>
                            </tr>
                        @endforeach
                    </table>
                    <div class="text-right">
                        <button type="submit" class="btn btn-success btn-save"> <i class="la la-file-alt"></i> Save </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    {{-- maximum acceptable level of data loss --}}
    {{-- <pre>{{ print_r($maldl ?? null, true) }}</pre> --}}
    <form class="row assessment-form d-none"  method="POST">
        @csrf
        <input type="hidden" name="meta" value="maldl">
        <input type="hidden" name="reset" value="1">
        <div class="col-lg-12">
            <div class="card card-custom mb-8">
                <div class="card-body">
                    <div class="d-flex mb-8">
                        <div class="title">
                            <h3> 3. If the IT systems were impacted, what is the maximum acceptable level of data loss (hours/day/weeks)? </h3>
                            <p>This represents the Recovery Point Objective (RPO) or tolerance to lose data</p>
                        </div>
                        <div style="min-width: 100px;" class="text-right ml-auto">
                            <button type="submit" class="btn btn-success btn-save"> <i class="la la-file-alt"></i> Save </button>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <tr class="bg-gray">
                            <th>SERVICE/PROCESS</th>
                            <th>RPO</th>
                            <th>PROCESS TO MANUALLY RECREATE DATA (IF ANY)</th>
                        </tr>
                        @foreach ($services as $service)
                            @php
                                $id = $service->id;
                                $rpoName = 'rpo_'.$id;
                                $rpoVal = $maldl->$rpoName ?? null;
                                $processName = 'process_'.$id;
                                $processVal = $maldl->$processName ?? null;
                            @endphp
                            <tr>
                                <td class="bg-light-gray"> <strong class="text-uppercase">{{ $service->name }}</strong> </td>
                                <td class="no-padding color-two"> {!! select($rpoName, '', 'form-control no-radius color-two', '', $rpo_flds, $rpoVal) !!} </td>
                                <td class="no-padding"> <textarea class="form-control no-radius" name="{{$processName}}">{{ $processVal }}</textarea> </td>
                            </tr>
                        @endforeach
                    </table>
                    <div class="text-right">
                        <button type="submit" class="btn btn-success btn-save"> <i class="la la-file-alt"></i> Save </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    {{-- IT upstream dependencies --}}
    {{-- <pre>{{ print_r($itud ?? null, true) }}</pre> --}}
    <form class="row assessment-form d-none"  method="POST">
        @csrf
        <input type="hidden" name="meta" value="itud">
        <input type="hidden" name="reset" value="1">
        <div class="col-lg-12">
            <div class="card card-custom mb-8">
                <div class="card-body">
                    <div class="d-flex mb-8">
                        <div class="title">
                            <h3> 4(a). List ALL IT upstream dependencies for each service/process </h3>
                            <p> UPSTREAM DEPENDENCIES (IT) - These are services defined within the organizations IT service catalogue DESKTOP APPLICATIONS - These are applications installed locally on user devices (desktops, laptops, tablets etc.) </p>
                        </div>
                        <div style="min-width: 100px;" class="text-right ml-auto">
                            <button type="submit" class="btn btn-success btn-save"> <i class="la la-file-alt"></i> Save </button>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <tr class="bg-gray">
                            <th>INTERNAL FUNCTION (SERVICE/PROCESS)</th>
                            <th style="width: 220px;">UPSTREAM DEPENDENCIES (IT)</th>
                            <th style="width: 180px;">DESKTOP APPLICATIONS</th>
                            <th>COMMENTS</th>
                        </tr>
                        @foreach ($services as $service)
                            @php
                                $id = $service->id;
                                $udName = 'upstreamDependency_'.$id;
                                $daName = 'desktopApplication_'.$id;
                                $commentName = 'comment_'.$id;
                                $commentVal = $itud->$commentName ?? null;

                                $udTitle = 'IT Service Catalogue';
                                if ( !empty($itud->$udName) ) { $udVal = $itud->$udName; $udCls = 'bg-darkred'; } 
                                else { $udVal = null; $udCls = 'bg-lightgreen'; }

                                $daTitle = 'Desktop Catalogue';
                                if ( !empty($itud->$daName) ) { $daVal = $itud->$daName; $daCls = 'bg-darkred'; } 
                                else { $daVal = null; $daCls = 'bg-lightgreen'; }
                            @endphp
                            <tr class="service_{{$id}}" data-id={{$id}}>
                                <td class="bg-light-gray"> <strong class="text-uppercase">{{ $service->name }}</strong> </td>
                                <td class="dependency {{ $udCls }}" data-title="{{ $udTitle }}" data-type="upstream_dependencies"><input type="hidden" id="{{ $udName }}" name="{{ $udName }}" value="{{ $udVal }}"></td>
                                <td class="dependency {{ $daCls }}" data-title="{{ $daTitle }}" data-type="desktop_applications"><input type="hidden" id="{{ $daName }}" name="{{ $daName }}" value="{{ $daVal }}"></td>
                                <td class="no-padding"> <textarea class="form-control no-radius" name="{{$commentName}}">{{ $commentVal }}</textarea></td>
                            </tr>
                        @endforeach
                    </table>
                    <div class="text-right"> <button type="submit" class="btn btn-success btn-save"> <i class="la la-file-alt"></i> Save </button> </div>
                </div>
            </div>
        </div>
    </form>
    {{-- secondary IT service requirements --}}
    {{-- <pre>{{ print_r($sitsr ?? null, true) }}</pre> --}}
    @if ( !empty($tiers) )
        <form class="row assessment-form d-none"  method="POST">
            @csrf
            <input type="hidden" name="meta" value="sitsr">
            <input type="hidden" name="reset" value="1">
            <div class="col-lg-12">
                <div class="card card-custom mb-8">
                    <div class="card-body">
                        <div class="d-flex mb-8">
                            <div class="title">
                                <h3> 4(b). List ALL secondary IT service requirements </h3>
                                <p>Secondary IT service requirements are defined as those which are not required to meet the service/process RTO but are needed at some point in time as part of the business delivery process</p>
                            </div>
                            <div style="min-width: 100px;" class="text-right ml-auto">
                                <button type="submit" class="btn btn-success btn-save"> <i class="la la-file-alt"></i> Save </button>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <tr class="bg-gray">
                                <th>INTERNAL FUNCTION (SERVICE/PROCESS)</th>
                                @foreach ($tiers as $tier)
                                    <th>{{ $tier['name'] }}</th>
                                @endforeach
                            </tr>
                            @foreach ($services as $service)
                                <tr>
                                    <td class="bg-light-gray"> <strong class="text-uppercase">{{ $service->name }}</strong> </td>
                                    @foreach ($tiers as $tier)
                                        @php
                                            $id = $service->id;
                                            $tireName = $tier['id'].'_'.$id;
                                            if ( !empty($sitsr->$tireName) ) { $tireVal = $sitsr->$tireName; $tireCls = 'bg-darkred'; }
                                            else { $tireVal = null; $tireCls = 'bg-lightgreen'; }
                                        @endphp
                                        <td class="dependency {{ $tireCls }}" data-title="IT service requirements" data-type="external_dependencies"><input type="hidden" id="{{ $tireName }}" name="{{ $tireName }}" value="{{ $tireVal }}"></td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </table>
                        <div class="text-right">
                            <button type="submit" class="btn btn-success btn-save"> <i class="la la-file-alt"></i> Save </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endif
     {{-- additional functions --}}
    {{-- <pre>{{ print_r($af ?? null, true) }}</pre> --}}
    <form class="row assessment-form d-none"  method="POST">
        @csrf
        <input type="hidden" name="meta" value="af">
        <input type="hidden" name="reset" value="1">
        <div class="col-lg-12">
            <div class="card card-custom mb-8">
                <div class="card-body">
                    <div class="d-flex mb-8">
                        <div class="title">
                            <h3> 5. List ALL additional functions (cloud providers, mobile apps, suppliers, clients, etc.) that the service/process requires to function </h3>
                            <p>Indicate if this dependency would be required to meet RTO at the MSL</p>
                        </div>
                        <div style="min-width: 100px;" class="text-right ml-auto">
                            <button type="submit" class="btn btn-success btn-save"> <i class="la la-file-alt"></i> Save </button>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <tr class="bg-gray">
                            <th>EXTERNAL DEPENDENCIES (SERVICE/PROCESS)</th>
                            <th>CLOUD PROVIDERS</th>
                            <th>MOBILE APPS</th>
                            <th>OTHER EXTERNAL FUNCTIONS (SUPPLIERS, CLIENTS, ETC.)</th>
                        </tr>
                        @foreach ($services as $service)
                            @php
                                $id = $service->id;
                                $cpName = 'cp_'.$id;
                                $maName = 'ma_'.$id;
                                $otherName = 'other_'.$id;
                                $otherVal = $af->$otherName ?? null;

                                if ( !empty($af->$cpName) ) { $cpVal = $af->$cpName; $cpCls = 'bg-darkred'; } 
                                else { $cpVal = null; $cpCls = 'bg-lightgreen'; }

                                if ( !empty($af->$maName) ) { $maVal = $af->$maName; $maCls = ' bg-darkred'; } 
                                else { $maVal = null; $maCls = 'bg-lightgreen'; }
                            @endphp
                            <tr>
                                <td class="bg-light-gray"> <strong class="text-uppercase">{{ $service->name }}</strong> </td>
                                <td class="dependency {{ $cpCls }}" data-title="Cloud Providers" data-type="external_dependencies"><input type="hidden" id="{{ $cpName }}" name="{{ $cpName }}" value="{{ $cpVal }}"></td>
                                <td class="dependency {{ $maCls }}" data-title="Mobile Apps" data-type="mobile_apps"><input type="hidden" id="{{ $maName }}" name="{{ $maName }}" value="{{ $maVal }}"></td>
                                <td class="no-padding"> <textarea class="form-control no-radius" name="{{$otherName}}">{{ $otherVal }}</textarea></td>
                            </tr>
                        @endforeach
                    </table>
                    <div class="text-right">
                        <button type="submit" class="btn btn-success btn-save"> <i class="la la-file-alt"></i> Save </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    {{-- information and technology requirements --}}
    {{-- <pre>{{ print_r($itr, true) }}</pre> --}}
    <form class="row assessment-form"  method="POST">
        @csrf
        <input type="hidden" name="meta" value="itr">
        <input type="hidden" name="reset" value="1">
        <div class="col-lg-12">
            <div class="card card-custom mb-8">
                <div class="card-body">
                    <div class="d-flex mb-8">
                        <div class="title">
                            <h3> 6. Delivery of service/process - information and technology requirements </h3>
                            <p> It is important to identify and protect those files, records and databases that are imperative for departmental operations Some records are needed to make and receive payments, protect legal and financial rights and maintain confidential information </p>
                        </div>
                        <div style="min-width: 100px;" class="text-right ml-auto">
                            <button type="submit" class="btn btn-success btn-save"> <i class="la la-file-alt"></i> Save </button>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <tr class="bg-blue">
                            <th colspan="5">VITAL RECORDS</th>
                        </tr>
                        <tr class="bg-gray">
                            <th>FILES/DATABASES/PAPER -PLEASE SPECIFY</th>
                            <th>DESCRIPTION</th>
                            <th>LOCATION OF VITAL RECORDS</th>
                            <th>FORMAT</th>
                            <th>UPDATED</th>
                        </tr>
                        <tr>
                            <td class="no-padding"> <textarea class="form-control no-radius" name="fdp"> {{ $itr->fdp ?? null }} </textarea> </td>
                            <td class="no-padding"> <textarea class="form-control no-radius" name="desc"> {{ $itr->desc ?? null }} </textarea> </td>
                            <td class="no-padding"> <textarea class="form-control no-radius" name="lvr"> {{ $itr->lvr ?? null }} </textarea> </td>
                            <td class="no-padding"> <textarea class="form-control no-radius" name="fromat"> {{ $itr->fromat ?? null }} </textarea> </td>
                            <td class="no-padding"> <textarea class="form-control no-radius" name="date"> {{ $itr->date ?? null }} </textarea> </td>
                        </tr>
                    </table>
                    <p>Please detail the technology required to deliver the service/process. Include critical applications/function along with the primary support contact</p>
                    <table class="table table-bordered">
                        <tr class="bg-blue"> <th colspan="7">TECHNOLOGY REQUIRED</th> </tr>
                        <tr class="bg-gray">
                            <th>COMPUTERS, MOBILE DEVICES, NETWORK ACCESS – PLEASE SPECIFY</th>
                            <th>NORMAL</th>
                            <th>#MSL</th>
                            <th>DESKTOP APPLICATIONS</th>
                            <th>FUNCTION</th>
                            <th>SUPPORT CONTACT</th>
                            <th>COMMENTS</th>
                        </tr>
                        @php
                            $daName = 'da';
                            if ( !empty($itr->$daName) ) { $daVal = $itr->$daName; $daCls = 'bg-darkred'; } 
                            else { $daVal = null; $daCls = 'bg-lightgreen'; }
                        @endphp
                        <tr>
                            <td class="no-padding"> <textarea class="form-control no-radius" name="cmn"> {{ $itr->cmn ?? null }} </textarea> </td>
                            <td class="no-padding"> <textarea class="form-control no-radius" name="normal"> {{ $itr->normal ?? null }} </textarea> </td>
                            <td class="no-padding"> <textarea class="form-control no-radius" name="msl"> {{ $itr->msl ?? null }} </textarea> </td>
                            <td class="dependency {{ $daCls }}" data-title="Desktop Applications" data-type="desktop_applications"><input type="hidden" id="{{ $daName }}" name="{{ $daName }}" value="{{ $daVal }}"></td>
                            <td class="no-padding"> <textarea class="form-control no-radius" name="func"> {{ $itr->func ?? null }} </textarea> </td>
                            <td class="no-padding"> <textarea class="form-control no-radius" name="sc"> {{ $itr->sc ?? null }} </textarea> </td>
                            <td class="no-padding"> <textarea class="form-control no-radius" name="cmnt"> {{ $itr->cmnt ?? null }} </textarea> </td>
                        </tr>
                    </table>
                    <div class="text-right">
                        <button type="submit" class="btn btn-success btn-save"> <i class="la la-file-alt"></i> Save </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    {{-- Other Internal Dependencies --}}
    {{-- <pre>{{ print_r($oid ?? null, true) }}</pre> --}}
    <form class="row assessment-form"  method="POST">
        @csrf
        <input type="hidden" name="meta" value="oid">
        <input type="hidden" name="reset" value="1">
        <div class="col-lg-12">
            <div class="card card-custom mb-8">
                <div class="card-body">
                    <div class="d-flex mb-8">
                        <div class="title">
                            <h3> 9. Other Internal Dependencies (Upstream/Downstream) - For each service/process please list all Upstream and Downstream service/process dependencies: </h3>
                        </div>
                        <div style="min-width: 100px;" class="text-right ml-auto">
                            <button type="submit" class="btn btn-success btn-save"> <i class="la la-file-alt"></i> Save </button>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <tr class="bg-blue">
                            <th colspan="4"> UPSTREAM DEPENDENCY - A SERVICES/PROCESS REQUIRED TO SUPPORT THE DELIVERY OF ANOTHER SERVICE/PROCESS DOWNSTREAM DEPENDENCIES - A SERVICES/PROCESS THAT REQUIRES THE SUPPORT OF ANOTHER SERVICE/PROCESS FOR DELIVERY </th>
                        </tr>
                        <tr class="bg-gray">
                            <th>SERVICE/PROCESS</th>
                            <th>UPSTREAM DEPENDENCY</th>
                            <th>DOWNSTREAM DEPENDENCY</th>
                            <th>COMMENTS</th>
                        </tr>
                        @foreach ($services as $service)
                            @php
                                $spName = 'sp_'.$service->id;
                                $spVal = $oid->$spName ?? null;
                                $udName = 'ud_'.$service->id;
                                $ddName = 'dd_'.$service->id;
                                $cmntName = 'cmnt_'.$service->id;
                            @endphp
                            <tr>
                                <th class="no-padding bg-light-gray"> {!! select($spName, '', 'form-control no-radius bg-light-gray', '', $questions, $spVal) !!} </th>
                                <td class="no-padding"> <textarea class="form-control no-radius" name="{{ $udName }}"> {{ $oid->$udName ?? null }} </textarea> </td>
                                <td class="no-padding"> <textarea class="form-control no-radius" name="{{ $ddName }}"> {{ $oid->$ddName ?? null }} </textarea> </td>
                                <td class="no-padding"> <textarea class="form-control no-radius" name="{{ $cmntName }}"> {{ $oid->$cmntName ?? null }} </textarea> </td>
                            </tr>
                        @endforeach
                    </table>
                    <div class="text-right">
                        <button type="submit" class="btn btn-success btn-save"> <i class="la la-file-alt"></i> Save </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endif