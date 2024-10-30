<?php

namespace App\Livewire;

use Livewire\Component;
use App\Components\TextInput;

class TestForm extends Component
{

    public $email;

    public function render()
    {
        $input = TextInput::make('email')
            ->label('Email Address');

        return view('livewire.test-form', [
            'input' => $input,
        ]);
    }
}
