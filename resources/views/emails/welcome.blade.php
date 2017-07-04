@component('mail::message')
# Hi {{ $user->name }}

## Welcome to {{ config('app.name') }}

Lorem ipsum dolor sit amet, consectetur adipisicing elit. 

@component('mail::button', ['url' => ''])
Come Say Hi
@endcomponent

Modi hic delectus repellendus, exercitationem, libero eveniet animi similique id et eaque dignissimos accusamus veritatis expedita, fuga dolorum neque molestias a. Dignissimos.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
