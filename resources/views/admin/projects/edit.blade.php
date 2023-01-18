@extends('layouts.admin')

@section('edit')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 py-4">Create a Project</h1>
</div>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{route('admin.projects.update', $project->slug)}}" method="post" class="card p-3" enctype="multipart/form-data">
    @csrf
    @METHOD('PUT')
    <div class="mb-3">
        <input type="text" name="title" id="title" class="form-control" value="{{$project->title}}" aria-describedby="helpId" required>
    </div>
    <div class="mb-3">
        <textarea class="form-control" name="content" id="content" rows="3" required>{{$project->content}}</textarea>
    </div>
    <div class="mb-3">
        <div class="d-flex align-items-center gap-4">
            <img width="200px" src="{{asset('storage/' . $project->image)}}">
            <input type="file" class="form-control" name="image" id="image" placeholder="Aggiungi un'immagine" aria-describedby="coverImgHelper">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Invia!</button>
</form>
@endsection