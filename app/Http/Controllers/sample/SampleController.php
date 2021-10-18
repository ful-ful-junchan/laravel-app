<?php
namespace app\Http\Controllers\Sample;

use App\Http\Controllers\AppController;
use App\Models\ModelBase;

/**
 * 
 * @author jhorita
 *
 */
class SampleController extends AppController
{
	/**
	 * 表示
	 * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
	 */
	public function show()
	{
		$template = $this->currentSidebarData['url'];
		
		return view($template, $this->getView());
	}
}