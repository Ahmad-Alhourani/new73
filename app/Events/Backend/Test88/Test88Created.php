<?php
namespace App\Events\Backend\Test88;

use Illuminate\Queue\SerializesModels;
/**
 * Class Test88Created.
 */
class Test88Created
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
