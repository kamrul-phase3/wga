@extends('layout.fullwidth')

<div class="d-flex flex-column flex-root">
    <!--begin::Login-->
    <div class="login login-4 wizard d-flex flex-column flex-lg-row flex-column-fluid">
        <!--begin::Content-->
        <div class="login-container order-2 order-lg-1 d-flex flex-center flex-row-fluid px-7 pt-lg-0 pb-lg-0 pt-4 pb-6 bg-white">
            <!--begin::Wrapper-->
            <div class="login-content d-flex flex-column pt-lg-0 pt-12">
                <!--begin::Logo-->
                {{-- <a href="#" class="login-logo pb-xl-20 pb-15"> <img src="assets/media/logos/logo-4.png" class="max-h-70px" alt="" /> </a> --}}
                <!--end::Logo-->
                <!--begin::Signin-->
                <div class="login-form">
                    <!--begin::Form-->
                    <form class="form" method="POST" action="">
                        @csrf
                        <!--begin::Title-->
                        <div class="pb-5 pb-lg-15"> <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Sign In</h3> </div>
                        <!--begin::Title-->
                        <!--begin::Form group-->
                        <div class="form-group">
                            <label class="font-size-h6 font-weight-bolder text-dark">Your Email</label>
                            <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0" type="email" name="email" autocomplete="off" />
                        </div>
                        <!--end::Form group-->
                        <!--begin::Form group-->
                        <div class="form-group">
                            <div class="d-flex justify-content-between mt-n5">
                                <label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
                                <a href="custom/pages/login/login-4/forgot.html" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5">Forgot Password ?</a>
                            </div>
                            <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0" type="password" name="password" autocomplete="off" />
                        </div>
                        <div><input type="checkbox" /> <strong>Stay Signed in</strong></div>
                        <div class="pt-5">
                            <p>By accessing this portal, you are agreeing to these <a href="#">Terms of Use</a>.</p>
                        </div>
                        <!--end::Form group-->
                        <!--begin::Action-->
                        <div class="pb-lg-0 pb-5">
                            <button type="submit" id="" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Sign In</button>
                        </div>
                        <div class="login-logo-two">
                            <img src="{{ url('media/cm-top-icon/login-logo-two.png') }}" alt="" />
                        </div>
                        <!--end::Action-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Signin-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--begin::Content-->
        <!--begin::Aside-->
        <div class="login-aside order-1 order-lg-2 bgi-no-repeat bgi-position-x-right">
            <div class="login-conteiner d-flex align-items-center">
                <!--begin::Aside title-->
                <div class="ml-auto mr-auto">
                    <div class="login-thum text-center">
                        <img src="{{ url('media/cm-top-icon/login-logo.png') }}" alt="" />
                    </div>
                    <h3 class="mt-5 justify-content-lg-start font-weight-boldest text-white text-center">Infrastructure Health Check Portal</h3>
                </div>
                <!--end::Aside title-->
            </div>
        </div>
        <!--end::Aside-->
    </div>
    <!--end::Login-->
</div>

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/custom/login/login-4.js') }}" type="text/javascript"></script>
@endsection