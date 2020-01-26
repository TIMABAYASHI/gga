
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Users {{ $Users->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("Users") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("Users") ."/". $Users->id . "/edit" }}" title="Edit Users"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/Users/{{ $Users->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$Users->id}} </td></tr>
										<tr><th>name</th><td>{{$Users->name}} </td></tr>
										<tr><th>name_mei</th><td>{{$Users->name_mei}} </td></tr>
										<tr><th>kana_sei</th><td>{{$Users->kana_sei}} </td></tr>
										<tr><th>kana_mei</th><td>{{$Users->kana_mei}} </td></tr>
										<tr><th>email</th><td>{{$Users->email}} </td></tr>
										<tr><th>password</th><td>{{$Users->password}} </td></tr>
										<tr><th>phone</th><td>{{$Users->phone}} </td></tr>
										<tr><th>address</th><td>{{$Users->address}} </td></tr>
										<tr><th>birthday</th><td>{{$Users->birthday}} </td></tr>
										<tr><th>language</th><td>{{$Users->language}} </td></tr>
										<tr><th>licence</th><td>{{$Users->licence}} </td></tr>
										<tr><th>school</th><td>{{$Users->school}} </td></tr>
										<tr><th>school_dept</th><td>{{$Users->school_dept}} </td></tr>
										<tr><th>school_subject</th><td>{{$Users->school_subject}} </td></tr>
										<tr><th>gender</th><td>{{$Users->gender}} </td></tr>
										<tr><th>salary</th><td>{{$Users->salary}} </td></tr>
										<tr><th>image_url</th><td>{{$Users->image_url}} </td></tr>
										<tr><th>back_image_url</th><td>{{$Users->back_image_url}} </td></tr>
										<tr><th>remember_token</th><td>{{$Users->remember_token}} </td></tr>
										<tr><th>user_role_id</th><td>{{$Users->user_role_id}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    