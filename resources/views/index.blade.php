<!DOCTYPE html>
<html>
    <head>
        <title>Leaderboard</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div id="outer">
            <div class="leaderboard">
                <div class="player"
                     v-bind:class="{ selected: player.isSelected }"
                     v-for="player of players">
                <span class="name"
                      v-on:click="selectPlayer($index)"
                >
                    @{{ player.name }}
                </span>
                <span class="score">
                    @{{ player.score }}
                </span>
                </div>
            </div>
            <div class="details">
                <player class="name">@{{ selected ? selected : 'Click a player to select' }}</player>
                <form v-on:submit="onCreate">
                    <input type="hidden" name="name" value="@{{ selected }}">
                    <input type="submit" class="inc" value="Give 5 points" v-show="selected">
                </form>
            </div>
        </div>

        <!-- JavaScript Files -->
        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="http://cdn.jsdelivr.net/vue/1.0.17/vue.min.js"></script>
        <script src="https://js.pusher.com/3.0/pusher.min.js"></script>
        <script>
            var pusher = new Pusher('{{ env('PUSHER_KEY') }}');
        </script>
        <script src="/js/main.js"></script>
        <script src="js/pusher.js"></script>
    </body>
</html>