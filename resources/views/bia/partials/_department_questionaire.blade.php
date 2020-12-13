{{-- {{ dd($intro) }} --}}
<form class="row assessment-form"  method="POST">
    @csrf
    <input type="hidden" name="meta" value="intro">
    <input type="hidden" name="reset" value="1">

    <div class="col-lg-12">
        <div class="card card-custom mb-8">
            <div class="card-body">
                <div class="bia-analysis-form">
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Department:</label>
                            <input type="text" class="form-control" placeholder="Enter Department Name" name="dep_name" value="{{ $intro->dep_name ?? '' }}" />
                            <span class="form-text text-muted">Please enter your department name</span>
                        </div>
                        <div class="col-lg-6">
                            <label>Staff</label>
                            <input type="number" class="form-control" placeholder="0000" name="stuff" value="{{ $intro->stuff ?? '' }}"/>
                            <span class="form-text text-muted">Please enter Staff</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Contact:</label>
                            <input type="text" class="form-control" placeholder="Enter Contact Name" name="contact" value="{{ $intro->contact ?? '' }}" />
                            <span class="form-text text-muted">Please enter your contact name</span>
                        </div>
                        <div class="col-lg-6">
                            <label>Date</label>
                            <input type="date" class="form-control" placeholder="" name="date" value="{{ $intro->date ?? '' }}" />
                            <span class="form-text text-muted">Please enter date</span>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-success btn-save"> <i class="la la-file-alt"></i> Save </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
{{-- {{ dd($hld) }} --}}
<form class="row assessment-form"  method="POST">
    @csrf
    <input type="hidden" name="meta" value="hld">
    <input type="hidden" name="reset" value="1">
    <div class="col-lg-12">
        <div class="card card-custom mb-8">
            <div class="card-body">
                <div class="d-flex mb-8">
                    <h3 class="title"> 1. Provide a high level description of how your business line supports the mission and corporate priorities: </h3>
                    <div style="min-width: 100px;" class="text-right ml-auto">
                    <button type="submit" class="btn btn-success btn-save"> <i class="la la-file-alt"></i> Save </button>
                    </div>
                </div>
                <textarea cols="30" rows="10" class="form-control" name="desc">{{ $hld->desc ?? '' }}</textarea>
                <div class="text-right mt-8">
                    <button type="submit" class="btn btn-success btn-save"> <i class="la la-file-alt"></i> Save </button>
                </div>
            </div>
        </div>
    </div>
</form>
{{-- {{ dd($sp) }} --}}
@if ( $services )
    <form class="row assessment-form"  method="POST">
        @csrf
        <input type="hidden" name="bia_id" value="{{ $biaId }}">
        <input type="hidden" name="department_id" value="{{ $departmentId }}">
        <input type="hidden" name="section_id" value="{{ $departmentId }}">
        <input type="hidden" name="meta" value="sp">
        <input type="hidden" name="reset" value="1">
        <div class="col-lg-12">
            <div class="card card-custom mb-8">
                <div class="card-body">
                    <div class="d-flex mb-8">
                        <h3 class="title"> 2. List All services/processess provided by this business line. </h3>
                        <div style="min-width: 100px;" class="text-right ml-auto">
                            <button type="submit" class="btn btn-success btn-save"> <i class="la la-file-alt"></i> Save </button>
                        </div>
                    </div>
                    <div class="bia-table">
                        <table class="table table-bordered col-120">
                            <tr class="bg-gray">
                                <th>SERVICE/PROCESS</th>
                                <th>DESCRIBE THE KEY PURPOSE OF THE SERVICE/PROCESS AND ANY CONSEQUENCES RESULTING FROM A FAILURE TO PERFORM</th>
                                <th>CRITICAL DATES</th>
                            </tr>
                            @foreach ($services as $service)
                                @php
                                    $descId = 'desc_'.$service->id;
                                    $cdId   = 'cd_'.$service->id;
                                @endphp
                                <tr>
                                    <td class="bg-light-gray"> <strong>{{$service->name}}</strong></td>
                                    <td class="no-padding"> <textarea class="form-control table-area no-radius" name="{{$descId}}">{{ $sp->$descId ?? '' }}</textarea> </td>
                                    <td class="no-padding"> <textarea class="form-control table-area no-radius" name="{{$cdId}}">{{ $sp->$cdId ?? '' }}</textarea> </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="text-right mt-8">
                        <button type="submit" class="btn btn-success btn-save"> <i class="la la-file-alt"></i> Save </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    {{-- {{ dd($efbl) }} --}}
    <form class="row assessment-form"  method="POST">
        @csrf
        <input type="hidden" name="bia_id" value="{{ $biaId }}">
        <input type="hidden" name="department_id" value="{{ $departmentId }}">
        <input type="hidden" name="section_id" value="{{ $departmentId }}">
        <input type="hidden" name="meta" value="efbl">
        <input type="hidden" name="reset" value="1">
        <div class="col-lg-12">
            <div class="card card-custom mb-8">
                <div class="card-body">
                    <div class="d-flex mb-8">
                        <h3 class="title">
                            3. Please explain for your business line only, what informal steps would be taken today if a disaster were to occur.
                        </h3>
                        <div style="min-width: 100px;" class="text-right ml-auto">
                            <button type="submit" class="btn btn-success btn-save"> <i class="la la-file-alt"></i> Save </button>
                        </div>
                    </div>
                    <div class="bia-table">
                        <table class="table table-bordered col-120">
                            <tr class="bg-gray">
                                <th>SERVICE/PROCESS</th>
                                <th>ACTIVITY</th>
                                <th>RESPONSIBILITY</th>
                                <th>ESTIMATE HOW LONG THIS STEP WILL TAKE</th>
                            </tr>
                            @foreach ($services as $service)
                                @php
                                    $activityId = 'activity_'.$service->id;
                                    $respId     = 'resp_'.$service->id;
                                    $estId      = 'est_'.$service->id;
                                @endphp     
                                <tr>
                                    <td class="bg-light-gray"> <strong>{{$service->name}}</strong> </td>
                                    <td class="no-padding"> <textarea class="form-control table-area no-radius" name="{{$activityId}}">{{ $efbl->$activityId ?? '' }}</textarea> </td>
                                    <td class="no-padding"> <textarea class="form-control table-area no-radius" name="{{$respId}}">{{ $efbl->$respId ?? '' }}</textarea> </td>
                                    <td class="no-padding"> <textarea class="form-control table-area no-radius" name="{{$estId}}">{{ $efbl->$estId ?? '' }}</textarea> </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="text-right mt-8">
                        <button type="submit" class="btn btn-success btn-save"> <i class="la la-file-alt"></i> Save </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endif
{{-- {{ dd($eai) }} --}}
<form class="row assessment-form"  method="POST">
    @csrf
    <input type="hidden" name="meta" value="eai">
    <input type="hidden" name="reset" value="1">
    <div class="col-lg-12">
        <div class="card card-custom mb-8">
            <div class="card-body">
                <div class="d-flex mb-8">
                    <h3 class="title"> 4. Explain any issues that would impact these steps </h3>
                    <div style="min-width: 100px;" class="text-right ml-auto">
                        <button type="submit" class="btn btn-success btn-save"> <i class="la la-file-alt"></i> Save </button>
                    </div>
                </div>
                <textarea cols="30" rows="10" class="form-control" name="desc">{{ $eai->desc ?? '' }}</textarea>
                <div class="text-right mt-8">
                    <button type="submit" class="btn btn-success btn-save"> <i class="la la-file-alt"></i> Save </button>
                </div>
            </div>
        </div>
    </div>
</form>