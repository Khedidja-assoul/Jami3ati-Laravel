@extends("front-end.accueil")
@section("forum")
    <div class="contenu">
        <div class="navInretn">
            <img src="res/icons/sharefull.png">Forum
        </div>
        <div class="qsts">
            <div class="qst">
                <div class="profilinfo">
                    <div>
                        <img src="res/teacher.jpg"> <span>{{ Auth::user()->name }}</span>
                    </div>
                </div>
                <textarea placeholder="ask your questions and get answers now"></textarea>
                <div class="pubIcon">
                    <button >Share</button>
                    <img src="res/icons/unlink.png" id="pj">
                </div>
            </div>
            @if (!empty($questions))
                @foreach($questions  as $qst)
                    <div class="qst">
                        <div class="profilinfo">
                            <img src="res/teacher.jpg"> <time>{{$qst->datepub}}</time> <span>User Name</span>
                        </div>
                        <p>{{$qst->qst}}</p>
                        <span><img src="res/icons/chat.png"><span class="nb">{{$qst->nbreponse}} responses</span></span>
                        <attachedPiece><span>attached Pieces</span><img src="res/icons/broken-link.png"></attachedPiece>
                    </div>
                @endforeach
            @endif

        </div>

    </div>

@endsection

