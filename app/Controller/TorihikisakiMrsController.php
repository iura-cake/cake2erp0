<?php
App::uses('AppController', 'Controller');
/**
 * TorihikisakiMrs Controller
 *
 */
class TorihikisakiMrsController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;


	public $components = array('RequestHandler');
	
/**
 * ajaxget
 */
	public function ajaxget() {
		$this->autoRender = false;
		$this->TorihikisakiMr->recursive = -1;
		Configure::write('debug',0);
		$torihikisaki_code = (isset($_POST['torihikisaki_code']))? h($_POST['torihikisaki_code']) : "";
//		echo $torihikisaki_code.'BbBbBb';
//		if($this->RequestHandler->isAjax()){
//			echo $torihikisaki_code.'BbBbBb';
			// get student info.
			$options = array('conditions' => array('TorihikisakiMr.code' => $torihikisaki_code));
			$torihikisaki_mr = $this->TorihikisakiMr->find('first', $options);
			echo $torihikisaki_mr['TorihikisakiMr']['name'];
/*			// view�ɂ�json�`���̃t�@�C����\��������悤�ɁB
			$this->layout = 'ajax';
			$this->RequestHandler->setContent('json');
			$this->RequestHandler->respondAs('application/json; charset=UTF-8');
	
			// $students�̔z���view�ɓn���B
			$this->set('torihikisaki_mr', $torihikisaki_mr);
*/		}
//	}

}
