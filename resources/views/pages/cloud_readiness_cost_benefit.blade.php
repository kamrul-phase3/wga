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
                                    <div class="bg-icon-title bg-olive">
                                        <h2><img src="public/media/cm-top-icon/application-workload.png" alt="" /> Cost-Benefit Analysis</h2>
                                    </div>
                                    <div class="card no-radius">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div>
                                                    <div class="step bg-olive">
                                                        <span>STEP</span>
                                                        04
                                                    </div>
                                                </div>
                                                <p>A comprehensive cost-benifit analysis (CBA) is performed to determine the strengths and weakness of the cloud migration options identified in the previous steps.</p>
                                            </div>
                                            <div class="separator separator-solid mt-5 mb-5"></div>
                                            <h4 class="text-olive">
                                                Data Gathering
                                            </h4>
                                            <p>Confirm mthat current costs (Capital/Operational/Indirect) have been captured alogn with all services considered "on-scope" as cloud candidates.</p>
                                            <h4 class="text-olive">
                                                Analysis
                                            </h4>
                                            <p>Evaluation of all data gathered, including a cost baseline study (current costs vs. furute costs).</p>
                                            <h4 class="text-olive">
                                                Cost-Benifit Analysis Report
                                            </h4>
                                            <p>The final report is delivered to stakeholders for review.</p>
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
                                Business Alignment
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
                                        1. The IT function has a strong visibility of business initiatives and associated projects.
                                    </strong>
                                    <em>(IT can enable the business to make an informed decision on service delivery, whether it be through traditional methods or more appropriate to the cloud characteristics)</em>
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
                                Financial Analysis (On-Premise vs. Cloud-Based)
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
                                        1. Current, or business-as-usual, application and infrastructure costs.
                                    </strong>
                                    <em>
                                        (Direct and indirect costs of using and maintaining on-premise IT investment over time. Direct costs cover hardware and software (including physical servers), software licenses, maintenance contracts,
                                        warranties, supplies, material, spare parts, network bandwidth, storage and database capacity, all labor, and facilities. Indirect costs include loss of revenue and productivity resulting from any
                                        outages or downtime. This step is essential to fully understand the business case for cloud adoption and make an apples-to-apples cost comparison)
                                    </em>
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
                                Risk Analysis
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
                                    (4 out of 60 / Avg: 4.0)
                                </th>
                                <th class="text-center">Comments</th>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        1. Security - Physical and personnel security, Identify Management, Application Security, Data Confidentiality.
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
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-custom mb-8">
                    <div class="card-body">
                        <div class="d-flex mb-8">
                            <h3 class="title">
                                Cloud Migration Strategy
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
                                    (0 out of 50 / Avg:)
                                </th>
                                <th class="text-center">Comments</th>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        1. Standardize cloud policies.
                                    </strong>
                                    <em>(Standardize processes and templates for cloud requests across all company sectors and business units)</em>
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

