@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="list-group">
            @foreach($topics as $topic)
                <div class="list-group-item">
                    <h4><a href="{{ route('topics.show',$topic) }}">{{$topic->title}}</a></h4>
                    <p>{{$topic->content}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <small>Posté le {{$topic->created_at->format('d/m/y  à  h:m')}}</small>
                        <span class="badge badge-primary"> {{$topic->user->name}}</span>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-3">
            {{$topics->links()}}
        </div>
    </div>
    <a href="topics/create" class="btn btn-primary ml-5 "  >Add question</a>
@endsection
