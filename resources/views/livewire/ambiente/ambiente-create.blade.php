<div class="mt-5">
    <div class="card">
        <h5 class="card-header">Cadastro de Ambientes</h5>
        <div class="card-body">
            <form wire:submit.prevent="store">
                <div class="mt-3">
                    <label for="nome" class="form-label"> Nome</label>
                    <input type="text" class="form-control" wire:model="nome" name="nome" id="nome"
                        >
                </div>

                <div class="mt-3">
                    <label for="descricao" class="form-label"> Descricao</label>
                    <textarea class="form-control" id="descricao" name="descricao" wire:model="descricao"></textarea>
                </div>

                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="status" checked wire:model="status">
                    <label class="form-check-label" for="switchCheckChecked">Status</label>
                </div>

              
                <div class="mt-3">
                    <button type="submit" class="btn btn-success">Salvar</button>
                </div>
            </form>

        </div>
    </div>

</div>
