<?php
namespace frontend\controllers;

/**
 * Docs controller
 */
class DocsController extends BaseController
{
    public function __construct($id, $module, $config = array())
    {
        parent::__construct($id, $module, $config);
        $this->layout = "doc";
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
