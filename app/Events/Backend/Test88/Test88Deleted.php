<?php namespace App\Events\Backend\Test88;

use Illuminate\Queue\SerializesModels;
/**
 * Class Test88Deleted.
 */

class Test88Deleted
{
    use SerializesModels;
    /**
     * @var
     */

    public $test88;

    /**
     * @param $test88
     */
    public function __construct($test88)
    {
        $this->test88 = $test88;
    }
}
