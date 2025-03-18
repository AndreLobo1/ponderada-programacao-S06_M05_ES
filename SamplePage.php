<?php
  /* Conectar ao banco de dados */
  define('DB_SERVER', 'tutorial-db-instance.c70ouygyc7ft.us-east-1.rds.amazonaws.com');
  define('DB_USERNAME', 'tutorial_user');
  define('DB_PASSWORD', 'cAcc25&&838e');
  define('DB_DATABASE', 'sample');

  $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

  if (mysqli_connect_errno()) {
      die("Erro ao conectar ao MySQL: " . mysqli_connect_error());
  }

  /* Deletar registro */
  if (isset($_GET['delete_id'])) {
      $deleteId = $_GET['delete_id'];
      $deleteQuery = "DELETE FROM alunos WHERE id = $deleteId";
      mysqli_query($connection, $deleteQuery);
  }

  /* Buscar e exibir registros da tabela */
  $query = "SELECT * FROM alunos";
  $result = mysqli_query($connection, $query);
?>

<html>
<head>
    <title>Cadastro de Alunos</title>
</head>
<body>
    <h1>Cadastro de Alunos</h1>

    <h2>Lista de Alunos</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Aluno</th>
            <th>Profissional</th>
            <th>Tecnologia Assistiva</th>
            <th>Data de Nascimento</th>
            <th>Matrícula</th>
            <th>Ações</th>
        </tr>

        <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['aluno']}</td>
                    <td>{$row['profissional']}</td>
                    <td>" . ($row['tecnologia_assistiva'] ? 'Sim' : 'Não') . "</td>
                    <td>{$row['data_nascimento']}</td>
                    <td>{$row['matricula']}</td>
                    <td><a href='?delete_id={$row['id']}'>Deletar</a></td>
                </tr>";
            }
        ?>
    </table>
</body>
</html>

<?php
  /* Fechar conexão */
  mysqli_close($connection);
?>
