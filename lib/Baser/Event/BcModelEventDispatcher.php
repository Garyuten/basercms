<?php
/** 
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright (c) baserCMS Users Community <http://sites.google.com/site/baserusers/>
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright		Copyright (c) baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			Baser.Event
 * @since			baserCMS v 3.0.0
 * @license			http://www.opensource.org/licenses/mit-license.php MIT License
 */

/**
 * モデルイベントディスパッチャ
 *
 * beforeFind 等の、CakePHPのモデル向け標準イベントについて、
 * モデルごとにイベントをディスパッチする。
 * bootstrap で、attach される。
 * 
 * 《イベント名の命名規則》
 * Model.ModelName.eventName
 */
class BcModelEventDispatcher extends Object implements CakeEventListener {
	
/**
 * implementedEvents
 * 
 * @return array
 */
	public function implementedEvents() {
		return array(
			'Model.beforeFind' => 'beforeFind',
			'Model.afterFind' => 'afterFind',
			'Model.beforeValidate' => 'beforeValidate',
			'Model.afterValidate' => 'afterValidate',
			'Model.beforeSave' => 'beforeSave',
			'Model.afterSave' => 'afterSave',
			'Model.beforeDelete' => 'beforeDelete',
			'Model.afterDelete' => 'afterDelete'
		);
	}
	
/**
 * beforeFind
 * 
 * @param CakeEvent $event
 * @return array
 */
	public function beforeFind(CakeEvent $event) {
		
		$currentEvent = $event->subject->dispatchEvent('beforeFind', $event->data);
		if($currentEvent) {
			$event->data = $currentEvent->data;
			return true;
		}
		return $event->data[0];
		
	}
	
/**
 * afterFind
 * 
 * @param type $event
 * @return array
 */
	public function afterFind(CakeEvent $event) {
		
		$currentEvent = $event->subject->dispatchEvent('afterFind', $event->data);
		if($currentEvent) {
			$event->data = $currentEvent->data;
			return true;
		}
		return $event->data[0];
		
	}
	
/**
 * beforeValidate
 * 
 * @param CakeEvent $event
 * @return boolean
 */
	public function beforeValidate(CakeEvent $event) {
		
		$currentEvent = $event->subject->dispatchEvent('beforeValidate', $event->data);
		if($currentEvent) {
			if ($currentEvent->isStopped()) {
				return false;
			}
		}
		return true;
		
	}
	
/**
 * afterValidate
 * 
 * @param CakeEvent $event
 * @return void
 */
	public function afterValidate(CakeEvent $event) {
		$event->subject->dispatchEvent('afterValidate', $event->data);
	}
	
/**
 * beforeSave
 * 
 * @param CakeEvent $event
 * @return boolean
 */
	public function beforeSave(CakeEvent $event) {
		
		$currentEvent = $event->subject->dispatchEvent('beforeSave', $event->data);
		if($currentEvent) {
			if (!$currentEvent->result) {
				return false;
			}
		}
		return true;
		
	}
	
/**
 * afterSave
 * 
 * @param CakeEvent $event
 * @return void
 */
	public function afterSave(CakeEvent $event) {
		$event->subject->dispatchEvent('afterSave', $event->data);
	}
	
/**
 * beforeDelete
 * 
 * @param CakeEvent $event
 * @return boolean
 */
	public function beforeDelete(CakeEvent $event) {
		$currentEvent = $event->subject->dispatchEvent('beforeDelete', $event->data);
		if($currentEvent) {
			if ($event->isStopped()) {
				return false;
			}
		}
		return true;
	}
	
/**
 * afterDelete
 * 
 * @param CakeEvent $event
 */
	public function afterDelete(CakeEvent $event) {
		$event->subject->dispatchEvent('afterDelete', $event->data);
	}
	
}