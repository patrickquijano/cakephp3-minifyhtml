<?php

namespace MinifyHtml\Test\TestCase\View\Helper;

use Cake\TestSuite\TestCase;
use Cake\View\View;
use MinifyHtml\View\Helper\MinifyHtmlHelper;

class MinifyHtmlHelperTest extends TestCase {

    /**
     * @var \MinifyHtml\View\Helper\MinifyHtmlHelper
     */
    public $MinifyHtml;

    /**
     * @return void
     */
    public function setUp() {
        parent::setUp();
        $view = new View();
        $this->MinifyHtml = new MinifyHtmlHelper($view);
    }

    /**
     * @return void
     */
    public function tearDown() {
        unset($this->MinifyHtml);
        parent::tearDown();
    }

    /**
     * @return void
     */
    public function testInitialization() {
        $this->markTestIncomplete('Not implemented yet.');
    }

}
