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
                                    <div class="bg-icon-title bg-purple">
                                        <h2><img src="public/media/cm-top-icon/operation.png" alt="" /> Security and Privacy Requirements</h2>
                                    </div>
                                    <div class="card no-radius">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div>
                                                    <div class="step bg-purple">
                                                        <span>STEP</span>
                                                        02
                                                    </div>
                                                </div>
                                                <p>a complete review and analysis of the organizations policies pertaining to security/privact, IT Service Management (ITSM), data classification, and Disaster Recovery (DR)/Backup.</p>
                                            </div>
                                            <div class="separator separator-solid mt-5 mb-5"></div>
                                            <h4 class="text-purple">
                                                Regulatory
                                            </h4>
                                            <p>An overall snapshot of the current application/workload requirements along with a review of potential migration strategies.</p>
                                            <h4 class="text-purple">
                                                Operational
                                            </h4>
                                            <p>A review of it Service Management (ITSM) maturity within the organization.</p>
                                            <h4 class="text-purple">
                                                Data Governance
                                            </h4>
                                            <p>A review of data governance policies.</p>
                                            <h4 class="text-purple">
                                                Data Protection
                                            </h4>
                                            <p>DR/Backup stratigies are reviewed as part of the requiremnt for an overarching Business Continuity program.</p>
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
                                Regulatory
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
                                    (0 out of 100 / Avg:)
                                </th>
                                <th class="text-center">Comments</th>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        1. Current policies for information security risks deal with cloud characteristics.
                                    </strong>
                                    <em>(e.g. multi-tenanted environments)</em>
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
                                Operational
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
                                    (0 out of 75 / Avg:)
                                </th>
                                <th class="text-center">Comments</th>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        1. Roles and responsibilities are clearly defined for ITSM processes.
                                    </strong>
                                    <em>(Change Management, Incident/Problem Management, Asset Management, Knowledge Management)</em>
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
                                Data Governance
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
                                        1. An Enterprise Data Architecture (EDA) is fully implemented in the application Software Development Lifecycle (SDLC) and existing systems to support a distributed environment between applications
                                        and data sets as befits a cloud-based architecture.
                                    </strong>
                                    <em>(This data architecture should seek to minimize replication and duplication of data sets)</em>
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
                                Data Protection
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
                                    (0 out of 60 / Avg:)
                                </th>
                                <th class="text-center">Comments</th>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        1. Data backup procedures meet the requirements of the business and are well documented.
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

