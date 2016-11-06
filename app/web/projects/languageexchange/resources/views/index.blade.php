@extends('layouts.app')

@section('content')
<script type="text/javascript" src="js/mycontrol.js"></script>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="col-xs-6 col-md-8">
			<table class="table table-striped" ng-controller="myrequirement">
				<thead>
					<tr>
						<th>
							<b>Name</b>
						</th>
						<th>
							<b>Location</b>
						</th>
						<th>
							<b>Main Language</b>
						</th>
						<th>
							<b>Practice Language:</b>
						</th>
					</tr>
				</thead>
				<tbody ng-repeat="allrequirement in allrequirements">
					<tr>
						<td >
							@{{allrequirement.name}}
						</td>
						<td>
							@{{allrequirement.location}}
						</td>
						<td>
							@{{allrequirement.mainlang}}
						</td>
						<td>
							@{{allrequirement.practicelang}}
						</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="col-xs-6 col-md-4" >
			<form class="form-search">
				<input class="input-medium search-query" type="text">
				<button type="submit" class="btn btn-primary">Search</button>
			</form>
			<br>
			<hr/>
			<dl ng-controller="myrequirement" ng-init="getspecificdata({{$user}})" ng-hide="loading">
				<dd>
					Name:<b ng-bind="getspecific[0].name"></b>
				</dd>
				<dd>
					Sex:<b ng-bind="getspecific[0].sex"></b>
				</dd>
				<dd>
					Age:<b ng-bind="getspecific[0].age"></b>
				</dd>
				<dd>
					Location:<b ng-bind="getspecific[0].location"></b>
				</dd>
				<dd>
					Main language:<b ng-bind="getspecific[0].mainlang"></b>
				</dd>
				<dd>
					Practice language:<b ng-bind="getspecific[0].practicelang"></b>
				</dd>
				<dd>
					Description:<b ng-bind="getspecific[0].description"></b>
				</dd>
			</dl>
			<div ng-controller="modal">
				<button ng-click="toggleModal()" class="btn btn-primary">Edit</button>
				<modaldialog title="Update your information" visible="showModal">
			    <form method="POST" class="form-horizontal" ng-controller="myrequirement" ng-submit="updatespecificdata({{$user}})" ng-init="getspecificdata({{$user}})">
				{!! csrf_field() !!}
				@include('common.errors')
					<div class="form-group">
					<label for="task-name" class="col-sm-3 control-label">Name</label>
						<div class="col-md-8">
						<input class="form-control" type="text" name="name" placeholder ="@{{ getspecific[0].name }}" ng-model="specificdata.name">
						</div>
					</div>
					<div class="form-group">
					<label for="task-name" class="col-sm-3 control-label">Age</label>
						<div class="col-md-8">
						<input class="form-control" type="text" name="age" placeholder="@{{ getspecific[0].age }}" ng-model="specificdata.age">
						</div>
					</div>
					<div class="form-group">
					<label for="task-name" class="col-sm-3 control-label">Location</label>
						<div class="col-md-8">
						<input class="form-control" type="text" name="location" placeholder="@{{ getspecific[0].location }}"ng-model="specificdata.location">
						</div>
					</div>
					<div class="form-group">
					<label for="task-name" class="col-sm-3 control-label">Sex</label>
						<div class="col-md-8">
						<input class="form-control" type="text" name="sex" placeholder="@{{ getspecific[0].sex }}" ng-model="specificdata.sex">
						</div>
					</div>
					<div class="form-group">
					<label for="task-name" class="col-sm-3 control-label">Main language</label>
						<div class="col-md-8">
						<input class="form-control" type="text" name="mainlang" placeholder="@{{ getspecific[0].mainlang }}" ng-model="specificdata.mainlang">
						</div>
					</div>
					<div class="form-group">
					<label for="task-name" class="col-sm-3 control-label">Practice language</label>
						<div class="col-md-8">
						<input class="form-control" type="text" name="practicelang" placeholder="@{{ getspecific[0].practicelang }}" ng-model="specificdata.practicelang">
						</div>
					</div>
					<div class="form-group">
					<label for="task-name" class="col-sm-3 control-label">Tell me about yourself</label>
						<div class="col-md-8">
						<textarea class="form-control" name="description" style="height: 100px" ng-model="specificdata.description" placeholder="@{{ getspecific[0].description }}"></textarea>
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
                        	<button type="submit" class="btn btn-success">
                                Update
                            </button>
                        </div>
                    </div>
                	</form>
			    </modaldialog>
		   </div>
		 </div>
	 </div>
</div>

@endsection