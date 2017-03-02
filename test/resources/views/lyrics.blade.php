<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Chosen Song title and Artist Here</title>
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
<button style = "button">Back to Word Cloud</button>
<button style = "button">Back to Song List</button>
<div id = "wrapper">
    <pageTitle>Single Ladies by Beyonce</pageTitle>
    <br><br>
    <body>
    <div id = "lyrics">

        All the single <mark>ladies</mark>
        (All the single ladies)
        All the single ladies
        (All the single ladies)
        All the single ladies
        (All the single ladies)
        All the single ladies
        Now put your hands up
        Up in the club, just broke up
        I'm doing my own little thing
        You decided to dip and now you wanna trip
        'Cause another brother noticed me
        I'm up on him, he up on me
        Don't pay him any attention
        'Cause I cried my tears for three good years
        You can't be mad at me
        'Cause if you liked it, then you should have put a ring on it
        If you liked it, then you should have put a ring on it
        Don't be mad once you see that he want it
        If you liked it, then you should have put a ring on it
        Oh, oh, oh
        Oh, oh, oh, oh, oh, oh
        Oh, oh, oh
        Oh, oh, oh
        Oh, oh, oh, oh, oh, oh
        Oh, oh, oh

    </div>
    </body>
</div>
