@extends('index')

@section('dashboard')

    <div class="col-lg-9 main-chart">
        <h1>Hello {{ Auth::user()->role .' ' .  Auth::user()->name}}, welcome to the vacation manager</h1>
    </div>
        
    <!-- **********************************************************************************************************************************************************
    RIGHT SIDEBAR CONTENT
    *********************************************************************************************************************************************************** -->                  

@endsection