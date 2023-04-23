<div class="modal modal-lg bg-dark" id="sc-comments-modal">
  <a href="#close" class="modal-overlay bg-dark" aria-label="Close"></a>
  <div class="modal-container bg-dark">
    <div class="modal-header bg-dark">
            <button class="btn btn-primary btn-lg btn-action" onclick="closeCommentsMenu()"><i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="modal-body pt-2 sc-rounded">
        <div class="content">
            <?php comments_template();?>
        </div>
    </div>
    <div class="modal-footer py-0">
    </div>
  </div>
</div>