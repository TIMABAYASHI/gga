
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">UserMovies {{ $UserMovies->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("UserMovies") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("UserMovies") ."/". $UserMovies->id . "/edit" }}" title="Edit UserMovies"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/UserMovies/{{ $UserMovies->id }}" class="form-horizontal" style="display:inline;">
                                        {{ csrf_field() }}
                                        {{ method_field("delete") }}
                                        <button type="submit" class="btn btn-danger btn-xs" title="Delete User" onclick="return confirm('Confirm delete')">
                                        Delete
                                        </button>    
                            </form>
                            <br/>
                            <br/>
                            <div class="table-responsive">
                                <table class="table table-borderless">
                                    <tbody>
										<tr><th>id</th><td>{{$UserMovies->id}} </td></tr>
										<tr><th>user_id</th><td>{{$UserMovies->user_id}} </td></tr>
										<tr><th>movie_title</th><td>{{$UserMovies->movie_title}} </td></tr>
										<tr><th>delated_at</th><td>{{$UserMovies->delated_at}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    