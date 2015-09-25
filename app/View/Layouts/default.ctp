<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
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

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

		//日付入力protocalendar用以下５行
		echo $this->Html->css('simple'); 
		echo $this->Html->script('prototype'); 
		echo $this->Html->script('effects'); 
		echo $this->Html->script('protocalendar'); 
		echo $this->Html->script('lang_ja');  
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<!-- <h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1> -->
			<p><?php if ($loginUser) {
					echo $loginUser['username'].':'.$loginUser['name'].' さん ';
					echo $this->Html->link(__('logout'), array('controller' => 'users', 'action' => 'logout'));
				}
				echo $this->Session->flash();		//復活20150917iura//削除20150917m.s.
				echo $this->Session->flash('auth');	//復活20150917iura//削除20150917m.s.
			//	echo $this->Flash->render('auth');
			?></p>
		</div>
		<div id="content">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				);
			?>
			<p>
				<?php echo $cakeVersion; ?>
			</p>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
