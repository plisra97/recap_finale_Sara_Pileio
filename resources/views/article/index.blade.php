<x-layout header="Tutte gli articoli">

    <div class="container my-5">
        <div class="row justify-content-center">

            @forelse($articles as $article)
                <div class="col-12 col-md-3">
                    <div class="card">
                        <img src="{{ Storage::url($article->image) }}" class="card-img-top" alt="nome articolo {{ $article->name }}">
                        <div class="card-body">
                          <h5 class="card-title">{{ $article->name }}</h5>
                         
                          {{-- <a href="{{ route('article.show', compact('article')) }}" class="btn btn-dark mt-3">Scopri di piu'</a> --}}
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p>Non sono state ancora inseriti articoli. Inseriscine uno.</p>
                    <a href="{{ route('article.index') }}" class="btn btn-dark">Inserisci un articolo</a>
                </div>
            @endforelse

        </div>
    </div>

</x-layout>