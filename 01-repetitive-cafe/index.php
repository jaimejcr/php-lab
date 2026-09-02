<?php 
$drinks = 
[
    "Café con leche" => 1.50,
    "Té" => 1.00,
    "Café solo" => 1.20,
    "Café bombón" => 4,
];
$pastries = ["Tarta de zanahoria", "Brownie de chocolate", "Tarta de nueces", "Bizcocho de almendras"];
$food = 
[
  "Arroz paella", "Cordero asado", "Lentejas de la abuela", "Tres delicias", "Albóndigas caseras"
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetitive Cafe</title>
</head>

<body>
    <h1> Welcome to the Repetitive Cafe</h1>
    <h3>Drinks!</h3>
    <ul>
        <?php foreach ($drinks as $drink => $price ): ?>
            <li>
                <?= htmlspecialchars($drink) ?> : <?= number_format ($price, 2) ?> €
            </li>
        <?php endforeach; ?>
    </ul>
    <h3>Pastries! (2€ each)</h3>
    <ul>
        <?php for ($i = 0; $i<count($pastries); $i++):?>
            <li>
                <?= htmlspecialchars($pastries[$i]) ?>
            </li>
        <?php endfor;?>
    </ul>
    <h3>Main Dishes!</h3>
    <ul>
        <?php
        $foodIndex = 0;
        do {
        ?>
        <li>
            <?= htmlspecialchars($food[$foodIndex]) ?>
        </li>
        <?php
        $foodIndex++;
        } while ($foodIndex < count($food));
        ?>
    </ul>
</body>
</html>


