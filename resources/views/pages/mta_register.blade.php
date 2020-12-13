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
                        <div class="register-header mb-8 d-flex align-items-center">
                            <div class="left">
                                <div class="title">Category: Customer Facing</div>
                                <div class="sub-title">1002 : Customer Relationship Management</div>
                            </div>
                            <div class="right ml-auto">
                                <button class="btn btn-success"><span class="la la-file-alt"></span> Save</button>
                            </div>
                        </div>
                        <div class="register-table">
                            <table class="table table-bordered">
                                <tr class="bg-blue">
                                    <th>CRM/eCRM</th>
                                    <th style="width: 80px;" class="text-center"><button class="btn btn-primary">PDF</button></th>
                                </tr>
                            </table>
                            <table class="table table-bordered">
                                <tr class="bg-gray">
                                    <th>Description</th>
                                    <th>Last Assessment</th>
                                    <th>Rating</th>
                                </tr>
                                <tr>
                                    <th data-toggle="modal" data-target="#modal-global-lg">Customer relationship management (CRM) is a technology for managing organization's relationships and interactions with its...</th>
                                    <th>May 15, 2020</th>
                                    <th class="color-two">3.0</th>
                                </tr>
                            </table>
                            <table class="table table-bordered">
                                <tr class="bg-gray">
                                    <th>Assessment Results</th>
                                    <th>Recommendations</th>
                                </tr>
                                <tr>
                                    <th data-toggle="modal" data-target="#modal-global-lg">Reassessment Results - April 2020 Since the initial assessment, the Town has undertaken the issuance of an RFP and the retainment...</th>
                                    <th data-toggle="modal" data-target="#modal-global-lg">
                                        Reassessment Results - April 2020 The following recommendations are in addition to the initial assessment recommendations: Determine who owns the system and/or...
                                    </th>
                                </tr>
                            </table>
                            <table class="table table-bordered">
                                <tr class="bg-green">
                                    <th colspan="4" class="text-center">Customer Tracking</th>
                                </tr>
                                <tr class="bg-gray">
                                    <th>Completed/Planned Activities</th>
                                    <th>Current Activities</th>
                                    <th colspan="2">Accountable</th>
                                </tr>
                                <tr>
                                    <th data-toggle="modal" data-target="#modal-global-lg" rowspan="3">CRM Assessment</th>
                                    <th data-toggle="modal" data-target="#modal-global-lg" rowspan="3">
                                        Blackline consultant meeting with staff and facilitating discussions to gain an understanding of the current and future customer relationship management needs and readiness of the corporation. Final
                                        report expected Q2 20
                                    </th>
                                    <th colspan="2">Strategic Initiatives team Anne Bain</th>
                                </tr>
                                <tr class="bg-gray">
                                    <th style="min-width: 250px;">Status</th>
                                    <th style="min-width: 120px;">Date Closed</th>
                                </tr>
                                <tr>
                                    <th class="no-padding">
                                        <select name="" id="" class="form-control no-radius color-one">
                                            <option value="">Not Required/Not Started</option>
                                            <option value="">Work Deferred</option>
                                            <option value="">Work In Progress</option>
                                            <option value="">Work Completed</option>
                                            <option value="">Reassessment Required</option>
                                        </select>
                                    </th>
                                    <th>Date Closed</th>
                                </tr>
                            </table>
                            <div class="text-right">
                                <button class="btn btn-success"><span class="la la-file-alt"></span> Save</button>
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
                        <div class="register-reportcard-table">
                            <table class="table table-bordered table-hover text-center">
                                <tr class="bg-gray">
                                    <th>ID</th>
                                    <th>Category</th>
                                    <th>Sub-Category</th>
                                    <th>Element</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Customer Facing</td>
                                    <td>Digital Solutions</td>
                                    <td>eRequest (i.e. Service Requests)</td>
                                    <td>Mar 6, 2020 09:28 PM</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary">View</button>
                                        <button class="btn btn-sm btn-outline-danger">Remove</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Customer Facing</td>
                                    <td>Digital Solutions</td>
                                    <td>eRequest (i.e. Service Requests)</td>
                                    <td>Mar 6, 2020 09:28 PM</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary">View</button>
                                        <button class="btn btn-sm btn-outline-danger">Remove</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Customer Facing</td>
                                    <td>Digital Solutions</td>
                                    <td>eRequest (i.e. Service Requests)</td>
                                    <td>Mar 6, 2020 09:28 PM</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary">View</button>
                                        <button class="btn btn-sm btn-outline-danger">Remove</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Customer Facing</td>
                                    <td>Digital Solutions</td>
                                    <td>eRequest (i.e. Service Requests)</td>
                                    <td>Mar 6, 2020 09:28 PM</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary">View</button>
                                        <button class="btn btn-sm btn-outline-danger">Remove</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Customer Facing</td>
                                    <td>Digital Solutions</td>
                                    <td>eRequest (i.e. Service Requests)</td>
                                    <td>Mar 6, 2020 09:28 PM</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary">View</button>
                                        <button class="btn btn-sm btn-outline-danger">Remove</button>
                                    </td>
                                </tr>
                            </table>
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
<!-- Modal large -->
<div class="modal modal-global fade" id="modal-global-lg" tabindex="-1" role="dialog" aria-labelledby="modal-global-lg" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-global">Modal Title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary font-weight-bold" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>





@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
@endsection

