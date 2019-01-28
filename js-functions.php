
<script>
// Make the DIV element draggable:
dragElement(document.getElementById("mydiv"));

function dragElement(elmnt) {
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
  if (document.getElementById(elmnt.id + "header")) {
    // if present, the header is where you move the DIV from:
    document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
  } else {
    // otherwise, move the DIV from anywhere inside the DIV:
    elmnt.onmousedown = dragMouseDown;
  }

  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    // get the mouse cursor position at startup:
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();
    // calculate the new cursor position:
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    // set the element's new position:
    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
  }

  function closeDragElement() {
    // stop moving when mouse button is released:
    document.onmouseup = null;
    document.onmousemove = null;
  }
}

</script>


<script type="text/javascript">
function setBgColor(color){
document.body.style.backgroundColor = color;
}
function randBg() {
var bgColor, colors = new Array('red', 'green', 'blue', 'yellow', 'orange');
bgColor=colors[(Math.floor(Math.random() * colors.length))];
setBgColor(bgColor);
}
function select(){
  // change the color in hrere
}
function add(){
  CaddS();
  CaddP();
  document.getElementById('addB').style.display = "block";
}

function Cadd() {
  document.getElementById('addB').style.display = "none";
}
function take (){
  document.getElementById('takeB').style.display = "block";
}
function Ctake() {
  document.getElementById('takeB').style.display = "none";
}
function home(){
  window.location.href="new.php";
}
function memory(){
  document.getElementById('mydiv').style.display = "block";
}
function closeM(){
  document.getElementById('mydiv').style.display = "none";
}
function copyM(){

 /* Get the text field */
 var copyText = document.getElementById("text");

 /* Select the text field */
 copyText.select();

 /* Copy the text inside the text field */
 document.execCommand("copy");
 // alert for text copied;
 document.getElementById('alert').style.display= "block";
}
function startM(){
  /* Get the text field */
  var copyText = document.getElementById("text");

  /* Select the text field */
  copyText.select();
}
function closeA() {
  document.getElementById('alert').style.display= "none";
}
function saveM(){
  // Put Save Function in here
}
function loadM(){
  // Put Load Function in here
  document.getElementById('loadL').style.display = "block";
}
function addBt(){
  document.getElementById('addS').style.display = "none";
  add();
}
function addS(){
  Cadd();
  CaddP();
  document.getElementById('addS').style.display = "block";
}
function CaddS(){
  document.getElementById('addS').style.display = "none";
}
function addP(){
  Cadd();
  CaddS();
  document.getElementById('addP').style.display = "block";
}
function CaddP(){
  document.getElementById('addP').style.display = "none";
}
function takeS(){
  document.getElementById('takeB').style.display = "none;";
  document.getElementById('takeS').style.display = "block";
}
function takeP(){
  document.getElementById('takeS').style.display = "none";
  document.getElementById('takeB').style.display = "none";
  document.getElementById('takeP').style.display = "block";
}
function takeB(){
  document.getElementById('takeP').style.display = "none";
  document.getElementById('takeB').style.display = "block";
  document.getElementById('takeS').style.display = "none";
}
function CtakeP(){
  document.getElementById('takeP').style.display = "none";
}
function CtakeS(){
  document.getElementById('takeP').style.display = "none";
  document.getElementById('takeS').style.display = "none";
  document.getElementById('takeB').style.display = "none";
}
</script>
