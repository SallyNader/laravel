

<!DOCTYPE html>
<html>
	<head>
		<title>Bellnet | Virtual Classroom</title>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<link rel="shortcut icon" href="icon.ico">

		<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">
		<link rel="stylesheet" href="icomoon/style.css">
		<link rel="stylesheet" href="css/1140.css">
		<link rel="stylesheet" href="css/virtual-style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <link rel="author" type="text/html" href="https://plus.google.com/+MuazKhan">
        <meta name="author" content="Muaz Khan">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <link rel="stylesheet" href="//cdn.webrtc-experiment.com/style.css">

        <style>

         audio, video {
                -moz-transition: all 1s ease;
                -ms-transition: all 1s ease;

                -o-transition: all 1s ease;
                -webkit-transition: all 1s ease;
                transition: all 1s ease;
                vertical-align: top;
                width: 100%;
            }

            select {
                border: 1px solid #d9d9d9;
                border-radius: 1px;
                height: 30px;
                margin-left: 1em;
                margin-top: 2px;
                padding: 0px 20px 0px 34px;
                vertical-align: 6px;
                width: 60%;
            }


        </style>
        <script>
            document.createElement('article');
            document.createElement('footer');
        </script>


        <script src="//cdn.webrtc-experiment.com/firebase.js"> </script> <!-- Signaling -->
        <script src="//cdn.webrtc-experiment.com/RTCPeerConnection-v1.5.js"> </script> <!-- WebRTC simple wrapper -->
        <script src="//cdn.webrtc-experiment.com/webrtc-broadcasting/broadcast.js"> </script> <!-- Multi-user connectivity handler -->


        <script src="//cdn.webrtc-experiment.com/DetectRTC.js"></script>

	</head>
	<body>

		<!--<div id="open"></div>  -->

		<section class="left-side">

			<div class="holder">
				<div class="top-area">
					<div class="menu">
						<img title="Bellnet" src="imgs/logo.png" alt="" class="logo">
						<div class="items">


							<div class="item">
								<img title="Undo" src="imgs/undo.png" alt="">
							</div>

							<div class="item">
								<img title="Redo" src="imgs/redo.png" alt="">
							</div>&nbsp; &nbsp; &nbsp; &nbsp;
							
							<div class="item">
								<input type="color" id="colorpicker" />
							</div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
							&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;


							<div class="item">
								<img title="Share File" src="imgs/share.png" alt="">
							</div>

							<div class="item">
								<img title="media" src="imgs/media.png" alt="">
							</div>

							<div class="item">
								<img title="Sharescreen" src="imgs/sharescreen.png" alt="">
							</div>

							<div class="item">
							<form action="virtual.php" method="post" enctype="multipart/form-data">
								
								<input type="file" name="files" />

                 				<input type="submit"  value="go" name="go"/>
								</form>
							</div>

						</div>
					</div>
				</div>

				<div class="left-area">
					<div class="items">

							<div class="item" id= "moveTool">
								<img title="Move Tool" src="imgs/cursor.png" alt="">
							</div>

							<div class="item" id="eraserTool">
								<img title="Eraser Tool" src="imgs/eraser.png" alt="">
							</div>

							<div class="item" title="Shapes"  id="shape">
								<img src="imgs/shapes.png" alt="">
							</div>
							<div class="shapes" id="shapes" onclick="showmenu()">
								<ul>
									<li><img src="imgs/rectangle.png" alt=""></li>
									<li><img src="imgs/triangle.png" alt=""></li>
									<li><img src="imgs/circle.png" alt=""></li>
									<li><img src="imgs/line.png" alt=""></li>
								</ul>
							</div>

							<div class="item" id="brushTool">
								<img title="Brush Tool" src="imgs/brush.png" alt="">
							</div>

							<div class="item" id="typeTool">
								<img title="Type Tool" src="imgs/typetool.png" alt="">
							</div>

							<div class="item" id="highlighterTool">
								<img title="Highlighter Tool" src="imgs/highlighter.png" alt="">
							</div>

							<div class="item" id="penTool">
								<img title="Pen" src="imgs/pen.png" alt="">
							</div>

							<div class="item" id="clearallTool">
								<img title=" Clearall Tool" src="imgs/clearall.png" alt="">
							</div>

							<div class="item">
								<img title="Logout" src="imgs/logout.png" alt="">
							</div>

						</div>
				</div>

				<div class="middle-area">
					
					<div class="boards">
						<canvas class="board" id="whiteBoard" width="970" height="500"></canvas>

						<div class="openimage">
							<img src="<?php echo @$photo; ?>" />
						</div>

					</div>
				</div>
			</div>
		</section>

		<section class="right-side">
			<div class="part1">
				<span>
					<img src="black/signal22.png" alt="">
					<span class="icon-user"></span>
					<span>User</span>
						<button><span title="voice call" class="icon-microphone"></span></button>
						<button><span title="video call" class="icon-camera2"></span></button>
						<button><span title="Screenshot" class=" icon-screen3"></span></button>
				</span>
			</div>

			<div class="part2">
				<span>
					<span class="title">Videos</span>
					<button class="part2-btn" id="min2"><span><img src="imgs/minimize.png" alt=""></span></button>
					<button class="part2-btn"><span title="Record" class="icon-record"></span></button>
					<button class="part2-btn"><span title="fullscreen" class=" icon-screen3"></span></button>
				</span><br><br>

				<section class="experiment">

               		<section>
	                    <select id="broadcasting-option">
	                        <option>Audio + Video</option>
	                        <option>Only Audio</option>
	                        <option>Screen</option>
	                    </select>
	                    <br />
	                    <input type="hidden" id="broadcast-name">
	                    <button id="setup-new-broadcast" class="setup">Start</button>
                	</section>


           		</section>

				<div class="cameras">
					 <div id="videos-container">

					 </div>
				</div>
				<p class="name">Classroom</p>


			</div>

			<div class="part3">
				<span>
					<span class="title">Attendee List(1)</span>

						<button id="min3"><span><img src="imgs/minimize.png" alt=""></span></button>
						<button><span title="Check attendance" class="icon-users"></span></button>

				</span><br><br>
				<div class="attend">
					<span class="item">
						<span class="icon-user52"></span>
						<span>Hazem Hamdy</span>
						<button><span title="voice call" class="icon-microphone"></span></button>
						<button><span title="video call" class="icon-camera2"></span></button>
						<button><span title="Screenshot" class="icon-pencil2"></span></button>
					</span><br>

					<span class="item">
						<span class="icon-user52"></span>
						<span>Hazem Hamdy</span>
						<button><span title="voice call" class="icon-microphone"></span></button>
						<button><span title="video call" class="icon-camera2"></span></button>
						<button><span title="Screenshot" class="icon-pencil2"></span></button>
					</span><br>

					<span class="item">
						<span class="icon-user52"></span>
						<span>Hazem Hamdy</span>
						<button><span title="voice call" class="icon-microphone"></span></button>
						<button><span title="video call" class="icon-camera2"></span></button>
						<button><span title="Screenshot" class="icon-pencil2"></span></button>
					</span>

				</div>
			</div>

			<div class="part4">
				<span>
					<span class="title">Chat</span>

						<button id="min4"><span><img src="imgs/minimize.png" alt=""></span></button>

					</span><br><br>

							<form id="chat">
				<div id="messages">
				</div>
					<span><input id="message" type="text" placeholder="  Text......"></span><span><button id="send">Send</button></span>
				</form>

				<!-- <form action="">
				<div class="chat">
				</div>
					<span><input type="text" name="lname" placeholder="  Text......"></span><span><button id="send">Send</button></span>
				</form> -->

			</div>
		</section>

		<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="js/virtual-script.js"></script>
		<script type="text/javascript" src="bower_components/fabric.js/dist/fabric.min.js"></script>
		<script type="text/javascript" src="js/virtual-tools.js"></script>
		<script src="https://cdn.socket.io/socket.io-1.4.5.js"></script>
		<script type="text/javascript" src="js/chat.js"></script>
		 <script>

                var config = {
                    openSocket: function(config) {

                        var channel = config.channel || location.href.replace( /\/|:|#|%|\.|\[|\]/g , '');
                        var socket = new Firebase('https://webrtc.firebaseIO.com/' + channel);
                        socket.channel = channel;
                        socket.on("child_added", function(data) {
                            config.onmessage && config.onmessage(data.val());
                        });
                        socket.send = function(data) {
                            this.push(data);
                        };
                        config.onopen && setTimeout(config.onopen, 1);
                        socket.onDisconnect().remove();
                        return socket;
                    },
                    onRemoteStream: function(htmlElement) {
                        htmlElement.setAttribute('controls', true);
                        videosContainer.insertBefore(htmlElement, videosContainer.firstChild);
                        htmlElement.play();
                        rotateInCircle(htmlElement);
                    },
                    onRoomFound: function(room) {
                        var alreadyExist = document.querySelector('button[data-broadcaster="' + room.broadcaster + '"]');
                        if (alreadyExist) return;
                        if (typeof roomsList === 'undefined') roomsList = document.body;
                        var tr = document.createElement('tr');
                        tr.innerHTML = '<td><strong>' + room.roomName + '</strong> is broadcasting his media!</td>' +
                            '<td><button class="join">Join</button></td>';
                        roomsList.insertBefore(tr, roomsList.firstChild);
                        var joinRoomButton = tr.querySelector('.join');
                        joinRoomButton.setAttribute('data-broadcaster', room.broadcaster);
                        joinRoomButton.setAttribute('data-roomToken', room.broadcaster);
                        joinRoomButton.onclick = function() {
                            this.disabled = true;
                            var broadcaster = this.getAttribute('data-broadcaster');
                            var roomToken = this.getAttribute('data-roomToken');
                            broadcastUI.joinRoom({
                                roomToken: roomToken,
                                joinUser: broadcaster
                            });
                            hideUnnecessaryStuff();
                        };
                    },
                    onNewParticipant: function(numberOfViewers) {
                        document.title = 'Viewers: ' + numberOfViewers;
                    }
                };
                function setupNewBroadcastButtonClickHandler() {
                    document.getElementById('broadcast-name').disabled = true;
                    document.getElementById('setup-new-broadcast').disabled = true;
                    captureUserMedia(function() {
                        var shared = 'video';
                        if (window.option == 'Only Audio') {
                            shared = 'audio';
                        }
                        if (window.option == 'Screen') {
                            shared = 'screen';
                        }

                        broadcastUI.createRoom({
                            roomName: (document.getElementById('broadcast-name') || { }).value || 'Anonymous',
                            isAudio: shared === 'audio'
                        });
                    });
                    hideUnnecessaryStuff();
                }
                function captureUserMedia(callback) {
                    var constraints = null;
                    window.option = broadcastingOption ? broadcastingOption.value : '';
                    if (option === 'Only Audio') {
                        constraints = {
                            audio: true,
                            video: false
                        };

                        if(DetectRTC.hasMicrophone !== true) {
                            alert('DetectRTC library is unable to find microphone; maybe you denied microphone access once and it is still denied or maybe microphone device is not attached to your system or another app is using same microphone.');
                        }
                    }
                    if (option === 'Screen') {
                        var video_constraints = {
                            mandatory: {
                                chromeMediaSource: 'screen'
                            },
                            optional: []
                        };
                        constraints = {
                            audio: false,
                            video: video_constraints
                        };

                        if(DetectRTC.isScreenCapturingSupported !== true) {
                           alert('DetectRTC library is unable to find screen capturing support. You MUST run chrome with command line flag "chrome --enable-usermedia-screen-capturing"');
                        }
                    }

                    if (option != 'Only Audio' && option != 'Screen' && DetectRTC.hasWebcam !== true) {
                        alert('DetectRTC library is unable to find webcam; maybe you denied webcam access once and it is still denied or maybe webcam device is not attached to your system or another app is using same webcam.');
                    }
                    var htmlElement = document.createElement(option === 'Only Audio' ? 'audio' : 'video');
                    htmlElement.setAttribute('autoplay', true);
                    htmlElement.setAttribute('controls', true);
                    videosContainer.insertBefore(htmlElement, videosContainer.firstChild);
                    var mediaConfig = {
                        video: htmlElement,
                        onsuccess: function(stream) {
                            config.attachStream = stream;
                            callback && callback();
                            htmlElement.setAttribute('muted', true);
                            rotateInCircle(htmlElement);
                        },
                        onerror: function() {
                            if (option === 'Only Audio') alert('unable to get access to your microphone');
                            else if (option === 'Screen') {
                                if (location.protocol === 'http:') alert('Please test this WebRTC experiment on HTTPS.');
                                else alert('Screen capturing is either denied or not supported. Are you enabled flag: "Enable screen capture support in getUserMedia"?');
                            } else alert('unable to get access to your webcam');
                        }
                    };
                    if (constraints) mediaConfig.constraints = constraints;
                    getUserMedia(mediaConfig);
                }
                var broadcastUI = broadcast(config);
                /* UI specific */
                var videosContainer = document.getElementById('videos-container') || document.body;
                var setupNewBroadcast = document.getElementById('setup-new-broadcast');
                var roomsList = document.getElementById('rooms-list');
                var broadcastingOption = document.getElementById('broadcasting-option');
                if (setupNewBroadcast) setupNewBroadcast.onclick = setupNewBroadcastButtonClickHandler;
                function hideUnnecessaryStuff() {
                    var visibleElements = document.getElementsByClassName('visible'),
                        length = visibleElements.length;
                    for (var i = 0; i < length; i++) {
                        visibleElements[i].style.display = 'none';
                    }
                }
                function rotateInCircle(video) {
                    video.style[navigator.mozGetUserMedia ? 'transform' : '-webkit-transform'] = 'rotate(0deg)';
                    setTimeout(function() {
                        video.style[navigator.mozGetUserMedia ? 'transform' : '-webkit-transform'] = 'rotate(360deg)';
                    }, 1000);
                }



            </script>












        <!-- commits.js is useless for you! It is not part of this WebRTC Experiment. -->
        <script src="//cdn.webrtc-experiment.com/commits.js" async> </script>
	</body>
</html>
