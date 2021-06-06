@extends('layouts.app')
@section('subheader')
<div class="c-subheader px-3">

<ol class="breadcrumb border-0 m-0">
<li class="breadcrumb-item">Home</li>
<li class="breadcrumb-item"><a href="#">Admin</a></li>
<li class="breadcrumb-item active">Dashboard</li>

</ol>
</div>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="" style="width:100%">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <form action="{{ route('contact.store') }}" method="POST">
                @csrf


                  <div class="card-body">
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text">Name</label>
                        <div class="col-md-9">
                          <input class="form-control" id="text" type="text" name="name" placeholder="Dein Name" value="{{ old('name') }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="email">Email</label>
                        <div class="col-md-9">
                          <input class="form-control" id="email" type="email" name="email" placeholder="Deine Email Adresse" autocomplete="email" value="{{ old('email') }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="textarea">Nachricht</label>
                        <div class="col-md-9">
                          <textarea class="form-control" id="textarea" name="message" rows="9" placeholder="Deine Nachricht an uns"> {{ old('message') }}</textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="textarea">Captcha</label>
                        <div class="col-md-9 " style="display:flex;">
                          <iframe src="/captcha" width="200" height="39" scrolling="no" style="overflow: hidden;"></iframe>
                          <input class="form-control" type="text" name="_answer" value="">
                        </div>
                      </div>
                  </div>
                  <div class="card-footer">
                    <button class="btn btn-sm btn-primary" type="submit"> Submit</button>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
