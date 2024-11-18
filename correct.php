<html lang="en" class=""><head>

  <meta charset="UTF-8">
  <title>CodePen Demo</title>
      <link rel="stylesheet" href="correct.css">
</head>
<style>
    body{
        overflow:hidden;
    }
</style>
<body>
 <div style='display:flex;flex-direction:column;justify-content:center;align-items:center'>
<div class="element element-1"></div>
<div class="element element-2"></div>
<div class="element element-3"></div>
<div class="element element-4"></div>
<div class="title">Correct...</div>
<button style='padding:9px;border-radius:8px;cursor:pointer' onclick="window.location.href='index.php'">Next</button>
</div>
<audio controls autoplay style='display:none'>
  <source id='audioPlayer' src="s1.mp3" type="audio/ogg">
</audio>
  


</body>
 <script>
        document.addEventListener("DOMContentLoaded", function () {
            var audioFiles = ['s1.mp3', 's2.mp3', 's3.mp3'];
            var randomAudio = audioFiles[Math.floor(Math.random() * audioFiles.length)];
            var audioPlayer = document.getElementById('audioPlayer');
            audioPlayer.src = randomAudio;

            audioPlayer.play();
        });
    </script>
</script></html>