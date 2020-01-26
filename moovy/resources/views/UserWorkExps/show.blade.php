
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">UserWorkExps {{ $UserWorkExps->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("UserWorkExps") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("UserWorkExps") ."/". $UserWorkExps->id . "/edit" }}" title="Edit UserWorkExps"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/UserWorkExps/{{ $UserWorkExps->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$UserWorkExps->id}} </td></tr>
										<tr><th>user_id</th><td>{{$UserWorkExps->user_id}} </td></tr>
										<tr><th>user_quit_job</th><td>{{$UserWorkExps->user_quit_job}} </td></tr>
										<tr><th>exp_company</th><td>{{$UserWorkExps->exp_company}} </td></tr>
										<tr><th>exp_industry</th><td>{{$UserWorkExps->exp_industry}} </td></tr>
										<tr><th>exp_occupation</th><td>{{$UserWorkExps->exp_occupation}} </td></tr>
										<tr><th>exp_job</th><td>{{$UserWorkExps->exp_job}} </td></tr>
										<tr><th>exp_start</th><td>{{$UserWorkExps->exp_start}} </td></tr>
										<tr><th>exp_end</th><td>{{$UserWorkExps->exp_end}} </td></tr>
										<tr><th>previous_company</th><td>{{$UserWorkExps->previous_company}} </td></tr>
										<tr><th>previous_industry</th><td>{{$UserWorkExps->previous_industry}} </td></tr>
										<tr><th>previous_occupation</th><td>{{$UserWorkExps->previous_occupation}} </td></tr>
										<tr><th>previous_job</th><td>{{$UserWorkExps->previous_job}} </td></tr>
										<tr><th>previous_start</th><td>{{$UserWorkExps->previous_start}} </td></tr>
										<tr><th>previous_end</th><td>{{$UserWorkExps->previous_end}} </td></tr>
										<tr><th>second_last_company</th><td>{{$UserWorkExps->second_last_company}} </td></tr>
										<tr><th>second_last_industry</th><td>{{$UserWorkExps->second_last_industry}} </td></tr>
										<tr><th>second_last_occupation</th><td>{{$UserWorkExps->second_last_occupation}} </td></tr>
										<tr><th>second_last_job</th><td>{{$UserWorkExps->second_last_job}} </td></tr>
										<tr><th>second_last_start</th><td>{{$UserWorkExps->second_last_start}} </td></tr>
										<tr><th>second_last_end</th><td>{{$UserWorkExps->second_last_end}} </td></tr>
										<tr><th>third_last_company</th><td>{{$UserWorkExps->third_last_company}} </td></tr>
										<tr><th>third_last_industry</th><td>{{$UserWorkExps->third_last_industry}} </td></tr>
										<tr><th>third_last_occupation</th><td>{{$UserWorkExps->third_last_occupation}} </td></tr>
										<tr><th>third_last_job</th><td>{{$UserWorkExps->third_last_job}} </td></tr>
										<tr><th>third_last_start</th><td>{{$UserWorkExps->third_last_start}} </td></tr>
										<tr><th>third_last_end</th><td>{{$UserWorkExps->third_last_end}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    