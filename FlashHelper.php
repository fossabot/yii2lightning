<?php
namespace dtfreeman\yii2lightning;


class FlashHelper
{
    public static function info($message, ...$params)
    {
        \Yii::$app->session->setFlash('info', static::getFirstMessage($message, $params));
    }

    public static function success($message, ...$params)
    {
        \Yii::$app->session->setFlash('success', static::getFirstMessage($message, $params));
    }

    public static function error($message, ...$params)
    {
        \Yii::$app->session->setFlash('error', static::getFirstMessage($message, $params));
    }

    public static function getFirstMessage($messages, $params)
    {
        $message = '';

        if (is_array($messages)) {
            if (count($messages) != 0) {
                $message = array_values($messages)[0];
            }
        } else {
            $message = $messages;
        }
        foreach ($params as $k => $v) {
            $message = str_replace('{' . $k . '}', $v, $message);
        }
        return $message;
    }
}