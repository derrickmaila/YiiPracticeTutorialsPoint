<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{

    //public $layout = "newlayout";
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

        $email = "admin@support.com";
        $phone = "+78007898100";
        $date = date('Y-m-d H:i:s');
        return $this->render('about',[
            'email' => $email,
            'phone' => $phone,
            'date' => $date
        ]);
    }

    public function actionSpeak($message = "default message"){

        return $this->render("Speak",['message' => $message]);

    }

    public function actionShowContactModel(){
        $mContactForm  = new \app\models\ContactForm();
        $mContactForm->name = "contactForm";
        $mContactForm->email = "user@gmail.com";
        $mContactForm->subject = "subject";
        $mContactForm->body = "body";
        return \yii\helpers\Json::encode($mContactForm);
        //dump($mContactForm);
    }

    public function actionTestWidget(){
        return $this->render('testwidget');
    }
    public function actionTestGet(){
        $req = Yii::$app->request;
        //echo "<pre>". print_r($req,true)."</pre>";
        //die;
        switch($req){
            case 'isAjax':
                echo "the request is AJAX";
                break;
            case 'isGet':
                echo "the request is GET";
                break;
            case 'isPost':
                echo "the request is POST";
                break;
            case 'isPut':
                echo "the request is PUT";
                break;
            default:
                   print "Invalid request";
                   break;
        }
        //var_dump($req);


    }

    public function actionTestRequests() {
        $req = Yii::$app->request;
        if ($req->isAjax) {
            echo "the request is AJAX";
        }
        if ($req->isGet) {
            echo "the request is GET";
        }
        if ($req->isPost) {
            echo "the request is POST";
        }
        if ($req->isPut) {
            echo "the request is PUT";
        }
    }
    public function actionTestBasics(){

        //the URL without the host
        var_dump(Yii::$app->request->url);

        //the whole URL including the host path
        var_dump(Yii::$app->request->absoluteUrl);

        //the host of the URL
        var_dump(Yii::$app->request->hostInfo);

        //the part after the entry script and before the question mark
        var_dump(Yii::$app->request->pathInfo);

        //the part after the question mark
        var_dump(Yii::$app->request->queryString);

        //the part after the host and before the entry script
        var_dump(Yii::$app->request->baseUrl);

        //the URL without path info and query string
        var_dump(Yii::$app->request->scriptUrl);

        //the host name in the URL
        var_dump(Yii::$app->request->serverName);

        //the port used by the web server
        var_dump(Yii::$app->request->serverPort);

    }
}

