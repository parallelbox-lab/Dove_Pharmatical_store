<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Sitemap_controller extends CI_Controller {


    /**
     * Index Page for this controller.
     *
     */
    public function index()
    {
        $this->load->database();
        $query = $this->db->get("products");
        $data['items'] = $query->result();


        $this->load->view('sitemap', $data);
    }
}