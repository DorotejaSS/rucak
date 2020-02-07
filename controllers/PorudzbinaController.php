<?php

namespace app\controllers;

use Yii;
use app\models\Porudzbina;
use app\models\PorudzbinaSearch;
use app\models\GlavnoJelo;
use app\models\GlavnoJeloSearch;
use app\models\Prilog;
use app\models\PrilogSearch;
use app\models\Salata;
use app\models\SalataSearch;
use app\models\Hleb;
use app\models\HlebSearch;
use app\models\OdrediCenu;
use app\models\Dan;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

/**
 * PorudzbinaController implements the CRUD actions for Porudzbina model.
 */
class PorudzbinaController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Porudzbina models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel_glavno_jelo = new GlavnoJeloSearch();
        $dataProvider_glavno_jelo = $searchModel_glavno_jelo->search(Yii::$app->request->queryParams);

        $searchModel_prilog = new PrilogSearch();
        $dataProvider_prilog = $searchModel_prilog->search(Yii::$app->request->queryParams);

        $searchModel_salata = new SalataSearch();
        $dataProvider_salata = $searchModel_salata->search(Yii::$app->request->queryParams);

        $searchModel_hleb = new HlebSearch();
        $dataProvider_hleb  = $searchModel_hleb->search(Yii::$app->request->queryParams);

        $glavno_jelo = GlavnoJelo::getAll();
        $prilog = Prilog::getAll();
        $salata = Salata::getAll();
        $hleb = Hleb::getAll();
        $cena = OdrediCenu::getAll();
        $id_user = Yii::$app->user->identity->id_user;
        $dan =  new Dan();
        $naziv_dana = $dan->getGlavnoJelos();
    

        return $this->render('index', [
            'searchModel_glavno_jelo' => $searchModel_glavno_jelo,
            'dataProvider_glavno_jelo' => $dataProvider_glavno_jelo,
            'searchModel_prilog' => $searchModel_prilog,
            'dataProvider_prilog' => $dataProvider_prilog,
            'searchModel_salata' => $searchModel_salata,
            'dataProvider_salata' => $dataProvider_salata,
            'searchModel_hleb' => $searchModel_hleb,
            'dataProvider_hleb' => $dataProvider_hleb,
            'glavno_jelo' => $glavno_jelo,
            'prilog' => $prilog,
            'salata' => $salata,
            'hleb' => $hleb,
            'cena' => $cena,
            'id_user' => $id_user

        ]);
    }

    /**
     * Displays a single Porudzbina model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $user_id = Yii::$app->user->identity->id;
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionPoruceno()
    {   
        $user_id = Yii::$app->user->identity->id;
        $model = Porudzbina::getById($user_id);
        $searchModel = new PorudzbinaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('poruceno', [
            'model' => $model,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider
        ]);

    }

    /**
     * Creates a new Porudzbina model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Porudzbina();

        $glavno_jelo = ArrayHelper::map(GlavnoJelo::getAll(),'id_glavno_jelo', 'ime_jela');
        $prilog = ArrayHelper::map(Prilog::getAll(), 'id_prilog', 'ime_priloga');
        $salata = ArrayHelper::map(Salata::getAll(), 'id_salata', 'ime_salate');
        $hleb = ArrayHelper::map(Hleb::getAll(), 'id_hleb', 'ime_hleba');
        $cena = OdrediCenu::getAll();
        $id = Yii::$app->user->identity->id_user;
       

        if ($model->load(Yii::$app->request->post())) { 
            $model->cena = $cena->trenutna_cena;
            $model->id_user = $id;
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id_porudzbina]);
            }
        }

        return $this->render('create', [
            'model' => $model,
            'glavno_jelo' => $glavno_jelo,
            'prilog' => $prilog,
            'salata' => $salata,
            'hleb' => $hleb,
            'cena' => $cena,
            'user_id' => $id
        ]);
    }

    /**
     * Updates an existing Porudzbina model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_porudzbina]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Porudzbina model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Porudzbina model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Porudzbina the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Porudzbina::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
