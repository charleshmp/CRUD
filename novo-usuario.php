<h1>Novo Usuario</h1>
<span id="Erro"></span>
<form id="form" action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-4">
        <label>Nome</label>
        <input type="text" id="nome" name="nome" class="form-control" required >
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="text" id="email" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input id="senha" type="password" name="senha" minlength="6" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" id="data" name="data_nasc" class="form-control" required>   
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary" value="enviar">Enviar</button>
    </div>
</form>
<script src="validacao.js"></script>