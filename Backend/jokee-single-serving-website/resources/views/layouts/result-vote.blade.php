@extends('index')

@section('vote')
    @if (Cookie::has('result'))
        <div class="success">
            <h3>That's all the jokes for today! Come back another day!</h3>
        </div>
    @endif
@endsection
