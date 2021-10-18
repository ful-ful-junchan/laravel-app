<?php
namespace app\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sidebar\SidebarModel;
use App\Models\dao\SidebarMasterDao;

/**
 *
 * @author jhorita
 *        
 */
abstract class AppController extends Controller
{

	/** @var array テンプレート返却レスポンス */
	protected $response = [];

	/** @var Request リクエストパラメータ情報 */
	protected $request;

	/** @var array サイドバーリスト */
	private $sidebarList = [];
	
	/** @var array 現在アクセスしているメニューデータ */
	protected $currentSidebarData = [];

	/** @var boolean ヘッダー非表示フラグ */
	private $isHideHeader = false;

	/** @var boolean サイドバー非表示フラグ */
	private $isHideSidebar = false;

	/** @var boolean フッター非表示フラグ */
	private $isHideFooter = false;

	/**
	 * コンストラクタ
	 *
	 * @param Request $request
	 */
	public function __construct(Request $request)
	{
		$this->request = $request;

		// 現在表示しようとしているメニュー情報をセット
		$this->setCurrentSidebarData($request->lId);
		
		$sidebarModel = new SidebarModel();
		$this->sidebarList = $sidebarModel->GetSidebarList();
		$this->setView('sidebarSectionList', $this->sidebarList);
	}

	/**
	 * 現在開いているメニュー情報をセットする
	 *
	 * @param string $sidebarMasterId
	 * @return array
	 */
	protected function setCurrentSidebarData($sidebarMasterId = 0)
	{
		$sidebarMasterObject = SidebarMasterDao::where('sidebar_master_id', $sidebarMasterId)->first();
		if ($sidebarMasterObject == null || $sidebarMasterObject->isEmpyt) {
			$this->currentSidebarData = SidebarMasterDao::where('default_menu_flag', true)->first()->toArray();
		} else {
			$this->currentSidebarData = $sidebarMasterObject->toArray();
		}

		// 各種非表示フラグをセットする
		$hideFlagKeys = [
			'hide_header_flag' => 'setHideHeaderFlag',
			'hide_sidebar_flag' => 'setHideSidebarFlag',
			'hide_footer_flag' => 'setHideFooterFlag'
		];
		foreach ($hideFlagKeys as $key => $method) {
			if (method_exists($this, $method)) {
				$flags = array_key_exists($key, $this->currentSidebarData) ? $this->currentSidebarData[$key] : false;
				$this->{$method}($flags);
			}
		}
		$this->setView('currentSidebarData', $this->currentSidebarData);
	}

	/**
	 * ヘッダー非表示フラグをセット
	 *
	 * @param boolean $flag
	 * @return AppController
	 */
	protected function setHideHeaderFlag($flag = false)
	{
		$this->isHideHeader = $flag;
		$this->setView('hideHeader', $this->isHideHeader);
		return $this;
	}

	/**
	 * サイドバー非表示フラグをセット
	 *
	 * @param boolean $flag
	 * @return AppController
	 */
	protected function setHideSidebarFlag($flag = false)
	{
		$this->isHideSidebar = $flag;
		$this->setView('hideSidebar', $this->isHideSidebar);
		return $this;
	}

	/**
	 * フッター非表示フラグをセット
	 *
	 * @param boolean $flag
	 * @return AppController
	 */
	protected function setHideFooterFlag($flag = false)
	{
		$this->isHideFooter = $flag;
		$this->setView('hideFooter', $this->isHideFooter);
		return $this;
	}

	/**
	 * テンプレート変数に値をセット
	 *
	 * @param mixed $key
	 * @param mixed $value
	 * @return AppController
	 */
	protected function setView($key, $value = null)
	{
		$this->response[$key] = $value;
		return $this;
	}

	/**
	 * テンプレート変数を取得
	 *
	 * @param mixed $key
	 * @return mixed
	 */
	protected function getView($key = null)
	{
		if (! is_null($key) && array_key_exists($key, $this->response))
			return $this->response[$key];
		return $this->response;
	}
}
