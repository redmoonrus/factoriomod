@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-5 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">{{trans('home.New')}}</div>

                <div class="panel-body">
                    @foreach($news as $newitem)

                        <div class="well">
                        <h4><span class="label label-danger">{{$newitem->name}}</span></h4>
                        <div>{{$newitem->text}}</div>
                        <div><span>{{trans('home.more')}}</span></div>

                        </div>
                    @endforeach
                </div>
			</div>
		</div>
        <div class="col-md-5 ">
            <div class="panel panel-default">
                <div class="panel-heading">{{trans('home.Updated')}}</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
	</div>
</div>
@endsection
