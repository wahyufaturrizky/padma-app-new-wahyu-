<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
			$this->load->model('my_query');

			/*
				$select = ''
				
				$table = "nama table a

		"		$join['data'][] = array(
					'table' => 'namatable b ',
					'join' =>  'b.id = a.id' ,
					'type' =>  'inner' (inner / left / right)
				);

				$this->my_query->get_data_complex($select , $table , null , null , null , $join)->result();
				// output : select * from namatable a inner join nama table b on b.id=a.id 
			*/
			
		}

	public function index(){
		if (isset($_GET['isu_id'])) {
			// $isu_id = $_GET['isu_id'];
		} else {
			$_GET['isu_id'] = 1;
		}
		$isu_id = $_GET['isu_id'] ;
		$join = [
			'table' => 'buku b', 
			'where' => 'a.buku_id=b.id', 
			'type' => 'inner', 
		];


		$data = [
			'headline' => $this->my_query->query('SELECT * FROM `video` order by id desc limit 1')->row(),
			'isu'      => $this->my_query->get_data('*' , 'isu')->result(),
			'isu_id'   => $isu_id ,
			'video'    => $this->my_query->get_data('*' , 'video' , ['isu_id' => $isu_id ])->result(),
			'book'     => $this->my_query->get_data('*' , 'book_issue a' , ['a.isu_id' => $isu_id ] , $join)->result()
		];
		
		// echo $this->db->last_query();
		$this->load->view('padma/dashboard-index' , $data);

	}

	public function video(){

		if (isset($_GET['isu_id'])) {
			// $isu_id = $_GET['isu_id'];
		} else {
			$_GET['isu_id'] = 1;
		}

		$isu_id = $_GET['isu_id'] ;

		$join = [
			'table' => 'buku b', 
			'where' => 'a.buku_id=b.id', 
			'type' => 'inner', 
		];

		$per_page = 8;
		$page     = isset($_GET["page"]) ? (int)$_GET["page"] : 1;
		$start    = ($page>1) ? ($page * $per_page) - $per_page : 0;
		$total_isi= $this->my_query->get_data('*' , 'video' , ['isu_id' => $isu_id ] )->num_rows();
		$pages    = ceil($total_isi/$per_page);



		$data = [
			'headline' => $this->my_query->query('SELECT * FROM `video` order by id desc limit 1')->row(),
			'isu'      => $this->my_query->get_data('*' , 'isu')->result(),
			'isu_id'   => $isu_id ,
			'video'    => $this->my_query->query("select *  from video where isu_id = $isu_id order by created_at DESC LIMIT $start, $per_page")->result(),
			'book'     => $this->my_query->get_data('*' , 'book_issue a' , ['a.isu_id' => $isu_id ] , $join)->result(),
			'pages' 		   => $pages
		];

		
		$this->load->view('padma/dashboard-video' , $data);

	}
	public function audio(){

		if (isset($_GET['isu_id'])) {
			// $isu_id = $_GET['isu_id'];
		} else {
			$_GET['isu_id'] = 1;
		}

		$isu_id = $_GET['isu_id'] ;

		$join = [
			'table' => 'buku b', 
			'where' => 'a.buku_id=b.id', 
			'type' => 'inner', 
		];

		$per_page = 8;
		$page     = isset($_GET["page"]) ? (int)$_GET["page"] : 1;
		$start    = ($page>1) ? ($page * $per_page) - $per_page : 0;
		$total_isi= $this->my_query->get_data('*' , 'video' , ['isu_id' => $isu_id ] )->num_rows();
		$pages    = ceil($total_isi/$per_page);



		$data = [
			'headline' => $this->my_query->query('SELECT * FROM `video` order by id desc limit 1')->row(),
			'isu'      => $this->my_query->get_data('*' , 'isu')->result(),
			'isu_id'   => $isu_id ,
			'video'    => $this->my_query->query("select *  from video where isu_id = $isu_id order by created_at DESC LIMIT $start, $per_page")->result(),
			'book'     => $this->my_query->get_data('*' , 'book_issue a' , ['a.isu_id' => $isu_id ] , $join)->result(),
			'pages' 		   => $pages
		];

		
		$this->load->view('padma/dashboard-audio');

	}

	public function katalog(){
		if (isset($_GET['penulis_id'])) {
			// $isu_id = $_GET['isu_id'];
		} else {
			$_GET['penulis_id'] = 1;
		}

		$penulis_id = $_GET['penulis_id'] ;

		$join = [
			'table' => 'buku b', 
			'where' => 'a.buku_id=b.id', 
			'type' => 'inner', 
		];

		$per_page = 8;
		$page     = isset($_GET["page"]) ? (int)$_GET["page"] : 1;
		$start    = ($page>1) ? ($page * $per_page) - $per_page : 0;
		$total_isi= $this->my_query->get_data('*' , 'buku' , ['penulis_id' => $penulis_id ] )->num_rows();
		$pages    = ceil($total_isi/$per_page);



		$data = [
			'headline' => $this->my_query->query('SELECT * FROM `audios` order by id desc limit 1')->row(),
			'penulis'      => $this->my_query->get_data('*' , 'penulis')->result(),
			'penulis_id'   => $penulis_id ,
			'book'    => $this->my_query->query("select *  from buku where penulis_id = $penulis_id order by created_at DESC LIMIT $start, $per_page")->result(),
			// 'book'     => $this->my_query->get_data('*' , 'book_issue a' , ['a.isu_id' => $isu_id ] , $join)->result(),
			'pages' 		   => $pages
		];


		
		$this->load->view('padma/dashboard-katalog' , $data );

	}

	public function detail_katalog($slug){

		$data =  [
			'detail' => $this->my_query->get_data('*' , 'buku' , ['slug' => $slug] )->row()

		];

		$join_b = [
			'table' => 'video b', 
			'where' => 'a.isu_id=b.isu_id', 
			'type'  => 'inner', 
		];


		// echo $this->db->last_query();
		$data['related_videos'] = $this->my_query->get_data('*' , 'book_issue a' ,['a.buku_id' => $data['detail']->id ],$join_b)->result();
		$data['related_audios'] = $this->my_query->get_data('*' , 'audios' , ['buku_id' => $data['detail']->id ])->result();
		

		$this->load->view('padma/detail-katalog' , $data);

	}

	public function detail_video($slug){
		

		$data=  [
			'detail' => $this->my_query->get_data('*' , 'video' , ['slug' => $slug] )->row()
		];

		$join = [
			'table' => 'buku b', 
			'where' => 'a.buku_id=b.id', 
			'type'  => 'inner', 
		];

		$join_b = [
			'table' => 'audios b', 
			'where' => 'a.buku_id=b.buku_id', 
			'type'  => 'inner', 
		];

		$isu_id = 	$data['detail']->isu_id;
		$data['related_book']   = $this->my_query->get_data('*' , 'book_issue a' , ['a.isu_id' => $isu_id ] , $join)->result();
		$data['related_audios'] = $this->my_query->get_data('*' , 'book_issue a' , ['a.isu_id' => $isu_id ] , $join_b)->result();
		

		$this->load->view('padma/detail-video' , $data);

	}

	public function detail_audio($id = ""){


		$this->load->view('padma/detail-audio');

	}



}
