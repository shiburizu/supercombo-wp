<div class="modal modal-lg bg-dark" id="sc-comments-modal">
  <a href="#close" class="modal-overlay bg-dark" aria-label="Close"></a>
  <div class="modal-container bg-dark">
    <div class="modal-header bg-dark px-0 pt-0">
        <button class="btn btn-primary btn-lg btn-action float-right" onclick="closeCommentsMenu()"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body p-0" style="overflow-y: visible;">
        <?php comments_template();?>
    </div>
    <div class="modal-footer py-0">
    </div>
  </div>
</div>