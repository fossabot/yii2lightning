<?php


namespace qwenode\yii2lightning;


class UtilsHelper
{
    public static function refresh($anchor = '')
    {
        return \Yii::$app->response->refresh($anchor);
    }
}