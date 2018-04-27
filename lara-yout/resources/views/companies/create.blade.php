@extends('layouts.app')

@section('content')

    <div class="col-lg-9 col-md-9 float-left">
        <form method="post" action="{{route('companies.store')}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="company-name">Name<span class="required">*</span> </label>
                <input placeholder="Enter name"
                       id="company-name"
                       required
                       name="name"
                       spellcheck="false"
                       class="form-control"
                />
            </div>

            <div class="form-group">
                <label for="company-content">Description</label>
                <textarea placeholder="Enter description"
                          id="company-content"
                          name="description"
                          rows="5"
                          spellcheck="false"
                          class="form-control autosize-target text-left"
                ></textarea>
            </div>

            <div class="form-group">
                <input type="submit" class="btn-primary" value="submit"/>
            </div>

        </form>
    </div>

    <div class="col-sm-3 col-md-3 col-lg-3 float-right">
        <div class="sidebar-module">
            <h4>Actions</h4>
            <ol class="list-unstyled">
                <li><a href="/companies">All companies</a></li>
            </ol>
        </div>
    </div>
@endsection

