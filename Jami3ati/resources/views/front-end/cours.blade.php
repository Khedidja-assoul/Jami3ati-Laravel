@extends("front-end.accueil");
@section("cours")

    <div class="container">
        <aside>
            <div class="triangle-left"></div>
            <img src="../resources/icons/clipboard.png" id="aside1">
            <img src="../resources/icons/folder.png" id="aside2">
            <img src="../resources/icons/share.png" id="aside3">
            <img src="../resources/icons/logout.png">
        </aside>
        <div id="main">
            <nav>
                <div class="profil">
                    <div class="img"><img src="../resources/teacher.jpg"></div>
                    <div class="profilinfo">
                        Teacher Name <br> <span>teacher</span>
                    </div>
                </div>
                <img src="../resources/icons/menu.png" id="more">
            </nav>
            <div class="contenu">
                <div class="navInretn">
                    jhkjhkhkjhkjhkj
                </div>
                <img src="../resources/icons/plus.png" id="btn">
                <div class="addModule">
                    <form name="addModule" action="#">
                        <div class="infoGeneral">
                            <div class="infoModule">
                                <label class="lab" for="nomCours"> Nom du cours : </label>
                                <input id="nomCours" type="text"><br>
                                <label class="lab" for="discription" >Discription : </label><br>
                                <textarea id="discription"></textarea>
                            </div>
                            <div class="coursModule">
                                <div> Liste des chapitres </div>
                                <div class="listCours">
                                    <div class="cours">
                                        <span>1 -</span><span>chap 1</span>
                                    </div>
                                    <div class="cours">
                                        <span>2 -</span><span>chap 2 </span>
                                    </div>
                                    <div class="cours">
                                        <span>1 -</span><span>chap 1</span>
                                    </div>
                                    <div class="cours">
                                        <span>2 -</span><span>chap 3 </span>
                                    </div>
                                    <div class="cours">
                                        <span>2 -</span><span>chap 4 </span>
                                    </div>



                                </div>
                                <a href="#">ajouter un chapitre</a>
                            </div>
                        </div>
                        <div class="traitement">
                            <input id="btnAnnuler" type="button" value="Anuler">
                            <input id="btnSubmit" type="submit" value="Treminer">

                        </div>
                    </form>

                </div>
            </div>
        </div>
        <footer> footer  Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a> </footer>
    </div>

@endsection
