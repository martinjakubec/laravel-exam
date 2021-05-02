@extends('layouts/layout')

@section('title', 'List of Tasks')

@section('main')
	<nav class="navbar">
				<a href="/" class="navbar-item">Default View</a>
				<a href="/?order_by=AZ" class="navbar-item">Order A-Z</a>
				<a href="/?order_by=ZA" class="navbar-item">Order Z-A</a>
	</nav>
	<div class="task-list">
		@foreach($tasks as $task)
		<div class="card">
			<div class="card-content">
				<div class="content">
					<h3>{{ $task->title }}</h3>
				</div>
			</div>
			<div class="card-footer">
				<a href="/task/{{ $task->id }}" class="card-footer-item">Show task ></a>
				<a href="/task/{{ $task->id }}/delete" class="card-footer-item">Delete task</a>
			</div>
		</div>
		@endforeach
	</div>
@endsection