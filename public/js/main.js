/**
 * Vue.js code
 */

var vue = new Vue({
    // define scope
    el: '#outer',

    data: {
        selected: false,
        players: []
    },
    ready: function() {
        this.fetchPlayerList();
    },
    methods: {
        fetchPlayerList: function() {
            $.ajax({
                context: this,
                url: "/api/players",
                success: function (result) {
                    // By default no item should be tagged as selected
                    // unless it already was selected
                    var current_selection = this.selected;
                    $(result).each(function () {
                        if ($(this).attr('name') != current_selection) {
                            $(this).attr('isSelected', false);
                        } else {
                            $(this).attr('isSelected', true);
                        }
                    });
                    // update players array (data)
                    this.$set("players", result)
                }
            })
        },
        // bound to all span elements that include the name in list players
        selectPlayer: function(index) {
            // remove selection from all players
            $(this.players).each(function () {
                $(this).attr('isSelected', false);
            });
            // make new selection and set variable
            this.selected = this.players[index].name;
            this.players[index].isSelected = true;
        },
        // bound to form
        onCreate: function(event) {
            event.preventDefault();
            // POST request
            $.ajax({
                context: this,
                type: "POST",
                data: {
                    name: this.selected
                },
                url: "/api/increment_player_score_by_five",
                success: function(result) {
                    // success callback, uncomment following line to test when broadcasting is not enabled
                    // this.fetchPlayerList();
                },
                error:function(exception) {
                    // error callback
                    // console.log('Exeption:'+exception);
                }
            });
        }
    }
});