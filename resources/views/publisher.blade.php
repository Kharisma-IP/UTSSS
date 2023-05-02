@extends('Components.MainComponent')
@section('content')

<div class="book">
    <div class="container">
       <div class="title">
        <h1 class="text-left text-white">PUBLISHER LIST</h1>
       </div>
        <div class="row">


            @foreach ($publisher as $pb)


            <div class="col-md-4">
                <div class="card" id="movie-img">
                    <img src="{{$pb->image}}" class="img-fluid" id="publisher-images"/>

                    <div class="card-body text-white">
                      <h4 class="card-title text-left mb-3">{{$pb->name}}</h4>
                        <div class="detail-btn d-md-flex justify-content-md-left ">
                            <a href="{{Route('publisher_detail',['id'=>$pb->id])}}" type="button" class="btn btn-outline-white">Detail</a>
                        </div>
                    </div>
                  </div>

            </div>
             @endforeach
        </div>

    </div>
  </div>














@endsection
