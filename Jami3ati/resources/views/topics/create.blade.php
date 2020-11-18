@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 style="color: white">Add a question </h1>
        <hr>
        <form action="{{route('topics.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title" style="color: white">Title of the question:</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title">
                @error('title')
                <div class="invalid-feedback">{{$errors->first('title')}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="content"style="color: white">Your question :</label>
                <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror" rows="6"></textarea>
                @error('content')
                <div class="invalid-feedback">{{$errors->first('content')}}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Ajouter ma question</button>

        </form>
    </div>
@endsection
