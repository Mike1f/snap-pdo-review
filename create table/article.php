<?php
namespace Edu\Cnm\DataDesign;

require_once("autoload.php");
require_once(dirname(__DIR__, 2) . "/vendor/autoload.php");

use Ramsey\Uuid\Uuid;

class Senator implements \JsonSerializable {
	use ValidateUuid;

	private $senatorId;
	private $senatorName;
	private $senatorNumLives;

	public function insert(\PDO $pdo): void {
		$query = "INSERT INTO senator(senatorId, senatorName, senatorNumLives) VALUES(:senatorId, :senatorName, :senatorNumLives)";
		$statement = $pdo->prepare($query);
		$parameters = ["senatorId" => $this->senatorId->getBytes()];
		$statement->execute($parameters);
	}

	public function update(\PDO $pdo): void {
		$query = "UPDATE senator SET senatorName = :senatorName";
		$statement = $pdo->prepare($query);
		$parameters = ["senatorId" => $this->senatorId->getBytes(), "senatorName" => $this->senatorName->getBytes()];
		$statement->execute($parameters);
	}

	public function delete(\PDO $pdo): void {
		$query = "DELETE FROM senator WHERE senatorId = :senatorId";
		$statement = $pdo->prepare($query);
		$parameters = ["articleId" => $this->senatorId->getBytes()];
		$statement->execute($parameters);
	}
}