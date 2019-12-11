@extends('layout')

@section('content')


<h1>Membership</h1>

<p>Information about membership has been sent to: {{ auth()->user()->email }} </p>

@endsection
