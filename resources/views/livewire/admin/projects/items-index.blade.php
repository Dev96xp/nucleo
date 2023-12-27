<div>
    <div class="card">
        <div class="card-header">

        </div>

        @if ($section->items->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Items</th>
                            {{-- <th></th> --}}
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($section->items as $item)
                            <tr>
                                {{-- <td>{{ $item->id }}</td> --}}
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
                                {{-- <td class="width=10px">
                                    <a class="btn btn-primary"
                                        href="{{ route('admin.sections.edit', $section) }}">Editar</a>
                                </td> --}}
                            </tr>
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
</div>
