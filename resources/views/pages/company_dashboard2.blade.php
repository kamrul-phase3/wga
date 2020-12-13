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
												<div class="row align-items-center">
													<div class="card-custom-title display-block border-0 p-0">
														<h3 class="title">Current Metrics</h3>
														<h5 class="sub-title">
															<span>Last Completed Assessment</span>
														</h5>
													</div>
													<div class="cm-top-icon">
														<ul class="list-inline">
															<li>
																<img src="public/media/cm-top-icon/operations.png">
															</li>
															<li>
																<img src="public/media/cm-top-icon/hardware.png">
															</li>
															<li>
																<img src="public/media/cm-top-icon/software.png">
															</li>
															<li>
																<img src="public/media/cm-top-icon/network.png">
															</li>
															<li>
																<img src="public/media/cm-top-icon/data_management.png">
															</li>
														</ul>
													</div>
													<div class="row">
														<div class="col-sm-9">
															<div class="dashboard-main-image">
																<img src="public/media/chart.png" alt="">
															</div>
														</div>
														<div class="col-sm-3">
															<ul class="list-inline cm-side-icon">
																<li>
																	<img src="public/media/cm-top-icon/itscm-readinesst.png" alt="">
																</li>
																<li>
																	<img src="public/media/cm-top-icon/icon-eva.png" alt="">
																</li>
																<li>
																	<img src="public/media/cm-top-icon/sfial.png" alt="">
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="card card-custom mb-5">
											<div class="card card-custom">
												<div class="card-header">
													<div class="card-title">
														<h3 class="card-label">MTA Trend Analysis</h3>
													</div>
												</div>
												<div class="card-body">
													<div id="kt_flotcharts_1" style="height: 300px;"></div>
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
										<div class="card card-custom">
											<div class="card-body">
												<div class="card-custom-title display-block border-0 p-0">
													<h3 class="title">VALUE SCORECARD</h3>
													<h5 class="sub-title">
														<span>RISK ASSESSMENT (RA)</span>
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
													<table class="table table-bordered">
														<tr class="bg-dark">
															<th colspan="3">Technical Architecture</th>
														</tr>
														<tr class="bg-blue">
															<td><img src="public/media/cm-top-icon/technical-arch.png" alt=""></td>
															<td class="text-center"><strong>Cloud Readiness</strong></td>
															<td class="text-center"><strong>Rating Level</strong></td>
														</tr>
														<tr>
															<td><strong>Applications/Workloads</strong></td>
															<td class="text-center"><strong>2.0</strong></td>
															<td class="text-center color-one"><strong>2.0</strong></td>
														</tr>
														<tr>
															<td><strong>Compute</strong></td>
															<td class="text-center"><strong>3.0</strong></td>
															<td class="text-center color-three"><strong>3.0</strong></td>
														</tr>
														<tr>
															<td><strong>Storage</strong></td>
															<td class="text-center"><strong>3.8</strong></td>
															<td class="text-center color-five"><strong>3.8</strong></td>
														</tr>
														<tr>
															<td><strong>Connectivity</strong></td>
															<td class="text-center"><strong>3.3</strong></td>
															<td class="text-center color-three"><strong>3.3</strong></td>
														</tr>
													</table>
												</div>
												<div class="scorecard-table bd-two">
													<table class="table table-bordered">
														<tr class="bg-dark">
															<th colspan="3">Operations</th>
														</tr>
														<tr class="bg-blue">
															<td><img src="public/media/cm-top-icon/technical-arch.png" alt=""></td>
															<td class="text-center"><strong>Cloud Readiness</strong></td>
															<td class="text-center"><strong>Rating Level</strong></td>
														</tr>
														<tr>
															<td><strong>Security/Privacy</strong></td>
															<td class="text-center"><strong>2.7</strong></td>
															<td class="text-center color-three"><strong>3.0</strong></td>
														</tr>
														<tr>
															<td><strong>IT Service Management (ITSM)</strong></td>
															<td class="text-center"><strong>3.7</strong></td>
															<td class="text-center color-five"><strong>3.7</strong></td>
														</tr>
														<tr>
															<td><strong>Data Classification</strong></td>
															<td class="text-center"><strong>2.6</strong></td>
															<td class="text-center color-three"><strong>2.6</strong></td>
														</tr>
														<tr>
															<td><strong>Disaster Recovery (DR)/Backup</strong></td>
															<td class="text-center"><strong>3.2</strong></td>
															<td class="text-center color-three"><strong>3.2</strong></td>
														</tr>
													</table>
												</div>
												<div class="scorecard-table bd-two">
													<table class="table table-bordered">
														<tr class="bg-dark">
															<th colspan="3">Applications/Workloads</th>
														</tr>
														<tr class="bg-blue">
															<td><img src="public/media/cm-top-icon/technical-arch.png" alt=""></td>
															<td class="text-center"><strong>Cloud Readiness</strong></td>
															<td class="text-center"><strong>Rating Level</strong></td>
														</tr>
														<tr>
															<td><strong>Performance Requirements/Sensitivity</strong></td>
															<td class="text-center"><strong>2.3</strong></td>
															<td class="text-center color-three"><strong>3.5</strong></td>
														</tr>
														<tr>
															<td><strong>Application Lifecycle/Architecture</strong></td>
															<td class="text-center"><strong>2.2</strong></td>
															<td class="text-center color-one"><strong>2.2</strong></td>
														</tr>
														<tr>
															<td><strong>Data Governance</strong></td>
															<td class="text-center"><strong>3.0</strong></td>
															<td class="text-center color-three"><strong>3.0</strong></td>
														</tr>
													</table>
												</div>
												<div class="scorecard-table bd-two">
													<table class="table table-bordered">
														<tr class="bg-dark">
															<th colspan="3">Cost-Benefit Analysis</th>
														</tr>
														<tr class="bg-blue">
															<td><img src="public/media/cm-top-icon/technical-arch.png" alt=""></td>
															<td class="text-center"><strong>Cloud Readiness</strong></td>
															<td class="text-center"><strong>Rating Level</strong></td>
														</tr>
														<tr>
															<td><strong>Cloud Delivery Models</strong></td>
															<td class="text-center"><strong>4.0</strong></td>
															<td class="text-center color-five"><strong>4.0</strong></td>
														</tr>
														<tr>
															<td><strong>Migration Strategy</strong></td>
															<td class="text-center"><strong>2.0</strong></td>
															<td class="text-center color-one"><strong>2.0</strong></td>
														</tr>
														<tr>
															<td><strong>Risk Analysis</strong></td>
															<td class="text-center"><strong>4.0</strong></td>
															<td class="text-center color-five"><strong>4.0</strong></td>
														</tr>
													</table>
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

