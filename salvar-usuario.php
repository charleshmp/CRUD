<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $data_nasc = $_POST["data_nasc"];
            $hash = password_hash($senha, PASSWORD_DEFAULT);
            $filterEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
                                    
            
            if (!is_string($nome) or !$nome) {
                print "
                <script>
                alert('Necessario preencher o nome');
                location.href='?page=novo';
                </script>
                ";
                break;
            }
            if (!$filterEmail)
            {
                print "
            <script>
                alert('Necessario preencher o E-mail certo'); 
                location.href='?page=novo';
            </script>
            ";
            break;
            }
            
            /*if (!is_string($email) or !$email) {
                print "
                <script>
                    alert('Necessario preencher o E-mail'); 
                    location.href='?page=novo';
                </script>
                ";
                break;
            }*/
            
            if (!$senha) {

                print "
                <script>
                    alert('Necessario preencher a senha'); 
                    location.href='?page=novo';
                </script>";
                break;
            }

            if (!$data_nasc) {
                print "
                <script>
                    alert('Necessario preencher a data de nascimento'); 
                    location.href='?page=novo';
                </script>";
                break;
            } 

            $validarEmail = "SELECT * FROM crud WHERE email= '{$filterEmail}'";
            $resultado = $conn->query($validarEmail);
            if ($resultado->num_rows != 0) {               
                print "
                    <script>
                        alert('Email existente'); 
                        location.href='?page=listar';
                    </script>";
                    break;
            } else {
                $sql = "INSERT INTO crud (nome, email, senha, data_nasc) VALUES ('{$nome}', '{$filterEmail}', '{$hash}', '{$data_nasc}')"; 

                $res = $conn->query($sql);
      
                print "
                <script>
                    alert('cadastro com sucesso');
                    location.href='?page=listar';
                </script>";
                break;
            }

            case 'editar':
                $nome = $_POST["nome"];
                $email = $_POST["email"];
                $senha = ($_POST["senha"]);
                $data_nasc = $_POST["data_nasc"];
                $hash = password_hash($senha, PASSWORD_DEFAULT);
                $filterEmail = filter_var($email, FILTER_VALIDATE_EMAIL);

                $sql = "UPDATE crud SET nome='{$nome}',
                                        email='{$filterEmail}',
                                        senha='{$hash}',
                                        data_nasc='{$data_nasc}' WHERE
                                        id=".$_REQUEST["id"];

                $res = $conn->query($sql);

                if($res==true){
                    print "<script>alert('Editado com sucesso'); </script>";
                    print "<script>location.href='?page=listar';</script>";
                }else{
                    print "<script>alert('Não foi possivel editar'); </script>";
                    print "<script>location.href='?page=listar';</script>";
            }
                break;

            
                case 'excluir':

                    $sql = "DELETE FROM crud WHERE id=".$_REQUEST["id"];

                    $res = $conn->query($sql);

                    if($res==true){
                        print "<script>alert('Excluido com sucesso'); </script>";
                        print "<script>location.href='?page=listar';</script>";
                    }else{
                        print "<script>alert('Não foi possivel excluir'); </script>";
                        print "<script>location.href='?page=listar';</script>";
                }
                break;
    }

?>