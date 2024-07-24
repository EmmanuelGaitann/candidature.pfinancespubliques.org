<div class="row">
    <div class="col-lg-12">
        <div class="bs-example">
            <div class="jumbotron">
                
                
                <div class="row">

                        <div class="col-lg-12">
                            <div class="col-lg-2">
                                
                            </div>
                            <div class="col-lg-8">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Master en Finances Publiques</h3>
                                    </div>
                                    <div class="panel-body" >
                                        <div style="color: #002166">
                    <center>
                        Veuillez entrer le numéro d'ordre reçu à l'enrégistrement de votre candidature et votre numéro de téléphone<br/>
                    </center>
                </div>
                <span style="color: red">
                    <center><?php if (isset($message)) echo $message; ?></center>
                </span>

                    <form id="myForm" method="post" class="bs-example form-horizontal" action="<?php echo $action; ?>">
                        <div class="form-group">
                            <span style="color: red"></span>
                            <label class="col-lg-4 control-label" for="numordre">Numéro d'Ordre :</label>
                            <div class="col-lg-6">
                                <input value="<?php echo set_value('numordre', $this->form_data->numordre); ?>" 
                                       name="numordre" placeholder="Numéro d'Ordre" pattern="[0-9]*"
                                       required class="form-control taille_champ" id="Numéro d'Ordre"  type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-4 control-label" for="telephone">Téléphone :</label>
                            <div class="col-lg-6">
                                <input value="<?php echo set_value('telephone', $this->form_data->telephone); ?>" 
                                       name="telephone" placeholder="Téléphone" required class="form-control taille_champ" 
                                       id="telephone"  type="text" pattern="[0-9]*">
                            </div>
                        </div>
                        <div  style="text-align: right;">
                            <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-2">
                                    <button  name="envoyer" id="subenregistrer"  class="btn btn-info" >Ouvrir le formulaire</button> 
                                 
                                    <?php echo anchor('candidature/initRecupOrdre/','Numéro d\'ordre oublié',array('class'=>'btn btn-warning')); ?>
                                </div>
                            </div>
                        </div><br/>
                    </form>
                
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
