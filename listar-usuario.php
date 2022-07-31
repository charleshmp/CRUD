<h1>Lista de Usuarios</h1>
<?php
    $sql = "SELECT * FROM crud";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0) {
        print "<table class='table bable-hover table-bordered tablle-striped'>";
            print "<tr>";
            print"<th>ID</th>";
            print"<th>Nome</th>";
            print "<th>E-mail</th>";
            print "<th>Data de Nascimento</th>";
            print "<th>Ação</th>";
            print "</tr>";
        while($row = $res->fetch_object()) {
            $data = implode("/",array_reverse(explode("-",$row->data_nasc)));
            
            print "<tr>";
            print"<td>".$row->id."</td>";
            print"<td>".$row->nome."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$data."</td>"; 
            print "<td>
                    <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>

                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\"class='btn btn-danger'>Excluir</button>            
                    </td>"; 
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'>Não Encontrou nenhum resultado!</p>";
    }


?>
