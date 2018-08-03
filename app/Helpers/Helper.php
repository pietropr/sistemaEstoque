<?php

function bodyClass() {
    $body_classes = array();
    $class = "";

    foreach ( \Request::segments() as $segment )
    {
        if ( is_numeric( $segment ) || empty( $segment ) ) {
            continue;
        }

        $class .= ! empty( $class ) ? "-" . $segment : $segment;

        array_push( $body_classes, $class );
    }

    return ! empty( $body_classes ) ? implode( ' ', $body_classes ) : NULL;

}