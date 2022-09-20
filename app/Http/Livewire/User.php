<?php

namespace App\Http\Livewire;

use Livewire\Component;

class User extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
                <h2>This is livewire inline component.</h2>
            </div>
        blade;
    }
}
