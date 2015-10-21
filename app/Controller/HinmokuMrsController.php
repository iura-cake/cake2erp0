<?php
App::uses('AppController', 'Controller');
/**
 * HinmokuMrs Controller
 *
 */
class HinmokuMrsController extends AppController {

	public $components = array('Paginator', 'Flash', 'Session', 'RequestHandler');

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;


/**
 * Popup
 */
	public function popup() {
		//���N�G�X�g��POST�ő���ꂽ�f�[�^���󔒂Ŗ������
		if($this->request->is('post') && $this->request->data['HinmokuMr']['search'] != ''){
			//Form�̒l���擾
			$search = $this->request->data['HinmokuMr']['search'];
			//�����������󔒁i�S�p���͔��p�j�ŋ�؂��Ĕz��$keywords�ɑ��
			$keywords = preg_split('/  |\\s/',$search);
			//�z��$keywords�̐������J��Ԃ��Č���������$conditions�ɑ��
			foreach($keywords as $keyword){
				$conditions[] = "HinmokuMr.name like '%$keyword%'";
				$conditions[] = "HinmokuMr.code like '%$keyword%'";
			}
			//POST���ꂽ�f�[�^��B������
			/*   $data=$this->User->find('all',array(
			'conditions' => $conditions
			));
			$this->set('users',$data);
			*/
		}else{
			//POST�ȊO�̏ꍇ
			//�ꗗ�\��
			/*  $data=$this->Post->find('all');
			$this->set('users',$data);
			*/
			$conditions='';
		}
 
		$this->layout = 'popup';
		$this->Paginator->settings = array('limit' => 10);
		$this->HinmokuMr->recursive = 0;
		$this->set('hinmoku_mrs', $this->Paginator->paginate($conditions));
	}
/**
 * ajaxget
 */
	public function ajaxget() {
		$this->autoRender = false;
		$this->HinmokuMr->recursive = -1;
		Configure::write('debug',0);
		$hinmoku_code = (isset($_POST['hinmoku_code']))? h($_POST['hinmoku_code']) : "";
//		echo $hinmoku_code.'BbBbBb';
//		if($this->RequestHandler->isAjax()){
//			echo $hinmoku_code.'BbBbBb';
			// get student info.
			$options = array('conditions' => array('HinmokuMr.code' => $hinmoku_code));
			$hinmoku_mr = $this->HinmokuMr->find('first', $options);
//			echo $hinmoku_mr['HinmokuMr']['name'];
			echo json_encode($hinmoku_mr);
/*			// view�ɂ�json�`���̃t�@�C����\��������悤�ɁB
			$this->layout = 'ajax';
			$this->RequestHandler->setContent('json');
			$this->RequestHandler->respondAs('application/json; charset=UTF-8');
	
			// $students�̔z���view�ɓn���B
			$this->set('hinmoku_mr', $hinmoku_mr);
*/		}
//	}
/**
 * ajaxgetid
 */
	public function ajaxgetid() {
		$this->autoRender = false;
		$this->HinmokuMr->recursive = -1;
		Configure::write('debug',0);
		$hinmoku_id = (isset($_POST['hinmoku_id']))? h($_POST['hinmoku_id']) : 0;
		$options = array('conditions' => array('HinmokuMr.id' => $hinmoku_id));
		$hinmoku_mr = $this->HinmokuMr->find('first', $options);
		echo json_encode($hinmoku_mr);
	}

}
