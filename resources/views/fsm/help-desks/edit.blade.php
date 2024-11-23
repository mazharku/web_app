<!-- Last Modified Date: 18-04-2024
Developed By: Innovative Solution Pvt. Ltd. (ISPL)   -->
@extends('layouts.dashboard')
@section('title', $page_title)
@section('content')
@include('layouts.components.error-list')
@include('layouts.components.success-alert')
@include('layouts.components.error-alert')
<div class="card card-info">
	{!! Form::model($helpDesk, ['method' => 'PATCH', 'action' => ['Fsm\HelpDeskController@update', $helpDesk->id], 'class' => 'form-horizontal']) !!}
		@include('fsm/help-desks.partial-form', ['submitButtomText' => 'Update'])
	{!! Form::close() !!}
</div><!-- /.box -->
@stop