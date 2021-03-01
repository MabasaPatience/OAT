<script src="./src/js/welcomeBot"></script>
        <script src="https://assistant-web.watsonplatform.net/loadWatsonAssistantChat.js"></script>

        <script>
            var options = {
                integrationID: '1e3c44ae-7dff-4cbf-84c4-3424d062584f', // A UUID like '1d7e34d5-3952-4b86-90eb-7c7232b9b540'
                region: 'eu-gb' // 'us-south', 'us-east', 'jp-tok' 'au-syd', 'eu-gb', 'eu-de', etc
            };
            window.loadWatsonAssistantChat(options).then(function(instance) {
                // Your handler
                function handler(obj) {
                    console.log(obj.type, obj.data);
                }
                console.log('instance', instance);

                // console.log out details of any "receive" event
                instance.on({
                    type: "receive",
                    handler: handler
                });
                // console.log out details of any "send" event
                instance.on({
                    type: "send",
                    handler: handler
                });

                // 30 seconds later, unsubscribe from listening to "send" events
                setTimeout(function() {
                    instance.off({
                        type: "send",
                        handler: handler
                    });
                }, 30000);

                // Actually = "Fill all the fields!" render the Web Chat.
                instance.render();
            });
        </script>
        <!-- Code injected by live-server -->
        <script type="text/javascript">
            // <![CDATA[  <-- For SVG support
            if ('WebSocket' in window) {
                (function() {
                    function refreshCSS() {
                        var sheets = [].slice.call(document.getElementsByTagName("link"));
                        var head = document.getElementsByTagName("head")[0];
                        for (var i = 0; i < sheets.length; ++i) {
                            var elem = sheets[i];
                            var parent = elem.parentElement || head;
                            parent.removeChild(elem);
                            var rel = elem.rel;
                            if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
                                var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                                elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
                            }
                            parent.appendChild(elem);
                        }
                    }
                    var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
                    var address = protocol + window.location.host + window.location.pathname + '/ws';
                    var socket = new WebSocket(address);
                    socket.onmessage = function(msg) {
                        if (msg.data == 'reload') window.location.reload();
                        else if (msg.data == 'refreshcss') refreshCSS();
                    };
                    if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                        console.log('Live reload enabled.');
                        sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
                    }
                })();
            } else {
                console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
            }
            // ]]>
        </script>


