@component('mail::message')

Fixture: {{ $fixture->title }}

Description: {{ $fixture->description }}




@component('mail::button', ['url' => url('/fixtures/' . $fixture->id)])

View Fixture

@endcomponent


Thanks,<br>

{{ config('app.name') }}

@endcomponent
