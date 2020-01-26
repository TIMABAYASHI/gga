
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Clients</div>
                            <div class="panel-body">
                            
                            
                                <a href="{{ url("Clients/create") }}" class="btn btn-success btn-sm" title="Add New Clients">
                                    Add New
                                </a>

                                <form method="GET" action="{{ url("Clients") }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search" placeholder="Search...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-info" type="submit">
                                                <span>Search</span>
                                            </button>
                                        </span>
                                    </div>
                                </form>


                                <br/>
                                <br/>
                                
                                
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr><th>id</th><th>lid</th><th>password</th><th>client_name</th><th>founded_in</th><th>location</th><th>company_url</th><th>client_url</th><th>client_industry</th><th>client_business</th><th>client_employees_num</th><th>client_image_url</th><th>client_job_sum</th><th>client_role_id</th></tr>
                                        </thead>
                                        <tbody>
                                        @foreach($Clients as $item)
                                    
                                    <tr>

                                            <td>{{ $item->id}} </td>

                                            <td>{{ $item->lid}} </td>

                                            <td>{{ $item->password}} </td>

                                            <td>{{ $item->client_name}} </td>

                                            <td>{{ $item->founded_in}} </td>

                                            <td>{{ $item->location}} </td>

                                            <td>{{ $item->company_url}} </td>

                                            <td>{{ $item->client_url}} </td>

                                            <td>{{ $item->client_industry}} </td>

                                            <td>{{ $item->client_business}} </td>

                                            <td>{{ $item->client_employees_num}} </td>

                                            <td>{{ $item->client_image_url}} </td>

                                            <td>{{ $item->client_job_sum}} </td>

                                            <td>{{ $item->client_role_id}} </td>
  
                                                <td><a href="{{ url("/Clients/" . $item->id) }}" title="View Clients"><button class="btn btn-info btn-xs">View</button></a></td>
                                                <td><a href="{{ url("/Clients/" . $item->id . "/edit") }}" title="Edit Clients"><button class="btn btn-primary btn-xs">Edit</button></a></td>
                                                <td>
                                                    <form method="POST" action="/Clients/{{ $item->id }}" class="form-horizontal" style="display:inline;">
                                                        {{ csrf_field() }}
                                                        
                                                        {{ method_field("DELETE") }}
                                                        <button type="submit" class="btn btn-danger btn-xs" title="Delete User" onclick="return confirm('Confirm delete')">
                                                        Delete
                                                        </button>    
                                                    </form>
                                                   </td>
                                              </tr>

                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="pagination-wrapper"> {!! $Clients->appends(["search" => Request::get("search")])->render() !!} </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    