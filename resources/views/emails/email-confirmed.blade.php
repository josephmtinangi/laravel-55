@component('mail::message')
# Hi {{ $user->name }}

Thank you for confirming your email address.

Now you are a member of an awesome community.
You can enjoy unlimited access to the 
site content. 

Start by browsing the latest posts

@component('mail::button', ['url' => config('app.url') . '/posts'])
Browse Posts
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
