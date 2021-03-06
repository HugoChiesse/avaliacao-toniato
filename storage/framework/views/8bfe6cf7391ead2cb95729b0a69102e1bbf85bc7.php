<fieldset>
    <legend>Dados da Locação</legend>
    <div class="form-row">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <label for="clientName">Cliente</label>
            <input type="text" name="clientName" id="clientName" class="form-control clientAutocomplete" value="<?php echo e(isset($registro->client_id) ? $client : ''); ?>" required autofocus>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <label for="productName">Produto</label>
            <input type="text" name="productName" id="productName" class="form-control productAutocomplete" value="<?php echo e(isset($registro->product_id) ? $product : ''); ?>" required>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
            <label for="refRent">Registro de Locação</label>
            <input type="text" name="refRent" id="refRent" class="form-control" value="<?php echo e(isset($registro->refRent) ? $registro->refRent : $refRent); ?>" readonly>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
            <label for="qnt">Quantidade</label>
            <input type="number" name="qnt" id="qnt" class="form-control qnt" value="<?php echo e(isset($registro->qnt) ? $registro->qnt : ''); ?>" required>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
            <label for="formaPagamento">Forma de Pagamento</label>
            <select class="custom-select" id="formaPagamento" name="formaPagamento" required>
                <option selected disabled value="">Escolha uma opção...</option>
                <option value="Dinheiro" <?php echo e(isset($registro->formaPagamento) && $registro->formaPagamento == 'Dinheiro' ? 'selected' : ''); ?>>Dinheiro</option>
                <option value="Cartão de Crédito" <?php echo e(isset($registro->formaPagamento) && $registro->formaPagamento == 'Cartão de Crédito' ? 'selected' : ''); ?>>Cartão de Crédito</option>
                <option value="Cartão de Débito" <?php echo e(isset($registro->formaPagamento) && $registro->formaPagamento == 'Cartão de Débito' ? 'selected' : ''); ?>>Cartão de Débito</option>
                <option value="Boleto Bancário" <?php echo e(isset($registro->formaPagamento) && $registro->formaPagamento == 'Boleto Bancário' ? 'selected' : ''); ?>>Boleto Bancário</option>
                <option value="Depósito em Conta" <?php echo e(isset($registro->formaPagamento) && $registro->formaPagamento == 'Depósito em Conta' ? 'selected' : ''); ?>>Depósito em Conta</option>
            </select>
        </div>
    </div>
</fieldset><?php /**PATH /opt/lampp/htdocs/exercicio-toniato/resources/views/admin/rent/_form.blade.php ENDPATH**/ ?>