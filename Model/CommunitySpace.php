<?php
/**
 * CommunitySpace Model
 *
 * @property Space $Space
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('Space', 'Rooms.Model');

/**
 * CommunitySpace Model
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\CommunitySpace\Model
 */
class CommunitySpace extends Space {

/**
 * Table name
 *
 * @var string
 */
	public $useTable = 'spaces';

/**
 * CommunitySpaceルームの生成
 *
 * @param array $data デフォルト値
 * @return array CommunitySpaceルーム配列
 */
	public function createRoom($data = array()) {
		$data = Hash::merge(array(
			'need_approval' => false,
			'default_participation' => false,
		), $data);

		return parent::createRoom($data);
	}

}
