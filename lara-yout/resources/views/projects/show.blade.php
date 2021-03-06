@extends('layouts.app')

@section('content')

    <div class="col-lg-9 col-md-9 float-left">
        <div class="jumbotron">
            <h1>{{$company->name}}</h1>
            <p class="lead">{{$company->description}}</p>
        </div>

        <a href="/projects/create" class="float-right btn btn-primary">Add project</a>
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
                <li><a href="/projects/create">Add project</a></li>
                <li><a href="/companies/create">Create new company</a></li>
                <li><a href="/companies">List of companies</a></li>
                <li>
                    <a href="#"
                       onclick="
                           var result = confirm('Are you sure you want to delete this company?');
                           if(result){
                               event.preventDefault();
                               document.getElementById('delete-form').submit();
                           }
                       ">
                        Delete
                    </a>

                    <form id="delete-form"
                          action="{{ route('companies.destroy', [$company->id]) }}"
                          method="post"
                          style="display: none;">
                        <input type="hidden" name="_method" value="delete">
                        {{ csrf_field() }}
                    </form>
                </li>
                <li><a href="#"></a></li>
            </ol>
        </div>
    </div>
@endsection

