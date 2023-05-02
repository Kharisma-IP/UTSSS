@extends('Components.MainComponent')
@section('content')

<div class="card">
    <div class="container">
       <div class="title">

        <h1 class="text-left">BOOK LIST</h1>
       </div>
                @foreach($books as $b)
                @foreach($b->getBook as $b1)
            <div class="row">
                <div class="col-md-4">

                    <div class="card" id="movie-img">
                        <img src="{{$b1->image}}" id="img" class="img-fluid"/>

                        <div class="card-body text-white">
                          <h4 class="card-title text-left mb-3">{{$b1->title}}</h5>
                            <h6 class="card-text text-left mb-2" style="font-size: 16px">by</h6>
                          <h5 class="card-text text-left mb-4">{{$b1->author}}</h6>

                            <div class="detail-btn d-md-flex justify-content-md-left ">
                                <a href="{{Route('detail',['id'=>$b1->id])}}" type="button" class="btn btn-outline-white">More Detail</a>
                            </div>
                        </div>
                      </div>

                </div>
                @endforeach
                @endforeach
            </div>

        </div>

    </div>
  </div>



@endsection
