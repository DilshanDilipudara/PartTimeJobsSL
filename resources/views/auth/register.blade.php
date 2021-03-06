@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>





                        

                        <div class="form-group row">
                            <label for="NIC_NO" class="col-md-4 col-form-label text-md-right">{{ __('NIC_NO') }}</label>

                            <div class="col-md-6">
                                <input id="NIC_NO" type="text" pattern="[0-9]+v" class="form-control{{ $errors->has('NIC_NO') ? ' is-invalid' : '' }}" name="NIC_NO" value="{{ old('NIC_NO') }}"  title="please end with v" required autofocus>

                                @if ($errors->has('NIC_NO'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('NIC_NO') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Mobile_Number" class="col-md-4 col-form-label text-md-right">{{ __('Mobile_Number') }}</label>

                            <div class="col-md-6">
                                <input id="Mobile_Number" type="text" class="form-control{{ $errors->has('Mobile_Number') ? ' is-invalid' : '' }}" name="Mobile_Number" value="{{ old('Mobile_Number') }}" required autofocus>

                                @if ($errors->has('Mobile_Number'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Mobile_Number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('location') }}</label>

                            <div class="col-md-6">
                                <select name="location" id="location"   value="{{ old('location') }}"  required>
                                    <option value="">location</option>
                                    <option>Ampara</option>
                                    <option>Anuradhapura</option>
                                    <option>Badulla</option>
                                    <option>Batticaloa</option>
                                    <option>Colombo</option>
                                    <option>Galle</option>
                                    <option>Gampaha</option>
                                    <option>Hambantota</option>
                                    <option>Jaffna</option>
                                    <option>Kalutara</option>
                                    <option>Kandy</option>
                                    <option>Kegalle</option>
                                    <option>Kilinochchi</option>
                                    <option>Kurunegala</option>
                                    <option>Mannar</option>
                                    <option>Matale</option>
                                    <option>Matara</option>
                                    <option>Monaragala</option>
                                    <option>Mullativu</option>
                                    <option>Nuwara Eliya</option>
                                    <option>Polonnaruwa</option>
                                    <option>Puttalam</option>
                                    <option>Ratnapura</option>
                                    <option>Trincomalee</option>
                                    <option>Vavuniya</option>
                                </select>
                                @if ($errors->has('location'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Sex" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                            <select name="Sex" id="Sex"   value="{{ old('Sex') }}"  required>
                                    <option value="">Gender</option>
                                    <option >Male</option>
                                    <option >Female</option>
                                </select>
                                @if ($errors->has('Sex'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Sex') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>







                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
