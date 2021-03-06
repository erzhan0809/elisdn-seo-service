<?php
/**
 * Created by PhpStorm.
 * User: Yerzhan
 * Date: 08.02.2017
 * Time: 14:27
 */

namespace app\modules\user\controllers;


use app\modules\user\forms\PasswordChangeForm;
use app\modules\user\models\User;
use yii\filters\AccessControl;
use yii\web\Controller;
use Yii;

class ProfileController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index', ['model' => $this->findModel()]);
    }

    public function actionUpdate()
    {
        $model = $this->findModel();
        $model->scenario = User::SCENARIO_PROFILE;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('index');
        } else {
            return $this->render('update', ['model' => $model]);
        }
    }

    public function actionPasswordChange()
    {
        $user = $this->findModel();
        $model = new PasswordChangeForm($user);

        if ($model->load(Yii::$app->request->post()) && $model->changePassword()) {
            Yii::$app->session->setFlash('success','Пароль успешно изменен');
            $this->redirect(['index']);
        } else {
            return $this->render('passwordChange',['model'=>$model]);
        }
    }

    /**
     * @return User loaded model
     */
    private function findModel()
    {
        return User::findOne(Yii::$app->user->identity->getId());
    }
}