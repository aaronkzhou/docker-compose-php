@extends('layouts.app')

@section('content')
@if ($requirementexistence!==0)
 	<script type="text/javascript">
 		window.location.href='http://localhost/projects/languageexchange/public/'
 	</script>
@else
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel panel-heading" style="background:#FF8C69;color:#fff">Set up your requirement
				</div>
				<div class="panel panel-body">
				<form action="{{ url('/requirement')}}" method="POST" class="form-horizontal">
				{!! csrf_field() !!}
				@include('common.errors')
					<div class="form-group">
					<label for="task-name" class="col-sm-3 control-label">Name</label>
						<div class="col-md-8">
						<input class="form-control" type="text" name="name" >
						</div>
					</div>
					<div class="form-group">
					<label for="task-name" class="col-sm-3 control-label">Age</label>
						<div class="col-md-8">
						<input class="form-control" type="text" name="age" >
						</div>
					</div>
					<div class="form-group">
					<label for="task-name" class="col-sm-3 control-label">Location</label>
						<div class="col-md-8">
						<input class="form-control" type="text" name="location">
						</div>
					</div>
					<div class="form-group">
					<label for="task-name" class="col-sm-3 control-label">Sex</label>
						<div class="col-md-8">
						<input class="form-control" type="text" name="sex" >
						</div>
					</div>
					<div class="form-group">
					<label for="task-name" class="col-sm-3 control-label">Main language</label>
						<div class="col-md-8">
						<input class="form-control" type="text" name="mainlang" >
						</div>
					</div>
					<div class="form-group">
					<label for="task-name" class="col-sm-3 control-label">Practice language</label>
						<div class="col-md-8">
						<input class="form-control" type="text" name="practicelang" >
						</div>
					</div>
					<div class="form-group">
					<label for="task-name" class="col-sm-3 control-label">Tell me about yourself</label>
						<div class="col-md-8">
						<textarea class="form-control" name="description" style="height: 100px"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="task-name" class="col-sm-3 control-label">Update your image</label>
						<div class="col-md-8">
						<input type="file" name="file" class="form-control">
						</div>
					</div>
				    <div class="form-group">

                        <div class="col-md-6 col-md-offset-9">
                            <button type="submit" class="btn btn-primary" style="background: #FF8C69;border-color: #FF8C69">
                                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>submit
                            </button>
                        </div>
                    </div>
                </form>
				</div>
			</div>
		</div>
	</div>
@endif
@endsection