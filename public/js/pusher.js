/**
 * Created by Alex on 05.03.2016.
 */
( function( $, pusher ) {

    var channel = pusher.subscribe('test_channel');

    channel.bind('App\\Events\\ScoreUpdated', function(data) {
        this.vue.fetchPlayerList();
    });

} )( jQuery, pusher);