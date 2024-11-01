<?php

namespace App\Livewire;

use App\Forms\Components\ColorPicker;
use Livewire\Component;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Form;

class DemoForm extends Component implements HasForms
{

    use InteractsWithForms;

    public ?array $data = [];

    public function mount()
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                ColorPicker::make('color1')
                    ->default('#ff0000')
                    ->width(200),
                ColorPicker::make('color2')
                    ->default('#00ff00')
                    ->width(100),

            ])
            ->statePath('data');
    }

    public function submit(): void
    {
        $data = $this->form->getState();
    }

    public function render()
    {
        return view('livewire.demo-form');
    }
}
