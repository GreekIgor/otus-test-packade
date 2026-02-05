<?php
namespace Src;
class TestPackade{

	private $conf;
	
    public function __construct(array $conf = array())
    {
       $this->conf = $conf;
    }

    public function Test()
    {
        return 'Test packade';
    }

    public function Test2()
    {
        return 'Test fix 2';
    }
	
}
