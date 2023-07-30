<?php

namespace user_classes;

class UserModuleForExecuteTaskEx1Demo1
{
    public static function DateIsBetween()
    {
        $todayTimestamp = strtotime(date("G:i"));
        return (($todayTimestamp >= strtotime(date("09:00")))
            && ($todayTimestamp <= strtotime(date("18:00"))));
    }

    public static function Dump($data)
    {
        ?>
        <pre>
            <?php print_r($data); ?>
        </pre>
        <?php
    }
}
