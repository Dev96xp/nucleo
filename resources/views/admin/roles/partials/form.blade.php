{{-- boostrap form-group --}}
<div class="form-group">
    {!! Form::label('name', 'Nombre: ') !!} {{-- Errors, tienes informacion sobre el campo name ? si es SI, entonces contatena con la cadena is-invalid, si NO nada --}}
    {!! Form::text('name', null, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Escriba un nombre']) !!}
    {{-- Solo si ha ocurrido un error en el campo name, se realizara la accion --}}
    @error('name')
        <span class="invalid-feedback">
            <strong>
                {{ $message }}
            </strong>
        </span>
    @enderror

</div>

<strong>Permisos</strong>
<br>

@error('permissions')
    <span class="text-danger">
        <small>
            {{ $message }}
        </small>
    </span>
    <br>
@enderror

{{-- Muestra los checkbox METODO 1 --}}
{{-- @foreach ($permissions as $permission)
    <div>
        <label>
            {!! Form::checkbox('permissions[]', $permission->id , null, ['class' => 'mr-1']) !!} 
            {{$permission->name}}
        </label>
    </div>
@endforeach --}}


{{-- Muestra los checkbox METODO 2 --}}
@php
$ncol = 7;
@endphp

<div class="container-fluid">
    <div class="row">

        @switch($ncol)
            @case(3)
            @break

            @case(4)
            @break

            @case(7)
                {{-- CASO PARA 5 COLUMNAS DE IMAGENES --}}
                <div class="column mr-4">
                    @foreach ($permissions as $permission)
                        @if ($loop->index >= 0 && $loop->index <= 25)
                            <div>
                                <label>                                    
                                    {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
                                    {{ $permission->id }} - {{ $permission->name }}
                                </label>
                            </div>
                        @endif
                    @endforeach
                </div>


                <div class="column mr-4">
                    @foreach ($permissions as $permission)
                        @if ($loop->index >= 26 && $loop->index <= 50)
                            <div>
                                <label>
                                    {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
                                    {{ $permission->id }} - {{ $permission->name }}
                                </label>
                            </div>
                        @endif
                    @endforeach
                </div>

                <div class="column mr-4">
                    @foreach ($permissions as $permission)
                        @if ($loop->index >= 51 && $loop->index <= 75)
                            <div>
                                <label>
                                    {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
                                    {{ $permission->id }} - {{ $permission->name }}
                                </label>
                            </div>
                        @endif
                    @endforeach
                </div>

                <div class="column mr-4">
                    @foreach ($permissions as $permission)
                        @if ($loop->index >= 76 && $loop->index <= 100)
                            <div>
                                <label>
                                    {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
                                    {{ $permission->id }} - {{ $permission->name }}
                                </label>
                            </div>
                        @endif
                    @endforeach
                </div>

                <div class="column mr-4">
                    @foreach ($permissions as $permission)
                        @if ($loop->index >= 101 && $loop->index <= 125)
                            <div>
                                <label>
                                    {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
                                    {{ $permission->id }} - {{ $permission->name }}
                                </label>
                            </div>
                        @endif
                    @endforeach
                </div>

                <div class="column mr-4">
                    @foreach ($permissions as $permission)
                        @if ($loop->index >= 126 && $loop->index <= 150)
                            <div>
                                <label>
                                    {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
                                    {{ $permission->id }} - {{ $permission->name }}
                                </label>
                            </div>
                        @endif
                    @endforeach
                </div>

                <div class="column mr-4">
                    @foreach ($permissions as $permission)
                        @if ($loop->index >= 151 && $loop->index <= 175)
                            <div>
                                <label>
                                    {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
                                    {{ $permission->id }} - {{ $permission->name }}
                                </label>
                            </div>
                        @endif
                    @endforeach
                </div>
            @break

            @default
                Default case...
        @endswitch
    </div>

</div>
