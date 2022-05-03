


$(document).ready(function() {

var xmlHttp = new XMLHttpRequest ();

var numberOfColumns = 2;

var htmlCode = "";

var reponse;

var send = "scripts/hook.php";

xmlHttp.open("GET", send, true);

xmlHttp.send(null);


xmlHttp.onreadystatechange = function() {
  if(xmlHttp.readyState == 4) {
   //alert(xmlHttp.responseText);
    response = xmlHttp.responseText.split("~");
    htmlCode += '<tr>';
    for (var i=0;i<response.length;i++){

htmlCode += '<td id="gallery_cell">';
htmlCode += '<a href="' + 'galleryimages/' + response[i] +'">';
htmlCode += '<img src="galleryimages/' + response[i] + '" id="image_thumnail"/>';
htmlCode += '</a>';
htmlCode += '</td>'

if(((i+1)%numberOfColumns) == 0) {
  htmlCode += '</tr><tr>';
}

}

htmlCode += '</tr>';

document.getElementById('gallerypepper').innerHTML = htmlCode;



    }
  }
});
