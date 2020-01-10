<fieldset>
    <legend>Dados Iniciais</legend>
    <div class="form-row">
        <div class="col-sm-12 col-md-5 col-lg-5">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" value="<?php echo e(isset($registro->nome) ? $registro->nome : ''); ?>" required autofocus>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3">
            <label for="codInterno">Código Interno</label>
            <input type="text" name="codInterno" id="codInterno" class="form-control" value="<?php echo e(isset($registro->codInterno) ? $registro->codInterno : ''); ?>" required>
        </div>
        <div class="col-sm-12 col-md-2 col-lg-2">
            <label for="valor">Valor</label>
            <input type="number" name="valor" id="valor" class="form-control valor" value="<?php echo e(isset($registro->valor) ? $registro->valor : ''); ?>" step="0.01" required>
        </div>
        <div class="col-sm-12 col-md-2 col-lg-2">
            <label for="qnt">Quantidade</label>
            <input type="number" name="qnt" id="qnt" class="form-control qnt" value="<?php echo e(isset($registro->qnt) ? $registro->qnt : ''); ?>" required>
        </div>
    </div>
</fieldset>
<fieldset>
    <legend>Dados Complementares</legend>
    <div class="form-row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <label for="imagem">Imagem</label>
            <input type="file" class="form-control" name="imagem" id="imagem" value="<?php echo e(isset($registro->imagem) ? $registro->imagem : ''); ?>">
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12">
            <label for="descricao">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" cols="30" rows="10" required>
                <?php echo e(isset($registro->descricao) ? $registro->descricao : ''); ?>

            </textarea>
        </div>
    </div>
</fieldset><?php /**PATH /opt/lampp/htdocs/exercicio-toniato/resources/views/admin/product/_form.blade.php ENDPATH**/ ?>