@component('mail::message')
# change the password

click on the button below

@component('mail::button', ['url' => 'http://localhost:4200/forgetPasword?token='.$token])
Reset password now
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
