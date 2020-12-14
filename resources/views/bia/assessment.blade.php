@extends('layout.assessment')
@section('content')
<!--begin::Entry-->
<div id="app" class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
    	@php
            // echo '<br><pre>'.print_r(config('layout.subheader.layout'), true).'</pre>';
        @endphp
        @section('top_buttons')
    		<button class="btn btn-lg btn-info btn-publish" data-id="{{ $biaId }}">Publish</button>
    		<button class="btn btn-lg btn-success btn-save-all">Save All</button>
    		<button class="btn btn-lg btn-warning btn-reset-all">Reset</button>
        @endsection
        {{-- @include('bia.partials._banner') --}}
        @include('bia.partials._menu')
        @include('bia.partials._'. $section)
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->

@endsection

{{-- Scripts Section --}}
@section('scripts')
{{-- <script src="{{ asset('js/bia.js') }}" type="text/javascript"></script> --}}
@include('bia.partials._modal')
@include('bia.partials._js')
@endsection