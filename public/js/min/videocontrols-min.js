function intializePlayer(){vid=document.getElementById("video_fullwidth"),playbtn=document.getElementById("playpausebtn"),seekslider=document.getElementById("seekslider"),curtimetext=document.getElementById("curtimetext"),durtimetext=document.getElementById("durtimetext"),mutebtn=document.getElementById("mutebtn"),volumeslider=document.getElementById("volumeslider"),fullscreenbtn=document.getElementById("fullscreenbtn"),playbtn.addEventListener("click",playPause,!1),seekslider.addEventListener("change",vidSeek,!1),vid.addEventListener("timeupdate",seektimeupdate,!1),mutebtn.addEventListener("click",vidmute,!1),volumeslider.addEventListener("change",setvolume,!1),fullscreenbtn.addEventListener("click",toggleFullScreen,!1)}function playPause(){vid.paused?(vid.play(),playbtn.innerHTML=""):(vid.pause(),playbtn.innerHTML="")}function vidSeek(){var e=vid.duration*(seekslider.value/100);vid.currentTime=e}function seektimeupdate(){var e=vid.currentTime*(100/vid.duration);seekslider.value=e;var t=Math.floor(vid.currentTime/60),n=Math.floor(vid.currentTime-60*t),i=Math.floor(vid.duration/60),d=Math.floor(vid.duration-60*i);10>n&&(n="0"+n),10>d&&(d="0"+d),10>t&&(t="0"+t),10>i&&(i="0"+i),curtimetext.innerHTML=t+":"+n,durtimetext.innerHTML=i+":"+d}function vidmute(){vid.muted?(vid.muted=!1,mutebtn.innerHTML="",volumeslider.value=100):(vid.muted=!0,mutebtn.innerHTML="",volumeslider.value=0)}function setvolume(){vid.volume=volumeslider.value/100}function toggleFullScreen(){vid.requestFullScreen?vid.requestFullScreen():vid.webkitRequestFullScreen?vid.webkitRequestFullScreen():vid.mozRequestFullScreen&&vid.mozRequestFullScreen()}var vid,playbtn,seekslider,curtimetext,durtimetext,mutebtn,volumeslider,fullscreenbtn;window.onload=intializePlayer;