<div>

    {{-- IMPORTANTE: Este boton, que abre el modal, estara trabajando desde el calendarion --}}
    {{-- <x-button class="bg-black" wire:click="$set('open_modal', true)">
        Edit
    </x-button> --}}

    <x-confirmation-modal wire:model="open_modal">
        <x-slot name="title">
            CREATE - Create appoitment - {{ $date }}
        </x-slot>

        <x-slot name="content">
            <div class="grid grid-cols-6 gap-4">
                <div class="col-span-3 mb-4">
                    <x-label value="Appoitment" />
                    <x-input wire:model.defer="appoitment" type="text" class="w-full" />
                    {{-- Revisa por alhun error de validacion --}}
                    <x-input-error for="appoitment" />
                </div>
                <div class="col-span-1 mb-4">
                    <x-label value="Hours" />
                    <x-input wire:model.defer="hours" type="text" class="w-full" />
                    {{-- Revisa por alhun error de validacion --}}
                    <x-input-error for="hours" />
                </div>
                <div class="col-span-1 mb-4">
                    <x-label value="Minutes" />
                    <x-input wire:model.defer="minutes" type="text" class="w-full" />
                    {{-- Revisa por alhun error de validacion --}}
                    <x-input-error for="minutes" />
                </div>
            </div>
            <div class="grid grid-cols-6 gap-4">
                <div class="col-span-4 mb-4">
                    <x-label value="Description" />
                    <textarea wire:model.defer="description" class="form-control w-full" rows="4"></textarea>
                    {{-- Revisa por alhun error de validacion --}}
                    <x-input-error for="description" />
                </div>
            </div>
        </x-slot>


        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('open_modal')" wire:loading.attr="disabled">
                Nevermind
            </x-secondary-button>

            <x-danger-button class="ml-2" wire:click="createAppoitment('{{ $date }}')"
                wire:loading.attr="disabled">
                Crear Appoitment
            </x-danger-button>
        </x-slot>
    </x-confirmation-modal>
</div>
