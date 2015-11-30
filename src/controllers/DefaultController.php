<?php 
    namespace axianet\fury\controllers;

    use yii\web\Controller;
    use axianet\fury\test\myTest;

    class DefaultController extends Controller
    {
        public function actionIndex()
        {
            $test = new myTest();
            $test->test();
        }
    }
?>