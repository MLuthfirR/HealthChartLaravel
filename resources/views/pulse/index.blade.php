@extends('layouts.app')

@section('content')
    {{-- {{ $pulses }} --}}

    <div style="width:50%;">
        {!! $chart->container() !!}
    </div>
    
@endsection


