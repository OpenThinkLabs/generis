<?php
/**
 * VersionException class
 * TODO VersionException class documentation.
 * 
 * @author J�r�me Bogaerts <jerome.bogaerts@tudor.lu> <jerome.bogaerts@gmail.com>
 */
class VersionException extends Exception
{
	public function __construct($message)
	{
		parent::__construct($message);
	}
}
?>