<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
	protected function sampleView($view_name) { return view('sample.'. $view_name); }
	
    public function index() { return $this->sampleView('dashboard'); }
    public function buttons() { return $this->sampleView('buttons'); }
    public function cards() { return $this->sampleView('cards'); }
	
    public function colors() { return $this->sampleView('colors'); }
    public function borders() { return $this->sampleView('borders'); }
    public function animations() { return $this->sampleView('animations'); }
    public function others() { return $this->sampleView('others'); }
	
    public function login() { return $this->sampleView('login'); }
    public function register() { return $this->sampleView('register'); }
    public function forgotPassword() { return $this->sampleView('forgot-password'); }
    public function error404() { return $this->sampleView('404'); }
    public function blank() { return $this->sampleView('blank'); }
	
    public function charts() { return $this->sampleView('charts'); }
    public function tables() { return $this->sampleView('tables'); }
}
