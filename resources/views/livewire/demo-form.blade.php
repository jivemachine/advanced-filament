<div class="w-full max-w-3xl p-8 mx-auto space-y-6">
    <form wire:submit="submit">
        {{ $this->form }}

        <button type="submit">
            Submit
        </button>
    </form>

    {{ json_encode($data) }}

    <x-filament-actions::modals />
</div>
