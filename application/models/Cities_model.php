<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once __DIR__ . '/BaseModel.php';

class Cities_model extends BaseModel {
    protected $table = 'cities';

    public function __construct() {
        parent::__construct();
    }
}
