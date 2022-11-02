
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/cadastroProdutos.css">
    <title>Cadastro Produtos</title>
    <link rel="stylesheet" href="style.css">

</head>
<header>
  <nav>
    <ul>
     <a href="materiaPrima.php"><li>MATÉRIA PRIMA</a>
      <a href="entradas.php"><li>ENTRADA</a>
      <a href="minhasReceitas.php"><li>MINHAS RECEITAS</a>
      <a href="cadastroProdutos.php"><li>CADASTRO DE PRODUTOS</a>
      <a href="novasReceitas.php"><li>NOVAS RECEITAS</a>
       <a href="meusResultados.php"><li>MEUS RESULTADOS</a>
       <li><img id="logo" src="logoExpense.png" alt="logo"></li>
    </ul>
  </nav>
</header>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <h5>Nome do produto</h5>
          <input type="text" class="form-control"  placeholder="Ex: Cenoura" required>
          <br>
          <h5>Descrição</h5>
          <input type="text" class="form-control"  placeholder="Ex: Rico em vitamina A" required>
        </div>   
       <div class="button">
<button type="submit" class="btn btn-primary">Salvar</button>
</div>
</div>
</body>
</html>