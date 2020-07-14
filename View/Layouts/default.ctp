<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>

<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
	echo $this->Html->meta('icon');

	// echo $this->Html->css('cake.generic');
	echo $this->Html->css('bootstrap.css');
	echo $this->Html->css('bootstrap.min.css');
	echo $this->Html->script('bootstrap.js');
	echo $this->Html->script('jquery-3.5.1.js');

	echo $this->Html->css('https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css');
	echo $this->Html->script('https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js');
	echo $this->Html->script('https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js');

	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
	?>
</head>

<body>
	<div id="container">
		<div id="header">
			<h1>
				<?php
				// echo $this->Html->link($cakeDescription, 'https://cakephp.org'); 
				?>
			</h1>
		</div>

		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<a class="navbar-brand" href="#">User Crud Application</a>
			<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button> -->
		</nav>
		<div id="content">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>

		<div id="footer">
			<?php ?>
		</div>
	</div>
	<?php #echo $this->element('sql_dump');
	?>
</body>

</html>

<!-- <script>
	$(document).ready(function(){
		$('#user_data').DataTable();
	});
</script> -->