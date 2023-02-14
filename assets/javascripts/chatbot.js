(async () => {
    var pathArray = window.location.pathname.split( '/' );
    pathArray.pop();
    var absolutePath = window.location.protocol + '//' + window.location.host + pathArray.join('/');
    const response = await axios(
        {
            method: 'post',
            url: `${absolutePath}/routes/get-user`,
        }
    );

    console.log('User Axios Response');
    if(response){
        console.log(response);

        function onTidioChatApiReady() {
            if(response.data.hasOwnProperty('info')){
                const visitorName = `${response.data.info.first_name} ${response.data.info.last_name}`;
                console.log('Tidio API is Ready');

                tidioChatApi.setVisitorData({
                    distinct_id: response.data.info.id,
                    email: response.data.info.email, // visitor email
                    name: visitorName,
                    tags: [response.data.info.prc]
                });


                if(response.data.info.first_logged == 1){
                    const welcomeMessage = `
                    Welcome ${visitorName} to SANDOZ CARDIO AND METABOLIC CARE Virtual Booth, feel free to ask any questions.
                `;

                    tidioChatApi.messageFromOperator(welcomeMessage);
                }

            }

            tidioChatApi.setColorPalette('#1F2937');
        }
        if (window.tidioChatApi) {
            window.tidioChatApi.on("ready", onTidioChatApiReady);
        } else {
            document.addEventListener("tidioChat-ready", onTidioChatApiReady);
        }
    }
    else{
        console.log('Error while fetching user info.');
    }




})();
