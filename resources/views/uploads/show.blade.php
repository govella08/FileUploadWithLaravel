@extends('layout.app')

@section('content')
  <h1>Upload new file</h1>
  <a href="{{ route('uploads.index') }}" class="btn btn-sm btn-outline-secondary">All uploaded files</a>
  <div class="card">
    <iframe src="{{ asset('images/'.$file->path) }}" frameborder="0" width="870" height="800"></iframe>
  </div>
@endsection