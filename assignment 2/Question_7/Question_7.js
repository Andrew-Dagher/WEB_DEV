/*for time in the header*/
function updateTime() {
  const now = new Date();
  const time = now.toLocaleTimeString();
  document.getElementById('live-time').innerHTML = time;
}

setInterval(updateTime, 1000);


function validateCheckboxes() {
  var checkboxes = document.querySelectorAll('input[type="checkbox"]');
  var checkedOne = Array.prototype.slice.call(checkboxes).some(x => x.checked);

  if (!checkedOne) {
    alert("Please select at least one checkbox.");
  }
}

