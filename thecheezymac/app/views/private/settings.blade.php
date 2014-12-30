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
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                           Database Backup
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body" >
                        <a href="/webadmin/settings/database-backup"><button class="btn btn-primary ">Backup Database To My Server</button></a>
                        {{--<button class="btn btn-primary ">Backup Database To My Dropbox</button>--}}
                    </div>
                </div>
            </div>


            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Analyze Performance Of My Website
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        <div>
                            <a href="/webadmin/settings/performance"><button class="btn btn-primary ">Run Performance Check</button></a>
                        </div>

                        <div style="margin-top: 20px; text-align: left">
                            @if(isset($results))
                                <strong>Page Speed Grade: <span class="text-success">{{$results["pagespeed_score"]}}% A</span> </strong> (Based on gtmetrix.com)
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="{{$results["pagespeed_score"]}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$results["pagespeed_score"]}}%">
                                        <span class="sr-only">Page Speed Score is {{$results["pagespeed_score"]}}%</span>
                                    </div>
                                </div>

                            @endif
                        </div>

                    </div>
                </div>
            </div>


        </div>

   </div>
@stop