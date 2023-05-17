<x-layout header="Accedi">

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">

                {{-- form --}}
                <form class="p-5 border" action="{{ route('login') }}" method="POST">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">Indirizzo email</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    
                    <button type="submit" class="btn btn-dark">Accedi</button><br>
                    <a href="{{ route('register') }}" class="small fst-italic">Non sei registrato?</a>
                </form>

            </div>
        </div>
    </div>

</x-layout>