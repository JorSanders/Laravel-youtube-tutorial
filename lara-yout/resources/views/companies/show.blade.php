@extends('layouts.app')

@section('content')

    <div class="col-lg-9 col-md-9 float-left">
        <div class="jumbotron">
            <h1>{{$company->name}}</h1>
            <p class="lead">{{$company->description}}</p>
        </div>

        <!-- Example row of columns -->
        <div class="row">
            @foreach($company->projects as $project)
                <div class="col-lg-4">
                    <h2>{{$project->name}}</h2>
                    <p class="text-danger">{{$project->description}}</p>
                    <p><a class="btn btn-primary" href="/projects/{{$project->id}}" role="button">View details »</a></p>
                </div>
            @endforeach
        </div>
    </div>

    <div class="col-sm-3 col-md-3 col-lg-3 float-right">
        <div class="sidebar-module">
            <h4>Actions</h4>
            <ol class="list-unstyled">
                <li><a href="/companies/{{ $company->id }}/edit">Edit</a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
            </ol>
        </div>
    </div>
@endsection

