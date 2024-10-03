<?php
/**
 * The message entity.
 *
 * @package WooCommerce\PayPalCommerce\AdminNotices\Entity
 */

declare( strict_types = 1 );

namespace WooCommerce\PayPalCommerce\AdminNotices\Entity;

/**
 * Class Message
 */
class Message {

	/**
	 * The message text.
	 *
	 * @var string
	 */
	private $message;

	/**
	 * The message type.
	 *
	 * @var string
	 */
	private $type;

	/**
	 * Whether the message is dismissible.
	 *
	 * @var bool
	 */
	private $dismissible;

	/**
	 * The wrapper selector that will contain the notice.
	 *
	 * @var string
	 */
	private $wrapper;

	/**
	 * Message constructor.
	 *
	 * @param string $message     The message text.
	 * @param string $type        The message type.
	 * @param bool   $dismissible Whether the message is dismissible.
	 * @param string $wrapper     The wrapper selector that will contain the notice.
	 */
	public function __construct( string $message, string $type, bool $dismissible = true, string $wrapper = '' ) {
		$this->type        = $type;
		$this->message     = $message;
		$this->dismissible = $dismissible;
		$this->wrapper     = $wrapper;
	}

	/**
	 * Returns the message text.
	 *
	 * @return string
	 */
	public function message() : string {
		return $this->message;
	}

	/**
	 * Returns the message type.
	 *
	 * @return string
	 */
	public function type() : string {
		return $this->type;
	}

	/**
	 * Returns whether the message is dismissible.
	 *
	 * @return bool
	 */
	public function is_dismissible() : bool {
		return $this->dismissible;
	}

	/**
	 * Returns the wrapper selector that will contain the notice.
	 *
	 * @return string
	 */
	public function wrapper() : string {
		return $this->wrapper;
	}

	/**
	 * Returns the object as array, for serialization.
	 *
	 * @return array
	 */
	public function to_array() : array {
		return array(
			'type'        => $this->type,
			'message'     => $this->message,
			'dismissible' => $this->dismissible,
			'wrapper'     => $this->wrapper,
		);
	}

	/**
	 * Converts a plain array to a full Message instance, during deserialization.
	 *
	 * @param array $data Data generated by `Message::to_array()`.
	 *
	 * @return Message
	 */
	public static function from_array( array $data ) : Message {
		return new Message(
			(string) ( $data['message'] ?? '' ),
			(string) ( $data['type'] ?? '' ),
			(bool) ( $data['dismissible'] ?? true ),
			(string) ( $data['wrapper'] ?? '' )
		);
	}
}
