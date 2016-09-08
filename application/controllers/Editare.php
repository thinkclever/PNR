<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editare extends PNR_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('authentication');
        $this->data['is_logged_in'] = $this->authentication->is_loggedin();
        $this->detect_language();
    }

    /**
     * Article
     */
    public function index($article_id='', $title='')
    {
        // do not allow anonymous access
        if (!$this->data['is_logged_in']) {
            secure_redirect('login');
            return false;
        }

        // article id not present
        if (empty($article_id)) {
            show_404();
            return false;
        }

        $this->load->model('Article_model');
        $tmp_article = $this->Article_model->read_record_by_id($article_id);

        // invalid article id
        if (empty($tmp_article)) {
            show_404();
            return false;
        }
        
        $this->data['article_title'] = $tmp_article['title_'.$this->data['lang']];
        $this->data['article_body'] = $tmp_article['body_'.$this->data['lang']];

        $this->data['current-menu-item'] = 'Stiri';
        $this->load->view('layouts/main', array('view' => 'templates/article_edit', 'data' => $this->data));
    }

    public function pnr($article_id='', $title='') {
        return $this->index($article_id, $title);
    }

}
