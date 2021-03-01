
        <script src="https://assistant-web.watsonplatform.net/loadWatsonAssistantChat.js"></script>

        <script>
            var options = {
                integrationID: '375c1143-8431-471a-8296-31e2c9e24246', // A UUID like '1d7e34d5-3952-4b86-90eb-7c7232b9b540'
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

                // Actually render the Web Chat.
                instance.render();
            });
        </script>
