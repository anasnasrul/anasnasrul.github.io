<div id="app">       

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-default">                  

                        <div class="panel-body" align="left">                            
                            <ul class="nav navbar-nav">                  
                                <li><a href="{{ url('/portfolio/guestbook/create') }}">Add Message</a></li>
                            </ul> 
                            <div class="flash-message">
                                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                    @if(Session::has('alert-' . $msg))
                                        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                                    @endif
                                @endforeach
                            </div>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Message</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!$messages->isEmpty())
                                        @php $count=1; @endphp
                                        @foreach ($messages as $message)
                                        <tr>
                                            <td>{{ $count }}</td>
                                            <td>{{ $message->name }}</td>
                                            <td>{{ $message->message }}</td>
                                            <td>{{ $message->created_at }}</td>
                                            <td> 
                                                <a href="{{ url('/portfolio/guestbook/'.$message->id.'/edit') }}">Edit</a> |
                                                <a href="{{ url('/portfolio/guestbook/'.$message->id) }}">Show</a> |
                                                <a href="{{ url('/portfolio/guestbook/'.$message->id.'/delete') }}">Delete</a>
                                            </td>
                                        </tr>
                                        @php $count++; @endphp
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="4">No Message</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{ Html::script('/asset/js/jquery-3.2.1.js') }}
    {{ Html::script('/asset/js/app.js') }} 