<?php
namespace frontend\controllers;

use yii\web\Controller;

/**
 * Doc controller
 */
class DocController extends Controller
{
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
