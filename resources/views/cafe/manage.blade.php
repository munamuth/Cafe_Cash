@extends('layouts.app')

@section('content')
    <div class="panel-group" id="manage">

      <div class="panel panel-default">
        <div class="panel-heading">
            <a data-toggle="collapse" data-parent="#manage" href="#menu">Menu</a>
        </div>
        <div id="menu" class="panel-collapse collapse in">
          <div class="panel-body">Panel Body</div>
          <div class="panel-footer">Panel Footer</div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">
            <a data-toggle="collapse" data-parent="#manage" href="#price">Price List</a>
        </div>
        <div id="price" class="panel-collapse collapse">
          <div class="panel-body">Panel Body</div>
          <div class="panel-footer">Panel Footer</div>
        </div>
      </div>

    </div>
@endsection
