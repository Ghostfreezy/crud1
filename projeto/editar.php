<h1>Editar Usuario</h1>

<?php
    $sql = "SELECT * FROM usuario WHERE id=".$_REQUEST["id"];

    $res = $conexao -> query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">

    <div class="mb-3">
        <label for="">Nome</label>
        <input type="text" name="nome" class="form-control" value="<?php print $row->nome; ?>">
    </div>
    <div class="mb-3">
        <label for="">Email</label>
        <input type="email" name="email" class="form-control" value="<?php print $row->email; ?>">
    </div>
    <div class="mb-3">
        <label for="">Senha</label>
        <input type="password" name="senha" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Data de Nascimento</label>
        <input type="date" name="data" class="form-control" value="<?php print $row->data; ?>">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>




</form>