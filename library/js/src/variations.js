/*
 *  All regular jQuery here
 */
wp.domReady( function() {


    /**
     * Push to top - buttons block
     */
    wp.blocks.registerBlockVariation( 'core/buttons', {
        name: 'scrollr-push-to-top',
        title: 'Scrollr - to top',
        description: 'Push the page up to the top',
        icon: 'arrow-up',
        isDefault: false,
        attributes: {
            className: 'scrollr-topper',
        },
        innerBlocks: [
            [
                'core/button',
                {text: '↑'}
            ]
        ]
    } );


}); // end jQuerys
