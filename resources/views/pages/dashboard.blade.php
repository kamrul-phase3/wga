@extends('layout.default')
@section('content')
    {{-- {{ dd($currentUser->email) }} --}}
    <div class="row">
        <div class="col-lg-12 col-xxl-12">
            @include('pages.widgets._widget-1', ['class' => 'card-stretch gutter-b'])
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
@endsection
