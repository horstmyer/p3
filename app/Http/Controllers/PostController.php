<?php
namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;

class PostController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

    /**
     * Responds to requests to GET /lorem/create
     */
    public function Create() {
      return view('create');
    }
    /**
     * Responds to requests to POST /books/create
     */
    public function Show() {
        return view('show');
        //return 'Displaying requested paragraphs';
    }
}
