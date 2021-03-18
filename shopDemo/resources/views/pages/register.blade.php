@extends('pageLayout')
@section('content')
<div class="row">
        <div class="col-2">
            <div class="fullHeightContainer">
                <div class="form-control">
                    <form method="post" action="/register">
                    @csrf
                        <div class="formItem">
                            <label>Name</label>
                        </div>
                        <div class="formItem">
                            <input type="text" id="username" class="email" name="username" />
                        </div>
                        <div class="formItem">
                            <label>Email</label>
                        </div>
                        <div class="formItem">
                            <input type="email" id="email" class="email"   name="email" />
                        </div>
                        <div class="formItem">
                            <label>Password</label>
                        </div>
                        <div class="formItem">
                            <input type="password" id="password" class="password"  name="password" />
                        </div>
                        <div class="formItem">
                            <label>Confirm Password</label>
                        </div>
                        <div class="formItem">
                            <input type="password" id="passwordConfirm" class="password" name="passwordConfirm" />
                        </div>
                        <div class="formItem">
                            <button type="submit" >Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection