@if(config('layout.self.layout') == 'blank')
    <div class="d-flex flex-column flex-root">
        @yield('content')
    </div>
@else

    @include('layout.base._header-mobile')

    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-row flex-column-fluid page">

            @if( $currentUser->hasRole('viewer') )
                @include('layout.base._sidebar_viewer')
            @else 
                @include('layout.base._sidebar_admin')
            @endif

            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

                @include('layout.base._header')

                <div class="content {{ Metronic::printClasses('content', false) }} d-flex flex-column flex-column-fluid" id="kt_content">

                    @if(config('layout.subheader.display'))
                        @if(array_key_exists(config('layout.subheader.layout'), config('layout.subheader.layouts')))
                            @include('layout.partials.subheader._'.config('layout.subheader.layout'))
                        @else
                            @include('layout.partials.subheader._'.array_key_first(config('layout.subheader.layouts')))
                        @endif
                    @endif

                    @include('layout.base._content')
                </div>

                @include('layout.base._footer')
            </div>
        </div>
    </div>

@endif

@if (config('layout.self.layout') != 'blank')

    @if (config('layout.extras.search.layout') == 'offcanvas')
        @include('layout.partials.extras.offcanvas._quick-search')
    @endif

    @if (config('layout.extras.notifications.layout') == 'offcanvas')
        @include('layout.partials.extras.offcanvas._quick-notifications')
    @endif

    @if (config('layout.extras.quick-actions.layout') == 'offcanvas')
        @include('layout.partials.extras.offcanvas._quick-actions')
    @endif

    @if (config('layout.extras.user.layout') == 'offcanvas')
        @include('layout.partials.extras.offcanvas._quick-user')
        @include('layout.partials.extras.offcanvas._switch_users')
    @endif

    @if (config('layout.extras.quick-panel.display'))
        @include('layout.partials.extras.offcanvas._quick-panel')
    @endif

    @include('layout.partials.extras._scrolltop')

@endif
