@extends('layout.main')

@section('content')

<div class="main-wrapper" style="width: 80%">
    <div class="container-fluid">
        <div class="d-grid gap-2">
            <div class="p-0 d-inline-flex">
                <h3>Upload New File</h3>
            </div>
            <div class="p-0 d-inline-flex">
                <form class="d-inline-flex gap-2" action="{{ route('files.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="title">Title:</label>
                    <input class="form-control" type="text" id="title" name="title">

                    <label for="file">File:</label>
                    <input class="form-control" type="file" id="file" name="file">

                    <label for="author">Author:</label>
                    <input class="form-control" type="text" id="author" name="author">

                    <button type="submit" class="btn btn-dark">Upload</button>
                </form>
            </div>
            <div class="p-0">
                <hr>
            </div>
            <div class="p-0">
                <h3>List of Uploaded Files</h3>
                <ul>
                    @foreach($files as $file)
                        <li>{{ $file->title }} - {{ $file->author }}
                            <a href="{{ asset('uploads/'.$file->file_path) }}" target="_blank">View File</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection