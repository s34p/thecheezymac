@section('title')
    Blog
@stop

@section('content')
    <div class="main">

           <div class="wrapper">
               @include('private.partials.adminNav')

               <div class="row">
                    <div class="center-block table-responsive">
                        {{DisplayMessage::success(Session::get('success'))}}
                         <table class="display" id="datatable">
                        <caption class="text-right">
                        <a href="/webadmin/blog/create">
                            <button class="btn btn-danger"><span class="glyphicon glyphicon-plus"></span> New Blog Post </button>
                        </a>
                        </caption>
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Publish On</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($blogs as $blog)
                                    <tr>
                                        <td><a href="/our-blog/{{$blog->id}}">{{$blog->title}}</a></td>
                                        <td>{{$blog->author}}</td>
                                        <td>{{date("M d Y", strtotime($blog->created_at))}}</td>
                                        <td><a href="/our-blog/{{$blog->id}}"><span class="glyphicon glyphicon-zoom-in"></span></a></td>
                                        <td><a href="/webadmin/blog/{{$blog->id}}/edit"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                        <td>{{FormHelper::delete('webadmin.blog.destroy', $blog->id)}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                   </div>
               </div>

           </div>




   </div>
@stop