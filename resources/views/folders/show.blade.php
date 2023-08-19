@extends('layouts.app')


@section('content')

    <div>
        <h1>Show Notes</h1>
        <pre>
            {{$notes}}
        </pre>
    </div>

    @component('components.notes-list', ['notes' => $notes]) @endcomponent

@endsection
