<?php


class Store extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		//$this->session->sess_destroy();
		$site_data = $this->m_website->site_data('2222');
//		var_dump($site_data);
		$this->site = str_replace(' ', '', strtolower($site_data->nama));
		$this->user = $this->session->userdata('id_member');
		$this->login = $this->session->userdata('isLogin');
		$get_setting = $this->m_crud->get_data("setting", "sosmed, cs", "id_setting='1111'");
		$decode_sosmed = json_decode($get_setting['sosmed'], true);
		$decode_cs = json_decode($get_setting['cs'], true);
		$sosmed = array();
		foreach ($decode_sosmed as $row) {
			$sosmed[$row['id']] = $row['value'];
		}
		$this->data = array(
			'nav_menu' => $this->m_website->navbar_menu(),
			'site' => $site_data,
			'user' => $this->user,
			'account' => $this->m_website->member_data($this->user),
			'access' => $this->m_website->user_access_data($this->user),
			'status_login' => $this->session->userdata('isLogin'),
			'sosmed' => $sosmed,
			'cs' => $decode_cs
		);
		$this->output->set_header("Cache-Control: no-store, no-cache, max-age=0, post-check=0, pre-check=0");
	}
	public function index(){
		$data = $this->data;
		$data['title']='home';
		$data['slider'] = $this->m_crud->read_data("home_slide", "*");
		$data['bestSeller'] = $this->m_crud->join_data(
			"bestsellers bs", "bs.*,pr.*,dp.*,gp.*",
			array("produk pr","det_produk dp","gambar_produk gp"),
			array("bs.produk=pr.id_produk","bs.produk=dp.produk","pr.id_produk=gp.produk"),null,"pr.id_produk DESC");
//		var_dump($data['bestSeller']);die();
		$data['latestProduct'] = $this->m_crud->join_data(
			"produk pr","pr.*,gp.*,dp.*",
			array("gambar_produk gp","det_produk dp"),
			array("pr.id_produk=gp.produk","pr.id_produk=dp.produk"),
			null,"pr.id_produk DESC","pr.id_produk",8
		);
		$data['model'] = $this->m_crud->read_data("model", "id_model, nama, CONCAT('".base_url()."', gambar) gambar",null,null,null,12);
		$data['news'] = $this->m_crud->join_data("berita b","b.*,kb.*",array("kategori_berita kb"),array("kb.id_kategori_berita=b.kategori_berita"),null,"b.id_berita DESC",null,6);
		$data['promo'] = $this->m_crud->read_data("promo", "deskripsi,id_promo, promo, gambar, diskon", "'".date('Y-m-d H:i:s')."' BETWEEN tgl_awal AND tgl_akhir");
		$data['topitem'] = $this->m_crud->read_data("top_item", "*");
		if($_GET['page']){
			if($_GET['page']=='about'){$data['about']= $this->m_crud->get_data("setting", "tentang", "id_setting='1111'")['tentang'];}
			if($_GET['page']=='tutorial'){$data['tutorial']= $this->m_crud->get_data("setting", "cara_belanja", "id_setting='1111'")['cara_belanja'];}
			if($_GET['page']=='gallery'){$data['model'] = $this->m_crud->read_data("model", "id_model, nama, CONCAT('".base_url()."', gambar) gambar");}
			if($_GET['page']=='location'){$data['res_lokasi'] = $this->m_crud->read_data("lokasi", "*");}
			if($_GET['page']=='resolution'){$data['res_resolusi'] = $this->m_crud->get_data("setting", "pusat_resolusi", "id_setting='1111'")['pusat_resolusi'];}
			if($_GET['page']=='privacy_policy'){ $data['res_kebijakan'] = $this->m_crud->get_data("setting", "kebijakan", "id_setting='1111'")['kebijakan'];}
			if($_GET['page']=='career'){$data['res_karir'] = $this->m_crud->get_data("setting", "karir", "id_setting='1111'")['karir'];}
			$data['content'] 	= 'store/'.$_GET['page'];
		}else{
			$data['content'] = 'store/home';
		}

		$this->load->view('store/wrapper',$data);
	}
	public function promo(){
		$data = $this->data;
		$data['content'] = 'store/promo';
		$data['promo'] = $this->m_crud->read_data("promo", "id_promo, promo, gambar, diskon", "'".date('Y-m-d H:i:s')."' BETWEEN tgl_awal AND tgl_akhir");
//		var_dump($data['promo']);
		$this->load->view("store/wrapper",$data);
	}
	public function history(){
		$data = $this->data;
		$data['content'] = 'store/history';
		$data['orders'] =$this->m_crud->join_data(
			"orders o",
			"o.id_orders, o.tgl_orders, o.status, SUM(do.qty * (do.hrg_jual+do.hrg_varian-do.diskon)) total, dp.pembayaran, pb.status status_bayar, pb.kode_unik, pb.jumlah_voucher, pb.voucher, pn.id_pengiriman",
			array("det_orders do", "det_pembayaran dp", "pembayaran pb", "pengiriman pn"),
			array("do.orders=o.id_orders", "dp.orders=o.id_orders", "pb.id_pembayaran=dp.pembayaran", "pn.orders=o.id_orders"),
			"o.member='".$this->user."' AND o.status <> '0'", "o.tgl_orders DESC", "o.id_orders"
		);
		$this->load->view("store/wrapper",$data);
	}

	public function article($param=null,$action=null,$page=1){
		$data = $this->data;
		$data['title']='article';
		$data['content'] = 'store/article';
		$data['category'] = $this->m_crud->read_data("kategori_berita","*");
		$data['promo'] = $this->m_crud->read_data("promo", "id_promo, promo, gambar, diskon", "'".date('Y-m-d H:i:s')."' BETWEEN tgl_awal AND tgl_akhir");
		$data['model'] = $this->m_crud->read_data("model", "id_model, nama, CONCAT('".base_url()."', gambar) gambar",null,null,null,12);

		$where=null;
		$table_join = array("kategori_berita kb");
		$join_on = array("kb.id_kategori_berita=b.kategori_berita");
		if($_GET['detail']){
			$data['content']='store/article_detail';
			$data['detail'] = $this->m_crud->get_join_data(
				"berita b",
				"b.*,kb.*",
				$table_join,$join_on,"b.slug='".$_GET['detail']."'","b.tgl_berita DESC"
			);
		}
		if(isset($_POST['any']) && $_POST['any']!=''){
			($where!=null)?$where.=' AND ':null;
			$where.="b.judul like '%".$_POST['any']."%'";
		}
		if(isset($_POST['category']) && $_POST['category']!='' && $_POST['category']!='all'){
			($where!=null)?$where.=' AND ':null;
			$where.="kb.slug_kategori_berita='".$_POST['category']."'";
		}else{
			if($param!='all'){
				if($_POST['category']=='all'){
					$where=null;
				}else{
					($where!=null)?$where.=' AND ':null;
					$where.="kb.slug_kategori_berita='".$param."'";
				}

			}
		}



		if($action=='load_data'){

			$pagin=$this->m_website->myPagination('join',5,"berita b","b.id_berita",$table_join,$join_on,$where,4,$page);
			$read_data = $this->m_crud->join_data(
				"berita b",
				"b.*,kb.*",
				$table_join,$join_on,$where,"b.tgl_berita DESC",null,$pagin['perPage'],$pagin['start']
			);
			$result='';
			if($read_data!=null){
				foreach($read_data as $row){
					$result.='
					<div class="col-12 col-xs-12 col-md-6">
						'.$this->m_website->tempNews($row["gambar"],$row["tgl_berita"],$row["slug"],$row["judul"],$row["ringkasan"],$row["nama"]).'
					</div>
					';
				}
			}else{
				$result.=$this->m_website->noData();
			}

			echo json_encode(array("category"=>$_GET['category'],"pagination_link"=>$pagin['pagination_link'],'result'=>$result));
		}else{
			$this->load->view("store/wrapper",$data);
		}

	}

	public function product($param=null){
		$data = $this->data;
		$table_join2 = array("det_produk dp", "merk mr", "kelompok kl");
		$join_on2 = array("dp.produk=pr.id_produk AND dp.code=pr.code", "mr.id_merk=pr.merk", "kl.id_kelompok=pr.kelompok");
		$where=null;$page=null;
		if(isset($_GET['product_id'])){
			($where!=null)?$where.=' AND ':null;
			$where.="pr.id_produk='".$_GET['product_id']."'";
			$data['product'] = $this->m_crud->join_data(
				"produk pr","pr.*,gp.*,dp.*",
				array("gambar_produk gp","det_produk dp"),
				array("pr.id_produk=gp.produk","pr.id_produk=dp.produk"),$where,"pr.id_produk DESC",'pr.id_produk',6
			)[0];
			$data['releatedProduct'] = $this->m_crud->join_data(
				"produk pr","pr.*,gp.*,dp.*",
				array("gambar_produk gp","det_produk dp"),
				array("pr.id_produk=gp.produk","pr.id_produk=dp.produk"),
				"pr.id_produk!='".$_GET['product_id']."' and pr.kelompok='".$data['product']['kelompok']."'",
				"pr.id_produk DESC",'pr.id_produk'
			);
//			var_dump($data['releatedProduct']);
			$data['content'] = 'store/detail_product';
			$this->load->view("store/wrapper",$data);
		}


	}
	public function cart(){
		$data = $this->data;
		$data['content'] = 'store/cart';
		$this->load->view("store/wrapper",$data);
	}
	public function checkout(){
		$data = $this->data;
		$data['cart'] = $this->m_crud->join_data("orders o", "o.id_orders, p.nama nama_produk, p.id_produk, p.merk, dp.id_det_produk, dp.code, dp.ukuran, dp.warna, do.berat, do.qty, (do.hrg_jual+do.hrg_varian-do.diskon) harga", array("det_orders do", "det_produk dp", "produk p"), array("do.orders=o.id_orders", "dp.id_det_produk=do.det_produk", "p.id_produk=dp.produk"), "o.status='0' AND o.member='" . $this->user . "'");
		$data['alamat'] = $this->m_crud->read_data("alamat_member", "id_alamat_member, nama", "status='1' AND member='".$this->user."'");
		$data['kurir'] = $this->m_crud->read_data("kurir", "id_kurir, kurir", "status='1'");
		$data['bank_tujuan'] = $this->m_crud->join_data("bank b", "b.id_bank, b.nama, b.gambar, r.atas_nama, r.no_rek", "rekening r", "r.bank=b.id_bank", "r.utama='1'", null, "b.id_bank");
		$data['bank'] = $this->m_crud->read_data("bank", "id_bank, nama", null, "id_bank");
		$data['content'] = 'store/checkout';
		$this->load->view("store/wrapper",$data);
	}
	public function auth(){
		$data = $this->data;
		$data['content'] = 'store/'.$_GET['page'];
		$this->load->view("store/wrapper",$data);
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect();
	}

	public function list_produk($param=null, $id=null, $page=1) {
		$data = $this->data;
		$response=array();
		$data['content'] ='store/list_product';
		$data['param'] = $id;
		$where = null;
		$uri=$this->uri->segment(3);

		if(isset($_POST['search'])){
			if ($_POST['search']=='kategori') {
				$kelompok = $_POST['param'];
				($where!=null)?$where.=' AND ':null;
				$where.='pr.kelompok=\''.$kelompok.'\'';
			}
			if ($_POST['search']=='merk') {
				$merk = $_POST['param'];
				($where!=null)?$where.=' AND ':null;
				$where.='pr.merk=\''.$merk.'\'';
			}
			if($_POST['search']=='harga'){
				$hrg = explode('-', $_POST['param']);
				if (count($hrg) > 1) {
					$exHrg1 = (int)$hrg[0].'000';
					$exHrg2 = (int)$hrg[1].'000';
					($where!=null)?$where.=' AND ':null;
					$where.=' dp.hrg_jual BETWEEN CAST('.$exHrg1.' AS DECIMAL) AND CAST('.$exHrg2.' AS DECIMAL)';
				}
			}
			$table_join = array("det_produk dp", "merk mr", "kelompok kl");
			$join_on = array("dp.produk=pr.id_produk AND dp.code=pr.code", "mr.id_merk=pr.merk AND mr.status='1'", "kl.id_kelompok=pr.kelompok AND kl.status='1'");
			if($uri=='groups'){
				($where!=null)?$where.=' AND ':null;
				$where.='kl.groups=\''.$id.'\'';
			}
			if($uri=='groups'){
				($where!=null)?$where.=' AND ':null;
				$where.='kl.groups=\''.$id.'\'';
			}
//			if ($uri=='promo') {
//				$where .= " AND pr.id_produk IN ()";
//			}

			if($uri=='model' || $uri=='top_item' || $uri=='promo'){
				array_push($table_join, "det_$uri dti");
				array_push($join_on, "dti.produk=pr.id_produk AND dti.".$uri."='".$id."'");
			}
			$response['merk'] = $this->m_crud->join_data("produk pr", "mr.id_merk, mr.nama", $table_join, $join_on, $where, null, "mr.id_merk");
			$response['kelompok'] = $this->m_crud->join_data("produk pr", "kl.id_kelompok, kl.nama", $table_join, $join_on, $where, null, "kl.id_kelompok");
			$pagin=$this->m_website->myPagination('join',5,"produk pr","pr.id_produk",$table_join,$join_on,$where,16,$page);
			$read_produk = $this->m_crud->join_data(
				"produk pr", "pr.id_produk, pr.nama nama_produk, pr.code, pr.deskripsi, pr.free_return, pr.pre_order, pr.kelompok, dp.hrg_beli, dp.berat, dp.hrg_jual, mr.nama nama_merk, kl.nama nm_kelompok, mr.gambar gambar_merk", $table_join, $join_on, $where, null, "pr.id_produk",  $pagin['perPage'], $pagin['start']);
			$result='';
			if($read_produk!=null){
				foreach($read_produk as $row){
					/*Get promo*/
					$get_promo = $this->m_crud->get_join_data("promo pr", "pr.diskon", "det_promo dp", "dp.promo=pr.id_promo", "dp.produk='".$row['id_produk']."' AND '".date('Y-m-d H:i:s')."' BETWEEN pr.tgl_awal AND pr.tgl_akhir");
					if ($get_promo!=null) {
						$promo = 1;
						$hrgcoret = $row['hrg_jual'];
						$diskon = json_decode($get_promo['diskon'], true);
						$harga_promo = $this->m_website->double_diskon($row['hrg_jual'], $diskon);
						$data_diskon = '';
						for ($i=0;$i<count($diskon);$i++) {
							$data_diskon .= ($i>0)?' + ':'Diskon ';
							$data_diskon .= $diskon[$i].'%';
						}
						$diskon_persen = $diskon;
						$diskon = $data_diskon;
						$hrg_jual = $harga_promo;
					} else {
						$diskon_persen = array();
						$promo = 0;
						$hrg_jual = $row['hrg_jual'];
					}
					/*Get gambar produk*/
					$read_gambar = $this->m_crud->read_data("gambar_produk", "gambar", "produk='".$row['id_produk']."'");
					$gambar_produk = array();
					if ($read_gambar!=null) {
						foreach ($read_gambar as $row_gambar) {
							array_push($gambar_produk, base_url().$row_gambar['gambar']);
						}
					} else {
						array_push($gambar_produk, base_url().'assets/images/no_image.png');
					}
					$result.='<div class="col-6 col-xs-6 col-lg-3 col-md-6">';
					$result.=$this->m_website->tempProduk($gambar_produk,$row['id_produk'],$row['nama_produk'],$hrg_jual,$hrgcoret,$diskon);
					$result.='</div>';
				}
			}else{
				$result.=$this->m_website->noData();
			}
			$response['pagination_link'] = $pagin['pagination_link'];
			$response['res_produk'] = $result;
			$response['where'] = $get_promo;
			echo json_encode($response);
		}else{
			$this->load->view("store/wrapper",$data);
		}

	}

}
