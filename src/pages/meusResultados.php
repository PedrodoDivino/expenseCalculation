<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Resultados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../styles/meusResultados.css">
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
               <h3>Resumo De Despesas e Lucros</h3>
     </div>
     <div class="resultados">
         <p>Não Calculamos seu Gás
      por restrições de cada
      forno ou fogão utilizados é
      necessario conferir no 
      manual do seu fogão.
             <br>Gasto em R$ = (((T/60)*Kg/
             h)/B)*PB
                 Onde:
                 T = Tempo de uso em
                  minutos dividido por 60;
                 Kg/h = Consumo por
                 queimador, em Kg/h (ver o
                  manual do fabricante do
                  fogão);
                 B = Capacidade do botijão 
                 (13 ou 45 Kg);
                 PB = Preço do Botijão.</p>
     </div>
                <div class="button">
                    <a href="minhasReceitas.php"><button type="submit" class="btn btn-primary">Minhas Receitas</button></a>
                </div>
                  </div>
</body>
</html>