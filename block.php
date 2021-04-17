<?php

class UpFrontExampleBlock extends UpFrontBlockAPI {
	
	public $id;
	public $name;
	public $options_class;
	public $fixed_height;
	public $html_tag;
	public $description;
	protected $show_content_in_grid;


	function __construct(){

		$this->id 				= 'Example';	
		$this->name 			= 'Example';		
		$this->options_class 	= 'UpFrontExampleBlockOptions';	
		$this->fixed_height 	= true;	
		$this->html_tag 		= 'section';
		$this->description 		= 'Display "Awesome Block"';
		$this->show_content_in_grid = false;
		$this->categories 		= array('content');		
		$this->inline_editable 	= array('block-title', 'block-subtitle');
		
	}
	

	
	public function init() {

	}
	
	public function setup_elements() {

	}

	
	public function content($block) {

		echo '<h1>Awesome Block</h1>';
		
	}
	
}
