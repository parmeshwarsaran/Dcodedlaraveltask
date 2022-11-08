@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit User') }}</div>
                @if ($message = Session::get('error'))
                    <div class="alert alert-danger ">
                        <button type="button" class="close" data-dismiss="alert">×</button>    
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <div class="card-body">
                    <form method="post" action="{{ route('user.update',$user->id ) }}" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}
                                <span class="alert" style="color: red">*</span>
                            </label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name',$user->name) }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="mobile" class="col-md-4 col-form-label text-md-end">{{ __('Mobile') }}
                                <span class="alert" style="color: red">*</span>
                            </label>
                            <div class="col-md-6">
                                <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('name',$user->mobile) }}" required >@error('mobile')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dob" class="col-md-4 col-form-label text-md-end">{{ __('DOB') }}
                                <span class="alert" style="color: red">*</span>
                            </label>
                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('name',$user->dob) }}" required >@error('dob')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}
                                <span class="alert" style="color: red">*</span>
                            </label>
                            <div class="col-md-3">
                                <label for="male"><input id="gender" type="radio" class="form-control @error('gender') is-invalid @enderror" name="gender" required value="male" {{ 'male' == $user->gender? 'checked':'' }} >Male</label>@error('gender')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>
                            <div class="col-md-3">
                                <label for="female"><input id="gender" type="radio" class="form-control @error('gender') is-invalid @enderror" name="gender" required  value="female" {{ 'female' == $user->gender? 'checked':'' }} >Female</label>@error('gender')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="profile" class="col-md-4 col-form-label text-md-end">{{ __('Profile') }}</label>
                            <div class="col-md-6">
                                <input id="profile" type="file" class="form-control @error('profile') is-invalid @enderror" name="profile" >@error('profile')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>
                            <img src="{{ asset($user->profile) }}">
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
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
