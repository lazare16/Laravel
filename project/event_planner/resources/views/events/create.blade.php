@extends('layouts.app')

@section('content')
    <h1>Create New Event</h1>
    <form action="{{ route('events.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div>
            <label for="date">Date</label>
            <input type="date" id="date" name="date" required>
        </div>
        <button type="submit">Create Event</button>
    </form>
@endsection
