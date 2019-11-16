@extends('layouts.site')

@section('title') Upload Images @endsection
@section('styles', '') 
@section('page-tree')
    <h1> Upload Images <small> Add image to your uploaded images</small></h1>
    <ol class="breadcrumb">
    	<li><a href="{{ route('userhome') }}"><i class="fa fa-home text-primary"></i>Home</a></li>
    	<li><a href="{{ route('profile') }}"><i class="fa fa-dashboard text-primary"></i>Settings</a></li>
    	<li><a href="{{ route('galleries.index') }}"><i class="fa fa-image text-primary"></i>Galleries</a></li>
    	<li><a href="{{ route('images.index') }}"><i class="fa fa-image text-primary"></i>Images</a></li>
        <li class="active"><a href="javascript:void(0)"><i class="fa fa-edit"></i> Edit Image </a></li>
    </ol>
@endsection
@section('content')
	<div class="row">
		<section class="col-lg-9 connectedSortable">
			<div class="nav-tabs-custom">
				<ul class="nav nav-tabs pull-right">
					<li class="active"><a href="#urevenue-chart" data-toggle="tab">Edit </a></li>
					<li class="pull-left header"><i class="fa fa-edit text-info"></i><a href="{{ route('images.index') }}" class="btn btn-xs btn-info pull-left"><i class="fa-angle-left fa"></i> Back</a></li>
				</ul>
				<div class="tab-content padding">
					<div class="chart tab-pane active" id="urevenue-chart" style="position: relative; height: 500px; overflow-y: auto;">
						<div class="card">
							<div class="card-header"><h4 style="width: 100%; text-align: center;"> Edit Image </h4></div>
                            <div class="card-body">

                            </div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
@endsection
@section('scripts')

@endsection