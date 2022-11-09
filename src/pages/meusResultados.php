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
<header>
  <nav>
    <ul>
     <a href="materiaPrima.php"><li>MATÉRIA PRIMA</a>
      <a href="cadastroMateriaPrima.php"><li>CADASTRO MATERIA PRIMA</a>
      <a href="novasReceitas.php"><li>NOVAS RECEITAS</a>
       <a href="meusResultados.php"><li>MEUS RESULTADOS</a>
       <li><img id="logo" src="logoExpense.png" alt="logo"></li>
    </ul>
  </nav>
</header>
<body>
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