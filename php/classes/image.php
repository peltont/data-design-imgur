<?php
/**
 * Created by PhpStorm.
 * User: Fushi
 * Date: 10/19/2016
 * Time: 11:20 AM
 */

/**
 * bare bones class for an imgur or reddit profile
 *
 *
 * @author Trevor Pelton tpelton@cnm.edu
 * @version 0.0.1
 *
 */

class image/**image implements \JsonSerializable*/ {
	/**
	 * id of the image itself
	 * @var int $imageId
	 */
	private $imageId;
	/**
	 * Date and time image was submitted
	 * @var $imageDateTime
	 */
	private $imageDateTime;
	/**
	 * current score of the image
	 * @var $imageScore	 *
	 */
	private $imageScore;
	/**
	 * id of who posted the image
	 * @var $imagePosterId
	 */

	private $imagePosterId;

	/**
	 *  constructor.
	 * @param int|null $imageId id of image
	 * @param int $imagePosterId id of poster of image
	 * @param int $imageScore image score
	 * @param null $imageDateTime date and time submitted
	 * @throws \InvalidArgumentException if data types are not valid
	 * @throws \RangeException if data values are out of bounds (e.g., strings too long, negative integers)
	 * @throws \TypeError if data types violate type hints
	 * @throws \Exception if some other exception occurs
	 */
	public function __construct(int $newimageId = null, int $newimagePosterId, int $newimageScore, $newimageDateTime = null) {
		try {
			$this->setimageId($newimageId);
			$this->setimagePosterId($newimagePosterId);
			$this->setimageScore($newimageScore);
			$this->setimageDateTime($newimageDateTime);
			} catch(\InvalidArgumentException $invalidArgument) {
				throw(new \InvalidArgumentException($invalidArgument->getMessage(), 0, $invalidArgument));
			} catch(\RangeException $range) {
				throw(new \RangeException($range->getMessage(), 0, $range));
			} catch(\TypeError $typeError) {
				throw(new \TypeError($typeError->getMessage(), 0, $typeError));
			} catch(\Exception $exception) {
				throw(new \Exception($exception->getMessage(), 0, $exception));
		}
	}
	public function getImageId() {
		return($this->imageId);
	}
	public function setimageId(int $newimageId = null){
		// if imageId is null, this is a new image
		if($newimageId === null) {
			$this->imageId = null;
			return;
			// check image id is positive
			if($newimageId <= 0) {
				throw(new \RangeException("image id is not positive"));
			}
			//convert and store image id
			$this->imageId = $newimageId;
		}
	}
	/**
	 * @return mixed
	 */
	public function getImagePosterId() {
		return $this->imagePosterId;
	}

	/**
	 * @param mixed $imagePosterId
	 */
	public function setImagePosterId(int $newimagePosterId) {
		if($newimagePosterId <=0){
			throw(new \RangeException("image poster id is not positive"));
		}
		$this->imagePosterId = $newimagePosterId;
	}

	public function getImageScore() {
		return $this->imageScore;
	}
	/**
	* @param mixed $imageScore
 	* this is me attempting to set initianl image score to 0
 	*/

	public function setImageScore($newimageScore) {
		if ($newimageScore === null){
			$this->imageScore = 0;
		}
		$this->imageScore = $newimageScore;
	}
	/**
	 * @return mixed
	 */
	public function getImageDateTime() {
		return $this->imageDateTime;
	}


	/**
	 * @param mixed $imageDateTime
	 */
	public function setImageDateTime($newimageDateTime) {
		//base: if date is null use current D/T
		if($newimageDateTime === null){
			$this->imageDateTime = new \DateTime();
			return;
		}
		//store the date
		try {
			$newimageDateTime = self::validateDateTime($newimageDateTime);
			} catch(\InvalidArgumentException $invalidArgument) {
				throw(new \InvalidArgumentException($invalidArgument->getMessage(), 0, $invalidArgument));
			} catch(RangeException $range) {
				throw(new \RangeException($range->getMessage(), 0, $range));
		}
		$this->imageDateTime = $newimageDateTime;
	}

	/**
	 * @param \PDO $pdo PDO connection object
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError if $pdo is not a PDO connection object
	 */
public function insert(\PDO $pdo) {
	//ensure image id is null
	if($this->imageId !== null) {
		throw(new \PDOException("not a new image"));
	}
	//create query template
	$query = "INSERT INTO image(imageProfileId, imageDateTime, imageScore) VALUES(:imageProfileId, :imageDateTime, :imageScore)";
	$statement = $pdo->prepare($query);

	//bind member variables to place holders in template
	$formattedDate = $this->imageDateTime->format("Y-m-d H:i:s");
	$parameters = ["imageProfileId" => $this->imageProfileId, "imageDateTime" => $formattedDate, "imageScore" => $this->imageScore];
	$statement->execute($parameters);

	//update null imageId with mySQL data
	$this->imageId = intval($pdo->lastInsertId());
}
/** deletes image in mySQL
 * @param \PDO $pdo PDO connection object
 * @throws \PDOException when mySQL related errors occur
 * @throws \TypeError if $pdo is not a PDO connection object
 */
public function delete(\PDO $pdo) {
	// ensure image id not null
	if($this->imageId === null) {
		throw(new \PDOException("Can't delete a tweet that doesn't exist"));
	}

	//create query template
	$query = "DELETE FROM image WHERE imageId = :imageId";
	$statement = $pdo->prepare($query);

	//bind member variables to place holder in template
	$parameters = ["imageId" => $this->imageId];
	$statement->execute($parameters);
}

/**
 * updates image in mySQL
 * @param \PDO $pdo PDO connection object
 * @throws \PDOException when mySQL related errors occur
 * @throws \TypeError if $pdo is not a PDO connection object
 */
public function update(\PDO $pdo) {
	//ensure imageID not null
	if($this->imageId === null) {
		throw(new \PDOException("Can't update image that doesn't exist."));
	}
	//create query template
	$query = "UPDATE image SET imageProfileId = :imageProfileId, imageScore = :imageScore, imageDateTime = :imageDateTime";
	$statement = $pdo->prepare($query);

	// bind member variables to place holder in template
	$formattedDate = $this->imageDateTime->format("Y-m-d H:i:s");
	$parameters = ["imageProfileId" => $this->imageProfileid, "imageScore" => $this->imageScore, "imageDateTime" => $formattedDate, "imageId" => $this->imageId];
	$statement->execute($parameters);
}




}
/**
*/

