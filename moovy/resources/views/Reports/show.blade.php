
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Reports {{ $Reports->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("Reports") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("Reports") ."/". $Reports->id . "/edit" }}" title="Edit Reports"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/Reports/{{ $Reports->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$Reports->id}} </td></tr>
										<tr><th>user_id</th><td>{{$Reports->user_id}} </td></tr>
										<tr><th>clients_id</th><td>{{$Reports->clients_id}} </td></tr>
										<tr><th>job_id</th><td>{{$Reports->job_id}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    