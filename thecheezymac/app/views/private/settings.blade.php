@section('title')
    Settings
@stop

@section('content')
    <div class="main">

           <div class="wrapper">
                @include('private.partials.adminNav')
           </div>

        {{DisplayMessage::success(Session::get('success'))}}
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-warning">
                <div class="panel-heading" role="tab" id="headingOne">
                    <div class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                           Database Backup
                        </a>
                    </div>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body" >
                        <a href="/webadmin/settings/database-backup"><button class="btn btn-primary ">Backup Database To My Server</button></a>
                        {{--<button class="btn btn-primary ">Backup Database To My Dropbox</button>--}}
                    </div>
                </div>
            </div>
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading" role="tab" id="headingTwo">--}}
                    {{--<h4 class="panel-title">--}}
                        {{--<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">--}}
                            {{--Collapsible Group Item #2--}}
                        {{--</a>--}}
                    {{--</h4>--}}
                {{--</div>--}}
                {{--<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">--}}
                    {{--<div class="panel-body">--}}
                        {{--Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

        </div>

   </div>
@stop