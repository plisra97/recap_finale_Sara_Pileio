<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class EditForm extends Component
{
    use WithFileUploads;
    public $article;
    
    public $name, $description, $image, $old_image;

    public function updatedImage()
    {
        $this->validate([
            'image' => 'image|max:1024',
        ]);
    }


    public function update(){
       
        $this->article->update([
            'name' => $this->name,
            'description' => $this->description,
        ]);

        // se l'utente inserisce una nuova immagine
        if($this->image){
            // aggiorna l'immagine della libreria nel database
            $this->library->update([
                'image' => $this->image->store('public/images'),
            ]);
            
        }

        Storage::delete($this->old_image);

        session()->flash('articleUpdated', 'Hai correttamente aggiornato l\'articolo');
    }
    
    public function mount(){
        
        $this->name = $this->article->name;
        $this->description = $this->article->description;
        $this->old_image = $this->article->image;
        
    }
    public function render()
    {
        return view('livewire.edit-form');
    }
}
