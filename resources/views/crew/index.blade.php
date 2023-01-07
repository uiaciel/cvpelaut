@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <ul>


                @foreach ($crews as $crew)
                    <li>{{ $crew->user->name }} {{ $crew->place }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
