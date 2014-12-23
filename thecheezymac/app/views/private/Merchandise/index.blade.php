@section('title')
    Merchandise
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
                        <a href="/webadmin/merchandise/create">
                            <button class="btn btn-danger"><span class="glyphicon glyphicon-plus"></span> New Winner </button>
                        </a>
                        </caption>
                            <thead>
                                <tr>
                                    <th>Item Photo</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($merchandise as $item)
                                    <tr>
                                        <td style="vertical-align: middle !important;">
                                        <div class="col-xs-12" style="padding-left:0px">

                                           <img src="{{$item->image}}" class="img-responsive" style="width:200px" alt=""/>
                                           </div>
                                       </td>
                                        <td style="vertical-align: middle !important;">{{$item->item_name}}</td>
                                        <td style="vertical-align: middle !important;">{{$item->price}}</td>

                                        <td style="vertical-align: middle !important;"><a href="/webadmin/merchandise/{{$item->id}}/edit"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                        <td style="vertical-align: middle !important;">{{FormHelper::delete('webadmin.merchandise.destroy', $item->id)}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                   </div>
               </div>

           </div>




   </div>
@stop