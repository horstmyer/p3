<?php
namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;

class LoremController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

    /**
     * Responds to requests to GET /lorem/create
     */
    public function getCreate() {
      return view('lorem.create');
    }
    /**
     * Responds to requests to POST /books/create
     */
    public function postCreate() {
        return view('lorem.show');
        //return 'Displaying requested paragraphs';
    }
}
