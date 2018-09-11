<?php
/*
* 2007-2014 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2014 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_'))
	exit;

class prestapopup extends Module
{
	public function __construct()
	{
		$this->name = 'prestapopup';
		$this->tab = 'front_office_features';
		$this->version = '1.0';
		$this->author = 'Lapusanu Patriciu Alex';
		$this->need_instance = 0;
		$this->bootstrap = true;

		parent::__construct();

		$this->displayName = $this->l('Prestashop prestapopup by ModulesDen');
		$this->description = $this->l('Improve your site visuals with an amazing prestapopup newsletter Box');
		$path = dirname(__FILE__);
		if (strpos(__FILE__, 'Module.php') !== false)
			$path .= '/../modules/'.$this->name;
		include_once $path.'/prestapopupClass.php';
	}

	public function install()
	{
		if (!parent::install() || !$this->registerHook('displayTopColumn') || !$this->registerHook('displayHome') || !$this->registerHook('displayHeader'))
			return false;

		$res = Db::getInstance()->execute(
			'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'prestapopup` (
			`id_prestapopup` int(10) unsigned NOT NULL auto_increment,
			`id_shop` int(10) unsigned NOT NULL ,
			`prestapopup_img_link` varchar(255) NOT NULL,
			PRIMARY KEY (`id_prestapopup`))
			ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8'
		);

		if ($res)
			$res &= Db::getInstance()->execute(
				'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'prestapopup_lang` (
				`id_prestapopup` int(10) unsigned NOT NULL,
				`id_lang` int(10) unsigned NOT NULL,
				`prestapopup_paragraph` text NOT NULL,
				PRIMARY KEY (`id_prestapopup`, `id_lang`))
				ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8'
			);	
		Configuration::updateValue('prestapopup_BOX_WIDTH', (int)700);
		Configuration::updateValue('prestapopup_BOX_HEIGHT', (int)394);
		Configuration::updateValue('prestapopup_SHOW_TIME', (int)3);
		Configuration::updateValue('prestapopup_BTN_COLOR', "#BD1E30");
		Configuration::updateValue('prestapopup_IMAGE_COVER', 'prestapopup_img_1.jpg');	
		Configuration::updateValue('prestapopup_EVERYWHERE', 0);
			
		if ($res)
			foreach (Shop::getShops(false) as $shop)
				$res &= $this->createExampleprestapopup($shop['id_shop']);

		if (!$res)
			$res &= $this->uninstall();

		return (bool)$res;
	}

	private function createExampleprestapopup($id_shop)
	{
		$prestapopup = new prestapopupClass();
		$prestapopup->id_shop = (int)$id_shop;
		$prestapopup->prestapopup_img_link = 'http://codecanyon.net/user/Rapty/portfolio';
		foreach (Language::getLanguages(false) as $lang)
		{
			$prestapopup->prestapopup_paragraph[$lang['id_lang']] = '<div id="modulesden_popup" style="">
				<div class="modulesden-newsletter">
					<form action="{$base_dir}" method="POST">
						<h2>Embrace Fashion Life</h2>
						<h3>Newsletter</h3>
						<label for="newsletter">Subscribe to our Premium Prestashop modules. Get our latest offers and the best themes and modules on the entire market.</label>
						<input type="text" name="email" title="Sign up for our newsletter" class="modulesden-email" placeholder="Enter your email address...">
						<button class="modulesden-btn-newsletter" name="submitNewsletter" type="submit" title="Submit">
							<span><span>Submit </span> </span>
						</button>
						<input type="hidden" name="action" value="0">
					</form>
				</div>
			</div>';
		}

		return $prestapopup->add();
	}

	public function uninstall()
	{
		$res = Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'prestapopup`');
		$res &= Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'prestapopup_lang`');

		if ($res == 0 || !parent::uninstall())
			return false;

		return true;
	}

	private function initForm()
	{
		$languages = Language::getLanguages(false);
		foreach ($languages as $k => $language)
			$languages[$k]['is_default'] = (int)$language['id_lang'] == Configuration::get('PS_LANG_DEFAULT');

		$helper = new HelperForm();
		$helper->module = $this;
		$helper->name_controller = 'prestapopup';
		$helper->identifier = $this->identifier;
		$helper->token = Tools::getAdminTokenLite('AdminModules');
		$helper->languages = $languages;
		$helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
		$helper->default_form_language = (int)Configuration::get('PS_LANG_DEFAULT');
		$helper->allow_employee_form_lang = true;
		$helper->toolbar_scroll = true;
		$helper->toolbar_btn = $this->initToolbar();
		$helper->title = $this->displayName;
		$helper->submit_action = 'submitUpdateprestapopup';

		$file = dirname(__FILE__).'/img/prestapopup_img_'.(int)$this->context->shop->id.'.jpg';
		$logo = (file_exists($file) ? '<img src="'.$this->_path.'img/prestapopup_img_'.(int)$this->context->shop->id.'.jpg">' : '');

		$this->fields_form[0]['form'] = array(
			'tinymce' => true,
			'legend' => array(
				'title' => $this->displayName,
				'image' => $this->_path.'logo.png'
			),
			'submit' => array(
				'name' => 'submitUpdateprestapopup',
				'title' => $this->l('Save'),
				'class' => 'button pull-right'
			),
			'input' => array(
				array(
				  'type'      => 'switch',                              
				  'label'     => $this->l('Show The Newsletter PopUp only on Homepage'),        
				  'desc'      => $this->l('Disabled it will show the newsletter popup throughout the store :D.'),   
				  'name'      => 'prestapopup_EVERYWHERE',                                                               
				  'values'    => array(                                
					array(
					  'id'    => 'active_on',
					  'value' => 1,                                     
					  'label' => $this->l('Enabled')                   
					),
					array(
					  'id'    => 'active_off',
					  'value' => 0,
					  'label' => $this->l('Disabled')
					)
				  ),
				),
				array(
					'type' => 'text',
					'label' => $this->l('Popup Box Height in Pixels'),
					'name' => 'prestapopup_BOX_HEIGHT',
					'size' => 33,
					'suffix' => 'px',				
				),
				array(
					'type' => 'text',
					'label' => $this->l('Popup Box Width in Pixels'),
					'name' => 'prestapopup_BOX_WIDTH',
					'size' => 33,
					'suffix' => 'px',	
				),
				array(
					'type' => 'text',
					'label' => $this->l('Show PopUp After'),
					'name' => 'prestapopup_SHOW_TIME',
					'size' => 33,
					'suffix' => 'seconds',
				),
				array(
					'type' => 'color',
					'label' => $this->l('Submit Button Color'),
					'name' => 'prestapopup_BTN_COLOR',
					'size' => 33,
				),
				array(
					'type' => 'textarea',
					'label' => $this->l('prestapopup text over the image'),
					'name' => 'prestapopup_paragraph',
					'lang' => true,
					'autoload_rte' => true,
					'desc' => $this->l('For example... explain your mission, highlight a new product, or describe why to register for your newsletter.'),
					'cols' => 60,
					'rows' => 30
				),
				array(
					'type' => 'file',
					'label' => $this->l('PrestaPopup Image'),
					'name' => 'body_prestapopup_img',
					'display_image' => true,
					'image' => $logo,
					'delete_url' => 'index.php?tab=AdminModules&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules').'&deleteprestapopupImage=1'
				),
				array(
					'type' => 'text',
					'label' => $this->l('prestapopup Image Link'),
					'name' => 'prestapopup_img_link',
					'size' => 33,
				),
			)
		);

		return $helper;
	}

	private function initToolbar()
	{
		$this->toolbar_btn['save'] = array(
			'href' => '#',
			'desc' => $this->l('Save')
		);

		return $this->toolbar_btn;
	}

	public function getContent()
	{
		$this->_html = '';
		$this->postProcess();

		$helper = $this->initForm();

		$id_shop = (int)$this->context->shop->id;
		$prestapopup = prestapopupClass::getByIdShop($id_shop);

		if (!$prestapopup) //if prestapopup do not exist for this shop => create a new example
			$this->createExampleprestapopup($id_shop);

		foreach ($this->fields_form[0]['form']['input'] as $input) //fill all form fields
		{
			if ($input['name'] == 'body_prestapopup_img' || $input['name'] == 'prestapopup_BOX_HEIGHT' || $input['name'] == 'PADDING_BOTTOM' || $input['name'] == 'prestapopup_IMAGE_COVER' || $input['name'] == 'prestapopup_BOX_WIDTH' || $input['name'] == 'prestapopup_SHOW_TIME' || $input['name'] == 'prestapopup_BTN_COLOR')
			{
				//do nothing
			}
			else
			{
				$helper->fields_value[$input['name']] = $prestapopup->{$input['name']};
			}			
		}

		$file = dirname(__FILE__).'/img/prestapopup_img_'.(int)$id_shop.'.jpg';
		$helper->fields_value['body_prestapopup_img']['image'] = (file_exists($file) ? '<img src="'.$this->_path.'img/prestapopup_img_'.(int)$id_shop.'.jpg">' : '');
		if ($helper->fields_value['body_prestapopup_img'] && file_exists($file))
			$helper->fields_value['body_prestapopup_img']['size'] = filesize($file) / 1000;
			
		$helper->fields_value['prestapopup_BOX_WIDTH'] = Configuration::get('prestapopup_BOX_WIDTH');	
		$helper->fields_value['prestapopup_IMAGE_COVER'] = Configuration::get('prestapopup_IMAGE_COVER');
		$helper->fields_value['prestapopup_BOX_HEIGHT'] = Configuration::get('prestapopup_BOX_HEIGHT');
		$helper->fields_value['PADDING_BOTTOM'] = Configuration::get('PADDING_BOTTOM');
		$helper->fields_value['prestapopup_SHOW_TIME'] = Configuration::get('prestapopup_SHOW_TIME');
		$helper->fields_value['prestapopup_BTN_COLOR'] = Configuration::get('prestapopup_BTN_COLOR');
		$helper->fields_value['prestapopup_EVERYWHERE'] = Configuration::get('prestapopup_EVERYWHERE');

		$this->_html .= $helper->generateForm($this->fields_form);

		return $this->_html;
	}

	public function postProcess()
	{
		$errors = '';
		$id_shop = (int)$this->context->shop->id;
		// Delete image retrocompat 1.5
		if (Tools::isSubmit('deleteprestapopupImage') || Tools::isSubmit('deleteImage'))
		{
			if (!file_exists(dirname(__FILE__).'/img/prestapopup_img_'.(int)$id_shop.'.jpg'))
				$errors .= $this->displayError($this->l('This action cannot be made.'));
			else
			{
				unlink(dirname(__FILE__).'/img/prestapopup_img_'.(int)$id_shop.'.jpg');
				Configuration::updateValue('prestapopup_IMAGE_DISABLE', 1);
				$this->_clearCache('views/prestapopup.tpl');
				Tools::redirectAdmin('index.php?tab=AdminModules&configure='.$this->name.'&token='.Tools::getAdminToken('AdminModules'.(int)Tab::getIdFromClassName('AdminModules').(int)$this->context->employee->id));
			}
			$this->_html .= $errors;
		}

		if (Tools::isSubmit('submitUpdateprestapopup'))
		{
			$id_shop = (int)$this->context->shop->id;
			$prestapopup = prestapopupClass::getByIdShop($id_shop);
			$prestapopup->copyFromPost();
			if (empty($prestapopup->id_shop))
				$prestapopup->id_shop = (int)$id_shop;
			$prestapopup->save();
			
			/* prestapopup Settings */
			Configuration::updateValue('prestapopup_BOX_WIDTH', (int)Tools::getValue('prestapopup_BOX_WIDTH'));
			Configuration::updateValue('prestapopup_BOX_HEIGHT', (int)Tools::getValue('prestapopup_BOX_HEIGHT'));
			Configuration::updateValue('PADDING_BOTTOM', (int)Tools::getValue('PADDING_BOTTOM'));
			Configuration::updateValue('prestapopup_SHOW_TIME', (int)Tools::getValue('prestapopup_SHOW_TIME'));
			Configuration::updateValue('prestapopup_BTN_COLOR', Tools::getValue('prestapopup_BTN_COLOR'));
			Configuration::updateValue('prestapopup_IMAGE_COVER', (int)Tools::getValue('prestapopup_IMAGE_COVER'));
			Configuration::updateValue('prestapopup_EVERYWHERE', (int)Tools::getValue('prestapopup_EVERYWHERE'));
			
			
			/* upload the image */
			if (isset($_FILES['body_prestapopup_img']) && isset($_FILES['body_prestapopup_img']['tmp_name']) && !empty($_FILES['body_prestapopup_img']['tmp_name']))
			{
				Configuration::set('PS_IMAGE_GENERATION_METHOD', 1);
				if (file_exists(dirname(__FILE__).'/img/prestapopup_img_'.(int)$id_shop.'.jpg'))
					unlink(dirname(__FILE__).'/img/prestapopup_img_'.(int)$id_shop.'.jpg');
				if ($error = ImageManager::validateUpload($_FILES['body_prestapopup_img']))
					$errors .= $error;
				elseif (!($tmp_name = tempnam(_PS_TMP_IMG_DIR_, 'PS')) || !move_uploaded_file($_FILES['body_prestapopup_img']['tmp_name'], $tmp_name))
					return false;
				elseif (!ImageManager::resize($tmp_name, dirname(__FILE__).'/img/prestapopup_img_'.(int)$id_shop.'.jpg'))
					$errors .= $this->displayError($this->l('An error occurred while attempting to upload the image.'));
				if (isset($tmp_name))
					unlink($tmp_name);
			}
			$this->_html .= $errors == '' ? $this->displayConfirmation($this->l('Settings updated successfully.')) : $errors;
			if (file_exists(dirname(__FILE__).'/img/prestapopup_img_'.(int)$id_shop.'.jpg'))
			{
				list($width, $height, $type, $attr) = getimagesize(dirname(__FILE__).'/img/prestapopup_img_'.(int)$id_shop.'.jpg');
				Configuration::updateValue('prestapopup_IMAGE_WIDTH', (int)round($width));
				Configuration::updateValue('prestapopup_IMAGE_HEIGHT', (int)round($height));
				Configuration::updateValue('prestapopup_IMAGE_DISABLE', 0);
			}
			$this->_clearCache('views/prestapopup.tpl');
			Tools::redirectAdmin('index.php?tab=AdminModules&configure='.$this->name.'&token='.Tools::getAdminToken('AdminModules'.(int)Tab::getIdFromClassName('AdminModules').(int)$this->context->employee->id));
		}

		return true;
	}

	public function hookdisplayTopColumn($params)
	{
		if(Configuration::get('prestapopup_EVERYWHERE') == 0){
			if (!$this->isCached('views/prestapopup.tpl', $this->getCacheId()))
			{
				$id_shop = (int)$this->context->shop->id;
				$prestapopup = prestapopupClass::getByIdShop($id_shop);
				if (!$prestapopup)
					return;
				$prestapopup = new prestapopupClass((int)$prestapopup->id, $this->context->language->id);
				if (!$prestapopup)
					return;
				$this->smarty->assign(
					array(
						'prestapopup_img_link' => $prestapopup->prestapopup_img_link,
						'prestapopup_paragraph' => $prestapopup->prestapopup_paragraph,
						'default_lang' => (int)$this->context->language->id,
						'prestapopup_cover' => Configuration::get('prestapopup_IMAGE_COVER'),
						'prestapopup_width' => Configuration::get('prestapopup_BOX_WIDTH'),
						'prestapopup_BOX_HEIGHT' => Configuration::get('prestapopup_BOX_HEIGHT'),
						'prestapopup_SHOW_TIME' => Configuration::get('prestapopup_SHOW_TIME'),
						'prestapopup_BTN_COLOR' => Configuration::get('prestapopup_BTN_COLOR'),
						'id_lang' => $this->context->language->id,
						'prestapopup_img' => !Configuration::get('prestapopup_IMAGE_DISABLE') && file_exists('modules/prestapopup/img/prestapopup_img_'.(int)$id_shop.'.jpg'),
						'module_path' => $this->_path,
					)
				);
			}
	
			return $this->display(__FILE__, 'views/prestapopup.tpl', $this->getCacheId());
		}
	}
	
	public function hookdisplayHome($params)
	{
		if(Configuration::get('prestapopup_EVERYWHERE') == 1){
			if (!$this->isCached('views/prestapopup.tpl', $this->getCacheId()))
			{
				$id_shop = (int)$this->context->shop->id;
				$prestapopup = prestapopupClass::getByIdShop($id_shop);
				if (!$prestapopup)
					return;
				$prestapopup = new prestapopupClass((int)$prestapopup->id, $this->context->language->id);
				if (!$prestapopup)
					return;
				$this->smarty->assign(
					array(
						'prestapopup_img_link' => $prestapopup->prestapopup_img_link,
						'prestapopup_paragraph' => $prestapopup->prestapopup_paragraph,
						'default_lang' => (int)$this->context->language->id,
						'prestapopup_cover' => Configuration::get('prestapopup_IMAGE_COVER'),
						'prestapopup_width' => Configuration::get('prestapopup_BOX_WIDTH'),
						'prestapopup_BOX_HEIGHT' => Configuration::get('prestapopup_BOX_HEIGHT'),
						'prestapopup_SHOW_TIME' => Configuration::get('prestapopup_SHOW_TIME'),
						'prestapopup_BTN_COLOR' => Configuration::get('prestapopup_BTN_COLOR'),
						'id_lang' => $this->context->language->id,
						'prestapopup_img' => !Configuration::get('prestapopup_IMAGE_DISABLE') && file_exists('modules/prestapopup/img/prestapopup_img_'.(int)$id_shop.'.jpg'),
						'module_path' => $this->_path,
					)
				);
			}
	
			return $this->display(__FILE__, 'views/prestapopup.tpl', $this->getCacheId());
		}
	}

	
	public function hookDisplayHeader()
	{
		$this->context->controller->addCSS(($this->_path).'css/prestapopup.css', 'all');
	}
}