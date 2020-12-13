<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
	<!--begin::Container-->
	<div class="container">
		<!--begin::Dashboard-->
		<!--begin::Row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="card card-custom">
					<div class="card-header flex-wrap border-0 pt-6 pb-0">
						<div class="card-title">
							<h3 class="card-label">Previous Health Check</h3>
						</div>
					</div>
					<div class="card-body">
						<!--begin: Search Form-->
						<!--begin::Search Form-->
						<div class="mb-7">
							<div class="row align-items-center">
								<div class="col-lg-9 col-xl-8">
									<div class="row align-items-center">
										<div class="col-md-4 my-2 my-md-0">
											<div class="input-icon">
												<input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
												<span>
													<i class="flaticon2-search-1 text-muted"></i>
												</span>
											</div>
										</div>
										<div class="col-md-4 my-2 my-md-0">
											<div class="d-flex align-items-center">
												<label class="mr-3 mb-0 d-none d-md-block">Company:</label>
												<select class="form-control" id="kt_datatable_search_status">
													<option value="">All</option>
													<option value="1">City of Brampton</option>
													<option value="2">City of Burlington</option>
													<option value="3">City of Guelph</option>
													<option value="4">City of Oshawa</option>
													<option value="5">Clairus Group</option>
													<option value="6">County of Essex</option>
												</select>
											</div>
										</div>
										<div class="col-md-4 my-2 my-md-0">
											<div class="d-flex align-items-center">
												<label class="mr-3 mb-0 d-none d-md-block">Year:</label>
												<select class="form-control" id="kt_datatable_search_type">
													<option value="">All</option>
													<option value="1">2017</option>
													<option value="2">2018</option>
													<option value="3">2019</option>
													<option value="4">2020</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
									<a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>
								</div>
							</div>
						</div>
						<!--end::Search Form-->
						<!--end: Search Form-->
						<!--begin: Datatable-->
						<div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded">
							<table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
								<thead>
									<tr>
										<th title="Field #1">Company</th>
										<th title="Field #2">Category</th>
										<th title="Field #3">Published</th>
										<th title="Field #4">Modified</th>
										<th title="Field #5">Action</th>
										<th title="Field #6">Status</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>County of Essex</td>
										<td>Administration</td>
										<td>Sep 13, 2020</td>
										<td>Sep 21, 2020</td>
										<td aria-label="">
										    <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
									    <div class="btn-group" role="group" aria-label="First group">
									    	<div class="dropleft">
									    		<button type="button" class="btn btn-primary btn-icon dropdown-toggle hide-icon" data-toggle="dropdown" data-toggle="tooltip" data-theme="dark" title="View">
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
									        	<i class="la la-chart-area"></i>
									        </button>
									        <button type="button" class="btn btn-danger btn-icon">
									        	<i class="la la-trash"></i>
									        </button>
									    </div>
									</div>
										</td>
										<td>Active</td>
									</tr>
									<tr>
										<td>County of Essex</td>
										<td>Finance Group</td>
										<td>Aug 20, 2020</td>
										<td>Aug 25, 2020</td>
										<td style="min-width: 210px;">
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
											        	<i class="la la-chart-area"></i>
											        </button>
											        <button type="button" class="btn btn-danger btn-icon">
											        	<i class="la la-trash"></i>
											        </button>
											    </div>
											</div>
										</td>
										<td>Active</td>
									</tr>
									<tr>
										<td>County of Essex</td>
										<td>Community Services</td>
										<td>Jul 28, 2020</td>
										<td>Jul 29, 2020</td>
										<td style="min-width: 210px;">
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
											        	<i class="la la-chart-area"></i>
											        </button>
											        <button type="button" class="btn btn-danger btn-icon">
											        	<i class="la la-trash"></i>
											        </button>
											    </div>
											</div>
										</td>
										<td>Active</td>
									</tr>
									<tr>
										<td>Hamilton-Wentworth Catholic District School Board</td>
										<td>Curriculum, Student Achievement & Leadership Development</td>
										<td>Jul 23, 2020</td>
										<td>Sep 3, 2020</td>
										<td style="width: 210px;">
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
									        	<i class="la la-chart-area"></i>
									        </button>
									        <button type="button" class="btn btn-danger btn-icon">
									        	<i class="la la-trash"></i>
									        </button>
									    </div>
									</div>
										</td>
										<td>Active</td>
									</tr>
									<tr>
										<td>Hamilton-Wentworth Catholic District School Board</td>
										<td>Governance and Administration Services</td>
										<td>Jul 22, 2020</td>
										<td>Sep 3, 2020</td>
										<td style="min-width: 210px;">
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
									        	<i class="la la-chart-area"></i>
									        </button>
									        <button type="button" class="btn btn-danger btn-icon">
									        	<i class="la la-trash"></i>
									        </button>
									    </div>
									</div>
										</td>
										<td>Active</td>
									</tr>
									<tr>
										<td>Town of Ajax</td>
										<td>BIA - Operations</td>
										<td>Jul 4, 2020</td>
										<td>Jul 4, 2020</td>
										<td data-field="Actions" data-autohide-disabled="false" aria-label="null" class="datatable-cell">
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
									        	<i class="la la-chart-area"></i>
									        </button>
									        <button type="button" class="btn btn-danger btn-icon">
									        	<i class="la la-trash"></i>
									        </button>
									    </div>
									</div>
										</td>
										<td>Active</td>
									</tr>
									<tr>
										<td>Hamilton-Wentworth Catholic District School Board</td>
										<td>Corporate Services</td>
										<td>Jul 3, 2020</td>
										<td>July 4, 2020</td>
										<td data-field="Actions" data-autohide-disabled="false" aria-label="null" class="datatable-cell">
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
									        	<i class="la la-chart-area"></i>
									        </button>
									        <button type="button" class="btn btn-danger btn-icon">
									        	<i class="la la-trash"></i>
									        </button>
									    </div>
									</div>
										</td>
										<td>Active</td>
									</tr>
									<tr>
										<td>Middlesex County</td>
										<td>Middlesex BIA 2019</td>
										<td>Mar 29, 2020</td>
										<td>Mar 29, 2020</td>
										<td data-field="Actions" data-autohide-disabled="false" aria-label="null" class="datatable-cell">
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
									        	<i class="la la-chart-area"></i>
									        </button>
									        <button type="button" class="btn btn-danger btn-icon">
									        	<i class="la la-trash"></i>
									        </button>
									    </div>
									</div>
										</td>
										<td>Active</td>
									</tr>
									<tr>
										<td>Town of Halton Hills</td>
										<td>Halton Hills BIA (Part 2)</td>
										<td>Mar 25, 2020</td>
										<td>Mar 25, 2020</td>
										<td data-field="Actions" data-autohide-disabled="false" aria-label="null" class="datatable-cell">
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
									        	<i class="la la-chart-area"></i>
									        </button>
									        <button type="button" class="btn btn-danger btn-icon">
									        	<i class="la la-trash"></i>
									        </button>
									    </div>
									</div>
										</td>
										<td>Active</td>
									</tr>
									<tr>
										<td>Town of Halton Hills</td>
										<td>Halton Hills BIA (Part 1)</td>
										<td>Mar 25, 2020</td>
										<td>Mar 25, 2020</td>
										<td data-field="Actions" data-autohide-disabled="false" aria-label="null" class="datatable-cell">
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
									        	<i class="la la-chart-area"></i>
									        </button>
									        <button type="button" class="btn btn-danger btn-icon">
									        	<i class="la la-trash"></i>
									        </button>
									    </div>
									</div>
										</td>
										<td>Active</td>
									</tr>
									<tr>
										<td>Town of Whitby</td>
										<td>BIA Divisions: Part 3</td>
										<td>Jan 3, 2020</td>
										<td>Jan 4, 2020</td>
										<td data-field="Actions" data-autohide-disabled="false" aria-label="null" class="datatable-cell">
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
									        	<i class="la la-chart-area"></i>
									        </button>
									        <button type="button" class="btn btn-danger btn-icon">
									        	<i class="la la-trash"></i>
									        </button>
									    </div>
									</div>
										</td>
										<td>Active</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!--end: Datatable-->
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