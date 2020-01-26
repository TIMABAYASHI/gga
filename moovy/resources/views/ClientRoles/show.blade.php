
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">ClientRoles {{ $ClientRoles->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("ClientRoles") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("ClientRoles") ."/". $ClientRoles->id . "/edit" }}" title="Edit ClientRoles"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/ClientRoles/{{ $ClientRoles->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$ClientRoles->id}} </td></tr>
										<tr><th>role_name</th><td>{{$ClientRoles->role_name}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    