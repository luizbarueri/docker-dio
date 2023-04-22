<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio da Divisao</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_GET['d1'] ?? 0;
        $divisor = $_GET['d2'] ?? 1; //N]ao existe divisão por ZERO. 0
    ?>
    <main>
        <h1>Anatomia da Divisão</h1>
        <form action="" method="get">
            <labeL for="d1">Dividendo</labeL>
            <input type="numver" name="d1" id="d1" min="0" value="<?=$dividendo ?>">
            <label for="d2">Divisor</label>
            <input type="number" name="d2" id="d2" min="1" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h2>Estrutura da Divisão</h2>
        <?php 
            //Cálculos
            $quociente = intdiv($dividendo, $divisor);
            $resto = $dividendo % $divisor;

            echo "<ul>";
            echo "<li>Dividendo: $dividendo</li>";
            echo "<li>Divisor: $divisor</li>";
            echo "<li>Quociente: $quociente</li>";
            echo "<li>Resto: $resto</li>";
            echo "</ul>";
        ?>
        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>

        </table>
    </section>
    <footer>
        <p>
        Entrega do exercicio das aulas de docker bootcamp TQI da DIO
Como fonte de pesquisa escolhi colocar o que aprendi nas aulas do Curso em Video do Gustavo Guanabara.
        </p>
    </footer>
</body>
</html>