@extends('layout.app')

@section('content')
  <h1>All uploaded files</h1>
  <a href="{{ route('uploads.create') }}" class="btn btn-sm btn-outline-secondary">Upload new file</a>
  @if (count($files) > 0)
      <table class="table table-hover">
        <tr>
          <th>#</th>
          <th>File path</th>
        </tr>
        @foreach ($files as $file)
          <tr>
            <td>1</td>
            <td><a href="{{ route('uploads.show', $file) }}">View file</a></td>
          </tr>
        @endforeach
      </table>
  @endif
@endsection