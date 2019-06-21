<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cities extends BaseModel {
    protected $table = 'cities';

    public function __construct() {
        parent::__construct();
    }
}