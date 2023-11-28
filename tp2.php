
<div class="">
          <img id="mainPhoto">
          <div class="mainSlider">
            <img src="images/diclowin/Balm.png" class="img-fluid w-25" style="display: none">
            <img src="images/diclowin/Gel.png" class="img-fluid w-25" style="display: none">
            <img src="images/diclowin/Spray.png" class="img-fluid w-25" style="display: none">
          </div>
      </div>

<script>
    var images = [];

images[0] = ['images/diclowin/Balm.png'];
images[1] = ['images/diclowin/Gel.png'];
images[2] = ['images/diclowin/Spray.png'];
var index = 0;

function change() {
  document.getElementById("mainPhoto").src = images[index];
  if (index == 2) {
    index = 0;
  } else {
    index++;
  }

  setTimeout(change, 2000);
}

window.onload = change();
</script>
