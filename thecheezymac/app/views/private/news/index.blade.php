@section('title')
    News
@stop

@section('content')
    <div class="main">

           <div class="wrapper">
               @include('private.partials.adminNav')

               <div class="row">
                    <div class="center-block table-responsive">
                        {{DisplayMessage::success(Session::get('success'))}}
                        <table class="table table-striped table-condensed">
                        <caption class="text-right">
                        <a href="/webadmin/news/create">
                            <button class="btn btn-danger"><span class="glyphicon glyphicon-plus"></span> New Post </button>
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
                                @foreach($news as $n)
                                    <tr>
                                        <td><a href="/our-news/{{$n->id}}">{{$n->title}}</a></td>
                                        <td>{{$n->author}}</td>
                                        <td>{{date("M d Y", strtotime($n->created_at))}}</td>
                                        <td><a href="/our-news/{{$n->id}}"><span class="glyphicon glyphicon-zoom-in"></span></a></td>
                                        <td><a href="/webadmin/news/{{$n->id}}/edit"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                        <td>{{FormHelper::delete('webadmin.news.destroy', $n->id)}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                   </div>
               </div>

           </div>




   </div>
@stop