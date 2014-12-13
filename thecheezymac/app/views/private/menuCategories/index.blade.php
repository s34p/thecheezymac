@section('title')
    Menu Categories
@stop

@section('content')
    <div class="main">

           <div class="wrapper">
               @include('private.partials.adminNav')

               <div class="row">
                    <div class="center-block table-responsive">
                        {{DisplayMessage::success(Session::get('success'))}}
                        @if(Session::get('error'))
                            <div class="alert alert-danger">
                                {{Session::get('error')}}
                                <ul>

                                @foreach(Session::get('arrayErrors') as $err)
                                    <ul style="font-weight: bold">{{$err}}</ul>
                                @endforeach
                                </ul>
                            </div>
                        @endif
                        <table class="table table-striped table-condensed" >
                        <caption class="text-right">
                        <a href="/webadmin/category/create">
                            <button class="btn btn-danger"><span class="glyphicon glyphicon-plus"></span> New Category </button>
                        </a>
                        </caption>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($menuCategories as $category)
                                    <tr>

                                        <td width="70%">{{$category->name}}</td>
                                        <td ><a href="/webadmin/category/{{$category->id}}/edit"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                        <td >{{FormHelper::delete('webadmin.category.destroy', $category->id)}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                   </div>
               </div>

           </div>




   </div>
@stop