@extends('layouts/layout')

@section('title', $title)

@section('main')
<div class="card">
  <div class="card-content">
    <p class="content">Date added: le {{ substr(\Carbon\Carbon::parse($date_added)->locale('fr_FR')->isoFormat('LLL'), 0, -5)}}</p>
    <div class="content">
      <p>{{$description}}</p>
    </div>
  </div>
  <div class="card-footer">
    <a class="card-footer-item" href="/"><- Back to all tasks</a>
  </div>
</div>
<br>
@endsection