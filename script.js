document.addEventListener('DOMContentLoaded', function () {
  
    var letterLinks = document.querySelectorAll('a[contato]');
  
    letterLinks.forEach(function (link) {
      link.addEventListener('click', function (event) {
        event.preventDefault();
  
        var letra = link.getAttribute('contato');
  

        window.location.href = 'pesquisa_agenda.php?contato=' + letra;
      });
    });
  });
  