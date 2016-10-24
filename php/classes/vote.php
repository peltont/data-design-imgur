<?php
/**
 * Created by PhpStorm.
 * User: Fushi
 * Date: 10/20/2016
 * Time: 3:09 PM
 */

class vote {

	private $voteImageId;

	private $voteProfileId;

	private $voteDateTime;


	/**
	 * @return mixed
	 */
	public function getVoteImageId() {
		return $this->voteImageId;
	}

	/**
	 * @return mixed
	 */
	public function getVoteProfileId() {
		return $this->voteProfileId;
	}

	/**
	 * @return mixed
	 */
	public function getVoteDateTime() {
		return $this->voteDateTime;
	}



}