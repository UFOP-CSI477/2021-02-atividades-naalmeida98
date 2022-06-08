@extends('manutencoes.create_layout')

@section('form')

                    <div class="col-6">
                        <label for="datalimite" class="form-label">Data Limite</label>
                        <input type="date" class="form-control" id="datalimite" name="datalimite" required=""></input>
                    </div>

                    <div class="col-12">
                        <label for="descricao" class="form-label">Descrição</label>
                        <textarea type="text" class="form-control" id="descricao" name="descricao" required=""></textarea>
                    </div>

                    <div class="col-sm-8">
                        <label for="tipo" class="form-label">Tipo da manutenção</label>
                        <select class="form-select" id="tipo" name="tipo" >
                            <option value="select">Selecione</option>
                            <option value="1">Preventiva</option>
                            <option value="2">Corretiva</option>
                            <option value="3">Urgente</option>
                        </select>
                    </div>

                    <div class="col-sm-4">
                        <label for="user_id" class="form-label">Usuário</label>
                        <input type="number" class="form-control" id="user_id" name="user_id" placeholder="" value="{{ Auth::user()->id }}" required="">
                    </div>

                </div>

@endsection
