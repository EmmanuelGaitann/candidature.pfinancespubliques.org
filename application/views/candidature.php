<script>
    function changesoustitre() {
        document.getElementById('label_sous').innerHTML = document.getElementById('nom').value;
    }
    function maskepouse() {
        sel = document.getElementById('civilite'); civilite = sel.options[sel.selectedIndex].value; console.log(civilite); document.getElementById('epouse').style.display = (civilite === "Monsieur") ? "none" : "block";
    }
</script>


<div class="row">
    <div class="col-lg-12">
        <div class="bs-example">
            <div class="jumbotron" style="background : none; ">
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10" style="border-radius: 50px;">
                        <div class="panel"
                            style="background: rgba( 255, 255, 255, 0.15 ); box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 ); backdrop-filter: blur( 8px ); -webkit-backdrop-filter: blur( 8px ); border-radius: 10px; border: 1px solid rgba( 255, 255, 255, 0.18 ); ">
                            <div class="panel-heading" style="background: #683884; ">
                                <center style="color: white">
                                    <h3 class="panel-title" style="color:#fff">Formulaire de Candidature : <span>MASTER
                                            EN FINANCES PUBLIQUES:</span> </h3>
                                </center>
                            </div>
                            <div class="bs-docs-section1" style=" font-size: 17px; ">
                                <center><span style="color:red;"><?php if (isset($message))
                                    echo $message; ?></span>
                                </center>
                                <div class="wrapper">
                                    <div>
                                        <form id="myForm" method="post" class="bs-example form-horizontal"
                                            action="<?php echo $action; ?>"> <?php //echo validation_errors(); ?>
                                            <fieldset> <!-- Section 1 -->
                                                <div class="form-section active" id="section-1">
                                                    <legend style="font-weight: 400;">I- Formation</legend>
                                                    <div class="form-group "> <span style="color: red"></span> <label
                                                            for="specialite" class="col-lg-5 control-label">Spécialité
                                                            *:</label>
                                                        <div class="col-lg-7"> <select name="specialite"
                                                                class="form-control taille_champ" id="specialite"
                                                                required>
                                                                <option value="" selected="selected">-----------------
                                                                    Choisir une Spécialité -------------------</option>
                                                                <?php foreach ($specialites as $specialite) {
                                                                    if ($specialite->id == $this->form_data->specialite) {
                                                                        $selected = 'selected';
                                                                    } else {
                                                                        $selected = '';
                                                                    }
                                                                    echo "<option value='" . $specialite->id . "' " . $selected . ">" . $specialite->nom . "</option>";
                                                                } ?>
                                                            </select> </div>
                                                    </div>
                                                    <div class="form-group "> <span style="color: red"></span> <label
                                                            for="specialite" class="col-lg-5 control-label">Type d'étude
                                                            *:</label>
                                                        <div class="col-lg-7"> <Input type='Radio' Name='type_etude'
                                                                required value="Presentiel" <?php if (isset($this->form_data->type_etude) && $this->form_data->type_etude === 'Présentiel')
                                                                    echo 'checked = "checked"'; ?>>&nbsp;&nbsp;Présentiel&nbsp;&nbsp;&nbsp; <Input
                                                                type='Radio' Name='type_etude' required
                                                                value="Distanciel" <?php if (isset($this->form_data->type_etude) && $this->form_data->type_etude === 'Distanciel')
                                                                    echo 'checked = "checked"'; ?>>&nbsp;&nbsp;Distanciel&nbsp;&nbsp;&nbsp; </div>
                                                    </div>
                                                    <legend style="font-weight: 400;">II- Identité et Informations
                                                        personnelles du candidat</legend>
                                                    <div class="form-group">
                                                        <div class="form-group"> <span style="color: red"> </span>
                                                            <label for="langue1" class="col-lg-5 control-label"
                                                                style="font-size: 76%;">Première Langue *:</label>
                                                            <div class="col-lg-7"> <select name="langue"
                                                                    class="form-control taille_champ" id="langue1"
                                                                    required>
                                                                    <option value="" selected="selected">-------------
                                                                        Choisir première Langue ------------</option>
                                                                    <option value="Français" <?php if ($this->form_data->langue === "Français")
                                                                        echo "selected"; ?>>Français</option>
                                                                    <option value="Anglais" <?php if ($this->form_data->langue === "Anglais")
                                                                        echo "selected"; ?>>Anglais</option>
                                                                </select> </div>
                                                        </div> <span style="color: red"></span> <label
                                                            class="col-lg-5 control-label " for="civilite">Civilité
                                                            *:</label>
                                                        <div class="col-lg-7"> <select name="civilite"
                                                                onchange="maskepouse();"
                                                                class="form-control taille_champ" id="civilite"
                                                                required>
                                                                <option value="" selected="selected">-------------
                                                                    Choisir Civilité ------------</option>
                                                                <option value="Madame" <?php if ($this->form_data->civilite === "Madame")
                                                                    echo "selected"; ?>> Madame</option>
                                                                <option value="Madémoiselle" <?php if ($this->form_data->civilite === "Madémoiselle")
                                                                    echo "selected"; ?>>Mademoiselle</option>
                                                                <option value="Monsieur" <?php if ($this->form_data->civilite === "Monsieur")
                                                                    echo "selected"; ?>>Monsieur</option>
                                                            </select> </div>
                                                    </div>
                                                    <div class="form-group"> <span style="color: red"></span> <label
                                                            class="col-lg-7 control-label " for="nom">Nom :</label>
                                                        <div class="col-lg-7"> <input
                                                                value="<?php echo set_value('nom', $this->form_data->nom); ?>"
                                                                onchange="changesoustitre();" name="nom"
                                                                placeholder="Nom" class="form-control  taille_champ"
                                                                id="nom" type="text" required> </div>
                                                    </div>
                                                    <div class="form-group"> <span style="color: red"></span> <label
                                                            class="col-lg-7 control-label " for="prenom">Prénom
                                                            :</label>
                                                        <div class="col-lg-7"> <input
                                                                value="<?php echo set_value('prenom', $this->form_data->prenom); ?>"
                                                                onchange="changesoustitre();" name="prenom"
                                                                placeholder="Prènom" class="form-control  taille_champ"
                                                                id="prenom" type="text" required> <input
                                                                value="<?php echo set_value('epouse', $this->form_data->epouse); ?>"
                                                                name="epouse" placeholder="Epouse .........."
                                                                class="form-control  taille_champ" id="epouse"
                                                                type="text"> </div>
                                                    </div>
                                                    <div class="form-group"> <label class="col-lg-7 control-label"
                                                            for="datenaiss_jj">Né(e) le * :<br />(jj/mm/aaaa)</label>
                                                        <div class="col-lg-3"> <select name="datenaiss_jj"
                                                                class="form-control" id="datenaiss_jj" required>
                                                                <option value="" selected="selected"> ---- Jour ----
                                                                </option>
                                                                <?php $i = 1;
                                                                for ($i = 1; $i < 32; $i++) {
                                                                    if ($i == $this->form_data->datenaiss_jj) {
                                                                        $selected = 'selected';
                                                                    } else {
                                                                        $selected = '';
                                                                    } ?>
                                                                    <option value="<?php echo $i; ?>" <?php echo $selected; ?>> <?php echo $i; ?> </option> <?php } ?>
                                                            </select> <span style="color: red"> </span> </div>
                                                        <div class="col-lg-2"> <select name="datenaiss_mm"
                                                                class="form-control" id="datenaiss_mm" required
                                                                value="">
                                                                <option value="" selected="selected"> ---- Mois ----
                                                                </option>
                                                                <?php $i = 1;
                                                                for ($i = 1; $i < 13; $i++) {
                                                                    if ($i == $this->form_data->datenaiss_mm) {
                                                                        $selected = 'selected';
                                                                    } else {
                                                                        $selected = '';
                                                                    } ?>
                                                                    <option value="<?php echo $i; ?>" <?php echo $selected; ?>> <?php echo $i; ?> </option> <?php } ?>
                                                            </select> <span style="color: red"> </span> </div>
                                                        <div class="col-lg-2"> <select name="datenaiss_yy"
                                                                class="form-control" id="datenaiss_yy" required>
                                                                <option value="" selected="selected"> ---- Année ----
                                                                </option>
                                                                <?php $x = date(Y);
                                                                $i = 0;
                                                                for ($i = $x - 65; $i < $x - 15; $i++) {
                                                                    if ($i == $this->form_data->datenaiss_yy) {
                                                                        $selected = 'selected';
                                                                    } else {
                                                                        $selected = '';
                                                                    } ?>
                                                                    <option value="<?php echo $i; ?>" <?php echo $selected; ?>> <?php echo $i; ?> </option> <?php } ?>
                                                            </select> <span style="color: red"> </span> </div>
                                                    </div>
                                                    <div class="form-group"> <span style="color: red"> </span> <label
                                                            class="control-label col-lg-5" for="lieu_de_naissce">Lieu de
                                                            Naissance *:</label>
                                                        <div class="col-lg-7"> <input
                                                                value="<?php echo set_value('lieu_de_naissce', $this->form_data->lieu_de_naissce); ?>"
                                                                name="lieu_de_naissce" placeholder="Ex. Mengueme-SY"
                                                                class="form-control taille_champ" id="lieu_de_naissce"
                                                                type="text" required> </div>
                                                    </div>
                                                    <div class="form-group"> <span style="color: red"> </span> <label
                                                            class="control-label col-lg-4" for="region_dorigine">Région
                                                            et département d'origine *:</label>
                                                        <div class="col-lg-3"> <input
                                                                value="<?php echo set_value('region_dorigine', $this->form_data->region_dorigine); ?>"
                                                                name="region_dorigine" placeholder="Ex. Centre"
                                                                class="form-control taille_champ" id="region_dorigine"
                                                                type="text" required> </div>
                                                        <div class="col-lg-4"> <input
                                                                value="<?php echo set_value('dept_dorigine', $this->form_data->dept_dorigine); ?>"
                                                                name="dept_dorigine" placeholder="Ex. Nyong et Mfoumou"
                                                                class="form-control taille_champ" id="dept_dorigine"
                                                                type="text" required> </div>
                                                    </div>
                                                    <div class="form-group"> <span style="color: red"> </span> <label
                                                            class="control-label col-lg-5" for="nationalite">Nationalité
                                                            *:</label>
                                                        <div class="col-lg-7"> <input
                                                                value="<?php echo set_value('nationalite', $this->form_data->nationalite); ?>"
                                                                name="nationalite" placeholder="Ex. Camerounaise"
                                                                class="form-control taille_champ" id="nationalite"
                                                                type="text" required> </div>
                                                    </div>
                                                    <div class="form-group"> <span style="color: red"></span> <label
                                                            class="col-lg-5 control-label" for="statutmatrimonial">
                                                            Statut matrimonial *:</label>
                                                        <div class="col-lg-7"> <select name="statu_matrimonial"
                                                                class="form-control taille_champ" id="civilite"
                                                                required>
                                                                <option value="" selected="selected">-------------
                                                                    Choisir ------------</option>
                                                                <option value="Célibataire" <?php if ($this->form_data->statu_matrimonial === "Célibataire")
                                                                    echo "selected"; ?>>Célibataire</option>
                                                                <option value="Marié(e)" <?php if ($this->form_data->statu_matrimonial === "Marié(e)")
                                                                    echo "selected"; ?>>Marié(e)</option>
                                                                <option value="Veuf(ve)" <?php if ($this->form_data->statu_matrimonial === "Veuf(ve)")
                                                                    echo "selected"; ?>>Veuf(ve)</option>
                                                            </select> </div>
                                                    </div>
                                                    <div class="form-group"> <span style="color: red"> </span> <label
                                                            for="nombre_enfant" class=" col-lg-5 control-label">Nombre
                                                            d'Enfants en charge *:</label>
                                                        <div class="col-lg-7"> <input
                                                                value="<?php echo set_value('nombre_enfant', $this->form_data->nombre_enfant); ?>"
                                                                name="nombre_enfant" placeholder="nombre d'enfants"
                                                                class="form-control taille_champ" id="nombre_enfant"
                                                                type="text" required> </div>
                                                    </div> <br>
                                                    <!-- <button type="button" onclick="nextSection()">Suivant</button>-->
                                                </div>
                                                <fieldset>
                                                    <div class="form-section" id="section-2">
                                                        <legend style="font-weight: 400;">III- Contacts du candidat
                                                        </legend>
                                                        <div class="form-group"> <span style="color: red"> </span>
                                                            <label for="paysorigine"
                                                                class=" col-lg-7 control-label">Pays d'origine :</label>
                                                            <div class="col-lg-7"> <select name="paysorigine"
                                                                    class="form-control taille_champ" id="paysorigine"
                                                                    required>
                                                                    <option value="" selected="selected">-------------
                                                                        Choisir pays d'origine------------</option>
                                                                    <?php foreach ($pays as $pay) {
                                                                        if ($pay->id == $this->form_data->paysorigine) {
                                                                            $selected = 'selected';
                                                                        } else {
                                                                            $selected = '';
                                                                        }
                                                                        echo "<option value='" . $pay->id . "' " . $selected . ">" . $pay->nom . "</option>";
                                                                    } ?>
                                                                </select> </div>
                                                        </div>
                                                        <div class="form-group"> <span style="color: red"> </span>
                                                            <label for="pays" class=" col-lg-7 control-label">Pays de
                                                                résidence *:</label>
                                                            <div class="col-lg-7"> <select name="pays_residence"
                                                                    class="form-control taille_champ" id="pays"
                                                                    required>
                                                                    <option value="" selected="selected">-------------
                                                                        Choisir pays ------------</option>
                                                                    <?php foreach ($pays as $pay) {
                                                                        if ($pay->id == $this->form_data->pays_residence) {
                                                                            $selected = 'selected';
                                                                        } else {
                                                                            $selected = '';
                                                                        }
                                                                        echo "<option value='" . $pay->id . "' " . $selected . ">" . $pay->nom . "</option>";
                                                                    } ?>
                                                                </select> </div>
                                                        </div>
                                                        <div class="form-group"> <span style="color: red"> </span>
                                                            <label class="col-lg-5 control-label"
                                                                for="adressecandidat">Adresse du candidat *:</label>
                                                            <div class="col-lg-7"> <input
                                                                    value="<?php echo set_value('adresse_candidat', $this->form_data->adresse_candidat); ?>"
                                                                    name="adresse_candidat"
                                                                    placeholder="Ex. BP: 007 Yaoundé" required
                                                                    class="form-control taille_champ"
                                                                    id="adressecandidat" type="text"> </div>
                                                        </div>
                                                        <div class="form-group"> <span style="color: red"></span> <label
                                                                class="col-lg-5 control-label"
                                                                for="villeresidence">Ville de résidence *:</label>
                                                            <div class="col-lg-7"> <input
                                                                    value="<?php echo set_value('ville_residence', $this->form_data->ville_residence); ?>"
                                                                    name="ville_residence" placeholder="Ex. Maroua"
                                                                    required class="form-control taille_champ"
                                                                    id="villeresidence" type="text"> </div>
                                                        </div> <span
                                                            style="color: red;float: right;display: inline"><?php echo form_error('telephone'); ?></span>
                                                        <div class="form-group"> <label class="col-lg-5 control-label"
                                                                for="telephone1">Téléphone (Whatsapp) *:</label>
                                                            <div class="col-lg-7"> <input
                                                                    value="<?php echo set_value('telephone', $this->form_data->telephone); ?>"
                                                                    name="telephone"
                                                                    placeholder="N° de téléphone Whatsapp" required
                                                                    class="form-control taille_champ" id="telephone1"
                                                                    type="text" pattern="[0-9]*"> <span
                                                                    style="font-size: 14px; margin-top: -60px; color: #D893A1;">Indicateur
                                                                    Pays + N° de téléphone Whatsapp. Exemple:
                                                                    2376700000007</span> </div>
                                                        </div> <span
                                                            style="color: red;float: right;display: inline"><?php echo form_error('telephone2'); ?></span>
                                                        <div class="form-group"> <label class="col-lg-5 control-label"
                                                                for="telephone2">Autre téléphone:</label>
                                                            <div class="col-lg-7"> <input
                                                                    value="<?php echo set_value('telephone2', $this->form_data->telephone2); ?>"
                                                                    name="telephone2"
                                                                    placeholder="Autre N° de téléphone"
                                                                    class="form-control taille_champ" id="telephone2"
                                                                    type="text" pattern="[0-9]*"> <span
                                                                    style="font-size: 14px; margin-top: -60px; color: #D893A1;">Indicateur
                                                                    Pays + N° de téléphone. Exemple:
                                                                    2376700000007</span> </div>
                                                        </div> <span
                                                            style="color: red;float: right;display: inline"><?php echo form_error('email'); ?></span>
                                                        <div class="form-group"> <label class="col-lg-5 control-label"
                                                                for="email">Email Personnel *:</label>
                                                            <div class="col-lg-7"> <input
                                                                    value="<?php echo set_value('email', $this->form_data->email); ?>"
                                                                    name="email" placeholder="Ex. exemple@site.com"
                                                                    required class="form-control taille_champ"
                                                                    id="email" type="email"> </div>
                                                        </div> <span
                                                            style="color: red;float: right;display: inline"><?php echo form_error('emailverif'); ?></span>
                                                        <div class="form-group"> <label class="col-lg-5 control-label"
                                                                for="emailverif">Confirmer email personnel *:</label>
                                                            <div class="col-lg-7"> <input
                                                                    value="<?php echo set_value('emailverif', $this->form_data->emailverif); ?>"
                                                                    name="emailverif" placeholder="Ex. exemple@site.com"
                                                                    required class="form-control taille_champ"
                                                                    id="emailverif" type="email"> </div>
                                                        </div> <br /><!--
        <button type="button" onclick="prevSection()">Précédent</button>
        <button type="button" onclick="nextSection()">Suivant</button>-->
                                                    </div>
                                                </fieldset>
                                                <div class="form-section" id="section-3"> <!--groupe 3-->
                                                    <fieldset>
                                                        <legend style="font-weight: 400;">IV- Cursus Académique</legend>
                                                        <div class="form-group"> <span style="color: red"> </span>
                                                            <label class="col-lg-4 control-label"
                                                                for="dernier_diplome">Dernier diplôme obtenu : </label>
                                                            <div class="col-lg-7"> <input
                                                                    value="<?php echo set_value('dernier_diplome', $this->form_data->dernier_diplome); ?>"
                                                                    name="dernier_diplome"
                                                                    class="form-control taille_champ" required
                                                                    id="dernier_diplome" type="text"
                                                                    placeholder="Ex. DEA " list="list_dernierdiplome">
                                                                <datalist id="list_dernierdiplome">
                                                                    <option value="Licence">
                                                                    <option value="DEA / Master">
                                                                    <option value="Doctorat">
                                                                </datalist> </div>
                                                        </div>
                                                        <div class="form-group"> <span style="color: red"> </span>
                                                            <label class="col-lg-4 control-label"
                                                                for="diplome_requis">Diplôme requis : </label>
                                                            <div class="col-lg-7"> <input
                                                                    value="<?php echo set_value('diplome_requis', $this->form_data->diplome_requis); ?>"
                                                                    name="diplome_requis"
                                                                    class="form-control taille_champ" required
                                                                    id="dernier_diplome" type="text"
                                                                    placeholder="Ex. Licence"> </div>
                                                        </div>
                                                        <div class="form-group"> <span style="color: red"> </span>
                                                            <label class="col-lg-4 control-label"
                                                                for="specialite_requise">Spécialité du diplome réquis:
                                                            </label>
                                                            <div class="col-lg-7"> <input
                                                                    value="<?php echo set_value('specialite_requise', $this->form_data->specialite_requise); ?>"
                                                                    name="specialite_requise"
                                                                    class="form-control taille_champ" required
                                                                    id="specialite_requiss" type="text"
                                                                    placeholder="Ex. Economie"> </div>
                                                        </div>
                                                        <div class="form-group"> <span style="color: red"></span> <label
                                                                class="col-lg-4 control-label"
                                                                for="diplome_obtenu_a">Lieu d'obtention du diplôme
                                                                réquis: </label>
                                                            <div class="col-lg-7"> <input
                                                                    value="<?php echo set_value('diplome_obtenu_a', $this->form_data->diplome_obtenu_a); ?>"
                                                                    name="diplome_obtenu_a" required
                                                                    placeholder="Université de Yaoundé II - SOA"
                                                                    class="form-control taille_champ"
                                                                    id="lieudernierdiplome" type="text"> </div>
                                                        </div>
                                                        <div class="form-group"> <span style="color: red"></span> <label
                                                                for="annee_optention_diplome"
                                                                class=" col-lg-4 control-label"
                                                                for="anneedernierdiplome">Année d'obtention du diplôme
                                                                réquis: </label>
                                                            <div class="col-lg-7"> <select
                                                                    name="annee_optention_diplome"
                                                                    class="form-control taille_champ"
                                                                    id="annee_optention_diplome" required>
                                                                    <option value="" selected="selected">-------------
                                                                        Choisir une année ------------</option>
                                                                    <?php $x = date('Y');
                                                                    $i = 0;
                                                                    for ($i = $x; $i >= $x - 30; $i--) {
                                                                        if ($i == $this->form_data->annee_optention_diplome) {
                                                                            $selected = 'selected';
                                                                        } else {
                                                                            $selected = '';
                                                                        } ?>
                                                                        <option value="<?php echo $i; ?>" <?php echo $selected; ?>> <?php echo $i; ?> </option>
                                                                    <?php } ?>
                                                                </select> </div>
                                                        </div>
                                                        <legend style="font-weight: 400;">V- Coordonnées professionnel
                                                        </legend>
                                                        <div class="form-group"> <span style="color: red"></span> <label
                                                                class="col-lg-5  control-label">Votre statut actuel *:
                                                            </label>
                                                            <div class="col-lg-7"> <select name="statut_prof"
                                                                    class="form-control taille_champ" id="statut"
                                                                    required>
                                                                    <option value="" selected="selected">-------------
                                                                        Choisir votre statut actuel ------------
                                                                    </option>
                                                                    <option value="Fonctionnaire" <?php if ($this->form_data->statut_prof === "Fonctionnaire")
                                                                        echo "selected"; ?>>Fonctionnaire</option>
                                                                    <option value="Travailleur privé" <?php if ($this->form_data->statut_prof === "Travailleur_Privé")
                                                                        echo "selected"; ?>>Travailleur Privé</option>
                                                                    <option value="Indépendant" <?php if ($this->form_data->statut_prof === "Indépendant")
                                                                        echo "selected"; ?>>Indépendant</option>
                                                                    <option value="Etudiant" <?php if ($this->form_data->statut_prof === "Etudiant")
                                                                        echo "selected"; ?>>Etudiant</option>
                                                                </select> </div>
                                                        </div>
                                                        <div class="form-group"> <span style="color: red"></span> <label
                                                                class="col-lg-4 control-label"
                                                                for="structure">Employeur: </label>
                                                            <div class="col-lg-7"> <input
                                                                    value="<?php echo set_value('structure', $this->form_data->structure); ?>"
                                                                    placeholder="Ex. MINFI, FEICOM, DGTCFM ou AUTRE"
                                                                    name="structure" class="form-control taille_champ"
                                                                    id="structure" type="text"> </div>
                                                        </div>
                                                        <div class="form-group"> <span style="color: red"></span> <label
                                                                class="col-lg-4 control-label"
                                                                for="adresse_structure">Adresse de votre employeur:
                                                            </label>
                                                            <div class="col-lg-7"> <input
                                                                    value="<?php echo set_value('adresse_structure', $this->form_data->adresse_structure); ?>"
                                                                    placeholder="Ex. BP: 000 Douala"
                                                                    name="adresse_structure"
                                                                    class="form-control taille_champ"
                                                                    id="adressAdministration" type="text"> </div>
                                                        </div>
                                                        <div class="form-group"> <label class="col-lg-5 control-label"
                                                                for="teladmi">Téléphone de l'employeur: </label>
                                                            <div class="col-lg-7"> <input
                                                                    value="<?php echo set_value('telephone_structure', $this->form_data->telephone_structure); ?>"
                                                                    name="telephone_structure"
                                                                    placeholder="Téléphone Administration"
                                                                    class="form-control taille_champ" id="teladmi"
                                                                    pattern="[0-9]*" type="text"> <span
                                                                    style="color: red"></span> </div>
                                                        </div>
                                                        <div class="form-group"> <label class="col-lg-5 control-label"
                                                                for="email_structure">Email de l'employeur: </label>
                                                            <div class="col-lg-7"> <input
                                                                    value="<?php echo set_value('email_structure', $this->form_data->email_structure); ?>"
                                                                    name="email_structure"
                                                                    placeholder="Email Administration"
                                                                    class="form-control taille_champ"
                                                                    id="email_structure" type="email"> <span
                                                                    style="color: red"></span> </div>
                                                        </div>
                                                    </fieldset> <!--
        <button type="button" onclick="prevSection()">Précédent</button>
        <button type="button" onclick="nextSection()">Suivant</button>-->
                                                </div> <!--groupe 6-->
                                                <fieldset>
                                                    <div class="form-section" id="section-4">
                                                        <legend style="font-weight: 400;">VI- Votre avis nous intéresse
                                                        </legend>
                                                        <div class="form-group"> <span style="color: red"></span> <label
                                                                class="col-lg-5  control-label">Comment avez-vous connu
                                                                le PSSFP *: </label>
                                                            <div class="col-lg-7"> <select name="howDidYouKnewUs"
                                                                    class="form-control taille_champ" id="statut"
                                                                    required>
                                                                    <option value="" selected="selected">-------------
                                                                        Choisir une réponse ------------</option>
                                                                    <option value="Cameroun Tribune" <?php if ($this->form_data->howDidYouKnewUs === "Cameroun Tribune")
                                                                        echo "selected"; ?>>Cameroun Tribune
                                                                    </option>
                                                                    <option value="Banderoles et affiches publicitaires"
                                                                        <?php if ($this->form_data->howDidYouKnewUs === "Banderoles et affiches publicitaires")
                                                                            echo "selected"; ?>>
                                                                        Banderoles et affiches publicitaires</option>
                                                                    <option value="Internet et réseaux sociaux" <?php if ($this->form_data->howDidYouKnewUs === "Internet et réseaux sociaux")
                                                                        echo "selected"; ?>>
                                                                        Internet et réseaux sociaux</option>
                                                                    <option value="Média Radio et TV" <?php if ($this->form_data->howDidYouKnewUs === "Média Radio et TV")
                                                                        echo "selected"; ?>>Média Radio et
                                                                        TV</option>
                                                                    <option
                                                                        value="Campagne de sensibilisation des équipes du PSSFP sur le terrain"
                                                                        <?php if ($this->form_data->howDidYouKnewUs === "Campagne de sensibilisation des équipes du PSSFP sur le terrain")
                                                                            echo "selected"; ?>>Campagne de
                                                                        sensibilisation des équipes du PSSFP sur le
                                                                        terrain</option>
                                                                </select> </div>
                                                        </div> <!--groupe 7-->
                                                        <legend style="font-weight: 400;">VII- Engagement</legend>
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <div style="margin-left: 10px;"> <label
                                                                        class="col-lg-2">
                                                                    </label> </div>
                                                                <div class="col-lg-10 panel panel-primary "
                                                                    style="margin-left: 30px;">
                                                                    <div class="panel-body"
                                                                        style="text-align: justify; font-size: 80%;"> Je
                                                                        sousigné(e) : <h4 class="" id="label_sous">
                                                                            <?php if (isset($this->form_data->nom_prenom))
                                                                                echo $this->form_data->nom_prenom; ?>
                                                                        </h4>, certifie sous l'honneur, l'exactidude des
                                                                        renseignements consignés dans cette fiche de
                                                                        candidature et avoir eu connaissance des
                                                                        conditions exigées pour être retenu comme
                                                                        candidat au programme de Master Professionnel en
                                                                        Finances Publiques.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-1"> </div>
                                                            <div class="col-lg-5"> <span style="color: red"> </span>
                                                                <label> <input name="engagement" type="checkbox"
                                                                        required> J'ai lu et j'accepte <a href=""> les
                                                                        conditions</a> </label> </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12"> <span
                                                                    style="color: #BF6D6D; font-size:11px;"> Les champs
                                                                    avec la mension (*) sont oubligatoires </span>
                                                            </div>
                                                        </div>
                                                        <div style="text-align: right;">
                                                            <div class="form-group">
                                                                <div class="col-lg-10 col-lg-offset-2"
                                                                    style="margin-left: 51px;">
                                                                    <button
                                                                        name="<?php if (isset($submitname))
                                                                            echo $submitname; ?>"
                                                                        id="subenregistrer" class="btn"
                                                                        style="       background:#44c767;       border-radius:6px;       border:1px solid #18ab29;       display:inline-block;       cursor:pointer;       color:#ffffff;       font-family:Arial;       font-size:17px;       padding:12px 30px;       text-decoration:none;       text-shadow:0px 1px 0px #2f6627;">Soummetre</button>
                                                                    <button type="reset" class="btn btn-danger"
                                                                        style="         background:#e4685D;         border-radius:6px;         display:inline-block;         cursor:pointer;         color:#ffffff;         font-family:Arial;         font-size:17px;         padding:12px 30px;         text-decoration:none;         text-shadow:0px 1px 0px #2f6627;">Reinitialiser</button>
                                                                </div>
                                                                <!--<button type="button" onclick="prevSection()">Précédent</button>-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                    </div>
                                </div><br />
                            </div>
                            </form>
                        </div>
                    </div>
                    </form>
                </div>
            </div>




<div>


            <div class="formbold-main-wrapper">
                <div class="formbold-form-wrapper"> <img src="">
                    <form id="myForm" method="post" class="bs-example form-horizontal" action="<?php echo $action; ?>">
                    <?php //echo validation_errors(); ?>
                   
                            <div class="formbold-mb-3"><label for="upload" class="formbold-form-label"> importer
                                    une photo</label><input type="file" name="upload" id="upload"
                                    class="formbold-form-input formbold-form-file" />
                            </div>

                        
                            
                            <div>
                                <div><!--groupe1-->
                                <legend>I - Formation</legend>
                            <div class="formbold-mb-3"> <span style="color: red"></span> <label for="specialite" class="formbold-form-label">Spécialité *:</label>
                            <select class="formbold-form-input" name="specialite"  id="specialite" required>
                                    <option value="" selected ="selected">------------- Choisir la Spécialité ------------</option>
                                    <?php foreach ($specialites as $specialite) {
                                        if ($specialite->id == $this->form_data->specialite) {
                                            $selected = 'selected';
                                        } else {
                                            $selected = '';
                                        }
                                        echo "<option value='" . $specialite->id . "' " . $selected . ">" . $specialite->nom . "</option>";
                                    } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group "> <span style="color: red"></span> <label for="specialite"
                              class="col-lg-5 control-label">Type d'étude *:</label>
                            <div class="col-lg-7"> <Input type='Radio' Name='type_etude' required value="Presentiel"
                                <?php if (isset($this->form_data->type_etude) && $this->form_data->type_etude === 'Présentiel')
                                    echo 'checked = "checked"'; ?>>&nbsp;&nbsp;Présentiel&nbsp;&nbsp;&nbsp; <Input type='Radio' Name='type_etude'
                                required value="Distanciel" <?php if (isset($this->form_data->type_etude) && $this->form_data->type_etude === 'Distanciel')
                                    echo 'checked = "checked"'; ?>>&nbsp;&nbsp;Distanciel&nbsp;&nbsp;&nbsp; </div>
                          </div>
                            </div>

                             
                            <div>
                                <div><!--groupe2-->
                                <legend>II - Identité et Informations personnelles du candidat</legend>
                            <div class="formbold-mb-3"> <span style="color: red"></span> <label for="langue1" class="formbold-form-label">Première Langue *:</label>
                            <select class="formbold-form-input" name="langue"  id="langue1" required>
                                    <option value="" selected ="selected">------------- Choisir la premiere langue ------------</option>
                                    <option value="Français" <?php if ($this->form_data->langue === "Français")
                                    echo "selected"; ?>>Français</option>
                                  <option value="Anglais" <?php if ($this->form_data->langue === "Anglais")
                                    echo "selected"; ?>>Anglais</option>
                                        </select>
                                    </div>
                                    <div class="formbold-mb-3"> <span style="color: red"></span> <label for="civilite" class="formbold-form-label">Civilité *:</label>
                            <select class="formbold-form-input" name="civilite" onchange="maskepouse();" id="civilite" required>
                                    <option value="" selected ="selected">------------- Choisir Civilité ------------</option>
                                <option value="Madame" <?php if ($this->form_data->civilite === "Madame")
                                  echo "selected"; ?>> Madame</option>
                                <option value="Madémoiselle" <?php if ($this->form_data->civilite === "Madémoiselle")
                                  echo "selected"; ?>>Mademoiselle</option>
                                <option value="Monsieur" <?php if ($this->form_data->civilite === "Monsieur")
                                  echo "selected"; ?>>Monsieur</option>
                                        </select>
                                    </div>

                                        <div class="formbold-input-wrapp formbold-mb-3"> <span style="color: red"></span> <label
                                        for="nom" class="formbold-form-label">  Nom : </label>
                                            <div> <input value="<?php echo set_value('nom', $this->form_data->nom); ?>"
                                            onchange="changesoustitre();" name="nom" placeholder="Nom" class="formbold-form-input"
                                            id="nom" type="text" required/></div>
                                        </div>
                                        <div class="formbold-input-wrapp formbold-mb-3"> <span style="color: red"></span> <label
                                                for="prenom" class="formbold-form-label">  Prénom : </label>
                                            <div> <input value="<?php echo set_value('prenom', $this->form_data->prenom); ?>"
                                            onchange="changesoustitre();" name="prenom" placeholder="Prènom" class="formbold-form-input"
                                            id="prenom" type="text" required/> <input
                                value="<?php echo set_value('epouse', $this->form_data->epouse); ?>" name="epouse"
                                placeholder="Epouse .........." class="formbold-form-input" id="epouse"
                                type="text"></div>
                                        </div>
                                        <div class="formbold-mb-2" style="display : flex">
                                            <label for="datenaiss_jj" class="formbold-form-label" style="font-size: 80%;"> Né(e) le <br> (jj/mm/aaaa)  * : 
                                </label>
                                <select class="formbold-form-input" name="datenaiss_jj" id="datenaiss_jj" required>
                                <option value="" selected="selected" > ---- Jour ---- </option>
                                <?php $i = 1;
                                for ($i = 1; $i < 32; $i++) {
                                  if ($i == $this->form_data->datenaiss_jj) {
                                    $selected = 'selected';
                                  } else {
                                    $selected = '';
                                  } ?>
                                  <option value="<?php echo $i; ?>" <?php echo $selected; ?>> <?php echo $i; ?> </option>
                                <?php } ?>
                              </select> <span style="color: red"> </span>

                                <select class="formbold-form-input" name="datenaiss_mm" id="datenaiss_mm" required value="">
                                <option value="" selected="selected"> ---- Mois ---- </option>
                                <?php $i = 1;
                                for ($i = 1; $i < 13; $i++) {
                                  if ($i == $this->form_data->datenaiss_mm) {
                                    $selected = 'selected';
                                  } else {
                                    $selected = '';
                                  } ?>
                                  <option value="<?php echo $i; ?>" <?php echo $selected; ?>> <?php echo $i; ?> </option>
                                <?php } ?>
                              </select> <span style="color: red"> </span>

                                <select class="formbold-form-input" name="datenaiss_yy" id="datenaiss_yy" required>
                                <option value="" selected="selected"> ---- Année ---- </option>
                                <?php $x = date(Y);
                                $i = 0;
                                for ($i = $x - 65; $i < $x - 15; $i++) {
                                  if ($i == $this->form_data->datenaiss_yy) {
                                    $selected = 'selected';
                                  } else {
                                    $selected = '';
                                  } ?>
                                  <option value="<?php echo $i; ?>" <?php echo $selected; ?>> <?php echo $i; ?> </option>
                                <?php } ?>
                              </select> <span style="color: red"> </span></div>


                              <div class="formbold-input-wrapp formbold-mb-3"> <span style="color: red"></span> <label
                              for="lieu_de_naissce" class="formbold-form-label">  Lieu de Naissance *: </label>
                                            <div> <input value="<?php echo set_value('lieu_de_naissce', $this->form_data->lieu_de_naissce); ?>"
                                            name="lieu_de_naissce" placeholder="Ex. Mengueme-SY"  class="formbold-form-input"
                                            id="lieu_de_naissce" type="text" required/></div>
                                        </div>

                                        <div class="formbold-input-wrapp formbold-mb-3"> <span style="color: red"></span> <label
                                                for="prenom" class="formbold-form-label">  Prénom : </label>
                                            <div> <input value="<?php echo set_value('lieu_de_naissce', $this->form_data->lieu_de_naissce); ?>"
                                            name="lieu_de_naissce" placeholder="Ex. Mengueme-SY" class="formbold-form-input"
                                            id="lieu_de_naissce" type="text" required> <input
                                value="<?php echo set_value('epouse', $this->form_data->epouse); ?>" name="epouse"
                                placeholder="Epouse .........." class="formbold-form-input" id="epouse"
                                type="text"></div>
                                </div>
                            


                            



                                </div>
                            </div>


                          


                        <div class="formbold-input-wrapp formbold-mb-3"><label for="firstname"
                                class="formbold-form-label"> Name </label>
                            <div> <input type="text" name="firstname" id="firstname" placeholder="First name"
                                    class="formbold-form-input" /></div>
                            <div class="formbold-mb-3"><label for="age" class="formbold-form-label"> Age </label><input
                                    type="text" name="age" id="age" placeholder="ex:25" class="formbold-form-input" />
                            </div>
                            <div class="formbold-mb-3"><label for="dob" class="formbold-form-label"> Date of Birth
                                </label><input type="date" name="dob" id="dob" class="formbold-form-input" /></div>
                            <div class="formbold-mb-3"><label class="formbold-form-label">Gender</label><select
                                    class="formbold-form-input" name="occupation" id="occupation">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>
                            <div class="formbold-mb-3"><label for="email" class="formbold-form-label"> Email
                                </label><input type="email" name="email" id="email" placeholder="example@email.com"
                                    class="formbold-form-input" />
                            </div>
                            <div class="formbold-mb-3"><label for="address" class="formbold-form-label"> Address
                                </label>
                                <input type="text" name="address" id="address" placeholder="Street address"
                                    class="formbold-form-input formbold-mb-3" /><input type="text" name="address2"
                                    id="address2" placeholder="Street address line 2" class="formbold-form-input" />
                            </div>
                            <div class="formbold-mb-3 formbold-input-wrapp"><label for="phone"
                                    class="formbold-form-label"> Phone </label>
                                <div> <input type="text" name="areacode" id="areacode" placeholder="Area code"
                                        class="formbold-form-input formbold-w-45" />
                                    <input type="text" name="phone" id="phone" placeholder="Phone number"
                                        class="formbold-form-input" />
                                </div>
                            </div>

                            <div class="formbold-input-flex">
                                <div> <label for="post" class="formbold-form-label"> Post/Zip code </label> <input
                                        type="text" name="post" id="post" placeholder="ex:8976"
                                        class="formbold-form-input" /></div>
                                <div> <label for="city" class="formbold-form-label"> City </label> <input type="text"
                                        name="city" id="city" placeholder="ex: New York" class="formbold-form-input" />
                                </div>
                            </div>



                            <div>
                                <div><!--groupe4-->
                                <legend>IV - Cursus  Académique</legend>
                            <div class="formbold-mb-3"> <span style="color: red"></span>
                                        <div class="formbold-input-wrapp formbold-mb-3"> <span style="color: red"></span>
                                         <label for="dernier_diplome" class="formbold-form-label"> Dernier diplome obtenu : </label>
                                            <div> <input value="<?php echo set_value('dernier_diplome', $this->form_data->dernier_diplome); ?>"
                                            name="dernier_diplome" class="formbold-form-input" required id="dernier_diplome" type="text" placeholder="Ex. DEA " list="list_dernierdiplome" /><datalist
                                  id="list_dernierdiplome">
                                  <option value="Licence">
                                  <option value="DEA / Master">
                                  <option value="Doctorat">
                                </datalist></div>
                                        </div>
                            
                                        <div class="formbold-input-wrapp formbold-mb-3"> <span style="color: red"></span> <label
                                                for="adresse_structure" class="formbold-form-label"> Adresse dee votre Employeur : </label>
                                            <div> <input value="<?php echo set_value('adresse_structure', $this->form_data->adresse_structure); ?>"
                                                    placeholder="Ex. BP: 000 Douala" name="adresse_structure" class="formbold-form-input"
                                                    id="adressAdministration" type="text" /></div>
                                        </div>
                            
                                        <div class="formbold-input-wrapp formbold-mb-3"> <span style="color: red"></span> <label for="diplome_requis"
                                                class="formbold-form-label"> Diplome requis : </label>
                                            <div> <input input value="<?php echo set_value('diplome_requis', $this->form_data->diplome_requis); ?>"
                                            name="diplome_requis" class="formbold-form-input" required id="dernier_diplome"
                                  type="text" placeholder="Ex. Licence"/></div>
                                        </div>
                            
                                        <div class="formbold-input-wrapp formbold-mb-3"> <span style="color: red"></span> <label for="specialite_requise"
                                                class="formbold-form-label"> Spécialité du diplome requis : </label>
                                            <div> <input value="<?php echo set_value('specialite_requise', $this->form_data->specialite_requise); ?>"
                                            name="specialite_requise"  class="formbold-form-input" required
                                            id="specialite_requiss" type="text" placeholder="Ex. Economie" /></div>
                                        </div>


                                        <label for="annee_optention_diplome" class="formbold-form-label" for="anneedernierdiplome">Année d'obtention du diplôme réquis:</label>

                                        <select class="formbold-form-input" name="annee_optention_diplome" id="annee_optention_diplome" required>
                                            <option value="" selected="selected">------------- Choisir une réponse ------------</option>
                                            <?php $x = date('Y');
                                  $i = 0;
                                  for ($i = $x; $i >= $x - 30; $i--) {
                                    if ($i == $this->form_data->annee_optention_diplome) {
                                      $selected = 'selected';
                                    } else {
                                      $selected = '';
                                    } ?>
                                    <option value="<?php echo $i; ?>" <?php echo $selected; ?>> <?php echo $i; ?>
                                    </option> <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div>
                                <div><!--groupe5-->
                                <legend>V - Vos Coordonnées Professionnel</legend>
                            <div class="formbold-mb-3"> <span style="color: red"></span> <label class="formbold-form-label">Votre statut actuel *:</label>
                            <select class="formbold-form-input" name="statut_prof" id="statut">
                                    <option value="" selected ="selected">------------- Choisir une réponse ------------</option>
                                  <option value="Fonctionnaire" <?php if ($this->form_data->statut_prof === "Fonctionnaire")
                                                echo "selected"; ?>>Fonctionnaire
                                            </option>
                                            <option value="Travailleur privé" <?php if ($this->form_data->statut_prof === "Travailleur_Privé")
                                                echo "selected"; ?>>
                                                Travailleur Privé</option>
                                            <option value="Indépendant" <?php if ($this->form_data->statut_prof === "Indépendant")
                                                echo "selected"; ?>>Indépendant</option>
                                            <option value="Etudiant" <?php if ($this->form_data->statut_prof === "Etudiant")
                                                echo "selected"; ?>>Etudiant</option>
                                        </select>
                            
                                        <div class="formbold-input-wrapp formbold-mb-3"> <span style="color: red"></span> <label for="structure" class="formbold-form-label"> Employeur : </label>
                                            <div> <input value="<?php echo set_value('structure', $this->form_data->structure); ?>" placeholder="Ex. MINFI, FEICOM, DGTCFM ou AUTRE" name="structure"
                                                    class="formbold-form-input" id="structure" type="text" /></div>
                                        </div>

                                        <div class="formbold-input-wrapp formbold-mb-3"> <span style="color: red"></span> <label for="adresse_structure" class="formbold-form-label"> Adresse dee votre Employeur : </label>
                                            <div> <input value="<?php echo set_value('adresse_structure', $this->form_data->adresse_structure); ?>" placeholder="Ex. BP: 000 Douala" name="adresse_structure"
                                                    class="formbold-form-input" id="adressAdministration" type="text" /></div>
                                        </div>

                                        <div class="formbold-input-wrapp formbold-mb-3"> <span style="color: red"></span> <label for="teladmi" class="formbold-form-label"> Employeur : </label>
                                            <div> <input input value="<?php echo set_value('structure', $this->form_data->structure); ?>" placeholder="Ex. MINFI, FEICOM, DGTCFM ou AUTRE" name="structure"
                                                    class="formbold-form-input" id="structure" type="text" /></div>
                                        </div>

                                        <div class="formbold-input-wrapp formbold-mb-3"> <span style="color: red"></span> <label for="structure" class="formbold-form-label"> Téléphone de l'employeur : </label>
                                            <div> <input value="<?php echo set_value('email_structure', $this->form_data->email_structure); ?>"
                                            name="email_structure" placeholder="Email Administration" class="formbold-form-input" id="email_structure" type="text" /></div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div>
                                <div><!--groupe6-->
                                <legend>VI - Votre Avis Nous intéresse</legend>
                            <div class="formbold-mb-3"> <span style="color: red"></span> <label class="formbold-form-label">Comment avez-vous connu le PSSFP *:</label>
                            <select class="formbold-form-input" name="howDidYouKnewUs" id="occupation">
                                    <option value="" selected ="selected">------------- Choisir une réponse ------------</option>
                                  <option value="Cameroun Tribune" <?php if ($this->form_data->howDidYouKnewUs === "Cameroun Tribune")
                                    echo "selected"; ?>>Cameroun Tribune </option>
                                <option value="Banderoles et affiches publicitaires" <?php if ($this->form_data->howDidYouKnewUs === "Banderoles et affiches publicitaires")
                                    echo "selected"; ?>> Banderoles et affiches publicitaires</option>
                                <option value="Internet et réseaux sociaux" <?php if ($this->form_data->howDidYouKnewUs === "Internet et réseaux sociaux")
                                    echo "selected"; ?>> Internet et réseaux sociaux</option>
                                <option value="Média Radio et TV" <?php if ($this->form_data->howDidYouKnewUs === "Média Radio et TV")
                                    echo "selected"; ?>>Média Radio et TV</option>
                                <option value="Campagne de sensibilisation des équipes du PSSFP sur le terrain" <?php if ($this->form_data->howDidYouKnewUs === "Campagne de sensibilisation des équipes du PSSFP sur le terrain")
                                    echo "selected"; ?>>Campagne de sensibilisation des équipes du PSSFP sur le terrain</option>
                            </select>
                            </div>
                            </div>
                            </div>
                            
                            <div>
                                <div><!--groupe7-->
                                <legend>VII - Engagement</legend>
                            <div class="formbold-checkbox-wrapper">
                                <label for="">
                                    <div class="panel-body" style="text-align: justify; font-size: 80%;"> Je sousigné(e) :
                                    <h5 class="" id="label_sous">
                                      <?php if (isset($this->form_data->nom_prenom))
                                        echo $this->form_data->nom_prenom; ?>
                                    </h5>, certifie sous l'honneur, l'exactidude des renseignements consignés dans cette
                                    fiche de candidature et avoir eu connaissance des conditions exigées pour être
                                    retenu comme candidat au programme de Master Professionnel en Finances Publiques.
                                  </div>
                                </label>
                                    <div style="text-align: justify; display: flex;">
                                    <span style="color: red"> </span>
                                    <input type="checkbox" name="engagement" required style="margin-right : 2%"/>
                                   <label for="" > J'ai lu et j'accepte <a href="#">les termes, conditions, and policies</a></label>
                                   </div>
                            </div></div>
                            </div>
                                <div >
                                  <button name="<?php if (isset($submitname))
                                    echo $submitname; ?>"
                                    id="subenregistrer" class="formbold-btn" style="background:#44c767; ">Soummetre</button>
                                  <button type="reset" class="formbold-btn"  style="background:#e4685D; ">Reinitialiser</button>
                                </div>
                   
                    </form>
                </div>
            </div>
            </div>
            <hr>
            <style>
                @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

                * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                }

                body {
                    font-family: 'Inter', sans-serif;
                }

                .formbold-mb-3 {
                    margin-bottom: 15px;
                }

                .formbold-relative {
                    position: relative;
                }

                .formbold-opacity-0 {
                    opacity: 0;
                }

                .formbold-stroke-current {
                    stroke: #ffffff;
                    z-index: 999;
                }

                #supportCheckbox:checked~div span {
                    opacity: 1;
                }

                #supportCheckbox:checked~div {
                    background: #6a64f1;
                    border-color: #6a64f1;
                }

                .formbold-main-wrapper {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    padding: 48px;
                }

                .formbold-form-wrapper {
                    margin: 0 auto;
                    max-width: 570px;
                    width: 100%;
                    background: white;
                    padding: 40px;
                }

                .formbold-img {
                    display: block;
                    margin: 0 auto 45px;
                }

                .formbold-input-wrapp>div {
                    display: flex;
                    gap: 20px;
                }

                .formbold-input-flex {
                    display: flex;
                    gap: 20px;
                    margin-bottom: 15px;
                }

                .formbold-input-flex>div {
                    width: 50%;
                }

                .formbold-form-input {
                    width: 100%;
                    padding: 13px 22px;
                    border-radius: 5px;
                    border: 1px solid #dde3ec;
                    background: #ffffff;
                    font-weight: 500;
                    font-size: 16px;
                    color: #536387;
                    outline: none;
                    resize: none;
                }

                .formbold-form-input::placeholder,
                select.formbold-form-input,
                .formbold-form-input[type='date']::-webkit-datetime-edit-text,
                .formbold-form-input[type='date']::-webkit-datetime-edit-month-field,
                .formbold-form-input[type='date']::-webkit-datetime-edit-day-field,
                .formbold-form-input[type='date']::-webkit-datetime-edit-year-field {
                    color: rgba(83, 99, 135, 0.5);
                }

                .formbold-form-input:focus {
                    border-color: #6a64f1;
                    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
                }

                .formbold-form-label {
                    color: #536387;
                    font-size: 14px;
                    line-height: 24px;
                    display: block;
                    margin-bottom: 10px;
                }

                .formbold-checkbox-label {
                    display: flex;
                    cursor: pointer;
                    user-select: none;
                    font-size: 16px;
                    line-height: 24px;
                    color: #536387;
                }

                .formbold-checkbox-label a {
                    margin-left: 5px;
                    color: #6a64f1;
                }

                .formbold-input-checkbox {
                    position: absolute;
                    width: 1px;
                    height: 1px;
                    padding: 0;
                    margin: -1px;
                    overflow: hidden;
                    clip: rect(0, 0, 0, 0);
                    white-space: nowrap;
                    border-width: 0;
                }

                .formbold-checkbox-inner {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    width: 20px;
                    height: 20px;
                    margin-right: 16px;
                    margin-top: 2px;
                    border: 0.7px solid #dde3ec;
                    border-radius: 3px;
                }

                .formbold-form-file {
                    padding: 12px;
                    font-size: 14px;
                    line-height: 24px;
                    color: rgba(83, 99, 135, 0.5);
                }

                .formbold-form-file::-webkit-file-upload-button {
                    display: none;
                }

                .formbold-form-file:before {
                    content: 'Upload';
                    display: inline-block;
                    background: #EEEEEE;
                    border: 0.5px solid #E7E7E7;
                    border-radius: 3px;
                    padding: 3px 12px;
                    outline: none;
                    white-space: nowrap;
                    -webkit-user-select: none;
                    cursor: pointer;
                    color: #637381;
                    font-weight: 500;
                    font-size: 12px;
                    line-height: 16px;
                    margin-right: 10px;
                }

                .formbold-btn {
                    font-size: 16px;
                    border-radius: 5px;
                    padding: 14px 25px;
                    border: none;
                    font-weight: 500;
                    background-color: #6a64f1;
                    color: white;
                    cursor: pointer;
                    margin-top: 25px;
                }

                .formbold-btn:hover {
                    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
                }

                .formbold-w-45 {
                    width: 45%;
                }
            </style>