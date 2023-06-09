@extends('front-user.layouts.master_user')

@section('content')

<section class="loginSection">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 logImg">
                <div class="logImgDiv">
                    <h3>Login</h3>
                    <div class="logImgBox">
                        <img src="{{ asset('/') }}/assets/front-end/images/log-lady.png" alt="">
                    </div>
                    <div class="lbBtmTxt">Don't have an account with us, <a href="{{url('signup')}}">Create one</a></div>
                </div>
            </div> 
            <div class="col-lg-6 col-md-6 col-sm-12 logForm">
                <div class="loginBox">
                    <a href="{{url('/')}}" class="wow fadeInRight login-logo"><img src="{{ asset('/') }}/assets/front-end/images/blue-logo.png" alt=""></a>
                    <div class="loginRight">
                        
                        <div class="authForm">
                            <form method="post" data-parsley-validate>
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email address" name="email" required="" data-parsley-required-message="Please enter email." data-parsley-type-message="Please enter a valid email.">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password <span class="text-danger">*</span></label>
                                    <input type="password" class="password form-control" id="exampleInputPassword1" placeholder="Enter password" name="password" required="" data-parsley-required-message="Please enter password.">
                                    
                                    <!-- <span class="passChk">
                                        <input type="checkbox" id="checkPass"><label for="checkPass"></label>
                                    </span> -->
                                </div>
                                <div class="form-group form-check custom-check">
                                    
                                    <div class="forGotLink">
                                        <a href="{{url('forgot-password')}}">Forgot Password?</a>
                                    </div>
                                </div>
                                <button type="submit" class="blueBtn smallBtn">Login</button>
                            </form>
                        </div>
                        
                        <!-- <div class="orDiv">OR</div>
                        <div class="glSocial">
                            <div class="row">
                                <div class="col-6">
                                    <a class="socialLogin fb" href="{{url('login/facebook')}}">Facebook</a>
                                </div>
                                <div class="col-6">
                                    <a class="socialLogin gl" href="{{url('login/google')}}">Google</a>
                                </div>
                            </div>
                        </div>
                        <div class="lbBtmTxt">Don't have an account? <a href="{{url('signup')}}">Sign up</a></div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- loginSection -->



@php 
if(isset($_SERVER['HTTP_REFERER']) && strpos($_SERVER['HTTP_REFERER'],'password/reset')===false)
    Session::put('redirectURL',$_SERVER['HTTP_REFERER']);
@endphp

@endsection

@section('script_links')

@endsection

@section('script_codes')


@endsection