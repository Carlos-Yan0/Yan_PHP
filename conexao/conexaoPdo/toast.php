  <!-- Toast container fixado no topo direito -->
  <div class="position-fixed top-0 end-0 p-3" style="z-index: 1100;">
    <div id="liveToast" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="d-flex">
        <div class="toast-body">
          Operação Realizada com Sucesso
        </div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Fechar"></button>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS (com Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Função para pegar parâmetros da URL
    function getParam(param) {
      const urlParams = new URLSearchParams(window.location.search);
      return urlParams.get(param);
    }

    // Se sucesso=1 na URL, exibe o toast
    if(getParam('sucesso') === '1'){
      const toastEl = document.getElementById('liveToast');
      const toast = new bootstrap.Toast(toastEl);
      toast.show();
    }
  </script>