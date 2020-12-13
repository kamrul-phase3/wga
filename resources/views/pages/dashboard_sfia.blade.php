{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

<!--begin::Entry-->
<div class="">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Dashboard-->
        <!--begin::Row-->
        <div class="row">
            <div class="col-sm-6">
                <div class="card card-custom mb-5">
                    <div class="card-body">
                        <div class="row align-items-center sfia-header">
                            <div class="col-sm-3">
                                <div class="thum">
                                    <img src="public/media/cm-top-icon/sfial.png" />
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thum">
                                    <img src="public/media/cm-top-icon/how_it_works.png" />
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thum">
                                    <img src="public/media/cm-top-icon/levels_of_responsibility.png" />
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thum">
                                    <img src="public/media/cm-top-icon/skills_management.png" />
                                </div>
                            </div>

                            <div class="card-custom-title display-block border-0 p-0">
                                <h3 class="title">CORPORATE SKILLS</h3>
                                <h5 class="sub-title">
                                    <span>SFIA ACTIVITY Page</span>
                                </h5>
                            </div>
                            <div class="sfia-btn-group text-center">
                                <a href="#" class="btn btn-success btn-lg" data-toggle="modal" data-target="#modal-global"> <i class="la la-users"></i> Users </a>
                                <a href="#" class="btn btn-warning btn-lg"> <i class="la la-edit"></i> Review/Edit Role </a>
                                <a href="#" class="btn btn-primary btn-lg"> <i class="la la-user-plus"></i> Add Role </a>
                                <a href="#" class="btn btn-info btn-lg"> <i class="la la-user-plus"></i> Add Missing Skill </a>
                            </div>
                            <div class="color-lavel-text">
                                <ul>
                                    <li class="color color-red">
                                        <strong>Strategy ans Architecture</strong>
                                    </li>
                                    <li class="color color-purple">
                                        <strong>Change and Transformation</strong>
                                    </li>
                                    <li class="color color-yellow">
                                        <strong>Development ans Implementation</strong>
                                    </li>
                                    <li class="color color-brown">
                                        <strong>Devlivery and Operation</strong>
                                    </li>
                                    <li class="color color-blue">
                                        <strong>Skills and Quality</strong>
                                    </li>
                                    <li class="color color-green">
                                        <strong>Relationships and Engagement</strong>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-custom">
                    <div class="card-body">
                        <div class="card-custom-title display-block border-0 p-0">
                            <h3 class="title">Previous Assessments</h3>
                            <h5 class="sub-title">
                                <span>Archive Library</span>
                            </h5>
                        </div>
                        <table class="table db-prev-assessment">
                            <tr class="bg-light-info">
                                <th>Category</th>
                                <th>Date</th>
                                <th>&nbsp;</th>
                            </tr>
                            <tr>
                                <td><strong>Risk Assessment</strong></td>
                                <td><strong>March 21, 2019</strong></td>
                                <td>
                                    <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                            <div class="dropleft">
                                                <button type="button" class="btn btn-primary btn-icon dropdown-toggle hide-icon" data-toggle="dropdown">
                                                    <i class="la la-eye"></i>
                                                    <div class="dropdown-menu">
                                                        <a href="" class="dropdown-item">Infrastructure</a>
                                                        <a href="" class="dropdown-item">Environmental</a>
                                                        <a href="" class="dropdown-item">Human</a>
                                                        <a href="" class="dropdown-item">Location</a>
                                                        <a href="" class="dropdown-item">Infrastructure & Location (LTC)</a>
                                                        <a href="" class="dropdown-item">Facility (Grey Roots Museum)</a>
                                                    </div>
                                                </button>
                                            </div>

                                            <div class="dropleft">
                                                <button type="button" class="btn btn-success btn-icon dropdown-toggle hide-icon" data-toggle="dropdown">
                                                    <i class="la la-edit"></i>
                                                    <div class="dropdown-menu">
                                                        <a href="" class="dropdown-item">Infrastructure</a>
                                                        <a href="" class="dropdown-item">Environmental</a>
                                                        <a href="" class="dropdown-item">Human</a>
                                                        <a href="" class="dropdown-item">Location</a>
                                                        <a href="" class="dropdown-item">Infrastructure & Location (LTC)</a>
                                                        <a href="" class="dropdown-item">Facility (Grey Roots Museum)</a>
                                                    </div>
                                                </button>
                                            </div>
                                            <button type="button" class="btn btn-warning btn-icon">
                                                <i class="la la-lock"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-icon">
                                                <i class="la la-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>BIA: Departments (Part 1)</strong></td>
                                <td><strong>March 15, 2019</strong></td>
                                <td>
                                    <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                            <div class="dropleft">
                                                <button type="button" class="btn btn-primary btn-icon dropdown-toggle hide-icon" data-toggle="dropdown">
                                                    <i class="la la-eye"></i>
                                                    <div class="dropdown-menu">
                                                        <a href="" class="dropdown-item">Infrastructure</a>
                                                        <a href="" class="dropdown-item">Environmental</a>
                                                        <a href="" class="dropdown-item">Human</a>
                                                        <a href="" class="dropdown-item">Location</a>
                                                        <a href="" class="dropdown-item">Infrastructure & Location (LTC)</a>
                                                        <a href="" class="dropdown-item">Facility (Grey Roots Museum)</a>
                                                    </div>
                                                </button>
                                            </div>

                                            <div class="dropleft">
                                                <button type="button" class="btn btn-success btn-icon dropdown-toggle hide-icon" data-toggle="dropdown">
                                                    <i class="la la-edit"></i>
                                                    <div class="dropdown-menu">
                                                        <a href="" class="dropdown-item">Infrastructure</a>
                                                        <a href="" class="dropdown-item">Environmental</a>
                                                        <a href="" class="dropdown-item">Human</a>
                                                        <a href="" class="dropdown-item">Location</a>
                                                        <a href="" class="dropdown-item">Infrastructure & Location (LTC)</a>
                                                        <a href="" class="dropdown-item">Facility (Grey Roots Museum)</a>
                                                    </div>
                                                </button>
                                            </div>
                                            <button type="button" class="btn btn-warning btn-icon">
                                                <i class="la la-lock"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-icon">
                                                <i class="la la-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>BIA: Departments (Part 2)</strong></td>
                                <td><strong>March 11, 2019</strong></td>
                                <td>
                                    <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                            <div class="dropleft">
                                                <button type="button" class="btn btn-primary btn-icon dropdown-toggle hide-icon" data-toggle="dropdown">
                                                    <i class="la la-eye"></i>
                                                    <div class="dropdown-menu">
                                                        <a href="" class="dropdown-item">Infrastructure</a>
                                                        <a href="" class="dropdown-item">Environmental</a>
                                                        <a href="" class="dropdown-item">Human</a>
                                                        <a href="" class="dropdown-item">Location</a>
                                                        <a href="" class="dropdown-item">Infrastructure & Location (LTC)</a>
                                                        <a href="" class="dropdown-item">Facility (Grey Roots Museum)</a>
                                                    </div>
                                                </button>
                                            </div>

                                            <div class="dropleft">
                                                <button type="button" class="btn btn-success btn-icon dropdown-toggle hide-icon" data-toggle="dropdown">
                                                    <i class="la la-edit"></i>
                                                    <div class="dropdown-menu">
                                                        <a href="" class="dropdown-item">Infrastructure</a>
                                                        <a href="" class="dropdown-item">Environmental</a>
                                                        <a href="" class="dropdown-item">Human</a>
                                                        <a href="" class="dropdown-item">Location</a>
                                                        <a href="" class="dropdown-item">Infrastructure & Location (LTC)</a>
                                                        <a href="" class="dropdown-item">Facility (Grey Roots Museum)</a>
                                                    </div>
                                                </button>
                                            </div>
                                            <button type="button" class="btn btn-warning btn-icon">
                                                <i class="la la-lock"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-icon">
                                                <i class="la la-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card card-custom sfia-scorecard">
                    <div class="card-body">
                        <div class="card-custom-title display-block border-0 p-0">
                            <h3 class="title">VALUE SCORECARD</h3>
                            <h5 class="sub-title">
                                <span>SFIA Skills Assessment</span>
                            </h5>
                        </div>

                        <select class="form-control form-control-lg" id="exampleSelectl">
                            <option>Risk Assessment - March 21, 2019</option>
                            <option>BIA: Departments (Part 1) - March 15, 2019</option>
                            <option>BIA: Departments (Part 2) - March 11, 2019</option>
                            <option>Service Criticality Report Card</option>
                            <option>Cloud Service Catalogue</option>
                            <option>Cloud Service Catalogue</option>
                        </select>
                        <div class="separator mt-8 mb-5"></div>
                        <div class="scorecard-table bd-two">
                            <div class="table-responsive">
                                <table class="table table-bordered sfia">
                                    <tr class="">
                                        <th colspan="8">TEAM/GROUP: ICT Management Team</th>
                                    </tr>
                                    <tr class="bg-gray">
                                        <td class="text-center">
                                            <strong>ID: HW013</strong>
                                        </td>
                                        <td class="text-center">
                                            <strong>ROLE/TITLE: Chief&nbsp;Information&nbsp;Officer</strong>
                                        </td>
                                        <td class="text-center">
                                            <strong>TECHNICAL SCORE</strong>
                                        </td>
                                        <td class="text-center bg-dark">
                                            <strong>N/A</strong>
                                        </td>
                                        <td class="text-center">
                                            <strong>SKILLS FIT %</strong>
                                        </td>
                                        <td class="text-center color-one">
                                            <strong>48%</strong>
                                        </td>
                                        <td class="text-center bg-dark icon">
                                            <span class="la la-power-off"></span>
                                        </td>
                                    </tr>
                                    <tr class="bg-blue">
                                        <td colspan="3"><strong>REQUIRED SKILL</strong></td>
                                        <td class="text-center"><strong>CODE</strong></td>
                                        <td colspan="2" class="text-center"><strong>TARGET</strong></td>
                                        <td class="text-center"><strong>ASSESSED</strong></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="bg-light-warning">
                                            <strong>Enterprise It Governnance</strong>
                                        </td>
                                        <td class="text-center bg-light-warning">
                                            <strong>GOVN</strong>
                                        </td>
                                        <td colspan="2" class="text-center color-five">
                                            <strong>LEVEL 7</strong>
                                        </td>
                                        <td class="text-center color-two">
                                            <strong>LEVEL 5</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="bg-light-warning">
                                            <strong>Strategic Planning</strong>
                                        </td>
                                        <td class="text-center bg-light-warning">
                                            <strong>ITSP</strong>
                                        </td>
                                        <td colspan="2" class="text-center color-five">
                                            <strong>LEVEL 7</strong>
                                        </td>
                                        <td class="text-center color-two">
                                            <strong>LEVEL 5</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="bg-light-warning">
                                            <strong>Information Security</strong>
                                        </td>
                                        <td class="text-center bg-light-warning">
                                            <strong>SCTY</strong>
                                        </td>
                                        <td colspan="2" class="text-center color-five">
                                            <strong>LEVEL 7</strong>
                                        </td>
                                        <td class="text-center color-one">
                                            <strong>LEVEL 3</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="bg-light-warning">
                                            <strong>Consultancy</strong>
                                        </td>
                                        <td class="text-center bg-light-warning">
                                            <strong>CNSL</strong>
                                        </td>
                                        <td colspan="2" class="text-center color-five">
                                            <strong>LEVEL 7</strong>
                                        </td>
                                        <td class="text-center color-three">
                                            <strong>LEVEL 6</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="bg-light-warning">
                                            <strong>IT Management</strong>
                                        </td>
                                        <td class="text-center bg-light-warning">
                                            <strong>ITMG</strong>
                                        </td>
                                        <td colspan="2" class="text-center color-five">
                                            <strong>LEVEL 7</strong>
                                        </td>
                                        <td class="text-center color-five">
                                            <strong>LEVEL 7</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="bg-light-warning">
                                            <strong>Financial Management</strong>
                                        </td>
                                        <td class="text-center bg-light-warning">
                                            <strong>FMIT</strong>
                                        </td>
                                        <td colspan="2" class="text-center color-five">
                                            <strong>LEVEL 6</strong>
                                        </td>
                                        <td class="text-center color-five">
                                            <strong>LEVEL 6</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="bg-light-warning">
                                            <strong>Continuity Management</strong>
                                        </td>
                                        <td class="text-center bg-light-warning">
                                            <strong>COPL</strong>
                                        </td>
                                        <td colspan="2" class="text-center color-five">
                                            <strong>LEVEL 5</strong>
                                        </td>
                                        <td class="text-center color-three">
                                            <strong>LEVEL 4</strong>
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
    <!--end::Container-->
</div>
<!--end::Entry-->


@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
@endsection

