<?php
class LinkController() {
    public function getListHTML() {
        $links = Link::getLinks();
        // $view = new BookListView();
        // echo $view->render($books);
    }
}
 ?>