@component('mail::message')
# Hi {{ $user->name }}

We just need you to confirm your email address.

@component('mail::button', ['url' => config('app.url').'/register/confirm/' . $user->token])
Yeah sure
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
