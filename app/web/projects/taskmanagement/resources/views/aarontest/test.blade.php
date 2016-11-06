@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>
                <div class="panel-body">
                    {{ $shit1 }}
                    @if($shit2 == false)
                        life is a shit
                    @else
                        life is not a shit
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
