{{-- Aside --}}
@php
    $kt_logo_image = 'logo-light.png';
@endphp
<div class="aside aside-left {{ Metronic::printClasses('aside', false) }} d-flex flex-column flex-row-auto" id="kt_aside">
    {{-- Brand --}}
    <div class="brand flex-column-auto {{ Metronic::printClasses('brand', false) }}" id="kt_brand">
        <div class="brand-logo">
            <a href="{{ url('/') }}">
                <img alt="{{ config('app.name') }}" src="{{ asset('media/logos/'.$kt_logo_image) }}"/>
            </a>
        </div>
        @if (config('layout.aside.self.minimize.toggle'))
            <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
                {{ Metronic::getSVG("media/svg/icons/Navigation/Angle-double-left.svg", "svg-icon-xl") }}
            </button>
        @endif
    </div>
    {{-- Aside menu --}}
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
        <div
            id="kt_aside_menu"
            class="aside-menu my-4 {{ Metronic::printClasses('aside_menu', false) }}"
            data-menu-vertical="1"
            {{ Metronic::printAttrs('aside_menu') }}>
            <ul class="menu-nav {{ Metronic::printClasses('aside_menu_nav', false) }}">
                <li class="menu-item  menu-item-active" aria-haspopup="true"><a href="{{ route('home') }}" class="menu-link ">
                    <span class="svg-icon menu-icon"> {!! $icon->dashboard() !!} </span>
                    <span class="menu-text">Dashboard</span></a>
                </li>
                {{-- <li class="menu-section "> <h4 class="menu-text">GENERAL</h4> <i class="menu-icon flaticon-more-v2"></i> </li> --}}
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">{!! $sidebarMenu->activeBia()->HTML()->get() !!}</li>
            </ul>
        </div>
    </div>
</div>