@extends('layouts.admin')

@section('index')
<div class="text-center">
    <div class="text-center mb-4">
        <h1 class=" text-center mb-0 text-gray-800 py-4">{{$project->title}}</h1>
    </div>
    <img src="{{asset('storage/' . $project->image)}}">
    <p class="my-4">
        {{$project->content}}
    </p>
    <!-- <h6>
        Category:{{$project->category->name ? $project->category->name : 'Non categorizzato!'}}
    </h6> -->
</div>
@endsection