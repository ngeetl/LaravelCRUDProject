@extends('layout')

@section('content')

@if (count($data) > 0)
@foreach ($data as $person)
<div>
    <a href="{{ route('data.show', ['id'=>$person['id']]) }}"><h3>{{ $person['name'] }}</h3></a>
    <p>{{ $person['age'] }}</p>
</div>
@endforeach
<p>{{ $result }}</p>
@else
<p>데이터가 존재하지 않습니다.</p>    
@endif

@endsection
