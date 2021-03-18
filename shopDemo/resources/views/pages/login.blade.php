@extends('pageLayout')
@section('content')
<div class="row">
        <div class="col-2">
            <div class="fullHeightContainer">
                <div class="form-control">
                    <form method="post" action="login">
                        @csrf
                       
                        <div class="formItem">
                            <label>Email</label>
                        </div>
                        <div class="formItem">
                            <input type="email" id="email" class="email" name="email" />
                        </div>
                        <div class="formItem">
                            <label>Password</label>
                        </div>
                        <div class="formItem">
                            <input type="password" id="password" class="password" name="password" />
                        </div>
                        <div class="formItem">
                            <h5 style="color:red">
                            <?php echo(  (session('loginfail') !== null) ? session('loginfail'): ''  );
                            session()->forget('loginfail');?>
                        </h5>
                        </div>
                        <div class="formItem">
                            <button type="submit" >LOGIN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection