<?php $render('header'); ?>

<a href="<?=$base;?>/novo">Novo Usuário</a>


<table border="1" width="100%">
  <tr>
    <th>ID</th>
    <th>NOME</th>
    <th>EMAIL</th>
    <th>AÇÕES</th>
  </tr>

  <tbody>
    <?php foreach ($usuarios as $usuario): ?>
      <tr>
        <td><?= $usuario['id']; ?></td>
        <td><?= $usuario['nome']; ?></td>
        <td><?= $usuario['email']; ?></td>
        <td>
          <a href="<?= $base; ?>/usuario/<?= $usuario['id']; ?>/editar">[ EDITAR ]</a>
          <a href="<?= $base; ?>/usuario/<?= $usuario['id']; ?>/excluir" onclick="return confirm('Tem certeza que deseja excluir?'); ">[ EXCLUIR ]</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>

</table>

<?php $render('footer'); ?>