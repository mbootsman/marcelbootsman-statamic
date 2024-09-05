<?php

namespace App\Tags;

use Statamic\Tags\Tags;
use Torchlight\Blade\BladeManager;
use Torchlight\Block;
class Torchlight extends Tags {

    /**
     * {{ torchlight language="php" }}{{ my_code }}{{ /torchlight }}
     */
    public function index(){ 

        
        $language = $this->params->get('language');
        $code = $this->context->get('code');
        $block = Block::make()
            ->language($language)
            ->code($code)
            ->theme(config('torchlight.theme'));
        BladeManager::registerBlock($block);

        $render = function (Block $block) {
            return "<pre class='relative'><code class='{$block->placeholder('classes')}' 
                style='{$block->placeholder('styles')}'>{$block->placeholder()}</code>
                <div class='text-xs select-none opacity-50 top-0 right-0 p-2 absolute uppercase'>{$block->language}</div></pre>";
        };
        return $render($block);

    }

}