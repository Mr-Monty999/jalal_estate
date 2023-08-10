@extends('layouts.user.main')

@section('content')
    <br><br><br><br><br>
    @include('user.chat.style')

    <livewire:user.chat />

    <br><br><br>
@endsection
