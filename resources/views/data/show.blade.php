@extends('layout')

@section('content')

<div>{{ print_r($data) }}</div>
<div>
    <h3>{{ $data['name'] }}</h3>
    <p>{{ $data['age'] }}</p>
</div>
@endsection
