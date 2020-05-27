<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      audio {
        display: block;
        margin: 5px;
      }
    </style>
</head>

<body>
    <button id="record">Record</button>
    <button id="stop" disabled>Stop</button>
    <button id="play" disabled>Play</button>
    <button id="save" disabled>Save</button>

    <div id="saved-audio-messages">
        <h2>Saved messages</h2>
    </div>

    <script>
        const recordAudio = () =>
            new Promise(async resolve => {
                const stream = await navigator.mediaDevices.getUserMedia({
                    audio: true
                });
                const mediaRecorder = new MediaRecorder(stream);
                let audioChunks = [];

                mediaRecorder.addEventListener('dataavailable', event => {
                    audioChunks.push(event.data);
                });

                const start = () => {
                    audioChunks = [];
                    mediaRecorder.start();
                };

                const stop = () =>
                    new Promise(resolve => {
                        mediaRecorder.addEventListener('stop', () => {
                            const audioBlob = new Blob(audioChunks);
                            const audioUrl = URL.createObjectURL(audioBlob);
                            const audio = new Audio(audioUrl);
                            const play = () => audio.play();
                            resolve({
                                audioChunks,
                                audioBlob,
                                audioUrl,
                                play
                            });
                        });

                        mediaRecorder.stop();
                    });

                resolve({
                    start,
                    stop
                });
            });

        const sleep = time => new Promise(resolve => setTimeout(resolve, time));

        const recordButton = document.querySelector('#record');
        const stopButton = document.querySelector('#stop');
        const playButton = document.querySelector('#play');
        const saveButton = document.querySelector('#save');
        const savedAudioMessagesContainer = document.querySelector('#saved-audio-messages');

        let recorder;
        let audio;

        recordButton.addEventListener('click', async () => {
            recordButton.setAttribute('disabled', true);
            stopButton.removeAttribute('disabled');
            playButton.setAttribute('disabled', true);
            saveButton.setAttribute('disabled', true);
            if (!recorder) {
                recorder = await recordAudio();
            }
            recorder.start();
        });

        stopButton.addEventListener('click', async () => {
            recordButton.removeAttribute('disabled');
            stopButton.setAttribute('disabled', true);
            playButton.removeAttribute('disabled');
            saveButton.removeAttribute('disabled');
            audio = await recorder.stop();
        });

        playButton.addEventListener('click', () => {
            audio.play();
        });

        saveButton.addEventListener('click', () => {
            const reader = new FileReader();
            reader.readAsDataURL(audio.audioBlob);
            reader.onload = () => {
                const base64AudioMessage = reader.result.split(',')[1];

                fetch('/messages', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        message: base64AudioMessage
                    })
                }).then(res => {
                    if (res.status === 201) {
                        return populateAudioMessages();
                    }
                    console.log('Invalid status saving audio message: ' + res.status);
                });
            };
        });

        const populateAudioMessages = () => {
            return fetch('/messages').then(res => {
                if (res.status === 200) {
                    return res.json().then(json => {
                        json.messageFilenames.forEach(filename => {
                            let audioElement = document.querySelector(`[data-audio-filename="${filename}"]`);
                            if (!audioElement) {
                                audioElement = document.createElement('audio');
                                audioElement.src = `/messages/${filename}`;
                                audioElement.setAttribute('data-audio-filename', filename);
                                audioElement.setAttribute('controls', true);
                                savedAudioMessagesContainer.appendChild(audioElement);
                            }
                        });
                    });
                }
                console.log('Invalid status getting messages: ' + res.status);
            });
        };

        populateAudioMessages();
    </script>
</body>

</html>