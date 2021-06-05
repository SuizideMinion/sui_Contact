@component('mail::message')
# Introduction

Eine Neue Nachricht von {{ $name }}<br>
Nachricht:
{{ $message }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
