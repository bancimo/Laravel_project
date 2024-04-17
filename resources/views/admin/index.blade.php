@extends('layouts.app')
@section('title','Admin')

@section('content')
<div class="container mt-5">
    <h1>Selamat Datang Admin</h1>
</div>

  <div class="container" id="menu">
    <div class="row text-center" style="margin-top: 100px;">
      <h1>Menu</h1>
    </div>
    <div class="row">
        
            @foreach ($detail as $data)
            <div class="col-md-4">
              @if (!empty($data->getImage()))
              <img src="{{$data->getImage()}}" class="w-100 mt-3 rounded-4"  >
              @endif
                <div class="mt-3">
                    <p style="font-size: 25px;" class="text-center">{{$data['title']}}</p>
                    <p style="font-size: 25px;" class="text-center">Movie Id : {{$data['id']}}</p>
                    <p style="font-weight: 100; font-size: 20px;">Director:  {{$data['director']}}</p>
                    <p style="font-weight: 100; font-size: 20px;">Duration:{{$data['duration']}}</p>
                    <p style="font-weight: 100; font-size: 20px;">Release Date: {{$data['release_date']}}</p>
                    <button class="btn btn-primary w-100"><a href="https://wa.link/yyi2zk" class="nav-link">Order</a></button>
                </div>
            </div>
            @endforeach
    </div>
  </div>
    
@endsection
