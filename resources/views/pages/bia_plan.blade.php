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
																<p>The Objective of the Business Impact Analysis (BIA) ois the identification and analysis of business processes/activities (including required resources), with the objective of understanding the impact of downtime, which drives the assignment of the recovery objectives and prioritization.</p>
																<p>Following the BIA, the organization should be positioned to identify the critical activities that contribute to the delivery of its most important products and services, list all resources needed for recovery, and prioritize activities and resources by recovery objective.</p>
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
																<img src="public/media/cm-top-icon/bia_process.png" alt="">
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
												<div class="d-flex mb-8">
													<div class="title">
														<h3>
															1. Departmental Roles and Contacts
														</h3>
														<p>List all essential personnel and any individuals who have been cross-trained to perform a service/process</p>
													</div>
												</div>
												<table class="table table-bordered">
													<tr class="bg-blue">
														<th colspan="4">ESSENTIAL PERSONNEL AND CROSS-TRAINING</th>
													</tr>
													<tr class="bg-gray">
														<td>
															<strong>SERVICE/PROCESS</strong>
														</td>
														<td>
															<strong>PERFORMS THIS SERVICE/PROCESS</strong>
														</td>
														<td>
															<strong>CAN BE CROSS-TRAINED</strong>
														</td>
														<td>
															<strong>COMMENTS</strong>
														</td>
													</tr>
													<tr>
														<td class="bg-light-gray no-padding">
															<select name="" id="" class="form-control no-radius bg-light-gray">
																<option value="">Select Service/Process</option>
																<option value="">Processing of Building Permit Applications</option>
																<option value="">Plans Review</option>
																<option value="">Inspecting Construction/Demolition</option>
															</select>
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
														<td class="bg-light-gray no-padding">
															<select name="" id="" class="form-control no-radius bg-light-gray">
																<option value="">Select Service/Process</option>
																<option value="">Processing of Building Permit Applications</option>
																<option value="">Plans Review</option>
																<option value="">Inspecting Construction/Demolition</option>
															</select>
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
												<p>List all modes of notification and communication e.g. contact lists, phones email, conference bridge etc.</p>
												<table class="table table-bordered">
													<tr class="bg-blue">
														<th colspan="4">MODES OF NOTIFICATION AND COMMUNICATION</th>
													</tr>
													<tr class="bg-gray">
														<td>
															<strong>SYSTEM</strong>
														</td>
														<td>
															<strong>HOW TO USE</strong>
														</td>
														<td>
															<strong>SUPPORT ITEMS</strong>
														</td>
														<td>
															<strong>ACCESS LIST</strong>
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
													</tr>
												</table>
												<p>List all INTERNAL & EXTERNAL contacts required at the time of disaster</p>
												<table class="table table-bordered">
													<tr class="bg-blue">
														<th colspan="5">INTERNAL CONTACT LIST</th>
													</tr>
													<tr class="bg-gray">
														<td>
															<strong>POSITION</strong>
														</td>
														<td>
															<strong>NAME</strong>
														</td>
														<td>
															<strong>OFFICE PHONE</strong>
														</td>
														<td>
															<strong>CELL PHONE</strong>
														</td>
														<td>
															<strong>EMAIL</strong>
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
												<table class="table table-bordered">
													<tr class="bg-blue">
														<th colspan="5">EXTERNAL CONTACT LIST</th>
													</tr>
													<tr class="bg-gray">
														<td>
															<strong>VENDOR/SUPPLIER</strong>
														</td>
														<td>
															<strong>CONTACT</strong>
														</td>
														<td>
															<strong>PHONE</strong>
														</td>
														<td>
															<strong>EMAIL</strong>
														</td>
														<td>
															<strong>COMMENTS</strong>
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
														<h3 class="mb-8">
															2. Team Action Plans
														</h3>
														<div class="card">
															<div class="card-body">
																<ul>
																	<li class="mb-5">
																		<strong>
																			The Business Continuity Team Action Plan outlines the action to be taken and resources to be used to facilitate the continuity of critical business activities within the Primary Office in the event of prolonged business interruption due to major incident impacting core services.
																		</strong>
																	</li>
																	<li class="mb-5">
																		<strong>
																			This plan is not a complete, step- by-step, how-to-do it manual since each crisis situation is unique, with varying levels of threats and business impact.
																		</strong>
																	</li>
																	<li class="mb-5">
																		<strong>
																			The plan suggests action to take and is only guidelines to serve in managing incident. Real life decision for reacting to a major incident must be guide ultimately by the sound judgment and discretion of involved manager and staff.
																		</strong>
																	</li>
																	<li class="mb-5">
																		<strong>
																			Procedures for dealing with day-to-day problems are not dealt with in this plan. Such problems should be taken up under the corporation standard operating procedures.
																		</strong>
																	</li>
																</ul>
															</div>
														</div>	
													</div>
												</div>
												<table class="table table-bordered">
													<tr class="bg-blue">
														<th colspan="4">STRATEGY</th>
													</tr>
													<tr class="bg-gray">
														<td>
															<strong>DAY 1</strong>
														</td>
														<td>
															<strong>DAY 2</strong>
														</td>
														<td>
															<strong>DAY 3</strong>
														</td>
														<td>
															<strong>DAY 7</strong>
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
													</tr>
												</table>
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

