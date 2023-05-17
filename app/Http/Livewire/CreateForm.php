<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class CreateForm extends Component
{
    use WithFileUploads;

    public $name, $image, $description;

    public function updatedImage()
    {
        $this->validate([
            'image' => 'image|max:1024',
        ]);
    }

    public function store(){
        $user = Auth::user();

        $user->articles()->create([
            'name' => $this->name,            
            'description' => $this->description,
            'image' => $this->image->store('public/images'),
            
        ]);

        session()->flash('articleCreated', 'Hai inserito un articolo');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.create-form');
    }
}
