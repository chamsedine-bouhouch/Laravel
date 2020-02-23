
<div class="container" style="height: auto;">
    <div class="row align-items-center">
        <div class="col-lg-auto col-md-6 col-sm-8 ml-auto mr-auto">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Login</div> -->

                <div class="panel-body">
                <button type="submit"  class="btn btn-primary d-flex align-items-center justify-content-center" data-toggle="modal"  data-backdrop="static" data-keyboard="false" data-target="#loginForm"><span>Se connecter</span></button>

                <!-- Modal -->
<div class="modal fade" id="loginForm" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header" style="background:#4ad7d1 ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">Fermer X<span aria-hidden="true" class="ion-android-close"></span> </button>
            
        </div>            <!-- Modal Body -->
        <div class="modal-body">
          <div class="align-items-center mb-5">
            <h3 class="align-items-center" >Se connecter </h3>        </div>
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-info">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer" id="modal_footer">
                    <!--<input id="btnSubmit" name="btnSubmit" value="Donate" class="btn btn-default-border-blk" type="submit">-->
                    <!-- <button type="button" class="btn btn-primary mt-10" data-dismiss="modal" > Close </button>  -->
                </div>
            </div>
        </div>
    </div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>

