<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;
use Livewire\WithFileUploads;

class Images extends Component
{
    public $images = [];

    use WithFileUploads;

    public function multiUpload()
    {
        foreach ($this->images as $key => $image) {
            $this->images[$key] = $image->store('images', 'public');
        }
        $this->images = json_encode($this->images);
        Image::create(['filename' => $this->images]);
        session()->flash('message', 'Multiple Images Uploaded');
        $this->emit('multi');
    }

    public function render()
    {
        return view('livewire.images');
    }
}
