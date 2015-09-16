<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	public $components = array(
		'DebugKit.Toolbar',
		'Session',
		'Auth' => array(
			'loginAction' => array('controller' => 'users', 'action' => 'login', 'admin'=>true),	// ログインページのパス
			'loginRedirect' => array('controller' => 'users', 'action' => 'index'),		// ログイン後のページを指定
			'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),	// ログアウト後の移動先
			'authError' => 'あなたのユーザーIDとパスワードを入力して下さい。',			//未ログイン時のメッセージ
		)
	); //認証でここまで追加

	function beforeFilter() {
		$this->set('loginUser', $this->Auth->user());
		return parent::beforeFilter();
	}

}
