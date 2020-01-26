
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Jobs {{ $Jobs->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("Jobs") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("Jobs") ."/". $Jobs->id . "/edit" }}" title="Edit Jobs"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/Jobs/{{ $Jobs->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$Jobs->id}} </td></tr>
										<tr><th>client_id</th><td>{{$Jobs->client_id}} </td></tr>
										<tr><th>job_title</th><td>{{$Jobs->job_title}} </td></tr>
										<tr><th>job_occupation</th><td>{{$Jobs->job_occupation}} </td></tr>
										<tr><th>job_position</th><td>{{$Jobs->job_position}} </td></tr>
										<tr><th>job_type</th><td>{{$Jobs->job_type}} </td></tr>
										<tr><th>job_message</th><td>{{$Jobs->job_message}} </td></tr>
										<tr><th>image_url</th><td>{{$Jobs->image_url}} </td></tr>
										<tr><th>job_status</th><td>{{$Jobs->job_status}} </td></tr>
										<tr><th>delated_at</th><td>{{$Jobs->delated_at}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    