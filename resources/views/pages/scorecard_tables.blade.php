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
            <div class="col-lg-6">
                <div class="card card-custom mb-8">
                    <div class="card-body">
                        <h1>Risk Assessment table</h1>
                        <div class="scorecard-rate">
                            <div class="items color-four">
                                <span>0</span>
                            </div>
                            <div class="items color-four">
                                1
                            </div>
                            <div class="items color-four">2<span>(A)</span></div>
                            <div class="items color-four">3<span>(B)</span></div>
                            <div class="items color-three">4<span>(C)</span></div>
                            <div class="items color-three">5<span>(D)</span></div>
                            <div class="items color-three">6<span>(E)</span></div>
                            <div class="items color-three">7<span>(F)</span></div>
                            <div class="items color-three">8<span>(G)</span></div>
                            <div class="items color-two">9<span>(H)</span></div>
                            <div class="items color-two">10<span>(I)</span></div>
                            <div class="items color-two">11<span>(J)</span></div>
                            <div class="items color-two">12<span>(K)</span></div>
                            <div class="items color-one">13</div>
                            <div class="items color-one">14</div>
                            <div class="items color-one">15</div>
                            <div class="items color-one">16</div>
                            <div class="items color-dark">
                                Risk Heat Map
                            </div>
                        </div>
                        <div class="scorecard-table">
                            <table class="table table-bordered text-center">
                                <tr class="bg-dark">
                                    <th>Letter</th>
                                    <th>Threat (Category)</th>
                                    <th>Rank</th>
                                </tr>
                                <tr>
                                    <td><strong>A</strong></td>
                                    <td><strong>Nature (Environmental)</strong></td>
                                    <td class="color-four"><strong>2</strong></td>
                                </tr>
                                <tr>
                                    <td><strong>B</strong></td>
                                    <td><strong>Chemical Spill (Environmental)</strong></td>
                                    <td class="color-four"><strong>3</strong></td>
                                </tr>
                                <tr>
                                    <td><strong>F</strong></td>
                                    <td><strong>Fire (Facility (Grey Roots Museum))</strong></td>
                                    <td class="color-three"><strong>7</strong></td>
                                </tr>
                                <tr>
                                    <td><strong>F</strong></td>
                                    <td><strong>Malicious Software Upload (Human)</strong></td>
                                    <td class="color-three"><strong>7</strong></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-custom mb-8">
                    <div class="card-body">
                        <h1>BIA table</h1>
                        <div class="scorecard-table">
                            <table class="table table-bordered text-center">
                                <tr class="bg-light-info">
                                    <th colspan="2" class="text-left">Department: OPS - Administrative & Technical</th>
                                    <th class="icon">
                                        <a href="#">
                                            <span class="la la-power-off"></span>
                                        </a>
                                    </th>
                                    <th>Non-essential</th>
                                </tr>
                                <tr>
                                    <td class="text-left">
                                        <strong>Service/Process</strong>
                                    </td>
                                    <td class="text-center">
                                        <strong>Calculated RTO</strong>
                                    </td>
                                    <td class="text-center">
                                        <strong>Criticality Level</strong>
                                    </td>
                                    <td class="text-center">
                                        <strong>IT Services</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left bg-blue">
                                        <strong>Financial Management</strong>
                                    </td>
                                    <td class="text-center">
                                        <strong>2 - 4 Weeks</strong>
                                    </td>
                                    <td class="text-center color-four">
                                        <strong>15</strong>
                                    </td>
                                    <td class="text-center color-one">
                                        <strong>15</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left bg-blue">
                                        <strong>Geographical Information Systems</strong>
                                    </td>
                                    <td class="text-center">
                                        <strong>2 - 4 Weeks</strong>
                                    </td>
                                    <td class="text-center color-four">
                                        <strong>8</strong>
                                    </td>
                                    <td class="text-center color-one">
                                        <strong>13</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left bg-blue">
                                        <strong>Building Management</strong>
                                    </td>
                                    <td class="text-center">
                                        <strong>2 - 4 Weeks</strong>
                                    </td>
                                    <td class="text-center color-four">
                                        <strong>12</strong>
                                    </td>
                                    <td class="text-center color-one">
                                        <strong>8</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left bg-blue">
                                        <strong>Customer Services</strong>
                                    </td>
                                    <td class="text-center">
                                        <strong>7 Days</strong>
                                    </td>
                                    <td class="text-center color-five">
                                        <strong>36</strong>
                                    </td>
                                    <td class="text-center color-one">
                                        <strong>13</strong>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-custom mb-8">
                    <div class="card-body">
                        <h1>DR Maturity table</h1>
                        <div class="scorecard-table">
                            <table class="table table-bordered text-center">
                                <tr class="bg-gray">
                                    <th colspan="2" class="text-left">Organizational Readiness</th>
                                </tr>
                                <tr class="bg-blue">
                                    <td class="text-left">
                                        <strong>&nbsp;</strong>
                                    </td>
                                    <td class="text-center">
                                        <strong>Rating Level</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left">
                                        <strong>Program Initiation</strong>
                                    </td>
                                    <td class="text-center color-one">
                                        <strong>1.8</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left">
                                        <strong>Business Impact Analysis (BIA)</strong>
                                    </td>
                                    <td class="text-center color-one">
                                        <strong>1.0</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left">
                                        <strong>Risk and Threat Assessments</strong>
                                    </td>
                                    <td class="text-center color-one">
                                        <strong>1.3</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left">
                                        <strong>Budget</strong>
                                    </td>
                                    <td class="text-center color-one">
                                        <strong>1.0</strong>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-custom mb-8">
                    <div class="card-body">
                        <h1>Service Criticality table</h1>
                        <div class="scorecard-table">
                            <table class="table table-bordered text-center">
                                <tr class="bg-gray">
                                    <th class="text-left">IT Service Catalogue</th>
                                    <th class="text-center">Tier 1 (0-4 hours)</th>
                                    <th class="text-center">Tier 2 (24-hours)</th>
                                    <th class="text-center">Tier 3 (3-days)</th>
                                    <th class="text-center">Tier 4 (7-days)</th>
                                </tr>
                                <tr>
                                    <td class="text-left bg-blue">
                                        <strong>Application Services(AMANDA)</strong>
                                    </td>
                                    <td class="text-center bg-dark" data-toggle="modal" data-target="#modal-global">
                                        &nbsp;
                                    </td>
                                    <td class="text-center color-two" data-toggle="modal" data-target="#modal-global">
                                        &nbsp;
                                    </td>
                                    <td class="text-center color-three" data-toggle="modal" data-target="#modal-global">
                                        &nbsp;
                                    </td>
                                    <td class="text-center color-five" data-toggle="modal" data-target="#modal-global">
                                        &nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left bg-blue">
                                        <strong>Application Services(AMANDA Reporting)</strong>
                                    </td>
                                    <td class="text-center bg-dark" data-toggle="modal" data-target="#modal-global">
                                        &nbsp;
                                    </td>
                                    <td class="text-center color-two" data-toggle="modal" data-target="#modal-global">
                                        &nbsp;
                                    </td>
                                    <td class="text-center color-three" data-toggle="modal" data-target="#modal-global">
                                        &nbsp;
                                    </td>
                                    <td class="text-center color-five" data-toggle="modal" data-target="#modal-global">
                                        &nbsp;
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-custom mb-8">
                    <div class="card-body">
                        <h1>Catalogue Summary table</h1>
                        <div class="scorecard-table">
                            <table class="table table-bordered text-center">
                                <tr class="bg-blue">
                                    <th class="text-left">IT Service Catalogue</th>
                                    <th class="icon">
                                        <a href="#">
                                            <span class="la la-power-off"></span>
                                        </a>
                                    </th>
                                </tr>
                            </table>
                            <div class="accordion accordion-solid accordion-toggle-plus" id="catalogSummery">
                                <div class="card">
                                    <div class="card-header" id="headingOne3">
                                        <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseOne3">Service : Application Services(AMANDA)</div>
                                    </div>
                                    <div id="collapseOne3" class="collapse" data-parent="#catalogSummery">
                                        <table class="table table-bordered">
                                            <tr class="bg-gray">
                                                <th>Department</th>
                                                <th>Service/Process</th>
                                                <th>RTO</th>
                                                <th>CL</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Development Engineering & Development Services</strong>
                                                </td>
                                                <td>
                                                    <strong>Development Engineering Review</strong>
                                                </td>
                                                <td>
                                                    <strong>2-4 Weeks</strong>
                                                </td>
                                                <td class="color-five">
                                                    <strong>8</strong>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo3">
                                        <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo3">Service : Application Services(AMANDA Reporting)</div>
                                    </div>
                                    <div id="collapseTwo3" class="collapse" data-parent="#catalogSummery">
                                        <table class="table table-bordered">
                                            <tr class="bg-gray">
                                                <th>Department</th>
                                                <th>Service/Process</th>
                                                <th>RTO</th>
                                                <th>CL</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Development Engineering & Development Services</strong>
                                                </td>
                                                <td>
                                                    <strong>Development Engineering Review</strong>
                                                </td>
                                                <td>
                                                    <strong>2-4 Weeks</strong>
                                                </td>
                                                <td class="color-five">
                                                    <strong>8</strong>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree3">
                                        <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree3">Service : Application Services(AP Link)</div>
                                    </div>
                                    <div id="collapseThree3" class="collapse" data-parent="#catalogSummery">
                                        <table class="table table-bordered">
                                            <tr class="bg-gray">
                                                <th>Department</th>
                                                <th>Service/Process</th>
                                                <th>RTO</th>
                                                <th>CL</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Development Engineering & Development Services</strong>
                                                </td>
                                                <td>
                                                    <strong>Development Engineering Review</strong>
                                                </td>
                                                <td>
                                                    <strong>2-4 Weeks</strong>
                                                </td>
                                                <td class="color-five">
                                                    <strong>8</strong>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-custom mb-8">
                    <div class="card-body">
                        <h1>MTA table</h1>
                        <div class="scorecard-table">
                            <table class="table table-bordered text-center">
                                <tr class="bg-gray">
                                    <th class="text-left">Customer Facing</th>
                                    <th class="text-center color-two">Managed</th>
                                </tr>
                                <tr class="bg-blue">
                                    <td class="text-left">
                                        <strong>Web/Digital</strong>
                                    </td>
                                    <td class="text-center">
                                        <strong>Rating Leve</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left">
                                        <strong>Digital Strategy</strong>
                                    </td>
                                    <td class="text-center color-two">
                                        <strong>3.0</strong>
                                    </td>
                                </tr>
                                <tr class="bg-blue">
                                    <td class="text-left">
                                        <strong>Customer Relationship Management</strong>
                                    </td>
                                    <td class="text-center">
                                        <strong>Rating Level</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left">
                                        <strong>CRM/eCRM</strong>
                                    </td>
                                    <td class="text-center color-two">
                                        <strong>3.0</strong>
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


@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
@endsection

