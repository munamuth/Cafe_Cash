@extends('cafe_master')

@section('content')
    <div class="manage">
      <div class="card">
        <div class="card-header">
          <button class="btn btn-success btn-sm" data-parent="#menage" data-toggle="collapse" data-taget="menu">Menu</button>
          <button class="btn btn-success btn-sm" data-parent="#menage" data-toggle="collapse" data-taget="new_menu">New</button>
        </div>
        <div class="collapse in">
          <div class="card-body" id="menu">
            moo
          </div>
        </div>
        <div class="collapse">
          <div class="card-body" id="new_menu">
            moo
          </div>
        </div>
        
      </div>
    </div>
@endsection
