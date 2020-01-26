
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Jobs</div>
                            <div class="panel-body">
                            
                            
                                <a href="{{ url("Jobs/create") }}" class="btn btn-success btn-sm" title="Add New Jobs">
                                    Add New
                                </a>

                                <form method="GET" action="{{ url("Jobs") }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
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
                                            <tr><th>id</th><th>client_id</th><th>job_title</th><th>job_occupation</th><th>job_position</th><th>job_type</th><th>job_message</th><th>image_url</th><th>job_status</th><th>delated_at</th></tr>
                                        </thead>
                                        <tbody>
                                        @foreach($Jobs as $item)
                                    
                                    <tr>

                                            <td>{{ $item->id}} </td>

                                            <td>{{ $item->client_id}} </td>

                                            <td>{{ $item->job_title}} </td>

                                            <td>{{ $item->job_occupation}} </td>

                                            <td>{{ $item->job_position}} </td>

                                            <td>{{ $item->job_type}} </td>

                                            <td>{{ $item->job_message}} </td>

                                            <td>{{ $item->image_url}} </td>

                                            <td>{{ $item->job_status}} </td>

                                            <td>{{ $item->delated_at}} </td>
  
                                                <td><a href="{{ url("/Jobs/" . $item->id) }}" title="View Jobs"><button class="btn btn-info btn-xs">View</button></a></td>
                                                <td><a href="{{ url("/Jobs/" . $item->id . "/edit") }}" title="Edit Jobs"><button class="btn btn-primary btn-xs">Edit</button></a></td>
                                                <td>
                                                    <form method="POST" action="/Jobs/{{ $item->id }}" class="form-horizontal" style="display:inline;">
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
                                    <div class="pagination-wrapper"> {!! $Jobs->appends(["search" => Request::get("search")])->render() !!} </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    