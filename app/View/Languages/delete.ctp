<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('Debugger', 'Utility');
echo $this->Element('setting', array('mode' => 'language'));
?>
<h1>Programming Language Settings</h1>
<h2>Are you sure to delete <?php echo h($language['Language']['detail']); ?>?</h2>
<?
	echo $this->Form->create('Language');
	echo $this->Form->input('id', array('type' => 'hidden', 'value' => $language['Language']['id']));
?>
<div class="submit submit-button">
<?php
	echo $this->Form->submit('Delete', array('div' => false));
	echo $this->Html->link('Cancel', 'index', array('class' => 'btn btn-large'));
?>
</div>
