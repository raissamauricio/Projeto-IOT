<div>
    <div class="mt-5">
        @if (session()->has('success'))
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
                        @foreach ($ambiente as $a)
                            <tr>
                                <td>{{ $a->id }}</td>
                                <td>{{ $a->nome }}</td>
                                 <td>{{ $a->descricao }}</td>
                                <td><input class="form-check-input" type="checkbox" role="switch"
                                        id="status-{{ $a->id }}" wire:click="status({{ $a->id }})"
                                        @checked($a->status)>
                                    <span class="badge bg-{{ $a->status ? 'success' : 'danger' }}">
                                        {{ $a->status ? 'ativo' : 'inativo' }}</span>
                                <td>
                                <td>
                                    <a href="{{ route('ambiente.edit', ['id' => $a->id]) }}"
                                        class="btn btn-primary btn-sm">editar</a>

                                    <button class="btn btn-danger btn-sm"
                                        wire:confirm="deseja excluir o ambiente?">excluir</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
