<div>
    <div class="card">
        <div class="card-header">

        </div>

        @if ($project->sections->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Section</th>
                            {{-- <th></th> --}}
                        </tr>
                    </thead>

                    <tbody>
                        {{-- DESPLIEGA LAS SECTIONES pertenecientes a este projecto --}}
                        @foreach ($project->sections as $section)
                            <tr>

                                <td class="py-2 cursor-pointer bg-blue-50" wire:click="show_items({{ $section }})">
                                    <div>
                                        <div class="text-bold text-lg">
                                            {{ $section->name }}
                                        </div>
                                    </div>
                                </td>

                            </tr>
                                {{-- DESPLIEGA LOS ITEMS pertenecientes a esta section --}}
                                @foreach ($section->items as $item)
                                    <tr>
                                        <td>
                                            ...
                                        </td>
                                        <td>
                                            <div class="text-bold">
                                                {{ $item->name }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-bold">
                                                {{ $item->description }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-bold">
                                                $ {{ $item->price . '.00'}}
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                        @endforeach

                    </tbody>
                </table>

            </div>
        @else
            <div class="card-body">
                <strong>No hay registros</strong>
            </div>
        @endif
    </div>

    <div class="card">
        <div class="card-header text-right">
            Subtotal
        </div>
        <div class="card-body text-right text-bold">
            $ {{ number_format($subtotal, 2, ',', '.') }}
        </div>
    </div>
</div>
