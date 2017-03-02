<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cloud9!</title>

	<script src="http://d3js.org/d3.v3.min.js"> </script>
	<script src="d3.layout.cloud.js"></script>
	<script src="d3.wordcloud.js"></script>

	<script>
		/*var frequency_list = [{"text":"study", "size": 40}, {"text":"motion","size":15}];

		var color = d3.scale.linear()
			.domain([0, 1, 2, 3, 4, 5, 6, 10, 15, 20, 100])
			.range(["#ddd", "#ccc", "#bbb", "#aaa", "#999", "#888", "#777", "#666", "#555", "#444", "#333", "#222"]);
		
		d3.layout.cloud().size([800, 300])
			.words(frequency_list)
			.rotate(0)
			.fontSize(function(d) {return d.size;})
			.on("end", draw)
			.start();

		function draw(words){
			d3.select("body").append("svg").attr("width" 850)
				.attr("height", 350)
				.attr("class", "wordcloud")
				.append("g")
				.attr("transform", "translate(320, 200)")
				.selectAll("text")
				.data(words)
				.enter().append("text")
				.style("font-size", function(d) { return d.size + "px"; }
				.style("fill", function(d, i) { return color(i); })
				.attr("transform", function(d) {
					return "translate(" + [d.x, d.y] + ")rotate(" + d.rotate + ")";
				})
				.text(function(d) { return d.text; });
		}*/

	</script>
<!--
        <script type = "text/javascript">
            var inputBox = document.getElementById("myText");
            function getInputText() {
                var artistName = document.getElementById("myText").value;
                var baseURL = "http://localhost:8000/api/artist/";
                var url = baseURL.concat(artistName);

                window.location.href = url;

            }
        </script>
-->

<style>
#wrapper {
    width: 100%;
    height: 100%;
    margin: 0 auto;
    text-align: center;

}
#search {
    position: fixed;
    left: 35%;
    top: 50%;

}

#searchCloud {
    position: fixed;
    left: 35%;
    top: 70%;

}

#songList {
    position: fixed;
    left: 40%;

    text-align: left;
}

#lyrics {
    position: fixed;
    left: 20%;
    text-align: center;
    max-width: 700px;
}

body {
    background-color: #c5c8c4;

}

form{
    display:inline-block;

}

input[type = "button"], input[type = "submit"], button {
    background-color: #B345F1;
    height: auto;
    width: 120px;
    font-size: 12px;
    display: inline-block;
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border: 1px solid rgba(0,0,0,0.3);
    border-bottom-width: 3px;
}
input[type = "text"] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
pageTitle {
    font-size: 20px;

}
</style>
</head>
<body>
  <div id = "searchCloud">
      <form action="/word_cloud.php">
          <br>
          <input type="text" name="artist" size ="50">
          <br>
          <br>
	  <div id ='wordcloud'></div>
	  <script>
	    d3.layout.cloud().size([800, 400]).selector('#wordcloud').words([{text: 'word', size: 5}, {text: 'cloud', size: 15}]).start();
	  </script>
          <input type="submit" value="Share" style = "button">
          <input type="submit" value="Add Artist" style = "button">
          <input type="submit" value="Search" style = "button">
      </form>
  </div>
</body>
