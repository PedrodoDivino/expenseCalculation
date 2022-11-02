
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
<body>
    
            <header>
        <img class="logo" src="logoExpense.png" alt="logo">

        <nav>
            <ul class="nav_links">
                  <li><a href="materiaPrima.php">MATÉRIA PRIMA</a></li>
                <li><a href="entradas.php">ENTRADA</a></li>
                <li><a href="minhasReceitas.php">MINHAS RECEITAS</a></li>
                <li><a href="cadastroProdutos.php">CADASTRO DE PRODUTOS</a></li>
                <li><a href="novasReceitas.php">NOVAS RECEITAS</a></li>
                <li><a href="meusResultados.php">MEUS RESULTADOS</a></li>
            </ul>
        </nav>
    </header>
<div class="container">
    <div class="row">
        <div class="col">
            <h5>Nome do produto</h5>
          <input type="text" class="form-control"  placeholder="Ex: Cenoura">
          <br>
          <h5>Descrição</h5>
          <input type="text" class="form-control"  placeholder="Ex: Rico em vitamina A">
        </div>   
       <div class="button">
<button type="submit" class="btn btn-primary">Salvar</button>
</div>
</div>
</body>
</html>