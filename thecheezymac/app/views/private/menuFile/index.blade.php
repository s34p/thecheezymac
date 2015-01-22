@section('title')
    Downloadable Menu
@stop

@section('content')
    <div class="main">

           <div class="wrapper">
               @include('private.partials.adminNav')

               <div class="row">
                    <div class="center-block table-responsive">
                        {{DisplayMessage::success(Session::get('success'))}}
                         <table class="display" id="datatable">

                            <thead>
                                <tr>
                                    <th>Menu File Url</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($menuFiles as $file)
                                    <tr>

                                        <td style="vertical-align: middle !important;">{{$file->file_path}}</td>
                                        <td style="vertical-align: middle !important;"><a href="/webadmin/menuFile/{{$file->id}}/edit"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                   </div>
               </div>

           </div>




   </div>
@stop