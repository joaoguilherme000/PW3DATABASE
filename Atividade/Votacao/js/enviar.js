document.addEventListener('DOMContentLoaded', function () {
  const imgElements = document.querySelectorAll('.imgContent img');

  imgElements.forEach(function (img) {
    img.addEventListener('click', function () {
      const selectedTeam = img.getAttribute('alt');
      document.getElementById('voto').value = selectedTeam;
    });
  });
});