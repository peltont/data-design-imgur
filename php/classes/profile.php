<?php
/**
 * Created by PhpStorm.
 * User: Fushi
 * Date: 10/20/2016
 * Time: 3:06 PM
 */

class profile {

	private $profileId;

	private $profileDateTime;

	private $profileScore;

	/**
	 * @return mixed
	 */
	public function getProfileId() {
		return $this->profileId;
	}

	/**
	 * @param mixed $profileId
	 */
	public function setProfileId($profileId) {
		$this->profileId = $profileId;
	}

	/**
	 * @param mixed $profileDateTime
	 */
	public function setProfileDateTime($profileDateTime) {
		$this->profileDateTime = $profileDateTime;
	}

	/**
	 * @return mixed
	 */
	public function getProfileDateTime($newprofileDateTime = null) {
			if($newprofileDateTime === null)
				$this->profileDateTime = new \DateTime;
		try {
			$newprofileDateTime = self::validateDateTime($newprofileDateTime);
				} catch(\InvalidArgumentException $invalidArgument) {
					throw(new \InvalidArgumentException($invalidArgument->getMessage(), 0, $invalidArgument));
					} catch(\RangeException $range) {
			throw(new \RangeException($range->getMessage(), 0, $range));
					}
		$this->profileDateTime = $newprofileDateTime;
	}


	/**
	 * @return mixed
	 */
	public function getProfileScore() {
		return $this->profileScore;
	}


	/**
	 * @param mixed $profileScore
	 */
	public function setProfileScore($profileScore) {
		$this->profileScore = $profileScore;
	}




}
