function toggleButton() {

  const email = document.querySelector('#ds_emailpag').value;
  const nome = document.querySelector('#nm_nomepag').value;
  const ultimoNome = document.querySelector('#nm_ulnomepag').value;
  const cpf = document.querySelector('#ds_cpfpag').value;
  const numero = document.querySelector('#ds_numeropag').value;

  const fimCompraButton = document.querySelector('#fim-compra');

  if (email && nome && ultimoNome && cpf && numero && pixClicado) {
      fimCompraButton.disabled = false;
  } else {
      fimCompraButton.disabled = true;
  }
}

function marcarPixClicado() {
  pixClicado = true;
  toggleButton(); 
}

document.addEventListener('DOMContentLoaded', toggleButton);



document.addEventListener('DOMContentLoaded', function () {
    document.querySelector('.btn-compra button').addEventListener('click', function () {
      var valorFinal = this.getAttribute('data-preco');
  
      window.location.href = '../compra-pix.php?amount=' + valorFinal
  
  
    });
    
  
   
  });



  