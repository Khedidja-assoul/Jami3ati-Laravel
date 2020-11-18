@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 style="color: white">Editer ma question </h1>
        <hr>
        <form action="{{route('topics.update',$topic)}}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="title" style="color: white">Titre du question :</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{$topic->title}}">
                @error('title')
                <div class="invalid-feedback">{{$errors->first('title')}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="content"style="color: white">Votre question :</label>
                <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror" rows="6">{{$topic->content}}</textarea>
                @error('content')
                <div class="invalid-feedback">{{$errors->first('content')}}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Editer ma question</button>
        </form>
    </div>
@endsection
