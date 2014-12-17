@section('title')
    Gallery
@stop

@section('content')
    <div class="main">

           <div class="wrapper">
               @include('private.partials.adminNav')

               <div class="row">
                    <div class="center-block table-responsive">
                        {{DisplayMessage::success(Session::get('success'))}}
                        <table class="table table-striped table-condensed" >
                        <caption class="text-right">
                        <a href="/webadmin/gallery/create">
                            <button class="btn btn-danger"><span class="glyphicon glyphicon-plus"></span> New Image </button>
                        </a>
                        </caption>
                            <thead>
                                <tr>
                                    <th>Item Image</th>
                                    <th>Caption</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($images as $image)
                                    <tr>
                                        <td style="vertical-align: middle !important;">
                                        <div class="col-xs-12" style="padding-left:0px">

                                           <img src="{{$image->image}}" class="img-responsive" style="width:200px" alt=""/>
                                           </div>
                                       </td>
                                        <td style="vertical-align: middle !important;">{{$image->caption}}</td>

                                        <td style="vertical-align: middle !important;"><a href="/webadmin/gallery/{{$image->id}}/edit"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                        <td style="vertical-align: middle !important;">{{FormHelper::delete('webadmin.gallery.destroy', $image->id)}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                   </div>
               </div>

           </div>




   </div>
@stop