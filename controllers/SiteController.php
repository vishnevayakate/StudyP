<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

use app\models\ServerTime;
use app\models\CurrentTime;
use app\models\EntryForm;


class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    { 
        return $this->render('about');
    }
    
        public function actionMysay($message = "Hello")
    {
        //return $message; 
        //return $this->render('about');
        return $this->render('mysay',['message'=> $message]);
    }
    
    public function actionServertime($message = "Hello")
    {
        $time = new ServerTime();
        $svtime = $time->getTime();
       // $message = "Hello";
        return $this->render('servertime',['time1' => $svtime,'message' => $message]);    
    }
    
    public function actionTimes()
    {
        $time = new CurrentTime();
        //sleep(2);
        $time->setCurrentTime();
        $currentTime = $time->getCurrentTime();
       //  return $this->render('times');
         return $this->render('times',['currTime' => $currentTime]);
    }   
    
    public function actionEntry()
    {
        $model = new EntryForm();
        
        if ($model->load(Yii::$app->request->post()) && $model->validate()){
            // данные в $model удачно проверены

            // делаем что-то полезное с $model ...
            
           return $this->render('entry-confirm', ['model' => $model]);
        } else {
            return $this->render('entry',['model' => $model]);
            // либо страница отображается первый раз, либо есть ошибка в данных
        }
    }
}
