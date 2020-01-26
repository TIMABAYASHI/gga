
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Edit UserMovies #{{ $UserMovies->id }}</div>
                            <div class="panel-body">
                                <a href="{{ url("UserMovies") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
    
                            <form method="POST" action="/UserMovies/{{ $UserMovies->id }}" class="form-horizontal">
                                        {{ csrf_field() }}
                                        {{ method_field("PUT") }}
            
										<div class="form-group">
                                        <label for="id" class="col-md-4 control-label">id: </label>
                                        <div class="col-md-6">{{$UserMovies->id}}</div>
                                    </div>
										<div class="form-group">
                                            <label for="user_id" class="col-md-4 control-label">user_id: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="user_id" type="text" id="user_id" value="{{$UserMovies->user_id}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="movie_title" class="col-md-4 control-label">movie_title: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="movie_title" type="text" id="movie_title" value="{{$UserMovies->movie_title}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="delated_at" class="col-md-4 control-label">delated_at: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="delated_at" type="date" id="delated_at" value="{{$UserMovies->delated_at}}">
                                            </div>
                                        </div>
               
                                    <div class="form-group">
                                        <div class="col-md-offset-4 col-md-4">
                                            <input class="btn btn-primary" type="submit" value="Update">
                                        </div>
                                    </div>   
                                </form>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    