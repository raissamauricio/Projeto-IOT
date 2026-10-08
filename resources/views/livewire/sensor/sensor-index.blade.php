<div>
     <div class="mt-5">
    @if(session()->has('success'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
         </div> 
    @endif

    <div class="card">
        <div class="card-boy">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>nome</th>
                        <th>descrição</th>
                        <th>status</th>
                    </tr>

                    <tbody>
                        @foreach($sensor as $s)
                        <tr>
                            <td>{{ $s->codigo }}</td>
                            <td>{{ $s->descricao }}</td>
                            <td>{{ $s->tipo }}</td>
                            <td>{{ $s->ambiente->nome }}</td>
                            <td><input class="form-check-input" type="checkbox" role="switch" id="status-{{$s->id}}"
                                wire:click="status({{ $s->id }})" @checked($s->status)>
                                <span class="badge bg-{{$s->status ? 'success': 'danger'}}">
                                    {{$s->status ? 'ativo': 'inativo'}}</span>
                            <td>
                                <a href="{{ route('sensor.edit', ['id'=> $s->id])}}"
                                    class="btn btn-primary btn-sm">editar</a>

                                <button class="btn btn-danger btn-sm"
                                wire:confirm="deseja excluir o Sensor?">excluir</button>    
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </thead>
            </table>
        </div>
    </div>
</div>
