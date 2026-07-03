<?php
// ctype-polyfill.php
if ( !function_exists( 'ctype_alnum' ) ) { function ctype_alnum( $text ) { return is_string( $text ) && preg_match( '/^[a-zA-Z0-9]+$/', $text ); } }
if ( !function_exists( 'ctype_alpha' ) ) { function ctype_alpha( $text ) { return is_string( $text ) && preg_match( '/^[a-zA-Z]+$/', $text ); } }
if ( !function_exists( 'ctype_cntrl' ) ) { function ctype_cntrl( $text ) { return is_string( $text ) && preg_match( '/^[\x00-\x1f\x7f]+$/', $text ); } }
if ( !function_exists( 'ctype_digit' ) ) { function ctype_digit( $text ) { return ( is_string( $text ) || is_int( $text ) ) && preg_match( '/^\d+$/', (string) $text ); } }
if ( !function_exists( 'ctype_graph' ) ) { function ctype_graph( $text ) { return is_string( $text ) && preg_match( '/^[\x21-\x7e]+$/', $text ); } }
if ( !function_exists( 'ctype_lower' ) ) { function ctype_lower( $text ) { return is_string( $text ) && preg_match( '/^[a-z]+$/', $text ); } }
if ( !function_exists( 'ctype_print' ) ) { function ctype_print( $text ) { return is_string( $text ) && preg_match( '/^[\x20-\x7e]+$/', $text ); } }
if ( !function_exists( 'ctype_punct' ) ) { function ctype_punct( $text ) { return is_string( $text ) && preg_match( '/^[[:punct:]]+$/', $text ); } }
if ( !function_exists( 'ctype_space' ) ) { function ctype_space( $text ) { return is_string( $text ) && preg_match( '/^[[:space:]]+$/', $text ); } }
if ( !function_exists( 'ctype_upper' ) ) { function ctype_upper( $text ) { return is_string( $text ) && preg_match( '/^[A-Z]+$/', $text ); } }
if ( !function_exists( 'ctype_xdigit' ) ) { function ctype_xdigit( $text ) { return is_string( $text ) && preg_match( '/^[a-fA-F0-9]+$/', $text ); } }
