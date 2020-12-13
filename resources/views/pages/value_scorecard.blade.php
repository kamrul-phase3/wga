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
                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                        <div class="card-custom-title display-block border-0 p-0">
                            <h3 class="title">VALUE SCORECARD</h3>
                            <h5 class="sub-title">
                                <span>WG ADVISORY SERVICES</span>
                            </h5>
                            <strong>Publish on: May 13, 2018</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="card card-custom">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr class="bg-gray">
                                <th colspan="2">IT Management</th>
                            </tr>
                            <tr class="bg-blue">
                                <td>&nbsp;</td>
                                <td class="text-center"><strong>Rating Level</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Governance</strong></td>
                                <td class="text-center color-one"><strong>1.4</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Financial Management</strong></td>
                                <td class="text-center color-one"><strong>1.3</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Project and Program Management</strong></td>
                                <td class="text-center color-one"><strong>2.0</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Architecture and Roadmaps</strong></td>
                                <td class="text-center color-one"><strong>1.4</strong></td>
                            </tr>
                            <tr>
                                <td><strong>IT Organization</strong></td>
                                <td class="text-center color-one"><strong>2.5</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Business Systems</strong></td>
                                <td class="text-center color-one"><strong>1.7</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Technology Infrastructure</strong></td>
                                <td class="text-center color-one"><strong>2.0</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Data Management</strong></td>
                                <td class="text-center color-one"><strong>2.5</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Data Management</strong></td>
                                <td class="text-center color-one"><strong>2.5</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Business Continuity Management</strong></td>
                                <td class="text-center color-one"><strong>1.0</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Procurement</strong></td>
                                <td class="text-center color-three"><strong>3.0</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Training</strong></td>
                                <td class="text-center color-one"><strong>2.5</strong></td>
                            </tr>
                            <tr>
                                <td><strong>IT Service Management</strong></td>
                                <td class="text-center color-one"><strong>2.0</strong></td>
                            </tr>
                            <tr>
                                <td><strong>IT Service Management</strong></td>
                                <td class="text-center color-one"><strong>2.0</strong></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card card-custom color-one mb-5">
                    <div class="card-body text-center">
                        <div class="card-custom-title display-block border-0 p-0">
                            <h3 class="title text-white">CRITICAL</h3>
                            <p class="text-white"><strong>(1-2.5)</strong></p>
                        </div>
                        <div class="separator separator-solid mt-5 mb-5"></div>
                        <p>
                            <strong>
                                Serious deficiencies have been indentified that require attention within the next year
                            </strong>
                        </p>
                    </div>
                </div>

                <div class="card card-custom color-three mb-5">
                    <div class="card-body text-center">
                        <div class="card-custom-title display-block border-0 p-0">
                            <h3 class="title text-white">MODERATE</h3>
                            <p class="text-white"><strong>(2.6-3.5)</strong></p>
                        </div>
                        <div class="separator separator-solid mt-5 mb-5"></div>
                        <p>
                            <strong>
                                Deficiencies discovered that require attention within the next 2 years
                            </strong>
                        </p>
                    </div>
                </div>
                <div class="card card-custom color-five mb-5">
                    <div class="card-body text-center">
                        <div class="card-custom-title display-block border-0 p-0">
                            <h3 class="title text-white">PASS</h3>
                            <p class="text-white"><strong>(3.6-5.0)</strong></p>
                        </div>
                        <div class="separator separator-solid mt-5 mb-5"></div>
                        <p>
                            <strong>
                                No Deficiencies discovered
                            </strong>
                        </p>
                    </div>
                </div>
                <a href="#" class="btn btn-primary btn-lg btn-block font-size-h5"> <span class="la la-print"></span> Print </a>
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

