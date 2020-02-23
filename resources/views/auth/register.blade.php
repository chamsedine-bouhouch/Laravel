
<div class="container" style="height: auto;">
    <div class="row align-items-center">
        <div class="col-lg-auto col-md-6 col-sm-8 ml-auto mr-auto">
            <div class="panel panel-default">
                

                    <div class="panel-body">
                    <button type="submit"  class="btn btn-primary d-flex align-items-center justify-content-center" data-toggle="modal"  data-backdrop="static" data-keyboard="false" data-target="#registerForm">Register</button>

                <!-- Modal -->
<div class="modal fade" id="registerForm" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header" style="background: #4ad7d1 ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="ion-android-close">Fermer X</span></button>
            <h4 class="modal-title" id="myModalLabel" style="color: whitesmoke;"></h4>
        </div>            <!-- Modal Body -->
        <div class="modal-body">
            <div class="align-items-center mb-5">
<h3 class="align-items-center" >Créer un compte</h3>           </div>
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-info">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer" id="modal_footer">
                    <!--<input id="btnSubmit" name="btnSubmit" value="Donate" class="btn btn-default-border-blk" type="submit">-->
                   <!--  <button type="button" class="btn btn-primary m-t-10" data-dismiss="modal" > Close </button>  -->
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

