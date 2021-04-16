$( document ).ready( function () {
    var $tabs = $( ".tabs-menu a" ).click( function ( event ) {

        event.preventDefault();
        $( ".tab-content" ).hide();

        var $parent = $( this ).parent();

        if ( $parent.is( '.current' ) ) {
            $parent.removeClass( 'current' );
            $tabs.removeClass( 'current' );
            return;
        }

        $tabs.removeClass( 'current' );
        $parent.addClass( "current" );

        var tab = $( this ).attr( "href" );
        $( tab ).fadeIn();
    } ).parent();

    var y = $( this ).scrollTop();
    if ( y > 150 ) {
        $( '.sticky-contact' ).fadeIn();
    } else {
        $( '.sticky-contact' ).fadeOut();
    }

    if ( matchMedia ) {
        var mq = window.matchMedia( "(max-width: 768px)" );
        mq.addListener( WidthChange );
        WidthChange( mq );
    }

    function WidthChange( mq ) {
        if ( mq.matches ) {
            $( "#Foo" ).removeClass( "in" );
        }
    }

    $( window ).scroll();

    $( '.goto-top' ).click( function () {
        $.scrollTo( '0', {
            duration: '250'
        } );
        return false;
    } );

    $( ".close" ).click( function () {
        $( ".tab-content" ).hide();
        $( ".tabs-menu li" ).removeClass( 'current' );

    } );

    $( 'body' ).click( function ( e ) {
        if ( !$( e.target ).closest( '#tabs-container' ).length ) {
            $tabs.filter( '.current' ).find( 'a' ).click();
        }
    } )
} );
