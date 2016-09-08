<?php

/**
 * Article model
 */
class Article_model extends PNR_Model {

    public $table_name = 'articles';
    public $primary_key = 'id';
    
    /**
     * constructor
     */
    public function __construct() {
        parent::__construct();
    }
}