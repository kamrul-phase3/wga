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
																<img src="public/media/cm-top-icon/customer_facing.png">
															</li>
															<li>
																<img src="public/media/cm-top-icon/integration.png">
															</li>
															<li>
																<img src="public/media/cm-top-icon/business_solutions.png">
															</li>
															<li>
																<img src="public/media/cm-top-icon/technology_infrastructure.png">
															</li>
														</ul>
													</div>
													<div class="row">
														<div class="col-sm-9">
															<div class="dashboard-main-image">
																<img src="public/media/cm-top-icon/mta.png" alt="">
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
												<div class="scorecard-rate">
													<div class="items color-four">
														<span>0</span>
													</div>
													<div class="items color-four">
														1
													</div>
													<div class="items color-four">
														2<span>(A)</span>
													</div>
													<div class="items color-four">
														3<span>(B)</span>
													</div>
													<div class="items color-three">
														4<span>(C)</span>
													</div>
													<div class="items color-three">
														5<span>(D)</span>
													</div>
													<div class="items color-three">
														6<span>(E)</span>
													</div>
													<div class="items color-three">
														7<span>(F)</span>
													</div>
													<div class="items color-three">
														8<span>(G)</span>
													</div>
													<div class="items color-two">
														9<span>(H)</span>
													</div>
													<div class="items color-two">
														10<span>(I)</span>
													</div>
													<div class="items color-two">
														11<span>(J)</span>
													</div>
													<div class="items color-two">
														12<span>(K)</span>
													</div>
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
															<td><strong>B</strong></td>
															<td><strong>Explosion (Environmental)</strong></td>
															<td class="color-four"><strong>3</strong></td>
														</tr>
														<tr>
															<td><strong>B</strong></td>
															<td><strong>Hurricane/Tornado (Environmental)</strong></td>
															<td class="color-four"><strong>3</strong></td>
														</tr>
														<tr>
															<td><strong>B</strong></td>
															<td><strong>Fire (Environmental)</strong></td>
															<td class="color-four"><strong>3</strong></td>
														</tr>
														<tr>
															<td><strong>C</strong></td>
															<td><strong>Loss of Staff (Human)</strong></td>
															<td class="color-three"><strong>4</strong></td>
														</tr>
														<tr>
															<td><strong>C</strong></td>
															<td><strong>Climate and Contamination (Facility (Grey Roots Museum))</strong></td>
															<td class="color-three"><strong>4</strong></td>
														</tr>
														<tr>
															<td><strong>D</strong></td>
															<td><strong>Power Failure (Environmental)</strong></td>
															<td class="color-three"><strong>5</strong></td>
														</tr>
														<tr>
															<td><strong>D</strong></td>
															<td><strong>Loss of Hardcopy Records (Infrastructure & Location (LTC))</strong></td>
															<td class="color-three"><strong>5</strong></td>
														</tr>
														<tr>
															<td><strong>E</strong></td>
															<td><strong>Unauthorized Access to Senstive Data (Human)</strong></td>
															<td class="color-three"><strong>6</strong></td>
														</tr>
														<tr>
															<td><strong>E</strong></td>
															<td><strong>Flood (Environmental)</strong></td>
															<td class="color-three"><strong>6</strong></td>
														</tr>
														<tr>
															<td><strong>E</strong></td>
															<td><strong>Physical Forces (Facility (Grey Roots Museum))</strong></td>
															<td class="color-three"><strong>6</strong></td>
														</tr>
														<tr>
															<td><strong>E</strong></td>
															<td><strong>Ice Storm (Environmental)</strong></td>
															<td class="color-three"><strong>6</strong></td>
														</tr>
														<tr>
															<td><strong>F</strong></td>
															<td><strong>Flood (Water) (Facility (Grey Roots Museum))</strong></td>
															<td class="color-three"><strong>7</strong></td>
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
														<tr>
															<td><strong>G</strong></td>
															<td><strong>Physical Security (Location)</strong></td>
															<td class="color-three"><strong>8</strong></td>
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

