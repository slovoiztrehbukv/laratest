@extends('admin.layouts.app_admin')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="jumbotron">
          <p>
            <span class="label label-primary">0</span>
          </p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="jumbotron">
          <p>
            <span class="label label-primary">0</span>
          </p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="jumbotron">
          <p>
            <span class="label label-primary">0</span>
          </p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <a href="#" class="btn btn-block btn-default">Create category</a>
        <a href="#" class="list-group-item">
          <h4 class="list-group-item-heading">First category</h4>
          <p class="list-group-item-text">
            quanity:
          </p>
        </a>
      </div>
      <div class="col-sm-6">
        <a href="#" class="btn btn-block">Create category</a>
        <a href="#" class="list-group-item">
          <h4 class="list-group-item-heading">First category</h4>
          <p class="list-group-item-text">
            quanity:
          </p>
        </a>
      </div>
    </div>
  </div>
@endsection
