<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/materiaPrima.css">
    <title>Matéria Prima</title>
</head>
<header>
  <nav>
    <ul>
     <a href="estoqueProduto.php"><li>ESTOQUE DE PRODUTO</a>
      <a href="minhasReceitas.php"><li>MINHAS RECEITAS</a>
      <a href="cadastroMateriaPrima.php"><li>CADASTRO MATERIA PRIMA</a>
      <a href="novasReceitas.php"><li>NOVAS RECEITAS</a>
       <li><img id="logo" src="logoExpense.png" alt="logo"></li>
    </ul>
  </nav>
</header>
<body>

    <div class="container">
    <table class="table">
  <caption>Lista de produtos</caption>
  <thead>
  <tr class="table-dark">
      <th scope="col">#</th>
      <th scope="col">Produto</th>
      <th scope="col">Quantidade(gr)</th>
      <th scope="col">Valor(R$)</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-light">
      <th scope="row">1</th>
      <td>Chocolate</td>
        <td>700</td>
        <td>20,00</td>
    </tr>
    <tr class="table-light">
      <th scope="row">2</th>
        <td>Farinha</td>
        <td>1000</td>
        <td>62,32</td>
    </tr>
    <tr class="table-light">
      <th scope="row">3</th>
        <td>Ovo</td>
        <td>30</td>
        <td>45,75</td>
    </tr>
    <tr class="table-light">
    <th scope="row">4</th>
        <td>Açúcar</td>
        <td>800</td>
        <td>30,00</td>
    </tr>
    <tr class="table-light">
    <th scope="row">5</th>
        <td>Óleo</td>
        <td>1200</td>
        <td>95,23</td>
    </tr>
    <tr class="table-light">
    <th scope="row">6</th>
        <td>Leite</td>
        <td>1000</td>
        <td>80,00</td>
    </tr>
  </tbody>
</table>
    </div>
    
</body>
</html>