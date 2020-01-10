<fieldset>
    <legend>Dados Iniciais</legend>
    <div class="form-row">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{ isset($registro->nome) ? $registro->nome : '' }}" required autofocus>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3">
            <label for="rg">RG</label>
            <input type="text" name="rg" id="rg" class="form-control" value="{{ isset($registro->rg) ? $registro->rg : '' }}" required>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3">
            <label for="cpf">CPF</label>
            <input type="text" name="cpf" id="cpf" class="form-control cpf" value="{{ isset($registro->cpf) ? $registro->cpf : '' }}" required>
        </div>
    </div>
</fieldset>
<fieldset>
    <legend>Dados de Endereço</legend>
    <div class="form-row">
        <div class="col-sm-12 col-md-2 col-lg-2">
            <label for="cep">CEP</label>
            <input type="text" name="cep" id="cep" class="form-control" value="{{ isset($registro->cep) ? $registro->cep : '' }}" onblur="pesquisacep(this.value);" required>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <label for="rua">Rua</label>
            <input type="text" name="rua" id="rua" class="form-control" value="{{ isset($registro->rua) ? $registro->rua : '' }}" required>
        </div>
        <div class="col-sm-12 col-md-2 col-lg-2">
            <label for="numero">Número</label>
            <input type="text" name="numero" id="numero" class="form-control" value="{{ isset($registro->numero) ? $registro->numero : '' }}" required>
        </div>
        <div class="col-sm-12 col-md-2 col-lg-2">
            <label for="complemento">Complemento</label>
            <input type="text" name="complemento" id="complemento" class="form-control" value="{{ isset($registro->complemento) ? $registro->complemento : '' }}" >
        </div>
    </div>
    <div class="form-row">
        <div class="col-sm-12 col-md-4 col-lg-4">
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" id="bairro" class="form-control" value="{{ isset($registro->bairro) ? $registro->bairro : '' }}" required>
        </div>
        <div class="col-sm-12 col-md-5 col-lg-5">
            <label for="cidade">Cidade</label>
            <input type="text" name="cidade" id="cidade" class="form-control" value="{{ isset($registro->cidade) ? $registro->cidade : '' }}" required>
        </div>
        <div class="col-sm-12 col-md-1 col-lg-1">
            <label for="uf">UF</label>
            <input type="text" name="uf" id="uf" class="form-control" value="{{ isset($registro->uf) ? $registro->uf : '' }}" required>
        </div>
        <div class="col-sm-12 col-md-2 col-lg-2">
            <label for="ibge">IBGE</label>
            <input type="text" name="ibge" id="ibge" class="form-control" value="{{ isset($registro->ibge) ? $registro->ibge : '' }}" required>
        </div>
    </div>
</fieldset>
<fieldset>
    <legend>Dados Complementares</legend>
    <div class="form-row">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ isset($registro->email) ? $registro->email : '' }}" required>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3">
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" id="telefone" class="form-control" value="{{ isset($registro->telefone) ? $registro->telefone : '' }}" required>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3">
            <label for="celular">Celular</label>
            <input type="text" name="celular" id="celular" class="form-control" value="{{ isset($registro->celular) ? $registro->celular : '' }}" required>
        </div>
    </div>
</fieldset>