/**
 * Site Header — mobile drawer toggle.
 *
 * Kept deliberately small: no dependencies, no focus trap (the drawer is a short
 * list in normal document flow, so tabbing simply continues into the page).
 */
( function () {
	'use strict';

	var MOBILE_MAX = 900;

	function init( header ) {
		var toggle = header.querySelector( '.nav-toggle' );
		var drawer = header.querySelector( '.nav-drawer' );

		if ( ! toggle || ! drawer || toggle.dataset.tviqBound ) {
			return;
		}

		toggle.dataset.tviqBound = '1';

		function setOpen( open ) {
			toggle.setAttribute( 'aria-expanded', open ? 'true' : 'false' );
			toggle.setAttribute( 'aria-label', open ? 'Close menu' : 'Open menu' );

			if ( open ) {
				drawer.removeAttribute( 'hidden' );
			} else {
				drawer.setAttribute( 'hidden', '' );
			}
		}

		function isOpen() {
			return toggle.getAttribute( 'aria-expanded' ) === 'true';
		}

		toggle.addEventListener( 'click', function () {
			setOpen( ! isOpen() );
		} );

		document.addEventListener( 'keydown', function ( event ) {
			if ( event.key === 'Escape' && isOpen() ) {
				setOpen( false );
				toggle.focus();
			}
		} );

		document.addEventListener( 'click', function ( event ) {
			if ( isOpen() && ! header.contains( event.target ) ) {
				setOpen( false );
			}
		} );

		// Leaving the mobile breakpoint with the drawer open would otherwise
		// leave aria-expanded="true" on a button that is no longer visible.
		window.addEventListener( 'resize', function () {
			if ( window.innerWidth > MOBILE_MAX && isOpen() ) {
				setOpen( false );
			}
		} );
	}

	function boot() {
		var headers = document.querySelectorAll( '.eti-tpl--theme-site-header-php .tviq-header' );

		for ( var i = 0; i < headers.length; i++ ) {
			init( headers[ i ] );
		}
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', boot );
	} else {
		boot();
	}
} )();
