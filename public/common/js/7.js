/*当点击调用此方法后,将悬浮窗口显示出来,背景变暗*/
function displayWindow1() {
  /*悬浮窗口的显示,需要将display变成block*/
  document.getElementById("window-name").style.display = "block";
  /*将背景变暗*/
  document.getElementById("shadow").style.display = "block";
}
function displayWindow2() {
  /*悬浮窗口的显示,需要将display变成block*/
  document.getElementById("window-password").style.display = "block";
  /*将背景变暗*/
  document.getElementById("shadow").style.display = "block";
}

/*当点击调用此方法,将悬浮窗口和背景全部隐藏*/
function hideWindow1() {
  document.getElementById("window-name").style.display = "none";
  document.getElementById("shadow").style.display = "none";
}
function hideWindow2() {
  document.getElementById("window-password").style.display = "none";
  document.getElementById("shadow").style.display = "none";
}
