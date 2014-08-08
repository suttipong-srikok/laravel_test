<?php
class DemoController extends BaseController {
	public $resful = true;
	public function index() {
		$title = 'Demo page';
		$View = View::make('demo1.index', array(
			'name' => 'laravel user',
			'age' => '31',
			'location' => 'Chiang Mai'))
		->with('title', $title);
		return $View;
	}
}