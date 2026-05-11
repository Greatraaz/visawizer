
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                © <script>document.write(new Date().getFullYear())</script> {{ config('site.siteTitle') }} <span class="d-none d-sm-inline-block"> Crafted with <i class="mdi mdi-heart text-danger"></i> by Mirashka</span>
                            </div>
                        </div>
                    </div>
                </footer>

            </div>
            <!-- end main content-->

        </div>

        <div id="editModal" class="modal" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Edit</h5>
                <button type="button" class="btn-close"  onclick="hideModal()"></button>
              </div>
              <div class="modal-body">
                <div id="data"></div>
              </div>
            </div>
          </div>
        </div>
