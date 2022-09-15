<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Fired when a prerender attempt is completed.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class PrerenderAttemptCompletedEvent implements \JsonSerializable
{
	/**
	 * The frame id of the frame initiating prerendering.
	 *
	 * @var string
	 */
	public $initiatingFrameId;

	/** @var string */
	public $prerenderingUrl;

	/** @var string */
	public $finalStatus;

	/**
	 * This is used to give users more information about the name of the API call that is incompatible with prerender and has caused the cancellation of the attempt
	 *
	 * @var string|null
	 */
	public $disallowedApiMethod;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->initiatingFrameId)) {
			$instance->initiatingFrameId = (string)$data->initiatingFrameId;
		}
		if (isset($data->prerenderingUrl)) {
			$instance->prerenderingUrl = (string)$data->prerenderingUrl;
		}
		if (isset($data->finalStatus)) {
			$instance->finalStatus = (string)$data->finalStatus;
		}
		if (isset($data->disallowedApiMethod)) {
			$instance->disallowedApiMethod = (string)$data->disallowedApiMethod;
		}
		return $instance;
	}


	#[\ReturnTypeWillChange]
	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->initiatingFrameId !== null) {
			$data->initiatingFrameId = $this->initiatingFrameId;
		}
		if ($this->prerenderingUrl !== null) {
			$data->prerenderingUrl = $this->prerenderingUrl;
		}
		if ($this->finalStatus !== null) {
			$data->finalStatus = $this->finalStatus;
		}
		if ($this->disallowedApiMethod !== null) {
			$data->disallowedApiMethod = $this->disallowedApiMethod;
		}
		return $data;
	}
}
