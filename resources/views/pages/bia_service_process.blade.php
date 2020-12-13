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
                                            <li> Understanding of business process/activities, including:
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
                                <span class="label label-sm label-white mr-2">1</span>
                                Department Questionnaire
                            </a>
                            <a href="#" class="btn btn-primary btn-lg">
                                <span class="label label-sm label-white mr-2">2</span>
                                Service/Process Evaluation
                            </a>
                            <a href="#" class="btn btn-warning btn-lg">
                                <span class="label label-sm label-white mr-2">3</span>
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
                        <div class="d-flex mb-8">
                            <div class="title">
                                <h3>
                                    1. Provide a high level description of how your business line supports the mission and corporate priorities:
                                </h3>
                                <p>*For Financial Impact - Corporation needs to determine the thresholds that determine the five levels of severity</p>
                            </div>
                            <div style="min-width: 100px;" class="text-right ml-auto">
                                <a href="#" class="btn btn-success"> <i class="la la-file-alt"></i> Save </a>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <tr class="bg-gray">
                                <th class="invisible"></th>
                                <th class="invisible"></th>
                                <th class="invisible"></th>
                                <th class="invisible"></th>
                                <th>CRITICALITY LEVEL</th>
                                <th>CRITICALITY RATING</th>
                                <th>CALCULATED RTO</th>
                            </tr>
                            <tr>
                                <th class="bg-gray">SERVICE/PROCESS</th>
                                <th colspan="3" class="bg-gray">PROCESSING OF BUILDING PERMIT APPLICATIONS</th>
                                <th class="color-four">Non-essential</th>
                                <th class="color-four">6</th>
                                <th class="color-four">2 - 4 Weeks</th>
                            </tr>
                            <tr class="bg-blue">
                                <td>
                                    <strong>IMPACT</strong>
                                </td>
                                <td>
                                    <strong>1 DAY</strong>
                                </td>
                                <td>
                                    <strong>3 DAYS</strong>
                                </td>
                                <td>
                                    <strong>1 WEEK</strong>
                                </td>
                                <td>
                                    <strong>2 WEEK</strong>
                                </td>
                                <td>
                                    <strong>4 WEEK</strong>
                                </td>
                                <td>
                                    <strong>WEIGHT</strong>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>FINANCE</strong>
                                </td>
                                <td class="no-padding">
                                    <select name="" id="" class="form-control no-radius color-four">
                                        <option value="">$0 to $10,000</option>
                                        <option value="">$10,000 to $50,000</option>
                                        <option value="">$50,000 to $150,000</option>
                                        <option value="">$150,000 to $300,000</option>
                                        <option value="">Over $300,000</option>
                                    </select>
                                </td>
                                <td class="no-padding">
                                    <select name="" id="" class="form-control no-radius color-four">
                                        <option value="">$0 to $10,000</option>
                                        <option value="">$10,000 to $50,000</option>
                                        <option value="">$50,000 to $150,000</option>
                                        <option value="">$150,000 to $300,000</option>
                                        <option value="">Over $300,000</option>
                                    </select>
                                </td>
                                <td class="no-padding">
                                    <select name="" id="" class="form-control no-radius color-four">
                                        <option value="">$0 to $10,000</option>
                                        <option value="">$10,000 to $50,000</option>
                                        <option value="">$50,000 to $150,000</option>
                                        <option value="">$150,000 to $300,000</option>
                                        <option value="">Over $300,000</option>
                                    </select>
                                </td>
                                <td class="no-padding">
                                    <select name="" id="" class="form-control no-radius color-four">
                                        <option value="">$0 to $10,000</option>
                                        <option value="">$10,000 to $50,000</option>
                                        <option value="">$50,000 to $150,000</option>
                                        <option value="">$150,000 to $300,000</option>
                                        <option value="">Over $300,000</option>
                                    </select>
                                </td>
                                <td class="no-padding">
                                    <select name="" id="" class="form-control no-radius color-four">
                                        <option value="">$0 to $10,000</option>
                                        <option value="">$10,000 to $50,000</option>
                                        <option value="">$50,000 to $150,000</option>
                                        <option value="">$150,000 to $300,000</option>
                                        <option value="">Over $300,000</option>
                                    </select>
                                </td>
                                <td class="no-padding">
                                    <select name="" id="" class="form-control no-radius color-five">
                                        <option value="">Normal</option>
                                        <option value="">Important</option>
                                        <option value="">Vital</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>REPUTATION</strong>
                                </td>
                                <td class="no-padding">
                                    <select name="" id="" class="form-control no-radius color-four">
                                        <option value="">No to Low</option>
                                        <option value="">Moderate to High</option>
                                        <option value="">High</option>
                                        <option value="">High to Catastrophic</option>
                                    </select>
                                </td>
                                <td class="no-padding">
                                    <select name="" id="" class="form-control no-radius color-four">
                                        <option value="">No to Low</option>
                                        <option value="">Moderate to High</option>
                                        <option value="">High</option>
                                        <option value="">High to Catastrophic</option>
                                    </select>
                                </td>
                                <td class="no-padding">
                                    <select name="" id="" class="form-control no-radius color-four">
                                        <option value="">No to Low</option>
                                        <option value="">Moderate to High</option>
                                        <option value="">High</option>
                                        <option value="">High to Catastrophic</option>
                                    </select>
                                </td>
                                <td class="no-padding">
                                    <select name="" id="" class="form-control no-radius color-five">
                                        <option value="">Moderate to High</option>
                                        <option value="">No to Low</option>
                                        <option value="">High</option>
                                        <option value="">High to Catastrophic</option>
                                    </select>
                                </td>
                                <td class="no-padding">
                                    <select name="" id="" class="form-control no-radius color-three">
                                        <option value="">Moderate to High</option>
                                        <option value="">No to Low</option>
                                        <option value="">High</option>
                                        <option value="">High to Catastrophic</option>
                                    </select>
                                </td>
                                <td class="no-padding">
                                    <select name="" id="" class="form-control no-radius color-five">
                                        <option value="">Normal</option>
                                        <option value="">Important</option>
                                        <option value="">Vital</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4" class="invisible"></td>
                                <td colspan="2" class="text-right">
                                    <strong>Maximum Tolerable Outage (MTO)</strong>
                                </td>
                                <td class="no-padding">
                                    <select name="" id="" class="form-control no-radius">
                                        <option value="">Over 3 days</option>
                                        <option value="">72-Hours</option>
                                        <option value="">24-hours</option>
                                        <option value="">0-4 hours</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card card-custom mb-8">
                    <div class="card-body">
                        <div class="d-flex mb-8">
                            <div class="title">
                                <h3>
                                    2. For each service/process provide additional details for critical impact critera
                                </h3>
                                <p>Examples Include: Financial, Reputation, Operational, Legal and Regulatory Compliance, Contractual Compliance, Health and Safety</p>
                            </div>
                            <div style="min-width: 100px;" class="text-right ml-auto">
                                <a href="#" class="btn btn-success"> <i class="la la-file-alt"></i> Save </a>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <tr class="bg-gray">
                                <th style="width: 300px;">(SERVICE/PROCESS)</th>
                                <th>COMMENTS</th>
                            </tr>
                            <tr>
                                <td class="bg-light-gray">
                                    <strong>PROCESSING OF BUILDING PERMIT APPLICATIONS</strong>
                                </td>
                                <td class="no-padding">
                                    <textarea name="" id="" class="form-control no-radius"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-light-gray">
                                    <strong>PLANS REVIEW</strong>
                                </td>
                                <td class="no-padding">
                                    <textarea name="" id="" class="form-control no-radius"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-light-gray">
                                    <strong>INSPECTING CONSTRUCTION/DEMOLITION</strong>
                                </td>
                                <td class="no-padding">
                                    <textarea name="" id="" class="form-control no-radius"></textarea>
                                </td>
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
                            <div class="title">
                                <h3>
                                    3. If the IT systems were impacted, what is the maximum acceptable level of data loss (hours/day/weeks)?
                                </h3>
                                <p>This represents the Recovery Point Objective (RPO) or tolerance to lose data</p>
                            </div>
                            <div style="min-width: 100px;" class="text-right ml-auto">
                                <a href="#" class="btn btn-success"> <i class="la la-file-alt"></i> Save </a>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <tr class="bg-gray">
                                <th>SERVICE/PROCESS</th>
                                <th>RPO</th>
                                <th>PROCESS TO MANUALLY RECREATE DATA (IF ANY)</th>
                            </tr>
                            <tr>
                                <td class="bg-light-gray">
                                    <strong>PROCESSING OF BUILDING PERMIT APPLICATIONS</strong>
                                </td>
                                <td class="no-padding color-two">
                                    <select name="" id="" class="form-control no-radius color-two">
                                        <option value="">0-4 days</option>
                                        <option value="">1-day</option>
                                        <option value="">3-day</option>
                                        <option value="">1-week</option>
                                    </select>
                                </td>
                                <td class="no-padding">
                                    <textarea name="" id="" class="form-control no-radius"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-light-gray">
                                    <strong>PLANS REVIEW</strong>
                                </td>
                                <td class="no-padding color-two">
                                    <select name="" id="" class="form-control no-radius color-two">
                                        <option value="">0-4 days</option>
                                        <option value="">1-day</option>
                                        <option value="">3-day</option>
                                        <option value="">1-week</option>
                                    </select>
                                </td>
                                <td class="no-padding">
                                    <textarea name="" id="" class="form-control no-radius"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-light-gray">
                                    <strong>INSPECTING CONSTRUCTION/DEMOLITION</strong>
                                </td>
                                <td class="no-padding color-two">
                                    <select name="" id="" class="form-control no-radius color-two">
                                        <option value="">0-4 days</option>
                                        <option value="">1-day</option>
                                        <option value="">3-day</option>
                                        <option value="">1-week</option>
                                    </select>
                                </td>
                                <td class="no-padding">
                                    <textarea name="" id="" class="form-control no-radius"></textarea>
                                </td>
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
                            <div class="title">
                                <h3>
                                    4(a). List ALL IT upstream dependencies for each service/process
                                </h3>
                                <p>
                                    UPSTREAM DEPENDENCIES (IT) - These are services defined within the organizations IT service catalogue DESKTOP APPLICATIONS - These are applications installed locally on user devices (desktops, laptops,
                                    tablets etc.)
                                </p>
                            </div>
                            <div style="min-width: 100px;" class="text-right ml-auto">
                                <a href="#" class="btn btn-success"> <i class="la la-file-alt"></i> Save </a>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <tr class="bg-gray">
                                <th>INTERNAL FUNCTION (SERVICE/PROCESS)</th>
                                <th>UPSTREAM DEPENDENCIES (IT)</th>
                                <th>DESKTOP APPLICATIONS</th>
                                <th>COMMENTS</th>
                            </tr>
                            <tr>
                                <td class="bg-light-gray">
                                    <strong>PROCESSING OF BUILDING PERMIT APPLICATIONS</strong>
                                </td>
                                <td class="color-one"></td>
                                <td class="color-five"></td>
                                <td class="no-padding">
                                    <textarea name="" id="" class="form-control no-radius"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-light-gray">
                                    <strong>PLANS REVIEW</strong>
                                </td>
                                <td class="color-one"></td>
                                <td class="color-five"></td>
                                <td class="no-padding">
                                    <textarea name="" id="" class="form-control no-radius"></textarea>
                                </td>
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
                            <div class="title">
                                <h3>
                                    4(b). List ALL secondary IT service requirements
                                </h3>
                                <p>Secondary IT service requirements are defined as those which are not required to meet the service/process RTO but are needed at some point in time as part of the business delivery process</p>
                            </div>
                            <div style="min-width: 100px;" class="text-right ml-auto">
                                <a href="#" class="btn btn-success"> <i class="la la-file-alt"></i> Save </a>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <tr class="bg-gray">
                                <th>INTERNAL FUNCTION (SERVICE/PROCESS)</th>
                                <th>TIER 1 (0-4 HOURS)</th>
                                <th>TIER 2 (24 - HOURS)</th>
                                <th>TIER 3 (3 - DAYS)</th>
                                <th>TIER 4 (7 - DAYS)</th>
                                <th>TIER 5 (2-4 WEEKS)</th>
                            </tr>
                            <tr>
                                <td class="bg-light-gray">
                                    <strong>PROCESSING OF BUILDING PERMIT APPLICATIONS</strong>
                                </td>
                                <td class="color-five"></td>
                                <td class="color-five"></td>
                                <td class="color-five"></td>
                                <td class="color-five"></td>
                                <td class="color-five"></td>
                            </tr>
                            <tr>
                                <td class="bg-light-gray">
                                    <strong>PLANS REVIEW</strong>
                                </td>
                                <td class="color-five"></td>
                                <td class="color-five"></td>
                                <td class="color-five"></td>
                                <td class="color-five"></td>
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
                            <div class="title">
                                <h3>
                                    5. List ALL additional functions (cloud providers, mobile apps, suppliers, clients, etc.) that the service/process requires to function
                                </h3>
                                <p>Indicate if this dependency would be required to meet RTO at the MSL</p>
                            </div>
                            <div style="min-width: 100px;" class="text-right ml-auto">
                                <a href="#" class="btn btn-success"> <i class="la la-file-alt"></i> Save </a>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <tr class="bg-gray">
                                <th>EXTERNAL DEPENDENCIES (SERVICE/PROCESS)</th>
                                <th>CLOUD PROVIDERS</th>
                                <th>MOBILE APPS</th>
                                <th>OTHER EXTERNAL FUNCTIONS (SUPPLIERS, CLIENTS, ETC.)</th>
                            </tr>
                            <tr>
                                <td class="bg-light-gray">
                                    <strong>PROCESSING OF BUILDING PERMIT APPLICATIONS</strong>
                                </td>
                                <td class="color-one"></td>
                                <td class="color-five"></td>
                                <td class="no-padding">
                                    <textarea name="" id="" class="form-control no-radius"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-light-gray">
                                    <strong>PLANS REVIEW</strong>
                                </td>
                                <td class="color-five"></td>
                                <td class="color-five"></td>
                                <td class="no-padding">
                                    <textarea name="" id="" class="form-control no-radius"></textarea>
                                </td>
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
                            <div class="title">
                                <h3>
                                    6. Delivery of service/process - information and technology requirements
                                </h3>
                                <p>
                                    It is important to identify and protect those files, records and databases that are imperative for departmental operations Some records are needed to make and receive payments, protect legal and financial
                                    rights and maintain confidential information
                                </p>
                            </div>
                            <div style="min-width: 100px;" class="text-right ml-auto">
                                <a href="#" class="btn btn-success"> <i class="la la-file-alt"></i> Save </a>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <tr class="bg-blue">
                                <th colspan="5">VITAL RECORDS</th>
                            </tr>
                            <tr class="bg-gray">
                                <th>FILES/DATABASES/PAPER -PLEASE SPECIFY</th>
                                <th>DESCRIPTION</th>
                                <th>LOCATION OF VITAL RECORDS</th>
                                <th>FORMAT</th>
                                <th>UPDATED</th>
                            </tr>
                            <tr>
                                <td class="no-padding">
                                    <textarea name="" id="" class="form-control no-radius"></textarea>
                                </td>
                                <td class="no-padding">
                                    <textarea name="" id="" class="form-control no-radius"></textarea>
                                </td>
                                <td class="no-padding">
                                    <textarea name="" id="" class="form-control no-radius"></textarea>
                                </td>
                                <td class="no-padding">
                                    <textarea name="" id="" class="form-control no-radius"></textarea>
                                </td>
                                <td class="no-padding">
                                    <textarea name="" id="" class="form-control no-radius"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="no-padding">
                                    <textarea name="" id="" class="form-control no-radius"></textarea>
                                </td>
                                <td class="no-padding">
                                    <textarea name="" id="" class="form-control no-radius"></textarea>
                                </td>
                                <td class="no-padding">
                                    <textarea name="" id="" class="form-control no-radius"></textarea>
                                </td>
                                <td class="no-padding">
                                    <textarea name="" id="" class="form-control no-radius"></textarea>
                                </td>
                                <td class="no-padding">
                                    <textarea name="" id="" class="form-control no-radius"></textarea>
                                </td>
                            </tr>
                        </table>
                        <p>Please detail the technology required to deliver the service/process. Include critical applications/function along with the primary support contact</p>
                        <table class="table table-bordered">
                            <tr class="bg-blue">
                                <th colspan="7">TECHNOLOGY REQUIRED</th>
                            </tr>
                            <tr class="bg-gray">
                                <th>COMPUTERS, MOBILE DEVICES, NETWORK ACCESS – PLEASE SPECIFY</th>
                                <th>NORMAL</th>
                                <th>#MSL</th>
                                <th>DESKTOP APPLICATIONS</th>
                                <th>FUNCTION</th>
                                <th>SUPPORT CONTACT</th>
                                <th>COMMENTS</th>
                            </tr>
                            <tr>
                                <td class="no-padding">
                                    <textarea name="" id="" class="form-control no-radius"></textarea>
                                </td>
                                <td class="no-padding">
                                    <textarea name="" id="" class="form-control no-radius"></textarea>
                                </td>
                                <td class="no-padding">
                                    <textarea name="" id="" class="form-control no-radius"></textarea>
                                </td>
                                <td class="color-five"></td>
                                <td class="no-padding">
                                    <textarea name="" id="" class="form-control no-radius"></textarea>
                                </td>
                                <td class="no-padding">
                                    <textarea name="" id="" class="form-control no-radius"></textarea>
                                </td>
                                <td class="no-padding">
                                    <textarea name="" id="" class="form-control no-radius"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="no-padding">
                                    <textarea name="" id="" class="form-control no-radius"></textarea>
                                </td>
                                <td class="no-padding">
                                    <textarea name="" id="" class="form-control no-radius"></textarea>
                                </td>
                                <td class="no-padding">
                                    <textarea name="" id="" class="form-control no-radius"></textarea>
                                </td>
                                <td class="color-five"></td>
                                <td class="no-padding">
                                    <textarea name="" id="" class="form-control no-radius"></textarea>
                                </td>
                                <td class="no-padding">
                                    <textarea name="" id="" class="form-control no-radius"></textarea>
                                </td>
                                <td class="no-padding">
                                    <textarea name="" id="" class="form-control no-radius"></textarea>
                                </td>
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
                            <div class="title">
                                <h3>
                                    9. Other Internal Dependencies (Upstream/Downstream) - For each service/process please list all Upstream and Downstream service/process dependencies:
                                </h3>
                            </div>
                            <div style="min-width: 100px;" class="text-right ml-auto">
                                <a href="#" class="btn btn-success"> <i class="la la-file-alt"></i> Save </a>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <tr class="bg-blue">
                                <th colspan="4">
                                    UPSTREAM DEPENDENCY - A SERVICES/PROCESS REQUIRED TO SUPPORT THE DELIVERY OF ANOTHER SERVICE/PROCESS DOWNSTREAM DEPENDENCIES - A SERVICES/PROCESS THAT REQUIRES THE SUPPORT OF ANOTHER SERVICE/PROCESS FOR
                                    DELIVERY
                                </th>
                            </tr>
                            <tr class="bg-gray">
                                <th>SERVICE/PROCESS</th>
                                <th>UPSTREAM DEPENDENCY</th>
                                <th>DOWNSTREAM DEPENDENCY</th>
                                <th>COMMENTS</th>
                            </tr>
                            <tr>
                                <th class="no-padding bg-light-gray">
                                    <select name="" id="" class="form-control no-radius bg-light-gray">
                                        <option value="">Select Service/Process</option>
                                        <option value="">Processing of Building Permit Applications</option>
                                        <option value="">Plans Review</option>
                                        <option value="">Inspecting Construction/Demolition</option>
                                        <option value="">Maintenance Inspections</option>
                                        <option value="">Issuing Orders/Enforcement</option>
                                        <option value="">Assign Civic Numbers</option>
                                        <option value="">Management of Lot Grading (where applicable)</option>
                                    </select>
                                </th>
                                <td class="no-padding">
                                    <textarea name="" id="" class="form-control no-radius"></textarea>
                                </td>
                                <td class="no-padding">
                                    <textarea name="" id="" class="form-control no-radius"></textarea>
                                </td>
                                <td class="no-padding">
                                    <textarea name="" id="" class="form-control no-radius"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <th class="no-padding bg-light-gray">
                                    <select name="" id="" class="form-control no-radius bg-light-gray">
                                        <option value="">Select Service/Process</option>
                                        <option value="">Processing of Building Permit Applications</option>
                                        <option value="">Plans Review</option>
                                        <option value="">Inspecting Construction/Demolition</option>
                                        <option value="">Maintenance Inspections</option>
                                        <option value="">Issuing Orders/Enforcement</option>
                                        <option value="">Assign Civic Numbers</option>
                                        <option value="">Management of Lot Grading (where applicable)</option>
                                    </select>
                                </th>
                                <td class="no-padding">
                                    <textarea name="" id="" class="form-control no-radius"></textarea>
                                </td>
                                <td class="no-padding">
                                    <textarea name="" id="" class="form-control no-radius"></textarea>
                                </td>
                                <td class="no-padding">
                                    <textarea name="" id="" class="form-control no-radius"></textarea>
                                </td>
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

