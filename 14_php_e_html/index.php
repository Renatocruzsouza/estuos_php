<?php
$pessoas = [
    'Renato' => 19,
    'Livia' => 19,
    'Luisa' => 17,
    'Vivi' => 48
];

?>

<table border ="1">
    <tr>
        <th>nome</th>
        <th>Idade</th>
    </tr>
    <?php foreach($pessoas as $nome => $idade):?>
    <tr>
        <td><?= $nome; ?></td>
        <td><?= $idade; ?></td>
    </tr>
    <?php endforeach; ?>
</table>