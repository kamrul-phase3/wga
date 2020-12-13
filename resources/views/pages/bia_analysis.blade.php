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
                                    <div class="item">
                                        <h2>Step 1: <span>Business Impact Analysis</span></h2>
                                        <p>
                                            The Objective of the Business Impact Analysis (BIA) ois the identification and analysis of business processes/activities (including required resources), with the objective of understanding the
                                            impact of downtime, which drives the assignment of the recovery objectives and prioritization.
                                        </p>
                                        <p>
                                            Following the BIA, the organization should be positioned to identify the critical activities that contribute to the delivery of its most important products and services, list all resources needed
                                            for recovery, and prioritize activities and resources by recovery objective.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="item">
                                        <p><strong>The major outcomes associated with the BIA, include:</strong></p>
                                        <ul>
                                            <li>
                                                Understanding of business process/activities, including:
                                                <ol>
                                                    <li>Customers (internal and external)</li>
                                                    <li>Outputs/Deliverables</li>
                                                    <li>Inputs (which enable the process to function, including resources and other internal and third-party dependancies)</li>
                                                </ol>
                                            </li>
                                            <li>Understanding an estimation of the impact of downtime, which serves as business justification for establishing recovery objecttices</li>
                                            <li>Identification of the recovery objetives and a prioritized order of recovery for business processes and resources</li>
                                            <li>Collection of information to help drive appropriate recovery strategies</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="item">
                                        <img src="public/media/cm-top-icon/bia_process.png" alt="" />
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
                        <div class="bia-analysis-btn text-center">
                            <a href="#" class="btn btn-success btn-lg">
                                <span class="label label-md label-white mr-2">1</span>
                                Department Questionnaire
                            </a>
                            <a href="#" class="btn btn-primary btn-lg">
                                <span class="label label-md label-white mr-2">2</span>
                                Service/Process Evaluation
                            </a>
                            <a href="#" class="btn btn-warning btn-lg">
                                <span class="label label-md label-white mr-2">3</span>
                                Continuity Plan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card card-custom mb-8">
                    <div class="card-body">
                        <div class="bia-analysis-form">
                            <form action="">
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label>Department:</label>
                                        <input type="text" class="form-control" placeholder="Enter Department Name" />
                                        <span class="form-text text-muted">Please enter your department name</span>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Staff</label>
                                        <input type="number" class="form-control" placeholder="0000" />
                                        <span class="form-text text-muted">Please enter Staff</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label>Contact:</label>
                                        <input type="text" class="form-control" placeholder="Enter Contact Name" />
                                        <span class="form-text text-muted">Please enter your contact name</span>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Date</label>
                                        <input type="date" class="form-control" placeholder="" />
                                        <span class="form-text text-muted">Please enter date</span>
                                    </div>
                                </div>
                            </form>
                            <div class="text-right">
                                <a href="#" class="btn btn-success"> <i class="la la-file-alt"></i> Save </a>
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
                                1. Provide a high level description of how your business line supports the mission and corporate priorities:
                            </h3>
                            <div style="min-width: 100px;" class="text-right ml-auto">
                                <a href="#" class="btn btn-success"> <i class="la la-file-alt"></i> Save </a>
                            </div>
                        </div>
                        <form action="">
                            <textarea name="" id="" cols="30" rows="10" class="form-control"> </textarea>
                        </form>
                        <div class="text-right mt-8">
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
                                2. List All services/processess provided by this business line.
                            </h3>
                            <div style="min-width: 100px;" class="text-right ml-auto">
                                <a href="#" class="btn btn-success"> <i class="la la-file-alt"></i> Save </a>
                            </div>
                        </div>
                        <div class="bia-table">
                            <table class="table table-bordered col-120">
                                <tr class="bg-gray">
                                    <th>SERVICE/PROCESS</th>
                                    <th>DESCRIBE THE KEY PURPOSE OF THE SERVICE/PROCESS AND ANY CONSEQUENCES RESULTING FROM A FAILURE TO PERFORM</th>
                                    <th>CRITICAL DATES</th>
                                </tr>
                                <tr>
                                    <td class="bg-light-gray">
                                        <strong>PROCESSING OF BUILDING PERMIT APPLICATIONS</strong>
                                    </td>
                                    <td class="no-padding">
                                        <form action="">
                                            <textarea name="" id="" class="form-control table-area no-radius"></textarea>
                                        </form>
                                    </td>
                                    <td class="no-padding">
                                        <form action="">
                                            <textarea name="" id="" class="form-control table-area no-radius"></textarea>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="bg-light-gray">
                                        <strong>PLANS REVIEW</strong>
                                    </td>
                                    <td class="no-padding">
                                        <form action="">
                                            <textarea name="" id="" class="form-control table-area no-radius"></textarea>
                                        </form>
                                    </td>
                                    <td class="no-padding">
                                        <form action="">
                                            <textarea name="" id="" class="form-control table-area no-radius"></textarea>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="bg-light-gray">
                                        <strong>INSPECTING CONSTRUCTION/DEMOLITION</strong>
                                    </td>
                                    <td class="no-padding">
                                        <form action="">
                                            <textarea name="" id="" class="form-control table-area no-radius"></textarea>
                                        </form>
                                    </td>
                                    <td class="no-padding">
                                        <form action="">
                                            <textarea name="" id="" class="form-control table-area no-radius"></textarea>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="text-right mt-8">
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
                                3. Please explain for your business line only, what informal steps would be taken today if a disaster were to occur.
                            </h3>
                            <div style="min-width: 100px;" class="text-right ml-auto">
                                <a href="#" class="btn btn-success"> <i class="la la-file-alt"></i> Save </a>
                            </div>
                        </div>
                        <div class="bia-table">
                            <table class="table table-bordered col-120">
                                <tr class="bg-gray">
                                    <th>SERVICE/PROCESS</th>
                                    <th>ACTIVITY</th>
                                    <th>RESPONSIBILITY</th>
                                    <th>ESTIMATE HOW LONG THIS STEP WILL TAKE</th>
                                </tr>
                                <tr>
                                    <td class="bg-light-gray">
                                        <strong>PROCESSING OF BUILDING PERMIT APPLICATIONS</strong>
                                    </td>
                                    <td class="no-padding">
                                        <form action="">
                                            <textarea name="" id="" class="form-control table-area no-radius"></textarea>
                                        </form>
                                    </td>
                                    <td class="no-padding">
                                        <form action="">
                                            <textarea name="" id="" class="form-control table-area no-radius"></textarea>
                                        </form>
                                    </td>
                                    <td class="no-padding">
                                        <form action="">
                                            <textarea name="" id="" class="form-control table-area no-radius"></textarea>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="bg-light-gray">
                                        <strong>PLANS REVIEW</strong>
                                    </td>
                                    <td class="no-padding">
                                        <form action="">
                                            <textarea name="" id="" class="form-control table-area no-radius"></textarea>
                                        </form>
                                    </td>
                                    <td class="no-padding">
                                        <form action="">
                                            <textarea name="" id="" class="form-control table-area no-radius"></textarea>
                                        </form>
                                    </td>
                                    <td class="no-padding">
                                        <form action="">
                                            <textarea name="" id="" class="form-control table-area no-radius"></textarea>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="bg-light-gray">
                                        <strong>INSPECTING CONSTRUCTION/DEMOLITION</strong>
                                    </td>
                                    <td class="no-padding">
                                        <form action="">
                                            <textarea name="" id="" class="form-control table-area no-radius"></textarea>
                                        </form>
                                    </td>
                                    <td class="no-padding">
                                        <form action="">
                                            <textarea name="" id="" class="form-control table-area no-radius"></textarea>
                                        </form>
                                    </td>
                                    <td class="no-padding">
                                        <form action="">
                                            <textarea name="" id="" class="form-control table-area no-radius"></textarea>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="text-right mt-8">
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
                                4. Explain any issues that would impact these steps
                            </h3>
                            <div style="min-width: 100px;" class="text-right ml-auto">
                                <a href="#" class="btn btn-success"> <i class="la la-file-alt"></i> Save </a>
                            </div>
                        </div>
                        <form action="">
                            <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                        </form>
                        <div class="text-right mt-8">
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

