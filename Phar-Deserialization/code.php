<?php
class AnyClass {
	function __destruct() {
		eval($this->data);
	}
}
echo mime_content_type('test.jpg');
filesize('phar://test.jpg');
