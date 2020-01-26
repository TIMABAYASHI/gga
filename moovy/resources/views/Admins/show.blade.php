
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Admins {{ $Admins->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("Admins") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("Admins") ."/". $Admins->id . "/edit" }}" title="Edit Admins"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/Admins/{{ $Admins->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$Admins->id}} </td></tr>
										<tr><th>lid</th><td>{{$Admins->lid}} </td></tr>
										<tr><th>password</th><td>{{$Admins->password}} </td></tr>
										<tr><th>email</th><td>{{$Admins->email}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    