
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Applicants {{ $Applicants->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("Applicants") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("Applicants") ."/". $Applicants->id . "/edit" }}" title="Edit Applicants"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/Applicants/{{ $Applicants->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$Applicants->id}} </td></tr>
										<tr><th>user_id</th><td>{{$Applicants->user_id}} </td></tr>
										<tr><th>job_id</th><td>{{$Applicants->job_id}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    