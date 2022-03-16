<footer class="text-center text-white fixed-bottom footerBlack">
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
            <div class="modal-content border-5">
                <div class="modal-header">
                    <h5 class="modal-title col-11 d-flex justify-content-center ms-3 fs-3" id="staticBackdropLabel">
                        Sélectionnez vos 3 sujets favoris
                    </h5>
                    <i class="bi bi-x-lg col-1" type="button" data-bs-dismiss="modal"></i>
                </div>
                <div class="modal-main ms-3 mt-3 mb-3 fs-4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="r1" value="valeur1" onclick="return itemClicked(0)">
                        <label class="form-check-label" for="inlineCheckbox1">Les actualités PS5</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="r2" value="valeur2" onclick="return itemClicked(1)">
                        <label class="form-check-label" for="inlineCheckbox2">Les actualités XBOX série X</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="r3" value="valeur3" onclick="return itemClicked(2)">
                        <label class="form-check-label" for="inlineCheckbox3">Les actualités SWITCH</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4" name="r4" value="valeur4" onclick="return itemClicked(3)">
                        <label class="form-check-label" for="inlineCheckbox4">Les actualités PC</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox5" name="r5" value="valeur5" onclick="return itemClicked(4)" >
                        <label class="form-check-label" for="inlineCheckbox5">Les prochaines sorties</label>
                    </div>
                    <div class="modal-footer mt-3 mb-3 fs-4">
                        <input class="btn btn-dark" type="submit" value="Submit">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="./public/assets/js/script.js"></script>
</body>

</html>