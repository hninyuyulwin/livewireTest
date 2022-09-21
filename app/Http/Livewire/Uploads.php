<?php

namespace App\Http\Livewire;

use App\Models\Upload;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Uploads extends Component
{
    public $title;
    public $filename;

    use WithFileUploads;
    public function fileUpload()
    {
        $validatedData = $this->validate([
            'title' => 'required',
            'filename' => 'required'
        ]);
        $filename = $this->filename->store('files', 'public');
        $validatedData['filename'] = $filename;
        Upload::create($validatedData);
        session()->flash('message', 'File Uploaded Success');
        $this->emit('fileUpload');
    }

    use WithPagination;
    public function render()
    {
        $files = Upload::orderBy('id', 'desc')->paginate(3);
        return view('livewire.uploads', ['files' => $files]);
    }
}
