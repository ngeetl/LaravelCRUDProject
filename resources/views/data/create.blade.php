@extends('layout')

@section('content')

<div>
    <form action="" method="POST">
        <div>
            <label for="name">이름</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="age">나이</label>
            <input type="text" id="age" name="age">
        </div>
        <div><button type="submit">전송</button></div>
    </form>
</div>
@endsection
