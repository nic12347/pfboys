<?php
/**
 * 用户主页
 * @name UserPageController
 * create 2018-07-10
 * @author guotian
 */
class UserPageController extends Yaf_Controller_Abstract {

	/** 
     * 用户主页面
     */
	public function indexAction($name = "Stranger") {
		$userId = 111111111;
		$this->getView()->assign('userId', $userId);
		return true;
	}
}
