@extends('layouts.site')

@section('title') User Teams @endsection
@section('styles', '') 
@section('page-tree')
    <h1> User Teams <small> View user teams.</small></h1>
    <ol class="breadcrumb">
    	<li><a href="{{ route('userhome') }}"><i class="fa fa-home text-primary"></i>Home</a></li>
    	<li><a href="{{ route('departments.index') }}"><i class="fa fa-tree text-primary"></i>Departments</a></li>
    	<li><a href="{{ route('projects.index') }}"><i class="fa fa-list text-primary"></i>Projects</a></li>
    	{{-- <li><a href="{{ route('teams.index') }}"><i class="fa fa-question-mark text-primary"></i>Questions</a></li> --}}
        <li class="active"><a href="javascript:void(0)"><i class="fa fa-users"></i> Teams </a></li>
    </ol>
@endsection
@section('content')

@endsection
@section('scripts')

@endsection