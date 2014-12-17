@section('title')
    Comments
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
                        <a href="/webadmin/comments/create">
                            <button class="btn btn-danger"><span class="glyphicon glyphicon-plus"></span> New Comment / Quote </button>
                        </a>
                        </caption>
                            <thead>
                                <tr>
                                    <th>Comment</th>
                                    <th>Author</th>
                                    <th>Publish On</th>
                                    <th>Visible</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($comments as $comment)
                                    <tr>
                                        <td><a href="/our-news/{{$comment->id}}">{{$comment->body}}</a></td>
                                        <td>{{$comment->author}}</td>
                                        <td>{{date("M d Y", strtotime($comment->created_at))}}</td>
                                        <td>
                                            @if($comment->visible == 1)
                                                Yes
                                            @else
                                                No
                                            @endif
                                        </td>
                                        <td><a href="/webadmin/comments/{{$comment->id}}/edit"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                        <td>{{FormHelper::delete('webadmin.comments.destroy', $comment->id)}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                   </div>
               </div>

           </div>




   </div>
@stop