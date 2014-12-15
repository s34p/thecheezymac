@section('title')
    Menu
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
                        <a href="/webadmin/menu/create">
                            <button class="btn btn-danger"><span class="glyphicon glyphicon-plus"></span> New Menu Item </button>
                        </a>
                        </caption>
                            <thead>
                                <tr>
                                    <th>Item Image</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Weekly Special</th>
                                    <th>Category</th>

                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($menus as $menu)
                                    <tr>
                                        <td style="vertical-align: middle !important;">
                                        <div class="col-xs-12" style="padding-left:0px">

                                           <img src="{{$menu->image}}" class="img-responsive" alt=""/>
                                           </div>
                                       </td>
                                        <td style="vertical-align: middle !important;">{{$menu->menu_name}}</td>
                                        <td style="vertical-align: middle !important;">${{$menu->price}}</td>
                                        <td style="vertical-align: middle !important;">

                                            @if($menu->weekly_special == 1)

                                                Yes

                                            @endif

                                        </td>
                                        <td style="vertical-align: middle !important;">{{$menu->category_name}}</td>
                                        <td style="vertical-align: middle !important;"><a href="/webadmin/menu/{{$menu->menu_id}}/edit"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                        <td style="vertical-align: middle !important;">{{FormHelper::delete('webadmin.menu.destroy', $menu->menu_id)}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                   </div>
               </div>

           </div>




   </div>
@stop