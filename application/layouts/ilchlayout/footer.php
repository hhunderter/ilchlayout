    <section class="main-footer">
      <div class="container-fluid">
        <div class="gaming">
          <div class="row row-layout">
              <?php
              echo $this->getMenu
              (
                  5,
                  '<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="card card-gaming">
                         <div class="heading">%s</div>
                            <div class="card-body">
                                %c
                            </div>
                     </div>
                   </div>'
              );
              ?>
          </div>
        </div>
      </div>
    </section>
    <div class="footer">
        <div class="container-fluid">
            <div class="gaming">
                <div class="row row-layout">
                    <div class="col-xs-12 text-align padding">
                        &copy; Ilch 2.0 Free Layout 2.0 | CMS by <a href="https://www.ilch.de/" target="_blank">Ilch</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade login-modul" id="myModal">
        <div class="modal-dialog card-body log-body">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                    <?php if ($this->getUser() !== null): ?>
                        <?=$this->getTrans('hello') ?> <b><?=$this->escape($this->getUser()->getName()) ?></b>
                    <?php else:
                        echo "Sign In";
                    endif;?>
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                <?=$this->getBox('user', 'login'); ?>
                </div>
            </div>
        </div>
    </div>
    <?=$this->getFooter() ?>
    </body>
</html>
