function showPosts() {
    var x = document.getElementById('posts');
    var y = document.getElementById('main');
    if (x.style.display === 'none') {
        y.style.display='none';
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}
function showMain(){
  var x = document.getElementById('posts');
  var y = document.getElementById('main');
  if (y.style.display === 'none') {
      x.style.display='none';
      y.style.display = 'block';
  } else {
      y.style.display = 'none';
  }
}
