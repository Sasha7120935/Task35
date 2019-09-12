@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3 class="text-center">{{ ('Home Page') }}</h3>
            </div>
            <div class='col-md-12'>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{session('status')}}
                    </div>
                @endif
            </div>
            <div class="col-md-12">
                <div class="album py-12 bg-light">
                    <div class="container">
                        <div class="row">
                            @foreach($orders as $order)
                                <p style="width: 100%; margin-bottom: 15px">{{$order->id}}</p>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
            <div class="col-md-12">
                {{$orders->links()}}
            </div>
    </div>
    </div>
@endsection


