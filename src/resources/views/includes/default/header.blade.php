<div class="preloader">
    <div class="preloader-spinner"></div>
</div>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WTTWRMX"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<style type="text/css" media="screen">
    .watermark {
        color: #999 !important;
    }
</style>

<?php /*TODO: Refactorizar esto*/ ?>
<script type="text/javascript">
    $( function () {
        $( '.form-hidden' ).slideUp( 0 );
        $( '.form-viewmore' ).click( function () {

            $( '.preloader' ).addClass( 'show' );

            setTimeout(function(){ $( '.preloader' ).removeClass( 'show' ); }, 1500);

            return false;
        } );

    } );

    function goTop(){
        $('html, body').animate({
            scrollTop: 0
        }, 500);
    }
</script>
