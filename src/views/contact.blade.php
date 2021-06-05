@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form action="{{ route('contact') }}" method="post">
                      @csrf
                      <input type="text" name="name" placeholder="Dein name bitte">
                      <input type="email" name="email" placeholder="Deine Email bitte">
                      <textarea name="message" cols="30" rows="10" placeholder="Deine Message"></textarea>
                      <input type="submit" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
