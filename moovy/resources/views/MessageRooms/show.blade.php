
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">MessageRooms {{ $MessageRooms->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("MessageRooms") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("MessageRooms") ."/". $MessageRooms->id . "/edit" }}" title="Edit MessageRooms"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/MessageRooms/{{ $MessageRooms->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$MessageRooms->id}} </td></tr>
										<tr><th>user_id</th><td>{{$MessageRooms->user_id}} </td></tr>
										<tr><th>client_id</th><td>{{$MessageRooms->client_id}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    