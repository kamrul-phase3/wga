{{-- Subheader V1 --}}
<div class="subheader py-2 {{ Metronic::printClasses('subheader', false) }}" id="kt_subheader">
    <div class="{{ Metronic::printClasses('subheader-container', false) }} d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        {{-- Info --}}
        <div class="d-flex align-items-center flex-wrap mr-1">
            {{-- Page Title --}}
            <h5 class="text-dark font-weight-bold my-2 mr-5">Dashboard</h5><span class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></span>
            @if (!empty($page_breadcrumbs))
                {{-- Separator --}}
                <div class="subheader-separator subheader-separator-ver my-2 mr-4 d-none"></div>
                {{-- Breadcrumb --}}
                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2">
                    <li class="breadcrumb-item"><a href="#"><i class="flaticon2-shelter text-muted icon-1x"></i></a></li>
                    @foreach ($page_breadcrumbs as $k => $item)
                        <li class="breadcrumb-item">
                            <a href="{{ url($item['page']) }}" class="text-muted">
                                {{ $item['title'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
        {{-- Toolbar --}}
        <div class="d-flex align-items-center">
            @hasSection('page_toolbar')
                @section('page_toolbar')
            @endif
            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
                <a href="#" class="btn btn-icon"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Metronic::getSVG("media/svg/icons/Files/File-plus.svg", "svg-icon-success svg-icon-2x") }}
                </a>
                <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                    {{-- Navigation --}}
                    <ul class="navi navi-hover right-drop">
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon"><i class="flaticon2-drop"></i></span>
                                <span class="navi-text">New Group</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon"><i class="flaticon2-rocket-1"></i></span>
                                <span class="navi-text">Groups</span>
                                <span class="label label-light-primary label-inline font-weight-bold">new</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon"><i class="flaticon2-gear"></i></span>
                                <span class="navi-text">Settings</span>
                            </a>
                        </li>
                        <li class="navi-separator mb-3"></li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon"><i class="flaticon2-magnifier-tool"></i></span>
                                <span class="navi-text">Help</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon"><i class="flaticon2-bell-2"></i></span>
                                <span class="navi-text">Privacy</span>
                                <span class="navi-label">
                                    <span class="label label-success label-rounded">5</span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>