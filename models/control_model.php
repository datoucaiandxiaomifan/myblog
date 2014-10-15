<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Control_model extends CI_Model {
		//注册
		public function save($user){//添加、插入
			$this -> db -> insert('t_user', $user);
		}
		
		//登录
		public function get_by_name_and_password($user){		
			$query = $this -> db ->get_where('t_user',$user);			
			return $query ->row(); 
		}
		
		//推荐文章
		public function get_tw(){		
			$query = $this -> db -> get_where('t_artical', array('art_type' => $art_type="萌宠世界"));
			return $query -> result(); 
		}
		
		//获得分类
		// public function get_fenlei(){		
			// $query = $this -> db -> get_where('t_artical',$art_type);
			// return $query -> result(); 
		// }
		
		//blog文章
		public function get_art(){		
			$query = $this -> db -> get_where('t_artical');
			return $query -> result(); 
		}
		//sort分类文章
		public function get_type($art_type){		
			$query = $this -> db -> get_where('t_artical',array('art_type' => $art_type));
			return $query -> result(); 
		}
	    //aside分类页面跳转
	    public function get_sh(){		
			$query = $this -> db -> get_where('t_artical',array('art_type' => $art_type="生活琐碎"));
			return $query -> result(); 
		}
		public function get_js(){		
			$query = $this -> db -> get_where('t_artical',array('art_type' => $art_type="技术讨论"));
			return $query -> result(); 
		}
		public function get_mc(){		
			$query = $this -> db -> get_where('t_artical',array('art_type' => $art_type="萌宠世界"));
			return $query -> result(); 
		}
		public function get_ms(){		
			$query = $this -> db -> get_where('t_artical',array('art_type' => $art_type="美食制作"));
			return $query -> result(); 
		}
		
		//详情评论
		public function get_detail_one($art_id){
			$query = $this -> db -> get_where('t_artical', array('art_id' => $art_id));
			return $query -> row();
		}
		public function get_com_one($art_id){
			$query1 = $this -> db -> get_where('t_comment', array('art_id' => $art_id));
			return $query1 -> result();
		}
		public function save_comment($data){
			$this -> db -> insert('t_comment', $data);
		}
		
}
















?>