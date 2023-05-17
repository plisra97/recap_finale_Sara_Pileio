<x-layout header="Modifica il tuo articolo">

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">

                {{-- form - Compo Livewire --}}
                @livewire('edit-form', ['article'=>$article])

            </div>
        </div>
    </div>

</x-layout>