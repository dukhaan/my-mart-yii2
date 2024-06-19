<?php
    namespace frontend\components;

use app\models\Statistic as ModelsStatistic;
use Yii;
use yii\base\Component;

    class Statistic extends Component {

        const EVENT_STATISTIC = 'event-statistic';
        public static function addStatistic() {
            $dataStatistic = new ModelsStatistic();

            $dataStatistic->access_time = date('Y-m-d H:i:s');
            $dataStatistic->user_ip = Yii::$app->request->userIP;
            $dataStatistic->user_host = gethostname();
            $dataStatistic->path_info = Yii::$app->request->pathInfo;
            $dataStatistic->query_string = Yii::$app->request->queryString;

            if($dataStatistic->save()) {
                echo "<script>console.log('oke')</script>";
            } else {
                echo "<script>console.log('gagal')</script>";
            }
        }
    }

?>