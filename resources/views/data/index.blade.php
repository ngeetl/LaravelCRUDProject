@extends('layout')

@section('content')

@if (count($data) > 0)
@foreach ($data as $person)
<div>
    <h3>{{ $person['name'] }}</h3>
    <p>{{ $person['age'] }}</p>
</div>
@endforeach
<p>성공</p>
@else
<p>데이터가 존재하지 않습니다.</p>    
@endif

@endsection
