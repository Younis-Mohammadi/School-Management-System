@component('mail::message')
Hello {{ $user->name }},
<p>We Understand it happens.</p>
@component('mail::button', ['url' => url('admin/reset/' . $user->remember_token)])
Reset Your Password.
@endcomponent
<p>In case you have my issues recovering your password, please contact us</p>
Thanks, <br>
{{config('app.name')}}
@endcomponent