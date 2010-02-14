<h2>Usuários</h2>
<p>
	<a href="<?php echo new Link('usuario:adicionar') ?>" title="Cadastrar novo Usuário">Adicionar Usuário</a>
</p>
<table>
	<tr>
		<th>Nome</th>
		<th>e-mail</th>
		<th>tipo</th>
		<th>acoes</th>
	</tr>
	<?php foreach ($usuarios as $u): ?>
	<tr>
		<td><?php $u->nome ?></td>
		<td><?php $u->email ?></td>
		<td><?php $u->tipo ?></td>
		<td>
			<a href="<?php echo new Link('usuario:editar', "id:{$u->id}") ?>" title="Editar Usuário">Editar</a>
			<a href="<?php echo new Link('excluir:editar', "id:{$u->id}") ?>" title="Excluir Usuário">Excluir</a>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
