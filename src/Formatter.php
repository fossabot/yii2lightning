<?php


namespace qwenode\yii2lightning;


class Formatter
{
    public static function asDate($value, $format = NULL)
    {
        return \Yii::$app->getFormatter()->asDate($value, $format);
    }

    public static function asDatetime($value, $format = NULL)
    {
        return \Yii::$app->getFormatter()->asDatetime($value, $format);
    }

    public static function asTime($value, $format = NULL)
    {
        return \Yii::$app->getFormatter()->asTime($value, $format);
    }
}