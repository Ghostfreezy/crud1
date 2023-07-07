<h1>Listagem de usuários</h1>

<?php
    $sql = "SELECT * FROM usuario";

    $res = $conexao -> query($sql);

    $qtd = $res -> num_rows;

    if ($qtd > 0) {
        while($row = $res->fetch_object()){
            print $row -> nome;
            print "<button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>";
            print "<button onclick=\"if(confirm('Tem certeza que deseja excluir o usuário?')){location.href='?page=salvar&acao=excluir&id=".$row->id."'}else{false}\" class='btn btn-danger'>Excluir</button>";
        }
        
    }
    else{
        print "<p class = 'alert alert-danger'> Não existem usuários cadastrados atualmente</p>";
    }

?>
