{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Dashboard-->
        <!--begin::Row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-custom mb-8">
                    <div class="card-body">
                        <div class="bia-process">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="cloud-main-thum">
                                        <div class="item bg-orange text-center">
                                            <a href="#">
                                                <h3 class="text-white">Technical Architecture</h3>
                                                <p class="text-white">Application analysis to determine cloud availability and potential modification requirements necessary to enable cloud readiness.</p>
                                                <div class="cloud-main-icon text-center">
                                                    <img src="public/media/cm-top-icon/tecnical-icon.png" alt="" />
                                                </div>
                                            </a>
                                            <div class="cloud-thum-icon orange">
                                                <div class="ribbon-shape orange"></div>
                                            </div>
                                        </div>
                                        <div class="item bg-purple text-center">
                                            <a href="#">
                                                <h3 class="text-white">Security & Privacy Requirements</h3>
                                                <p class="text-white">Operational assessment to ensure a cloud migration will meet all applicable security/privact requirements.</p>
                                                <div class="cloud-main-icon text-center">
                                                    <img src="public/media/cm-top-icon/security-icon.png" alt="" />
                                                </div>
                                            </a>
                                            <div class="cloud-thum-icon purple">
                                                <div class="ribbon-shape purple"></div>
                                            </div>
                                        </div>
                                        <div class="item bg-blue text-center">
                                            <a href="#">
                                                <h3 class="text-white">Performance Analysis</h3>
                                                <p class="text-white">Baseline testing of application performance and lifecycle management.</p>
                                                <div class="cloud-main-icon text-center">
                                                    <img src="public/media/cm-top-icon/performance-icon.png" alt="" />
                                                </div>
                                            </a>
                                            <div class="cloud-thum-icon blue">
                                                <div class="ribbon-shape blue"></div>
                                            </div>
                                        </div>
                                        <div class="item bg-olive text-center">
                                            <a href="#">
                                                <h3 class="text-white">Cost-Benefit Analysis</h3>
                                                <p class="text-white">Will the benifits of moving corporate applications to the cloude outweigh the costs?</p>
                                                <div class="cloud-main-icon text-center">
                                                    <img src="public/media/cm-top-icon/cost-icon.png" alt="" />
                                                </div>
                                            </a>
                                            <div class="cloud-thum-icon olive">
                                                <div class="ribbon-shape olive"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="bg-icon-title bg-primary">
                                        <h2><img src="public/media/cm-top-icon/application-workload.png" alt="" /> Performance Analysis</h2>
                                    </div>
                                    <div class="card no-radius">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div>
                                                    <div class="step bg-primary">
                                                        <span>STEP</span>
                                                        03
                                                    </div>
                                                </div>
                                                <p>Baseline testing of application/workload performance and lifecycle management requiremnets are initiated in order to identify risks and optimal migration paths.</p>
                                            </div>
                                            <div class="separator separator-solid mt-5 mb-5"></div>

                                            <h4 class="text-primary">
                                                Performance Requiremnts / Sensitivity
                                            </h4>
                                            <p>The analysis of the application/workload performance and resulting baseline, along with identified sensitivities.</p>
                                            <h4 class="text-primary">
                                                Application Lifecycle / Architecture
                                            </h4>
                                            <p>Verification of application/workload migration steps, dependancies, and steady-state operational requiremnets.</p>
                                            <h4 class="text-primary">
                                                Data Governance
                                            </h4>
                                            <p>Ensure application management aligns with data governance policies.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card card-custom mb-8">
                    <div class="card-body">
                        <div class="d-flex mb-8">
                            <h3 class="title">
                                Performance Requirements/Sensitivity
                            </h3>
                            <div class="text-right ml-auto">
                                <a href="#" class="btn btn-success"> <i class="la la-file-alt"></i> Save </a>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <tr class="bg-gray">
                                <th class="text-center">Topic Area</th>
                                <th style="min-width: 170px;" class="text-center">
                                    Rating<br />
                                    (0 out of 35 / Avg:)
                                </th>
                                <th class="text-center">Comments</th>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        1. Network applications scan.
                                    </strong>
                                    <em>(Includes: internal vs. external traffic usage, potential DIA application analysis, mission-critical application categories)</em>
                                </td>
                                <td class="bg-light-gray">
                                    <select name="" id="" class="form-control bg-light-gray">
                                        <option value="">N/A</option>
                                        <option value="">Initial</option>
                                        <option value="">Managed</option>
                                        <option value="">Defined</option>
                                        <option value="">Measured</option>
                                        <option value="">Optimizing</option>
                                    </select>
                                </td>
                                <td class="color-five"></td>
                            </tr>
                        </table>
                        <div class="text-right">
                            <a href="#" class="btn btn-success"> <i class="la la-file-alt"></i> Save </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-custom mb-8">
                    <div class="card-body">
                        <div class="d-flex mb-8">
                            <h3 class="title">
                                Application Lifecycle/Architecture
                            </h3>
                            <div class="text-right ml-auto">
                                <a href="#" class="btn btn-success"> <i class="la la-file-alt"></i> Save </a>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <tr class="bg-gray">
                                <th class="text-center">Topic Area</th>
                                <th style="min-width: 170px;" class="text-center">
                                    Rating<br />
                                    (0 out of 30 / Avg:)
                                </th>
                                <th class="text-center">Comments</th>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        1. Application/Workload business criticality rating completed
                                    </strong>
                                    <em>(high, medium, low).</em>
                                </td>
                                <td class="bg-light-gray">
                                    <select name="" id="" class="form-control bg-light-gray">
                                        <option value="">N/A</option>
                                        <option value="">Initial</option>
                                        <option value="">Managed</option>
                                        <option value="">Defined</option>
                                        <option value="">Measured</option>
                                        <option value="">Optimizing</option>
                                    </select>
                                </td>
                                <td class="color-five"></td>
                            </tr>
                        </table>
                        <div class="text-right">
                            <a href="#" class="btn btn-success"> <i class="la la-file-alt"></i> Save </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-custom mb-8">
                    <div class="card-body">
                        <div class="d-flex mb-8">
                            <h3 class="title">
                                Data/Application Governance
                            </h3>
                            <div class="text-right ml-auto">
                                <a href="#" class="btn btn-success"> <i class="la la-file-alt"></i> Save </a>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <tr class="bg-gray">
                                <th class="text-center">Topic Area</th>
                                <th style="min-width: 170px;" class="text-center">
                                    Rating<br />
                                    (0 out of 35 / Avg:)
                                </th>
                                <th class="text-center">Comments</th>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        1. Corporate data governance policies have been reviewed.
                                    </strong>
                                </td>
                                <td class="bg-light-gray">
                                    <select name="" id="" class="form-control bg-light-gray">
                                        <option value="">N/A</option>
                                        <option value="">Initial</option>
                                        <option value="">Managed</option>
                                        <option value="">Defined</option>
                                        <option value="">Measured</option>
                                        <option value="">Optimizing</option>
                                    </select>
                                </td>
                                <td class="color-five"></td>
                            </tr>
                        </table>
                        <div class="text-right">
                            <a href="#" class="btn btn-success"> <i class="la la-file-alt"></i> Save </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Row-->
        <!--end::Dashboard-->
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->


@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
@endsection

