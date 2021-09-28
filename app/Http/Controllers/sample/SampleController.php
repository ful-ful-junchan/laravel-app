<?php
namespace app\Http\Controllers\sample;

use App\Http\Controllers\AppController;

class SampleController extends AppController
{
	public function show()
	{
		$linkId = $this->request->query('l');
		
		// 現在のページ情報をセットする
		$currentLinkData = $this->setCurrentMenuData($linkId);
		
		$template = $currentLinkData['url'];
		
		return view($template, $this->getView());
	}
	
	/*
	private function template($name)
	{
		return "sample/{$name}";
	}
	
	public function dashboard($name = null)
	{
		$title = __FUNCTION__;
		if (!is_null($name)) $title .= "_" . $name;
		$this->setView('menu', 'Home')
		->setView('title', $title);
		return view($this->template($title), $this->getView());
	}
	
	public function form($name = null)
	{
		$title = __FUNCTION__;
		if (!is_null($name)) $title .= "_" . $name;
		$this->setView('menu', 'Forms')
		->setView('title', $title);
		return view($this->template($title), $this->getView());
	}
	
	public function ui($name = null)
	{
		$title = __FUNCTION__;
		if (!is_null($name)) $title .= "_" . $name;
		$this->setView('menu', 'UI Elements')
		->setView('title', $title);
		return view($this->template($title), $this->getView());
	}
	
	public function tables($name = null)
	{
		$title = __FUNCTION__;
		if (!is_null($name)) $title .= "_" . $name;
		$this->setView('menu', 'Tables')
		->setView('title', $title);
		return view($this->template($title), $this->getView());
	}
	
	public function presentation($name = null)
	{
		$title = __FUNCTION__;
		if (!is_null($name)) $title .= "_" . $name;
		$this->setView('menu', 'Data Presentation')
		->setView('title', $title);
		return view($this->template($title), $this->getView());
	}
	
	public function layouts($name = null)
	{
		$title = __FUNCTION__;
		if (!is_null($name)) $title .= "_" . $name;
		$this->setView('menu', 'Layouts')
		->setView('title', $title);
		return view($this->template($title), $this->getView());
	}
	
	public function additional($name = null)
	{
		$title = __FUNCTION__;
		if (!is_null($name)) $title .= "_" . $name;
		$this->setView('menu', 'Additional Pages')
		->setView('title', $title);
		return view($this->template($title), $this->getView());
	}
	
	public function extras($name = null)
	{
		$this->setHideHeaderFlag(true)
		->setHideSidebar(true)
		->setHideFooter(true);
		
		$title = __FUNCTION__;
		if (!is_null($name)) $title .= "_" . $name;
		$this->setView('menu', 'Extras')
		->setView('title', $title);
		return view($this->template($title), $this->getView());
	}
	*/
}