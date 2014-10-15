<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Control extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	
	/*关于我*/
	public function index(){
		$this -> load -> view('index'); 	
	}
	
	/*博客*/
	public function blog(){
		$this -> load -> model('control_model');
			$result = $this -> control_model -> get_tw();
			$result1 = $this -> control_model -> get_art();
			//$result2 = $this -> control_model -> get_fenlei();
			// $result3 = $this -> control_model -> get_taozhuang();
			// $result4 = $this -> control_model -> get_changxiaobang1();
			// $result5 = $this -> control_model -> get_tejia();
			// $result6 = $this -> control_model -> get_zhuanye();
			// $result7 = $this -> control_model -> get_changxiaobang2();
			// $result8 = $this -> control_model -> get_zazhi();
			$data = array(
				'artical' => $result,
				'articalc' => $result1
				//'fenlei' => $result2,
				// 'taozhuang' => $result3,
				// 'changxiaobang1' => $result4,
				// 'tejia' => $result5,
				// 'zhuanye' => $result6,
				// 'changxiaobang2' => $result7,
				// 'zazhi' => $result8,
			);
		$this -> load -> view('blog',$data); 	
	}
	
	/*日志列表*/
	public function c_sort(){
		$this -> load -> model('control_model');
		$result = $this -> control_model -> get_art();
		//$result2 = $this -> control_model -> get_fenlei();
		$data = array(
				'sorts' => $result
				//'fenlei' => $result2
			);
		$this -> load -> view('sort',$data); 	
	}
	public function sh_sort(){
		$this -> load -> model('control_model');
		$result = $this -> control_model -> get_sh();
		//$result2 = $this -> control_model -> get_fenlei();
		$data = array(
				'sorts' => $result
				//'fenlei' => $result2
			);
		$this -> load -> view('sort',$data); 	
	}
	public function js_sort(){
		$this -> load -> model('control_model');
		$result = $this -> control_model -> get_js();
		//$result2 = $this -> control_model -> get_fenlei();
		$data = array(
				'sorts' => $result
				//'fenlei' => $result2
			);
		$this -> load -> view('sort',$data); 	
	}
	public function mc_sort(){
		$this -> load -> model('control_model');
		$result = $this -> control_model -> get_mc();
		//$result2 = $this -> control_model -> get_fenlei();
		$data = array(
				'sorts' => $result
				//'fenlei' => $result2
			);
		$this -> load -> view('sort',$data); 	
	}
	public function ms_sort(){
		$this -> load -> model('control_model');
		$result = $this -> control_model -> get_ms();
		//$result2 = $this -> control_model -> get_fenlei();
		$data = array(
				'sorts' => $result
				//'fenlei' => $result2
			);
		$this -> load -> view('sort',$data); 	
	}
	public function sort($art_type){
		$this -> load -> model('control_model');
		$result = $this -> control_model -> get_type($art_type);
		//$result2 = $this -> control_model -> get_fenlei();
		$data = array(
			'sorts' => $result
			//'fenlei' => $result2
		);
		// print_r($data);die();
		$this -> load -> view('sort',$data); 	
	}
	
	/*日志详情*/
	public function detail($art_id){
		
		$this -> load -> model('control_model');
		$result = $this -> control_model -> get_detail_one($art_id);
		$result1 = $this -> control_model -> get_com_one($art_id);
		//$result2 = $this -> control_model -> get_fenlei();
		
		// $all_com_num = 0;
		// foreach($result1 as $datas){
			// $all_com_num ++;
		// }
		
		$data = array(
			'artical' => $result,
			'comment' => $result1
			//'fenlei' => $result2
			// 'all_com_num' => $all_com_num
		);
		$this ->load ->view('detail',$data); 	
	}
	
	/*评论*/
	public function comment($art_id){
			$art_id = $this -> input -> post('art_id');
			$user_id = $this -> input -> post('user_id');
			$user_name = $this -> input -> post('user_name');
			$comment_con = $this -> input -> post('comment_con');
			$comment_date = $this -> input -> post('comment_date');
			
			$data = array(
				"art_id" => $art_id,
				"user_id" => $user_id,
				"user_name" => $user_name,
				"comment_con" => $comment_con,
				"comment_date" => $comment_date
			);
			
			$this -> load -> model('control_model');
			$this -> control_model -> save_comment($data);
			
			redirect('control/blog');
		
			
	}
	
	
	/*登录*/
	public function login(){
		$this -> load -> view('login'); 	
	}
	public function do_login(){
		// print_r('haha');die;		
		$name = $this->input->post('name');
		$pwd = $this->input->post('pwd');
		
		$user = array(
			"user_name" => $name,
			"user_pwd" => $pwd
		);
		
		$this -> load -> model('control_model');
		$result = $this ->control_model -> get_by_name_and_password($user);
		
		if($result){
			$this ->session ->set_userdata('t_user',$result);
			$this -> load -> model('control_model');
			$result = $this -> control_model -> get_tw();
			$result1 = $this -> control_model -> get_art();
			// $result2 = $this -> controlweb_model -> get_dujia();
			// $result3 = $this -> controlweb_model -> get_taozhuang();
			// $result4 = $this -> controlweb_model -> get_changxiaobang1();
			// $result5 = $this -> controlweb_model -> get_tejia();
			// $result6 = $this -> controlweb_model -> get_zhuanye();
			// $result7 = $this -> controlweb_model -> get_changxiaobang2();
			// $result8 = $this -> controlweb_model -> get_zazhi();
			$data = array(
				'art' => $result,
				'articalc' => $result1,
				// 'dujia' => $result2,
				// 'taozhuang' => $result3,
				// 'changxiaobang1' => $result4,
				// 'tejia' => $result5,
				// 'zhuanye' => $result6,
				// 'changxiaobang2' => $result7,
				// 'zazhi' => $result8,
			);
			redirect('control/blog',$data);
			// redirect('control/login_done');
		}else{
			redirect('control/login');
		}
	}
	
	/*注册*/
	public function register(){
		$this -> load -> view('register'); 	
	}
	public function do_register(){
		$name = $this->input->post('name');
		$pwd = $this->input->post('pwd');
		$spwd = $this->input->post('spwd');
		
		$this -> load -> model('control_model');

		$user = array(
			"user_name" => $name,
			"user_pwd" => $pwd,
			"user_spwd" => $spwd,
		);
				
		$this -> control_model -> save($user);
		
		$this -> load -> view('login');
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}	
?>