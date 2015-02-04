<table>
    <tr>
        <th>id</th>
        <th>nome</th>
        <th>email</th>
    </tr>
    <tbody>
    <?php foreach($listaCliente as $cliente): ?>
        <tr>
            <td><?= $cliente['id'] ?></td>
            <td><?= $cliente['nome'] ?></td>
            <td><?= $cliente['email'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>