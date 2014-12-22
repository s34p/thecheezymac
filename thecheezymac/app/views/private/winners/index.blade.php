@section('title')
    Winners
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
                        <a href="/webadmin/winners/create">
                            <button class="btn btn-danger"><span class="glyphicon glyphicon-plus"></span> New Winner </button>
                        </a>
                        </caption>
                            <thead>
                                <tr>
                                    <th>Thumbnail Photo</th>
                                    <th>Winner Name</th>
                                    <th>Recipe Name</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($winners as $winner)
                                    <tr>
                                        <td style="vertical-align: middle !important;">
                                        <div class="col-xs-12" style="padding-left:0px">

                                           <img src="{{$winner->image}}" class="img-responsive" style="width:200px" alt=""/>
                                           </div>
                                       </td>
                                        <td style="vertical-align: middle !important;">{{$winner->fullName}}</td>
                                        <td style="vertical-align: middle !important;">{{$winner->recipeName}}</td>

                                        <td style="vertical-align: middle !important;"><a href="/webadmin/winners/{{$winner->id}}/edit"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                        <td style="vertical-align: middle !important;">{{FormHelper::delete('webadmin.winners.destroy', $winner->id)}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                   </div>
               </div>

           </div>




   </div>
@stop