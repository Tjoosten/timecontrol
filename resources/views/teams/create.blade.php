@extends('header')

@section('content')
<div class="page-header">
<h2>Create team</h2>
</div>

<div class="panel panel-default">
  <div class="panel-body">
{!! Form::model(array('url' => "staff/teams/create", 'method' => "POST")) !!}
{!! csrf_field() !!}
<div class="form-group">
 <label for="department_name" class="form-label">Team name <span class="text-danger">*</span></label>
 <input type="text" id="department_name" name="department_name" class="form-control">
</div>

<div class="form-group">
 <label for="department_manager" class="form-label">Manager <span class="text-danger">*</span></label>
 <select id="department_manager" name="department_manager" class="form-control">
  <option selected=""></option>
  @foreach($users as $user_item)
  <option value="Admin">Administrator</option>
  <option value="Glenn">Glenn Hermans</option>
  @endforeach
 </select>
</div>

<div class="form-group">
 <label for="department_description" class="form-label">Description</label>
 <textarea id="department_description" name="department_description" rows="10" class="form-control"></textarea>
</div>

<div class="form-group">
 <label for="save" class="form-label">&nbsp;</label>
 <button type="submit" name="save" class="btn btn-primary">Save</button>
 <button type="reset" name="reset" class="btn btn-danger">Cancel</button>
</div>
{!! Form::close() !!}
</div>
</div>

@endsection
