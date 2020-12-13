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
            <div class="col-sm-12">
                <div class="card card-custom mb-8">
                    <div class="card-body">
                        <div class="assessment-header d-flex align-items-center">
                            <div class="assessment-logo">
                                <img src="public/media/cm-top-icon/bg-customer_facing.png" alt="" />
                                <div class="rate-img">
                                    <img src="public/media/cm-top-icon/managed.png" alt="" />
                                </div>
                            </div>
                            <div class="assessment-icons ml-auto mr-auto">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="public/media/cm-top-icon/icon-integration.png" alt="" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="public/media/cm-top-icon/icon-business_solutions.png" alt="" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="public/media/cm-top-icon/icon-technology_infrastructure.png" alt="" />
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="assessment-scale ml-auto">
                                <img src="public/media/cm-top-icon/rating-scale.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card card-custom mb-8">
                    <div class="card-body">
                        <div class="assessment-box-title bg-blue p-3 d-flex align-items-center">
                            <div class="title">Web/Digital</div>
                            <div class="rating ml-auto">
                                <button class="btn color-two">AVG: 3.0</button>
                            </div>
                        </div>
                        <div class="assessment-table">
                            <table class="table table-bordered">
                                <tr>
                                    <th class="bg-gray">Digital Strategy</th>
                                    <th style="width: 70px;" class="no-padding">
                                        <select name="" id="" class="form-control color-two no-radius no-padding">
                                            <option value=""><strong>3</strong></option>
                                            <option value=""><strong>1</strong></option>
                                            <option value=""><strong>2</strong></option>
                                        </select>
                                    </th>
                                    <th class="bg-gray">Response</th>
                                </tr>
                            </table>
                            <div class="assessment-info">
                                <div class="assessment-row">
                                    <div class="item"><strong>1. Strategy and Governance: A Steering Committee is in place for this strategy</strong> (A Steering Committee is required to oversee the web/digital strategy)</div>
                                    <div class="item">
                                        <strong>
                                            WIP - At the time of the reassessment there was not a Steering Committee in place as the RFP for the development strategy has yet been completed or released. There seems challenges in getting
                                            formal steering committees established for major systems. There is definitely an absence of who is the owner of the solution and who is the person directly accountable for driving the success of
                                            the system.
                                        </strong>
                                    </div>
                                </div>
                                <div class="assessment-row">
                                    <div class="item">
                                        <strong>2. Strategy and Governance: A long term strategy has been developed and documented</strong> (A strategy for the next 1-3 years should be developed and documented to ensure clarity.)
                                    </div>
                                    <div class="item">
                                        <strong>WIP - At the time of the reassessment it was articulated that the long term strategy will be a deliverable specified in the Digital Strategy RFP.</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card card-custom mb-8">
                    <div class="card-body">
                        <div class="assessment-box-title bg-blue p-3 d-flex align-items-center">
                            <div class="title">Web/Digital</div>
                            <div class="rating ml-auto">
                                <button class="btn color-two">AVG: 3.0</button>
                            </div>
                        </div>
                        <div class="assessment-table">
                            <table class="table table-bordered">
                                <tr>
                                    <th class="bg-gray">Digital Strategy</th>
                                    <th style="width: 70px;" class="no-padding">
                                        <select name="" id="" class="form-control color-two no-radius no-padding">
                                            <option value=""><strong>3</strong></option>
                                            <option value=""><strong>1</strong></option>
                                            <option value=""><strong>2</strong></option>
                                        </select>
                                    </th>
                                    <th class="bg-gray">Response</th>
                                </tr>
                            </table>
                            <div class="assessment-info">
                                <div class="assessment-row">
                                    <div class="item"><strong>1. Strategy and Governance: A Steering Committee is in place for this strategy</strong> (A Steering Committee is required to oversee the web/digital strategy)</div>
                                    <div class="item">
                                        <strong>
                                            WIP - At the time of the reassessment there was not a Steering Committee in place as the RFP for the development strategy has yet been completed or released. There seems challenges in getting
                                            formal steering committees established for major systems. There is definitely an absence of who is the owner of the solution and who is the person directly accountable for driving the success of
                                            the system.
                                        </strong>
                                    </div>
                                </div>
                                <div class="assessment-row">
                                    <div class="item">
                                        <strong>2. Strategy and Governance: A long term strategy has been developed and documented</strong> (A strategy for the next 1-3 years should be developed and documented to ensure clarity.)
                                    </div>
                                    <div class="item">
                                        <strong>WIP - At the time of the reassessment it was articulated that the long term strategy will be a deliverable specified in the Digital Strategy RFP.</strong>
                                    </div>
                                </div>
                            </div>
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

