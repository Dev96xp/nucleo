<div>
    <div class="card">
        <div class="card-header">
            <input wire:keydown="limpiar_page" wire:model="search" class="form-control w-100"
                placeholder="Escriba un nombre...">
        </div>

        @if ($projects->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            {{-- <th></th> --}}
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <td>{{ $project->id }}</td>
                                <td class="py-1 cursor-pointer bg-blue-50" wire:click="show_sections({{ $project }})">
                                    <div>
                                        <div class="text-bold">
                                            {{ $project->phone }} - {{ $project->name }}
                                        </div>
                                    </div>
                                </td>
                                {{-- <td class="width=10px">
                                    <a class="btn btn-primary"
                                        href="{{ route('admin.projects.edit', $project) }}">Editar</a>
                                </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div class="card-footer">
                {{ $projects->links() }}
            </div>
        @else
            <div class="card-body">
                <strong>No hay registros</strong>
            </div>
        @endif
    </div>
</div>
