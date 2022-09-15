<?php

namespace ChromeDevtoolsProtocol\Model\Target;

/**
 * Response to Target.getTargetInfo command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetTargetInfoResponse implements \JsonSerializable
{
	/** @var TargetInfo */
	public $targetInfo;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->targetInfo)) {
			$instance->targetInfo = TargetInfo::fromJson($data->targetInfo);
		}
		return $instance;
	}


	#[\ReturnTypeWillChange]
	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->targetInfo !== null) {
			$data->targetInfo = $this->targetInfo->jsonSerialize();
		}
		return $data;
	}
}
