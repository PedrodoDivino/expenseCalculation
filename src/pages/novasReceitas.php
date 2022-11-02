<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/novasReceitas.css">
    <title>Novas Receitas</title>
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
</head>
<body>
    <div class="container">
<div class="row">
  <div class="col">
    Nome da Receita
    <input type="text" class="form-control"  aria-label="First name">
  </div>
  <div class="col">
     Margem de lucro %
    <input type="number" class="form-control"  aria-label="Last name">
  </div>
  <div class="row">
  <div class="col">
    <div style="heigth"></div>
 Ingreientes 
  <div class="space"></div>
   <div class="space form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Farinha
      </label>
      <div class="space"></div>
    </div>
       <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Ovo
      </label>
      <div class="space"></div>
    </div>
       <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Açucar
      </label>
      <div class="space"></div>
    </div>
       <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
       Óleo
      </label>
      <div class="space"></div>
    </div>
       <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
       Leite
      </label>
      <div class="space"></div>
    </div>
       <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Fermento
      </label>
      <div class="space"></div>
    </div>
       <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
       chocolate
      </label>
      <div class="space"></div>
    </div>
  </div>
  <div class="col-sm-3">
    Quantidade (gr)
     <div class="space"></div>
    <input type="number"  class=" form-control" placeholder="farinha">
      <div class="space"></div>
    <input type="number"  class=" form-control" placeholder="ovo">
      <div class="space"></div>
    <input type="number"  class=" form-control" placeholder="Açucar">
      <div class="space"></div>
    <input type="number"  class=" form-control" placeholder="óleo">
      <div class="space"></div>
    <input type="number"  class=" form-control" placeholder="Leite">
      <div class="space"></div>
    <input type="number"  class=" form-control" placeholder="Fermento">
      <div class="space"></div>
    <input type="number"  class=" form-control" placeholder="Chocolate">
  </div>
</div>
</div> 
  </div>
  <div class="button">
<button type="submit" class="btn btn-primary">Salvar</button>

  </div>
   
</body>
</html>