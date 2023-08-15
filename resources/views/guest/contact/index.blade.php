@extends('layouts.guest.main')

@section('content')
    <br><br><br>

    <div class="bg-light site-section bg-white" id="">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12">
                    <h1 class="text-center">تواصل معنا</h1>
                </div>
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <img style="width: 50%;heigt:50%" src="{{ asset('theme2/images/support.svg') }}" alt="">
                </div>
                <div class="col-12">
                    <h4 class="text-center">يمكنك التواصل معنا في الأرقام التالية:</h4>
                    <h4 class="text-center">0123323</h4>
                    <h4 class="text-center">1324244</h4>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
@endsection
