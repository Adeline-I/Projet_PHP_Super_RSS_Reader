
    <footer class="text-center text-white fixed-bottom footerBlack">
        <a href="#brand">
            <i class="bi bi-chevron-up"></i>
        </a>
            <!-- Grid container -->
            <!-- <div class="container p-4"></div> -->
            <!-- Grid container -->
            <!-- Copyright -->
            <div class="text-center copyBlack p-3">
                © 2022 Copyright: Aziri
            </div>
            <!-- Copyright -->
    </footer>
    
    <!-- Modal -->
    <div class="modal fade mt-5 pt-5" id="staticParams" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="/controllers/parameters-controller.php" method="post" novalidate>
                <div class="modal-content border-5">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 d-flex justify-content-center ms-3 fs-3" id="staticBackdropLabel">
                            Sélectionnez vos 3 sujets favoris
                        </h5>
                        <i class="bi bi-x-lg col-1" type="button" data-bs-dismiss="modal"></i>
                    </div>
                    <div class="modal-main ms-3 mt-3 mb-3 fs-4">
                        <?php
                            foreach (CONSOLE as $key=>$value) {
                        ?>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" onclick="return itemClicked(<?=$key?>)" id="console<?=$key?>" name="console[]" value="<?=$key?>">
                            <?= (isset($selectedConsole) && in_array($key, $selectedConsole)) ? 'checked' : '' ?>
                            <label class="form-check-label" for="console<?=$key?>"> 
                            <?=$value?>
                            </label>
                        </div>
                        <?php
                            }
                            ?>

                        <small class="form-text error"><?= $error['console'] ?? '' ?></small>
                        <div class="modal-footer mt-3 mb-3 fs-4">
                            <input class="btn btn-dark" type="submit" value="Submit" name="valider">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="/public/assets/js/script.js"></script>
</body>

</html>