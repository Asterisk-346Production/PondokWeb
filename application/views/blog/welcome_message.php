<div id="body">
	<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

	<p>If you would like to edit this page you'll find it located at:</p>
	<code>application/views/welcome_message.php</code>

	<p>The corresponding controller for this page is found at:</p>
	<code>application/controllers/Welcome.php</code>
	<?php var_dump($data); ?>
	<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
</div>
<div>
	<table style="border :3; width:100%;">
		<tr>
			<td>Santri</td>
			<td>Arabic</td>
			<td>English</td>
		</tr>
		<?php foreach ($data as $item): ?>			
			<tr>
				<td><?php echo $item['nama']; ?></td>
				<td></td>
				<td></td>
			</tr>	
		<?php endforeach; ?>
	</table>
</div>