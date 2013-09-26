<?php

namespace {

from('Hoa')
-> import('Dispatcher.Kit');

}

namespace Application\Controller {

class Regular extends \Hoa\Dispatcher\Kit {

    public function IndexAction ( ) {
		
        $this->view->addOverlay('hoa://Application/View/Regular.xyl');
		$this->view->render();
    }
}
}
