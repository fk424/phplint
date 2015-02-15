<?php

namespace it\icosaedro\io;
require_once __DIR__ . "/../../../errors.php";
require_once __DIR__ . "/IOException.php";

/**
 * Writable stream of bytes. Several implementations of this abstract class
 * may provide, for example, access to the file system or to data in memory.
 *
 * @author Umberto Salsi <salsi@icosaedro.it>
 * @version $Date: 2014/11/24 20:57:40 $
 */
abstract class OutputStream {

	
	/**
	 * Writes a single byte.
	 * @param int $b Byte to write. Only the lower 8 bits are actually
	 * written.
	 * @return void
	 * @throws IOException
	 */
	abstract public function writeByte($b);


	/**
	 * Writes a string of bytes. Does nothing if the string is NULL
	 * or empty.
	 * @param string $bytes
	 * @return void
	 * @throws IOException
	 */
	public function writeBytes($bytes) {
		$len = strlen($bytes);
		for($i = 0; $i < $len; $i++)
			$this->writeByte(ord($bytes[$i]));
	}


	/**
	 * Does its best to actually write any pending data stored the internal
	 * buffer.
	 * @return void
	 * @throws IOException
	 */
	function flush()
	{}


	/**
	 * Closes the file, flushing internal buffers.
	 * Does nothing if already closed.
	 * Once closed, this object cannot be used anymore.
	 * @return void
	 * @throws IOException
	 */
	public function close() {}


}
