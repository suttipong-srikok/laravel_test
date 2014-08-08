<?php
class userController extends BaseController {
	/**
	* Show the profile for the given user.
	*/
	public function showProfile($id) {
		$user = $id;// User::find($id);

		return View::make('user.profile', array('user' => $user));		
	}
}