@extends ('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">

          <p id="alert-message" class="alert collapse"></p>

          <div class="card">
            <div class="card-header">
              Book {{$book->title}}
            </div>

            <div class="card-body">
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <td>Title</td>
                    <td>{{$book->title}}</td>
                  </tr>
                  <tr>
                    <td>Author</td>
                    <td>{{$book->author}}</td>
                  </tr>
                  <tr>
                    <td>Publiser</td>
                    <td>{{$book->publiser}}</td>
                  </tr>
                  <tr>
                    <td>Year</td>
                    <td>{{$book->year}}</td>
                  </tr>
                  <tr>
                    <td>ISBN</td>
                    <td>{{$book->isbn}}</td>
                  </tr>
                  <tr>
                    <td>Actions</td>
                    <td>{{$book->actions}}</td>
                  </tr>
                </tbody>
              </table>
                         <a href="{{ route('user.books.index')}}" class="btn btn-default">Back</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endsection
