<?php
namespace Src;
class TestPackade{
	
    public function __construct(public array $conf = [])
    {
        //
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