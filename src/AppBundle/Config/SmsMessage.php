<?php


namespace AppBundle\Config;

class SmsMessage
{
    const SMS = "Le comunicamos que a";
    const SMS2 = "se le ha puesto un parte disciplinario por conducta inadecuada. 
    Se le entrega copia en papel que debe ser firmada y devuelta al centro.
    Un cordial saludo.
    Convivencia
    IES Gran Capitán.";

    public static function getMessagePre()
    {
        return self::SMS;
    }

    public static function getMessagePost()
    {
        return self::SMS2;
    }
}