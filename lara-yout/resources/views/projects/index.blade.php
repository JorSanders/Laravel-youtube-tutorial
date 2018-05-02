@extends('layouts.app')

@section('content')

    <div class="col-9 col-lg-offset-3 col-md-offset-2">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Projects</h5>
                <a href="/projects/create" class="btn btn-primary">Create new project</a>
                <ul class="list-group">
                    @foreach($projects as $project)
                        <li class="list-group-item"><a href="/projects/{{  $project->id }}">{{ $project->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
