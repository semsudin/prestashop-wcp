<?php
/*
    Die vorliegende Software ist Eigentum von Qenta CEE und daher vertraulich zu behandeln.
    Jegliche Weitergabe an dritte, in welcher Form auch immer, ist unzulaessig.

    Software & Service Copyright (C) by
    Qenta Payment CEE GmbH,
    FB-Nr: FN 195599 x, https://www.qenta.com
*/

if(!class_exists('Zend_Exception', false))
{
    require_once 'Zend/Exception.php';
}

/**
 * class for all QPay exceptions.
 * e.g. messages returned from QPay if initiation failed.
 */
final class Qenta_CEE_QPay_Exception extends Zend_Exception
{
    
}