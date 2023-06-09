@extends('Components.MainComponent')
@section('content')
    @foreach ($publishers as $pubs)


    <div class="header">
        <table class="publisher-detail text-white">
            <tr>
                <td>Name Of Publiser</td>
                <td>:</td>
                <td colspan="2">{{$pubs->name}}</td>
            </tr>
            <tr>
                <td>Address</td>
                <td>:</td>
                <td colspan="2">{{$pubs->address}}</td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>:</td>
                <td colspan="2">{{$pubs->phone}}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td colspan="2">{{$pubs->phone}}</td>
            </tr>
        </table>
    </div>

    <div class="book">
        <div class="container">
            <div class="row">
                @foreach ($pubs->getBook as $book)


                <div class="col-md-4">
                    <div class="card" id="movie-img">
                        <img src="{{$book->image}}" class="img-fluid" id="images"/>

                        <div class="card-body text-white">
                          <h4 class="card-title text-left mb-3">{{$book->title}}</h5>
                            <h6 class="card-text text-left mb-2" style="font-size: 16px">by</h6>
                          <h5 class="card-text text-left mb-4">{{$book->author}}</h6>

                            <div class="detail-btn d-md-flex justify-content-md-left ">
                                <a href="{{Route('detail', ['id'=>$book->id])}}" type="button" class="btn btn-outline-white">Detail</a>
                            </div>
                        </div>
                      </div>

                </div>

                 @endforeach
                 @endforeach
            </div>

        </div>
      </div>









@endsection
