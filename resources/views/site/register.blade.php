@extends('layout.main')

@section('title', 'Login')

@section('login')
<!-- login area start -->
<div class="login-register-area mtb-60px">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a>
                            <h4>register</h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        
                        <div>
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="#" method="post">
                                        @csrf
                                        <input type="text" name="name" placeholder="Username" />
                                        <p>@error ('name') {{$message}} @enderror</p>
                                        <input type="password" name="password" placeholder="Password" />
                                        <p>@error ('password') {{$message}} @enderror</p>
                                        <input type="password" name="re_password" placeholder="re_Password" />
                                        <p>@error ('re_password') {{$message}} @enderror</p>
                                        <input name="email" placeholder="Email" type="email" />
                                        <p>@error ('email') {{$message}} @enderror</p>
                                        <input type="text" name="phone" placeholder="Phone number" />
                                        <p>@error ('phone') {{$message}} @enderror</p>
                                        <input type="text" name="address" placeholder="Address" />
                                        <p>@error ('address') {{$message}} @enderror</p>
                                        <div class="button-box">
                                            <button type="submit"><span>Register</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- login area end -->
@stop()