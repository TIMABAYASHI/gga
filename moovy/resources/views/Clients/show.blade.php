
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Clients {{ $Clients->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("Clients") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("Clients") ."/". $Clients->id . "/edit" }}" title="Edit Clients"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/Clients/{{ $Clients->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$Clients->id}} </td></tr>
										<tr><th>lid</th><td>{{$Clients->lid}} </td></tr>
										<tr><th>password</th><td>{{$Clients->password}} </td></tr>
										<tr><th>client_name</th><td>{{$Clients->client_name}} </td></tr>
										<tr><th>founded_in</th><td>{{$Clients->founded_in}} </td></tr>
										<tr><th>location</th><td>{{$Clients->location}} </td></tr>
										<tr><th>company_url</th><td>{{$Clients->company_url}} </td></tr>
										<tr><th>client_url</th><td>{{$Clients->client_url}} </td></tr>
										<tr><th>client_industry</th><td>{{$Clients->client_industry}} </td></tr>
										<tr><th>client_business</th><td>{{$Clients->client_business}} </td></tr>
										<tr><th>client_employees_num</th><td>{{$Clients->client_employees_num}} </td></tr>
										<tr><th>client_image_url</th><td>{{$Clients->client_image_url}} </td></tr>
										<tr><th>client_job_sum</th><td>{{$Clients->client_job_sum}} </td></tr>
										<tr><th>client_role_id</th><td>{{$Clients->client_role_id}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    