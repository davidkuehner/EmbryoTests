<?php

namespace {

from('Hoa')
-> import('Dispatcher.Kit');

}

namespace Application\Controller {

class Blog extends \Hoa\Dispatcher\Kit {

    public function IndexAction ( ) {

        echo 'Gordon\'s blog index.', "\n";
    }
}

}
