<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Seller extends MY_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('date');
        $this->load->model('feeds_model', 'feeds');
    }

    public function index(){
        $page_data['page'] = 'seller';
        $uri = $this->uri->segment(2);
        $seller_id = substr($uri, strrpos($uri, '-') + 1);
        if( !$seller_id ){
            redirect( 'errors/_404');
        }
        $page_data['profile'] = $this->user->get_profile( $this->session->userdata('logged_id') );
        $array = array('is_limit' => false);
        $array['seller_id'] = $seller_id;
        $x = (array)$this->feeds->get_seller_products($array);
        $page_data['count_in_total'] = count($x);
        $page = isset($_GET['page']) ? xss_clean($_GET['page']) : 0;
        if ($page > 1) $page -= 1;
        $this->load->library('pagination');
        $this->config->load('pagination');
        $config = $this->config->item('pagination');
        $config['base_url'] = current_url();
        $config['total_rows'] = $page_data['count_in_total'];
        $config['per_page'] = 20;
        $this->pagination->initialize($config);
        $array['limit'] = $config['per_page'];
        $array['offset'] = $page;
        $array['is_limit'] = true;
        $page_data['pagination'] = $this->pagination->create_links();
        $page_data['products'] = $this->feeds->get_seller_products($array);
        if ( !$page_data['products']) {
            redirect('errors/_404');
        }else{

            $page_data['seller_detail'] = $this->feeds->get_seller_statistics( $seller_id );
            $seller_rate = $this->feeds->get_seller_rate( $seller_id );
            $page_data['total_rate'] = array_sum(array_column($seller_rate, 'total_rate'));
            $page_data['total_reviews'] = array_sum(array_column($seller_rate, 'total_reviews'));
            $page_data['title'] = ucwords($page_data['seller_detail']->store_name) . " Sells on Onitshamarket";
            $page_data['pgtitle'] = ucwords($page_data['seller_detail']->store_name);
            $page_data['description'] = ucwords($page_data['seller_detail']->store_name) . " Sells on Onitshamarket since " . date('h:ia - l, dS F, Y', strtotime($page_data['seller_detail']->date_applied)) . " and as over " .count((array)$page_data['products']) . " Listed on Onitshamarket, You cam also become a seller, and reach millions of people.";
            $this->load->view('landing/seller', $page_data);
        }
    }
}
