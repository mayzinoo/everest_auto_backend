<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pricelist_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function getpricescategory_list()
	{		
		$query = pricescategory_list();
		$tags['']="";
		foreach($query as $key => $status):
			$tags[$key]=$status;
		endforeach;
		return $tags;
	}
	function getvehicleslist()
	{

		$query = $this->db->get("vehicles");
		if($query->num_rows()<=0)
		{
			$tags['']="...";
		}
		$tags['']="...";
		foreach($query->result() as $row):
			$tags[$row->id]=$row->vehicle_no;
		endforeach;
		return $tags;
	}
	function allpricelist()
	{	

		$config["base_url"]=base_url()."priceslist/allpricelist/"; 
	    $config['total_rows'] = $this->db->get('pricelist')->num_rows();
	    $config['per_page'] = 30;
	    $config['uri_segment'] = 3;
	    $config['num_links'] = 3;
	    $config['full_tag_open'] = '<ul class="pagegi">';
	    $config['full_tag_close'] = '</ul>';
	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';
	    $config['cur_tag_open'] = '<li><a class="current">';
	    $config['cur_tag_close'] = '</a></li>';
	    $config['prev_tag_open'] = '<li>';
	    $config['prev_tag_close'] = '</li>';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';
	    $config['prev_link'] = 'Prev';
	    $config['next_link'] = 'Next';  

	    $this->pagination->initialize($config);

		$query=$this->db->order_by("id","desc")
					    ->get('pricelist',$config['per_page'],$this->uri->segment(3));
		return $query;	
	}
	function search_pricelist($category)
	{
		$config["base_url"]=base_url()."priceslist/allpricelist/"; 
		
		if($category=='1'){
	    	$config['total_rows'] = $this->db->get_where('pricelist',array('category_type'=>'1'))->num_rows();
	    }
		elseif($category=='2'){
			$config['total_rows'] = $this->db->get_where('pricelist',array('category_type'=>'2'))->num_rows();
		}
		elseif($category=='3'){
			$config['total_rows'] = $this->db->get_where('pricelist',array('category_type'=>'3'))->num_rows();
		}
		elseif($category=='4'){
			$config['total_rows'] = $this->db->get_where('pricelist',array('category_type'=>'4'))->num_rows();
		}
		elseif($category=='5'){
			$config['total_rows'] = $this->db->get_where('pricelist',array('category_type'=>'5'))->num_rows();
		}
		elseif($category=='6'){
			$config['total_rows'] = $this->db->get_where('pricelist',array('category_type'=>'6'))->num_rows();
		}
		elseif($category=='7'){
			$config['total_rows'] = $this->db->get_where('pricelist',array('category_type'=>'7'))->num_rows();
		}
		elseif($category=='8'){
			$config['total_rows'] = $this->db->get_where('pricelist',array('category_type'=>'8'))->num_rows();
		}
		elseif($category=='9'){
			$config['total_rows'] = $this->db->get_where('pricelist',array('category_type'=>'9'))->num_rows();
		}
		elseif($category=='10'){
            $config['total_rows'] = $this->db->get_where('pricelist',array('category_type'=>'10'))->num_rows();
        }
        elseif($category=='11'){
            $config['total_rows'] = $this->db->get_where('pricelist',array('category_type'=>'11'))->num_rows();
        }
        elseif($category=='12'){
            $config['total_rows'] = $this->db->get_where('pricelist',array('category_type'=>'12'))->num_rows();
        }
        elseif($category=='13'){
           	$config['total_rows'] = $this->db->get_where('pricelist',array('category_type'=>'13'))->num_rows();
        }
        elseif($category=='14'){
            $config['total_rows'] = $this->db->get_where('pricelist',array('category_type'=>'14'))->num_rows();
        }
        elseif($category=='15'){
            $config['total_rows'] = $this->db->get_where('pricelist',array('category_type'=>'15'))->num_rows();
        }
        elseif($category=='16'){
            $config['total_rows'] = $this->db->get_where('pricelist',array('category_type'=>'16'))->num_rows();
        }
        elseif($category=='17'){
            $config['total_rows'] = $this->db->get_where('pricelist',array('category_type'=>'17'))->num_rows();
        }
        elseif($category=='18'){
            $config['total_rows'] = $this->db->get_where('pricelist',array('category_type'=>'18'))->num_rows();
        }	    
	    $config['per_page'] = 30;
	    $config['uri_segment'] = 3;
	    $config['num_links'] = 3;
	    $config['full_tag_open'] = '<ul class="pagegi">';
	    $config['full_tag_close'] = '</ul>';
	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';
	    $config['cur_tag_open'] = '<li><a class="current">';
	    $config['cur_tag_close'] = '</a></li>';
	    $config['prev_tag_open'] = '<li>';
	    $config['prev_tag_close'] = '</li>';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';
	    $config['prev_link'] = 'Prev';
	    $config['next_link'] = 'Next';  

	    $this->pagination->initialize($config);

	    if($category=='1'){
	    	$query=$this->db->get_where('pricelist',array('category_type'=>'1'),$config['per_page'],$this->uri->segment(3));
	    }
		elseif($category=='2'){
			$query=$this->db->get_where('pricelist',array('category_type'=>'2'),$config['per_page'],$this->uri->segment(3));
		}
		elseif($category=='3'){
			$query=$this->db->get_where('pricelist',array('category_type'=>'3'),$config['per_page'],$this->uri->segment(3));
		}
		elseif($category=='4'){
			$query=$this->db->get_where('pricelist',array('category_type'=>'4'),$config['per_page'],$this->uri->segment(3));
		}
		elseif($category=='5'){
			$query=$this->db->get_where('pricelist',array('category_type'=>'5'),$config['per_page'],$this->uri->segment(3));
		}
		elseif($category=='6'){
			$query=$this->db->get_where('pricelist',array('category_type'=>'6'),$config['per_page'],$this->uri->segment(3));
		}
		elseif($category=='7'){
			$query=$this->db->get_where('pricelist',array('category_type'=>'7'),$config['per_page'],$this->uri->segment(3));
		}
		elseif($category=='8'){
			$query=$this->db->get_where('pricelist',array('category_type'=>'8'),$config['per_page'],$this->uri->segment(3));
		}
		elseif($category=='9'){
			$query=$this->db->get_where('pricelist',array('category_type'=>'9'),$config['per_page'],$this->uri->segment(3));
		}
		elseif($category=='10'){
            $query=$this->db->get_where('pricelist',array('category_type'=>'10'),$config['per_page'],$this->uri->segment(3));
        }
        elseif($category=='11'){
            $query=$this->db->get_where('pricelist',array('category_type'=>'11'),$config['per_page'],$this->uri->segment(3));
        }
        elseif($category=='12'){
            $query=$this->db->get_where('pricelist',array('category_type'=>'12'),$config['per_page'],$this->uri->segment(3));
        }
        elseif($category=='13'){
           	$query=$this->db->get_where('pricelist',array('category_type'=>'13'),$config['per_page'],$this->uri->segment(3)); 
        }
        elseif($category=='14'){
            $query=$this->db->get_where('pricelist',array('category_type'=>'14'),$config['per_page'],$this->uri->segment(3));
        }
        elseif($category=='15'){
            $query=$this->db->get_where('pricelist',array('category_type'=>'15'),$config['per_page'],$this->uri->segment(3));
        }
        elseif($category=='16'){
            $query=$this->db->get_where('pricelist',array('category_type'=>'16'),$config['per_page'],$this->uri->segment(3));
        }
        elseif($category=='17'){
            $query=$this->db->get_where('pricelist',array('category_type'=>'17'),$config['per_page'],$this->uri->segment(3));
        }
        elseif($category=='18'){
            $query=$this->db->get_where('pricelist',array('category_type'=>'18'),$config['per_page'],$this->uri->segment(3));
        }
		return $query;	
	}

}

?>