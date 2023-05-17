<x-layout header="{{ $article->name }}">

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <img src="{{ Storage::url($article->image) }}" alt="nome articolo {{ $article->name }}" class="img-fluid">
                <figcaption class="text-center small text-muted">{{ $article->name }}</figcaption>
                <p class="fs-4 my-5">{{ $article->description }}</p>
                <hr>
                <p>Inserito il: <span class="fst-italic">{{ $article->created_at->format('D d/m/Y - h:m') }}</span></p>
                <p>Inserito da: <span class="fst-italic">{{ $article->user->name }}</span></p>
                <hr>
                <a href="{{ route('article.index') }}" class="btn btn-dark">Torna indietro</a>
                @if(Auth::user() && Auth::user()->id == $article->user_id)
                    <a href="{{ route('article.edit', compact('article')) }}" class="btn btn-warning">Modifica</a>
                @endif
            </div>
        </div>
    </div>


</x-layout>