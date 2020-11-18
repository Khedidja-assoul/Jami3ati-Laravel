@extends('layouts.app')
// to hide and show the answers on a comment
@section('extra-js')



    <script>
        function toggleReplyComment(id) {
            let element = document.getElementById('replyComment-'+ id)
            element.classList.toggle('d-none')

        }
    </script>
@endsection


@section('content')
    <div class="container">
        <div class="card-body" style="background-color: white">
            <h3 class="card-title" style="color: #1d68a7" >{{$topic->title}}</h3>
            <p>{{$topic->content}}</p>
            <div class="d-flex justify-content-between align-items-center ml-5">
                <small>Posté le {{$topic->created_at->format('d/m/y  à  h:m')}}</small>
                <span class="badge badge-primary"> {{$topic->user->name}}</span>
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center mt-5">
                <a  href="{{route('topics.edit',$topic)}}" class="btn btn-primary">Edit this question</a>

                <form action="{{route('topics.destroy',$topic)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button
                             type="submit" class="btn btn-danger">Delete</button>
                </form>
        </div>
        <hr>
        <h4 style="color: #E15546">Answers</h4>
        @forelse($topic->comments as $comment)
            <div class="card mt-2 ml-0">
                <div class="card-body">
                    {{$comment->content}}
                    <div class="d-flex justify-content-between align-items-center">
                        <small>Posté le {{$comment->created_at->format('d/m/y ')}}</small>
                        <span class="badge badge-primary"> {{$comment->user->name}}</span>
                    </div>
                </div>
            </div>
            @foreach($comment->comments as $replyComment)

                <div class="card mt-2 ml-5">
                    <div class="card-body">
                        {{$replyComment->content}}
                        <div class="d-flex justify-content-between align-items-center">
                            <small>Posté le {{$replyComment->created_at->format('d/m/y ')}}</small>
                            <span class="badge badge-primary"> {{$replyComment->user->name}}</span>
                        </div>
                    </div>
                </div>
            @endforeach
            @auth
            <button class="btn btn-info mt-2" onclick="toggleReplyComment({{$comment->id}})">Comment</button>

            <form  action="{{route('comments.storeReply',$comment)}}" method="post" class="mb-3 ml-3 d-none"
                  id="replyComment-{{$comment->id}}">
                @csrf
                <div class="form-group">

                    <label for="replyComment" id="replyComment">My comment</label>
                    <textarea style="solid-color: #b91d19 " name="replyComment" id="replyComment"
                              rows="4" class="form-control
                    @error("replyComment") is-invalid @enderror"></textarea>
                    @error('replyComment')
                        <div class="invalid-feedback">{{$errors->first("replyComment")}}  </div>

                    @enderror
                </div>
                <button style="border: 1px dotted #999;border-radius: 0;-webkit-appearance: none;" type="submit" class="btn btn-primary">répondre a ce commentaire</button>
            </form>
            @endauth
        @empty
            <div class="alert alert-info">No answers for this question</div>
        @endforelse
        <form action="{{route('comments.store',$topic)}}" method="POST">
            @csrf
            <div class="form-group">
                <labl for="content" >Your answer :</labl>
                <textarea class="form-control ml-0 @error('content') is-invalid @enderror" name="content" id="content"
                          rows="5" ></textarea>
                @error('content')
                    <div class="invalid-feedback">{{$errors->first('content')}}</div>
                @enderror
            </div>
            <button  type="submit" class="btn btn-primary">Reply on this question </button>
        </form>
            </div>

@endsection
