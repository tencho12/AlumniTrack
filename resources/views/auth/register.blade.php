@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('student_no') ? ' has-error' : '' }}">
                                <label for="student_no" class="col-md-4 control-label">Student Number</label>
    
                                <div class="col-md-6">
                                    <input id="student_no" type="number" class="form-control" name="student_no" value="{{ old('student_no') }}" required>
    
                                    @if ($errors->has('student_no'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('student_no') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

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
                        <div class="form-group{{ $errors->has('CID_No') ? ' has-error' : '' }}">
                                <label for="CID_No" class="col-md-4 control-label">CID Number</label>
    
                                <div class="col-md-6">
                                    <input id="CID_No" type="number" class="form-control" name="CID_No" value="{{ old('CID_No') }}" required>
    
                                    @if ($errors->has('CID_No'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('CID_No') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div>
                        <div class="form-group{{ $errors->has('DOB') ? ' has-error' : '' }}">
                                <label for="DOB" class="col-md-4 control-label">Date of Birth</label>
    
                                <div class="col-md-6">
                                    <input id="DOB" type="date" class="form-control" name="DOB" value="{{ old('DOB') }}" required>
    
                                    @if ($errors->has('DOB'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('DOB') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        <div class="form-group{{ $errors->has('Department') ? ' has-error' : '' }}">
                                <label for="Department" class="col-md-4 control-label">Department</label>
    
                                <div class="col-md-6">
                                    <input id="Department" type="text" class="form-control" name="Department" value="{{ old('Department') }}" required>
    
                                    @if ($errors->has('Department'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Department') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div>
                        <div class="form-group{{ $errors->has('Programme') ? ' has-error' : '' }}">
                                <label for="Programme" class="col-md-4 control-label">Programme</label>
    
                                <div class="col-md-6">
                                    <input id="Programme" type="text" class="form-control" name="Programme" value="{{ old('Programme') }}" required>
    
                                    @if ($errors->has('Programme'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Programme') }}</strong>
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
                        <div class="form-group{{ $errors->has('Joining_year') ? ' has-error' : '' }}">
                                <label for="Joining_year" class="col-md-4 control-label">Joining Year</label>
    
                                <div class="col-md-6">
                                    <input id="Joining_year" type="number" class="form-control" name="Joining_year" value="{{ old('Joining_year') }}" required>
    
                                    @if ($errors->has('Joining_year'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Joining_year') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('graduation_Year') ? ' has-error' : '' }}">
                                    <label for="graduation_Year" class="col-md-4 control-label">graduation Year</label>
        
                                    <div class="col-md-6">
                                        <input id="graduation_Year" type="number" class="form-control" name="graduation_Year" value="{{ old('graduation_Year') }}" required>
        
                                        @if ($errors->has('graduation_Year'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('graduation_Year') }}</strong>
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
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
