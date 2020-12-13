<div id="kt_quick_cart" class="offcanvas offcanvas-right p-10">
	@if ( $switchableUsers )
	<!--begin::Header-->
	<div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
		<h4 class="font-weight-bold m-0">Switch User</h4>
		<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_cart_close">
			<i class="ki ki-close icon-xs text-muted"></i>
		</a>
	</div>
	<!--end::Header-->
	<!--begin::Content-->
	<div class="offcanvas-content">
		<!--begin::Wrapper-->
		<div class="offcanvas-wrapper mb-5 scroll-pull">
			<!--begin::Item-->
			<div class="switch-user-list">
				<!--begin::Item-->
				@foreach ($switchableUsers as $switchableUser)
					@if ( $switchableUser->company )
						<a href="{{ url('/user/switch/'.$switchableUser->id) }}" class="text-dark text-hover-primary mb-3 font-size-lg">
							<div class="d-flex align-items-center bg-white-shadow rounded p-3">
								<div class="symbol symbol-40 mr-5"> <img src="{{ $switchableUser->getAvatarUrl() }}" class="h-75 align-self-end" alt="" /> </div>
							    <div class="d-flex flex-column"> {{ $switchableUser->name }} 
							    	<span class="text-muted font-size-sm">{{ $switchableUser->company->name }}</span> 
							    </div>
							</div>
						</a>
					@endif
				@endforeach
				<!--end::Item-->
			</div>
			<!--end::Item-->
		</div>
		<!--end::Wrapper-->
	</div>
	@endif
	<!--end::Content-->
</div>