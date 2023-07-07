<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data = $_POST["data"];

            $sql = "INSERT INTO usuario(nome, email, senha, data) VALUES('{$nome}', '{$email}', '{$senha}', '{$data}')";

            $res = $conexao->query($sql);

            if ($res=true) {
                print "<script>alert('Usuário cadastrado com sucesso');</script>";
                print "<script>location.href='?page=listar'; </script>";
            }
            else{
                print "<script>alert('Houve um erro no cadastro');</script>";
                print "<script>location.href='?page=listar'; </script>";
            }

            break;
        
        case 'editar';
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data = $_POST["data"];

            $sql = "UPDATE usuario SET
                        nome='{$nome}',
                        email='{$email}',
                        senha='{$senha}',
                        data='{$data}'
                        WHERE id=".$_REQUEST["id"];

            $res = $conexao->query($sql);

            if ($res=true) {
                print "<script>alert('Usuário editado com sucesso');</script>";
                print "<script>location.href='?page=listar'; </script>";
            }
            else{
                print "<script>alert('Houve um erro na edição do usuario');</script>";
                print "<script>location.href='?page=listar'; </script>";
            }

            break;

        case 'excluir';
            $sql = "DELETE FROM usuario WHERE id=".$_REQUEST["id"];
            
            $res = $conexao -> query($sql);

            if ($res=true) {
                print "<script>alert('Usuário excluído com sucesso');</script>";
                print "<script>location.href='?page=listar'; </script>";
            }
            else{
                print "<script>alert('Houve um erro na exclusão do usuario');</script>";
                print "<script>location.href='?page=listar'; </script>";
            }

            break;

        default:
            # code...
            break;
    }

?>