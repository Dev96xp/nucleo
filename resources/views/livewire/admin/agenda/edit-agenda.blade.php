<div>


    {{-- NO SE ESTA USANDO MAS *************************************************** --}}



    {{-- IMPORTANTE: Este boton, que abre el modal, estara trabajando desde el calendarion --}}
    {{-- <x-button class="bg-black" wire:click="$set('openx_modal', true)">
        Edit
    </x-button> --}}

    <x-confirmation-modal wire:model="openx_modal">
        <x-slot name="title">
            EDIT - editar appoitment - {{ $event_id }}
        </x-slot>

        <x-slot name="content">
            <div class="grid grid-cols-6 gap-4">
                <div class="col-span-3 mb-4">
                    <x-label value="Title" />
                    <x-input wire:model.defer="event.title" type="text" class="w-full" />
                    {{-- Revisa por alhun error de validacion --}}
                    <x-input-error for="event.title" />
                </div>
                <div class="col-span-1 mb-4">
                    <x-label value="Hours" />
                    <x-input wire:model.defer="event.hours" type="text" class="w-full" />
                    {{-- Revisa por alhun error de validacion --}}
                    <x-input-error for="event.hours" />
                </div>
                <div class="col-span-1 mb-4">
                    <x-label value="Minutes" />
                    <x-input wire:model.defer="event.minutes" type="text" class="w-full" />
                    {{-- Revisa por alhun error de validacion --}}
                    <x-input-error for="event.minutes" />
                </div>
            </div>
            <div class="grid grid-cols-6 gap-4">
                <div class="col-span-4 mb-4">
                    <x-label value="Description" />
                    <textarea wire:model.defer="event.description" class="form-control w-full" rows="4"></textarea>
                    {{-- Revisa por alhun error de validacion --}}
                    <x-input-error for="event.description" />
                </div>
            </div>
        </x-slot>


        <x-slot name="footer">
            <x-secondary-button wire:click="$set('openx_modal', false)">
                Nevermind
            </x-secondary-button>

            <x-danger-button class="ml-2" wire:click="moverAppoitment" wire:loading.attr="disabled">
                Update Appoitment
            </x-danger-button>
        </x-slot>


    </x-confirmation-modal>
</div>
