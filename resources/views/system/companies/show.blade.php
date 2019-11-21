@extends('layouts.site')

@section('title') View Company @endsection
@section('styles', '') 
@section('page-tree')
    <h1> View Company <small> Manage the registered companies!</small></h1>
    <ol class="breadcrumb">
    	<li><a href="{{ route('userhome') }}"><i class="fa fa-home text-primary"></i>Home</a></li>
    	<li><a href="{{ route('companies.index') }}"><i class="ion ion-ios-toggle-outline text-primary"></i>Companies</a></li>
        <li class="active"><a href="javascript:void(0)"><i class="fa fa-tree"></i>View Company</a></li>
    </ol>
@endsection
@section('content')
	<div class="row">
        <section class="col-lg-8 connectedSortable">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right">
                    <li class="active"><a href="#urevenue-chart" data-toggle="tab"> View Company </a></li>
                    <li class="pull-left header"><i class="fa fa-plus text-info"></i><a href="{{ route('companies.index') }}" class="btn btn-xs btn-info pull-left"><i class="fa-angle-left fa"></i> Back</a></li>
                </ul>
                <div class="tab-content padding">
                    <div class="chart tab-pane active" id="urevenue-chart" style="position: relative; height: 500px; overflow-y: auto;">
                        <div class="card">

                        	<div class="card-header"><h4 style="width: 100%; text-align: center;"> View Company </h4></div>
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="col-md-4 connectedSortable">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        <img src="{{ $company->company_logo ? asset('files/companies/images/' . $company->company_logo) : asset('start/images/icons/favicon.png') }}" style="max-width: 30px; border-radius: 50%;"> 
                        
                        company Details | {{ config('app.name') }}
                    </h3>
                </div>
                <div class="box-body">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <img src="{{ $company->company_logo ? asset('files/companies/images/' . $company->company_logo) : asset('start/images/icons/favicon.png') }}" alt="company image" style="border-radius: 3px; width: 100%;">
                        </div>
                        <div class="col-md-12" style="margin-top: 5px; margin-bottom: 5px;">
                            <div class="form-control">
                                Administrator: <a href="{{ route('users.show',$company->user_id) }}"> {{ App\User::where('id',$company->user_id)->get()->first()->name }} </a>
                            </div>
                        </div>
                        @role(['super-admin','admin'])
                            <div class="col-md-6">
                                <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-info btn-sm btn-xs btn-block"><i class="fa fa-edit"></i> Edit company</a>
                            </div>
                            <div class="col-md-6">
                                <form method="POST" action="{{ route('companies.destroy', $company->id) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <div class="tools">
                                        <button type="submit" class="btn btn-danger btn-xs btn-block"
                                            onclick="return confirm('You are about to delete this company!\nThis is not reversible!')" title="This will delete this entire company"><i class="fa fa-trash"></i> Delete </button>
                                    </div>
                                </form>
                            </div>
                        @endrole
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')

@endsection