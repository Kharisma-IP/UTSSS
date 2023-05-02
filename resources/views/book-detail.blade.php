@extends('Components.MainComponent')

@section('content')

    <div class="book-detail">
        <div class="container">
            <div class="title text-white">
                <h1 class="text-uppercase">Book Detail</h1>
            </div>
           <div class="row">

                @foreach($books as $dbs)
                <div class="col-md-4">
                    <div class="book-image">
                        <img src="{{$dbs->image}}" alt="">
                    </div>
                    <div class="book-details">
                        <table>
                            <tr>
                                <td>Title </td>
                                <td>:</td>
                                <td>{{$dbs->title}}</td>
                            </tr>
                            <tr>
                                <td>Author</td>
                                <td>:</td>
                                <td>{{$dbs->author}}</td>
                            </tr>
                            <tr>
                                <td>Publisher </td>
                                <td>:</td>
                                <td>{{$dbs->getPublisher->name}}</td>
                            </tr>
                            <tr>
                                <td>Year </td>
                                <td>:</td>
                                <td>{{$dbs->year}}</td>
                            </tr>
                            <tr>
                                <td>Synopsis </td>
                                <td>:</td>

                            </tr>

                        </table>
                        <p>{{$dbs->synopsis}}</p>
                    </div>
                    @endforeach
                </div>

           </div>
        </div>
    </div>








@endsection
