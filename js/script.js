
if('serviceWorker' in navigator) {
  navigator.serviceWorker.register('./sw.js')
    .then(reg => console.log(reg))
    .catch(err => console.warn('Error al registrar el SW', err));
}

  $('#sidebarCollapse').on('click', function () {
      $('#sidebar').toggleClass('active');
  });
