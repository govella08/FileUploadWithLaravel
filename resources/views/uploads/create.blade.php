@extends('layout.app')

@section('content')
  <h1>Upload new file</h1>
  <a href="{{ route('uploads.index') }}" class="btn btn-sm btn-outline-secondary">All uploaded files</a>
  <div class="card">
    <form action="{{ route('uploads.store') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="from-group">
        <label for="category">category category:</label>
        <select name="category" id="category" class="form-control">
          <option value="">Select category</option>
          <option value="Report">Report</option>
          <option value="Documentation">Documentation</option>
        </select>
      </div>

      <div class="from-group">
        <label for="file">Choose file:</label>
        <input type="file" name="file" id="file" class="form-control">
      </div>

      <button type="submit" class="btn btn-outline-primary">Upload</button>
    </form>
  </div>
@endsection