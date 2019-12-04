<?php

namespace MinifyHtml\View\Helper;

use Cake\Core\Configure;
use Cake\Event\Event;
use Cake\View\Helper;
use WyriHaximus\HtmlCompress\Factory;

class MinifyHtmlHelper extends Helper {

    /**
     * @var array
     */
    protected $_defaultConfig = [
        'mimeTypes' => [
            'text/html',
            'text/xhtml',
        ],
        'always' => false,
    ];

    /**
     * @param \Cake\Event\Event $event
     * @param string $layoutFile
     */
    public function afterLayout(Event $event, $layoutFile) {
        $responseType = $this->getView()->getResponse()->getType();
        if ((!Configure::read('debug') || $this->getConfig('always')) && in_array($responseType, $this->getConfig('mimeTypes'))) {
            $parser = Factory::construct();
            $content = $this->getView()->fetch('content');
            $compressedContent = $parser->compress($content);
            $this->getView()->assign('content', $compressedContent);
        }
    }

}
