@extends('layouts.app')

@section('content')

    <div class="col-9 col-lg-offset-3 col-md-offset-2">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Companies</h5>
                <a href="/companies/create" class="btn btn-primary">Create new company</a>
                <ul class="list-group">
                    @foreach($companies as $company)
                        <li class="list-group-item"><a href="/companies/{{  $company->id }}">{{ $company->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
