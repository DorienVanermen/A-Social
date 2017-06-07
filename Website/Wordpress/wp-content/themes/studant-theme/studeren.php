<?php /* Template Name: Studeren */ 

//Load Header
get_header(); 

// include 'search-function.php';
include 'search-function.php';

?>

<main>

    <div class="col-sm-12 text-hero studeren-hero">
        <h1>STUDEREN</h1>
        <img src="<?php bloginfo('template_url'); ?>/img/hero/lauraPotlood.png" alt="Studeren hero">
    </div>


    <form method="POST" id="searchForm" class="clearfix">
        <div class="search-bar">
            <div class="container">
                <div class="col-sm-12">
                    <div class="form-group">
                        <input type="text" placeholder="ZOEKEN OP TREFWOORDEN" id="searchbar" class="form-control" name="query" value="<?php if(isset($_POST['query'])) echo $_POST['query'] ?>">
                    </div>
                    <button type="submit" class="btn btn-default btn-lg pull-right filter-btn" name="submit">ZOEKEN</button>
                </div>
            </div>
        </div>

        <div class="filters clearfix">
            <div class="container">

                <a type="button" data-toggle="collapse" data-target="#filter" id="filter-btn" class="btn-icon"><img src="<?php bloginfo('template_url'); ?>/img/icon/filter.png" alt="filter"></a>

                <div id="filter" class="collapse in">

                    <div class="col-sm-12 col-md-4">
                        <div class="checkboxen">
                            <p class="check-title">Scholen</p>
                            <div class="checkbox">
                                <label><input type="checkbox" value="KDG" name="checkboxa[]" <?php if(isset($_POST["checkboxa"]) && in_array("KDG", $_POST["checkboxa"])) echo "checked='checked'"; ?>>Karel de Grote</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Artesis Plantijn" name="checkboxa[]" <?php  if(isset($_POST["checkboxa"]) && in_array("Artesis Plantijn", $_POST["checkboxa"])) echo "checked='checked'"; ?>>Artesis Plantijn</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Hogere Zeevaartschool Antwerpen" name="checkboxa[]" <?php if(isset($_POST["checkboxa"]) && in_array("Hogere Zeevaartschool Antwerpen", $_POST["checkboxa"])) echo "checked='checked'"; ?>>Hogere Zeevaartschool Antwerpen</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Ku Leuven" name="checkboxa[]" <?php if(isset($_POST["checkboxa"]) && in_array("Ku Leuven", $_POST["checkboxa"])) echo "checked='checked'"; ?>>Ku Leuven</label>
                            </div>

                            <div class="checkbox">
                                <label><input type="checkbox" value="Thomas More" name="checkboxa[]" <?php if(isset($_POST["checkboxa"]) && in_array("Thomas More", $_POST["checkboxa"])) echo "checked='checked'"; ?>>Thomas More</label>
                            </div>

                            <div class="checkbox">
                                <label><input type="checkbox" value="Instituut voor Tropische Geneeskunde" name="checkboxa[]" <?php if(isset($_POST["checkboxa"]) && in_array("Instituut voor Tropische Geneeskunde", $_POST["checkboxa"])) echo "checked='checked'"; ?>>Instituut voor Tropische Geneeskunde</label>
                            </div>

                            <div class="checkbox">
                                <label><input type="checkbox" value="Universiteit Antwerpen" name="checkboxa[]" <?php if(isset($_POST["checkboxa"]) && in_array("Universiteit Antwerpen", $_POST["checkboxa"])) echo "checked='checked'"; ?>>Universiteit Antwerpen</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4">
                        <div class="checkboxen">
                            <p class="check-title">Opleidingen</p>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Bachelor" name="checkboxb[]" <?php if(isset($_POST["checkboxb"]) && in_array("Bachelor", $_POST["checkboxb"])) echo "checked='checked'"; ?>>Bachelor</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Master" name="checkboxb[]" <?php if(isset($_POST["checkboxb"]) && in_array("Master", $_POST["checkboxb"])) echo "checked='checked'"; ?>>Master</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Postgraduaat" name="checkboxb[]" <?php if(isset($_POST["checkboxb"]) && in_array("Postgraduaat", $_POST["checkboxb"])) echo "checked='checked'"; ?>>Postgraduaat</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Vervolgopleidingen" name="checkboxb[]" <?php if(isset($_POST["checkboxb"]) && in_array("Vervolgopleidingen", $_POST["checkboxb"])) echo "checked='checked'"; ?>>Vervolgopleidingen</label>
                            </div>

                            <div class="checkbox">
                                <label><input type="checkbox" value="Short course" name="checkboxb[]" <?php if(isset($_POST["checkboxb"]) && in_array("Short course", $_POST["checkboxb"])) echo "checked='checked'"; ?>>Short course</label>
                            </div>

                            <div class="checkbox">
                                <label><input type="checkbox" value="Ma-na-Ma" name="checkboxb[]" <?php if(isset($_POST["checkboxb"]) && in_array("Ma-na-Ma", $_POST["checkboxb"])) echo "checked='checked'"; ?>>Ma-na-Ma</label>
                            </div>

                            <div class="checkbox">
                                <label><input type="checkbox" value="Ba-na-Ba" name="checkboxb[]" <?php if(isset($_POST["checkboxb"]) && in_array("Ba-na-Ba", $_POST["checkboxb"])) echo "checked='checked'"; ?>>Ba-na-Ba</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4">
                        <div class="checkboxen">
                            <p class="check-title">Interessegebieden</p>

                            <div class="col-sm-6">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="%management%" name="checkboxc[]" <?php if(isset($_POST["checkboxc"]) && in_array("%management%", $_POST["checkboxc"])) echo "checked='checked'"; ?>>Management</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="%economie%" name="checkboxc[]" <?php if(isset($_POST["checkboxc"]) && in_array("%economie%", $_POST["checkboxc"])) echo "checked='checked'"; ?>>Economie</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="%wetenschap%" name="checkboxc[]" <?php if(isset($_POST["checkboxc"]) && in_array("%wetenschap%", $_POST["checkboxc"])) echo "checked='checked'"; ?>>Wetenschap</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="%gezondheid%" name="checkboxc[]" <?php if(isset($_POST["checkboxc"]) && in_array("%gezondheid%", $_POST["checkboxc"])) echo "checked='checked'"; ?>>Gezondheid</label>
                                </div>

                                <div class="checkbox">
                                    <label><input type="checkbox" value="%ict%" name="checkboxc[]" <?php if(isset($_POST["checkboxc"]) && in_array("%ict%", $_POST["checkboxc"])) echo "checked='checked'"; ?>>ICT</label>
                                </div>

                                <div class="checkbox">
                                    <label><input type="checkbox" value="%kunst%" name="checkboxc[]" <?php if(isset($_POST["checkboxc"]) && in_array("%kunst%", $_POST["checkboxc"])) echo "checked='checked'"; ?>>Kunst</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="%onderwijs%" name="checkboxc[]" <?php if(isset($_POST["checkboxc"]) && in_array("%onderwijs%", $_POST["checkboxc"])) echo "checked='checked'"; ?>>Onderwijs</label>
                                </div>

                                <div class="checkbox">
                                    <label><input type="checkbox" value="%recht%" name="checkboxc[]" <?php if(isset($_POST["checkboxc"]) && in_array("%recht%", $_POST["checkboxc"])) echo "checked='checked'"; ?>>Rechten</label>
                                </div>

                                <div class="checkbox">
                                    <label><input type="checkbox" value="%sociaal%" name="checkboxc[]" <?php if(isset($_POST["checkboxc"]) && in_array("%sociaal%", $_POST["checkboxc"])) echo "checked='checked'"; ?>>Sociaal</label>
                                </div>

                                <div class="checkbox">
                                    <label><input type="checkbox" value="%talen%" name="checkboxc[]" <?php if(isset($_POST["checkboxc"]) && in_array("%talen%", $_POST["checkboxc"])) echo "checked='checked'"; ?>>Talen</label>
                                </div>

                                <div class="checkbox">
                                    <label><input type="checkbox" value="%technologie%" name="checkboxc[]" <?php if(isset($_POST["checkboxc"]) && in_array("%technologie%", $_POST["checkboxc"])) echo "checked='checked'"; ?>>Technologie</label>
                                </div>

                                <div class="checkbox">
                                    <label><input type="checkbox" value="%zeevaart%" name="checkboxc[]" <?php if(isset($_POST["checkboxc"]) && in_array("%zeevaart%", $_POST["checkboxc"])) echo "checked='checked'"; ?>>Zeevaart</label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-default btn-lg pull-right filter-btn" name="submit">FILTEREN</button>

                        </div>
                    </div>

                </div>

            </div>
        </div>

    </form>

    <div class="results">
        <div class="container">
            <?php if (empty($printInhoud)): ?>
            <p class="no-results">Geen resultaten gevonden</p>
            <?php else: ?>
            <table id="onderwijsTable" class="table" width="100%">
                <thead>
                    <tr>
                        <th>Richtingen</th>
                        <th>Graad</th>
                        <th>School</th>
                        <th>Categorie</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($printInhoud as $key => $value): ?>
                    <tr>
                        <?php foreach ($value as $print): ?>

                        <?php if(strpos($print, 'http') > -1): ?>
                        <!-- Do nothing -->
                        <?php else: ?>
                        <td>
                            <a href="<?= $value['url'] ?>">
                                <span><?= $print ?></span>
                            </a>

                        </td>
                        <?php endif ?>


                        <?php endforeach ?>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <?php endif ?>
        </div>
    </div>


</main>

<?php get_footer(); ?>
