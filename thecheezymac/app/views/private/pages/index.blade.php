@section('title')
    Pages
@stop

@section('content')
    <div class="main">

           <div class="wrapper">
               @include('private.partials.adminNav')

               <div class="row">
                    <div class="center-block table-responsive">
                        {{DisplayMessage::success(Session::get('success'))}}
                         <table class="display" id="datatable">
                        {{--<caption class="text-right">--}}
                        {{--<a href="/webadmin/news/create">--}}
                            {{--<button class="btn btn-danger"><span class="glyphicon glyphicon-plus"></span> New Post </button>--}}
                        {{--</a>--}}
                        {{--</caption>--}}
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Layout</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pages as $page)
                                    <tr>
                                        <td><a href="/{{$page->slug}}">{{$page->title}}</a></td>
                                        <td>
                                            {{$page->col_num}}
                                        @if($page->col_num > 1)
                                            Columns
                                        @else
                                            Column
                                        @endif
                                        </td>
                                        <td><a href="/{{$page->slug}}"><span class="glyphicon glyphicon-zoom-in"></span></a></td>
                                        <td><a href="/webadmin/pages/{{$page->id}}/edit"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                   </div>
               </div>

           </div>




   </div>
@stop