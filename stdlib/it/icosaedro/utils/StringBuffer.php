<?php

/*.
	require_module 'standard';
	require_module 'spl';
	require_module 'streams';
.*/

namespace it\icosaedro\utils;
require_once __DIR__ . '/../../../all.php';
use it\icosaedro\containers\Printable;
use RuntimeException;
use ErrorException;

/**
 * Buffer where to concatenate strings. For large buffers (say, more than 1 MB)
 * this class is about 10 times faster than string concatenation.
 * @author Umberto Salsi <salsi@icosaedro.it>
 * @version $Date: 2014/11/25 20:43:25 $
 */
class StringBuffer implements Printable {
	
	/**
	 * @access private
	 */
	const MEMORY_STREAM = "php://memory";

	/**
	 * @var resource
	 */
	private $buf;

	/**
	 * Initializes an empty buffer.
	 * @return void 
	 */
	public function __construct() {
		try {
			$this->buf = fopen(self::MEMORY_STREAM, "wb+");
		}
		catch(ErrorException $e){
			throw new RuntimeException("opening " . self::MEMORY_STREAM . ": $e");
		}
	}

	/**
	 * Add a string to the end of the buffer.
	 * @param string $s
	 * @return void 
	 */
	public function append($s) {
		if( strlen($s) == 0 )
			return;
		try {
			fwrite($this->buf, $s);
		}
		catch(ErrorException $e){
			throw new RuntimeException("writing " . self::MEMORY_STREAM . ": $e");
		}
	}

	/**
	 * Returns the current content of this buffer.
	 * @return string 
	 */
	public function __toString() {
		try {
			rewind($this->buf);
			$s = stream_get_contents($this->buf);
			fseek($this->buf, 0, SEEK_END);
			return $s;
		}
		catch(ErrorException $e){
			throw new RuntimeException("reading " . self::MEMORY_STREAM . ": $e");
		}
	}

}
