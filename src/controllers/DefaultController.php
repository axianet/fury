<?php 
    namespace vendor\axianet\fury\controllers;

    use yii\web\Controller;
    use vendor\axianet\fury\test\myTest;

    class DefaultController extends Controller
    {
        public function actionIndex()
        {
            $test = new myTest();
            $test->test();
        }
    }
?>