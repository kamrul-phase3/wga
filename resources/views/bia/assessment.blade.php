@extends('layout.default')
@section('content')
<!--begin::Entry-->
<div id="app" class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        {{-- @include('bia.partials._banner') --}}
        {{-- @include('bia.partials._menu') --}}
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