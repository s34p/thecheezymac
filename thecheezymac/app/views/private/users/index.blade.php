@section('title')
    New User
@stop

@section('content')
    <div class="main">

           <div class="wrapper">
               <h1 class="heading">Users</h1>

               <div class="row">


                   <div class="center-block">
                        {{DisplayMessage::success(Session::get('success'))}}
                        <table class="table table-responsive table-striped table-condensed">
                        <caption class="text-right">
                        <a href="/webadmin/users/create">
                            <button class="btn btn-danger"><span class="glyphicon glyphicon-plus"></span> New User </button>
                        </a>
                        </caption>
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->first_name}}</td>
                                        <td>{{$user->last_name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td><a href="/webadmin/users/{{$user->id}}/edit"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                        <td>{{FormHelper::delete('webadmin.users.destroy', $user->id)}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                   </div>
               </div>

           </div>




   </div>
@stop