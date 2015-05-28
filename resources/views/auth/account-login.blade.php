@extends('app')

@section('content')
    <div class="header-breadcrumb mbottom50">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="section-title fleft">My Account</h1>
                    <ul class="reset-list">
                        <li>
                            <p>Account</p>
                        </li>
                        <li>/</li>
                        <li class="active">
                            <p>Login</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- end header-breadcrumb -->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 mbottom50">
                    <div class="register-panel thin-shadow clearfix">
                        <div class="reg-panel-title">
                            <b>REGISTERED USER</b>
                        </div>
                        @include('errors.list')
                        <form role="form" method="POST" action="{{ url('/auth/login') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-row">
                                <div class="form-line full">
                                    <label for="login_username" class="mbottom5">Email Address</label>
                                    <input type="email" name="email" id="email" value="{{ old('email') }}">
                                </div>
                                <!-- end form-line -->
                                <div class="form-line full">
                                    <label for="login_password" class="mbottom5">Password</label>
                                    <input type="password" name="password" id="password">
                                </div>

                                <!-- end form-line -->
                                <div class="form-line full">
                                    <button type="submit" class="btn btn-default mright15">LOGIN</button>
                                    <a href="{{ url('/password/email')}}" class="lost-password">Lost Password?</a>
                                </div>

                                <!-- end form-line -->
                            </div>
                            <!-- end form-row -->
                        </form>
                    </div>
                    <!-- end register-panel -->
                </div>
                <div class="col-sm-6 mtop40 mbottom50">
                    <div class="reg-panel-title">
                        <b>CREATE AN ACCOUNT</b>
                    </div>
                    <p class="mbottom20">Creating an account is quick and easy, and will allow you to request services
                        from companies and regain your time and life. You can save your information and have it
                        automatically sent for the application process, saving your repeating your information time and
                        again, and much more. Go on.</p>
                    <a href="{{ url('/register')}}" class="btn2 btn-2 small-2d-slate animation">CREATE AN ACOOUNT</a>
                </div>
            </div>
        </div>
    </div><!-- end content -->
@stop

