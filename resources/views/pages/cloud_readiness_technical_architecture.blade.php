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
                                <div class="col-sm-5">
                                    <div class="thum">
                                        <img src="public/media/cm-top-icon/cloud-readiness.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="bg-icon-title color-two">
                                        <h2><img src="public/media/cm-top-icon/technical-arch.png" alt="" /> Technical Architecture</h2>
                                    </div>
                                    <div class="card no-radius">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div>
                                                    <div class="step color-two">
                                                        <span>STEP</span>
                                                        01
                                                    </div>
                                                </div>
                                                <p>
                                                    As part of the infrastructure discovery phase, applications/workloades, compute, storage, and connectivity are assessed in order to establish a baseline. There are several characteristics
                                                    of an organizations infrastructure that, if present, could render applications/services unsupportable by a cloud provider.
                                                </p>
                                            </div>
                                            <div class="separator separator-solid mt-5 mb-5"></div>

                                            <h4 class="text-color-two">
                                                Applications / Workloads
                                            </h4>
                                            <p>An overall snapshot of the current application/workloade requirements along with a review of potential migration strategies.</p>
                                            <h4 class="text-color-two">
                                                Compute
                                            </h4>
                                            <p>Server/Compute infrastructure is analyzed to determine current utilization trends and future requiremnets.</p>
                                            <h4 class="text-color-two">
                                                Storage
                                            </h4>
                                            <p>A complete review and analysis of performance and capacity utilization trends and future requirements.</p>
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
                                General
                            </h3>
                            <div class="text-right ml-auto">
                                <a href="#" class="btn btn-warning">Documentation</a>
                                <a href="#" class="btn btn-success"> <i class="la la-file-alt"></i> Save </a>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <tr class="bg-gray">
                                <th class="text-center">Topic Area</th>
                                <th style="min-width: 170px;" class="text-center">
                                    Rating<br />
                                    (0 out of 15 / Avg: 0.0
                                </th>
                                <th class="text-center">Comments</th>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        1. A flexible enterprise integration architecture is defined and managed for all services.
                                    </strong>
                                    <em>
                                        (The services are loosely coupled and allow for new cloud services to be introduced or decommissioned in standard manner with little disruption to existing services. Furthermore, the flexible
                                        integration layer helps minimize CSP lock in.)
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
                                <td class="color-one"></td>
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
                                Applications/Workloads
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
                                    (0 out of 15 / Avg: 0.0
                                </th>
                                <th class="text-center">Comments</th>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        1. An inventory of software has been catalogued.
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
                                <td class="color-one"></td>
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
                                Compute/Storage
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
                                    (0 out of 40 / Avg:)
                                </th>
                                <th class="text-center">Comments</th>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        1. An inventory of servers has been catalogued.
                                    </strong>
                                    <em>(Including operating system, location, role)</em>
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
                                <td class="color-one"></td>
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
                                Connectivity
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
                                    (0 out of 25 / Avg: 0.0)
                                </th>
                                <th class="text-center">Comments</th>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        1. Current network architecture documented and reviewed.
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
                                <td class="color-one"></td>
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

