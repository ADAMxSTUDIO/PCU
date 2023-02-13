@extends('layout')

@section('content')
        <!-- Content -->
                <section class="sectionbanner">
                    <div class="largeContainerBanner">
                        <div class="slidertop">
                            <div class="d-flex flex-wrap align-items-center slidewrap w-100">
                                <div class="col-lg-7 quotewrap">
                                    <p class="subsectionttl-awlrs"><strong>Gestionnaire <br> De Cas Urgents</strong></p>
                                    <p class="sectionttl-awlrs">Premier pas pour un accès simple, sûr et inclusif aux programmes d'appui social étatiques.
                                    </p><p class="rnpslidetext-awlrs">Inscription gratuite et ouverte à tous les citoyens marocains et les étrangers résidants au Maroc de tout âge.</p>
                                    <a id="redirect_prereg_fra" class="btn btn-primary custom-btn-gocheck-awlrs-start" href="https://www.rnp.ma/web/rnp_pub/rs255fra" target="_blank" role="button">Remplir la demande d’inscription</a>
                                    <a class="btn btn-primary custom-btn-gocheck-awlrs-track" href="https://www.rnp.ma/web/rnp_pub/rs256" role="button">Suivre Le Statut De Votre Cas</a>
                                </div>
                                <div class="col-lg-5">
                                    <!--<div class="slideimg">
                                        <img src="https://www.rnp.ma/o/registry-population-theme/images/cta_illustration.svg">
                                    </div>-->
                                    <div style="position:relative;">
                                        <img src="/—Pngtree—vector emergency icon_3989752.png"alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Parcours Services -->
                <section class="parcoussection">
                    <div class="container largeContainer">
                        <div class="row justify-content-lg-between">
                            <div class="col">
                                <h2 class="sectionttl awlrs">Services en Ligne</h2>
                            </div>
                            <div class="col">
                                <a class="custom-btn d-flex gocheck d-none d-md-block" href="https://www.rnp.ma/web/rnp_pub/services">
                                    Tous les services
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4 text-center">
                                <div class="biground"><a ><div class="roundimgassist"></div></a></div>
                                <h3 class="featurettl-awlrs"><a >Mettez Votre Cas Urgent</a></h3>
                            </div>  
                            <div class="col-sm-4 col-md-4 col-lg-4 text-center">
                                <div class="biground"><a ><div class="roundimgauth"></div></a></div>
                                <h3 class="featurettl-awlrs"><a >Vérification Du Statut De Votre Cas</a></h3>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 text-center">
                                <div class="biground"><a ><div class="roundimgidcs"></div></a></div>
                                <h3 class="featurettl-awlrs"><a>Cherchez Sans Sous Perdre</a></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4 text-center">
                                <div class="biground"><a ><div class="roundimgverif"></div></a></div>
                                <h3 class="featurettl-awlrs"><a >Résoudre Votre Problème Sans Complication</a></h3>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 text-center">
                                <div class="biground"><a ><div class="roundimgmaj"></div></a></div>
                                <h3 class="featurettl-awlrs"><a >Mise à jour De L'état Du Cas</a></h3>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 text-center">
                                <div class="biground"><a target="_blank"><div class="roundimglost"></div></a></div>
                                <h3 class="featurettl-awlrs"><a  target="_blank">Posez Des Questions Qui Pourraient Vous Dérouter</a></h3>
                            </div>
                        </div>
                        <hr>
                    </div>
                </section>
</div>
 
 <style>
 @keyframes fadeIn {
  0% {opacity:1;}
  100% {opacity:0.6;}
}
@keyframes fadeOut {
  0% {opacity:0.6;}
  100% {opacity:1;}
}
.rnp-faqs-wrap-template .faq-section .faq-box:hover {
    cursor:pointer;
}
.rnp-faqs-wrap-template .faq-section .faq-box.in-active .horizontal-inner:hover {
    
    animation: fadeOut linear 1s;
    opacity:1;
    background-image: -webkit-gradient( linear, left top, left bottom, color-stop(0, #ffffff), color-stop(1, #ffffff));
}
.rnp-faqs-wrap-template .faq-section .in-active .horizontal-inner {
     
     animation: fadeIn linear 1s;
     opacity:0.6;
     background-image: -webkit-gradient( linear, left top, left bottom, color-stop(0, #ffffff), color-stop(1, #ffffff));
 
 }
 .rnp-faqs-wrap-template {
    margin-left: 3.5%;
    margin-right: 4.3%;
}
 .rnp-faqs-wrap-template .faq-section .horizontal-inner {
    margin-left: 15%;
    background-color: #ffffff;
}
 .rnp-faqs-wrap-template .faq-section .horizontal-inner .box-wrap {
    height: 175px;
    width: 225px;
    padding: 5%;
    display: grid;
}
.rnp-faqs-wrap-template .faq-section .box-wrap i {
    margin-top: 10%;
    font-size: 4rem;
    margin-left: 25%;
}
.img-center {
    margin-left: 19% !important;
    text-align:center !important;
}
.rnp-faqs-wrap-template .faq-section .box-wrap p.subdatatext {
    font-size: 0.9rem;
    font-weight: 600;
    margin-left: 5%;
    font-family: 'Montserrat';
    width: 155px;
    text-align: center;
    text-transform: uppercase;
    margin-top: 10px;
    line-height:24px;
}
.rnp-faqs-wrap-template .faq-section .box-wrap p.subdatatext.ar {
    margin-left: 0;
    margin-right: 5%;
    font-family: 'Cairo';
}
.rnp-faqs-wrap-template .faq-section .questions-main-section {
    width: 935px;
    margin-left: 10%;
    margin-right: 7%;
    margin-top: 7%;
    border-radius: 7px;
    background-color: #f7f7f7;
}
.rnp-faqs-wrap-template .faq-section .panel-group .panel {
    border-radius: 5px;
    box-shadow: none;
    border-color: #EEEEEE;
    border: 1px solid #b2b2b2;
    padding: 1px;
    background-color: #f7f7f7;   
    min-height: 82px;
    margin-bottom: 4%;
    height: auto;
    }
.rnp-faqs-wrap-template .faq-section  .panel-default > .panel-heading {
        padding: 0;
        border-radius: 0;
        color: #212121;
        background-color: #FAFAFA;
        background-color: #f7f7f7;
    }
.rnp-faqs-wrap-template .faq-section  .panel-title {
        font-size: 14px;
    }
.rnp-faqs-wrap-template .faq-section  .panel-title > a {
        display: block;
        padding: 15px;
        text-decoration: none;
        font-size: 1rem;
        font-weight: 600;
        margin-left: 30px;
        font-family: Lato;
        margin-top: 10px;
        color: #191919;
        line-height: 24px;
    }
.rnp-faqs-wrap-template .faq-section  .panel-title.ar > a {
        margin-right: 30px;
        font-family: Cairo;
    }
.rnp-faqs-wrap-template .faq-section  .more-less {
        float: right;
        color: #008344;
        margin-right: 6%;
        font-size: 20px;
        -webkit-text-stroke: 0.5px #ffffff;
    }
.rnp-faqs-wrap-template .faq-section  .more-less.ar {
        float: left;
        margin-left: 2.5%;
    }
.rnp-faqs-wrap-template .faq-section  .panel-default > .panel-heading + .panel-collapse > .panel-body {
        border-top-color: #EEEEEE;
        background-color: #f7f7f7;
        margin-left: 25px;
        margin-right: 40px;
        margin-top: -1%;
    }
.rnp-faqs-wrap-template .faq-section  .panel-default > .panel-heading + .panel-collapse > .panel-body.ar {
        margin-left: 40px;
        margin-right: 25px;
    }
.rnp-faqs-wrap-template .faq-section .panel-group .panel.highlight-panel {
    border: 1px solid #008344 ;
}
p.answers {
   
    color: #3C3C3C;
    font-family: Lato;
    font-size: 16px;
    letter-spacing: 0;
    line-height: 24px;
}
p.answers.ar {
    font-family: Cairo;
}
ul li.answers-inlist {
    text-align:justify;
    tab-stops:center 52.15pt
    color: #3C3C3C;
    font-family: Lato;
    font-size: 16px;
    letter-spacing: 0;
    line-height: 24px;
}
ul li.answers-outlist.ar {
    font-family: Cairo;
}
ul li.answers-inlist {
    margin-left:8px;
    text-align:justify;
    tab-stops:center 52.15pt
    color: #3C3C3C;
    font-family: Lato;
    font-size: 16px;
    letter-spacing: 0;
    line-height: 24px;
}
ul li.answers-inlist.ar {
    font-family: Cairo;
    margin-right:8px;
    margin-left:0;
}
</style>
<script>
 function addPlusIcon(e) {
 $(e.target).prev('.panel-heading').parent().removeClass('highlight-panel');
    $(e.target)
        .prev('.panel-heading')
        .find(".more-less")
        .addClass('fa-plus')
        .removeClass('fa-minus');
}
function addMinusIcon(e) {
$(e.target).prev('.panel-heading').parent().addClass('highlight-panel');
    $(e.target)
        .prev('.panel-heading')
        .find(".more-less")
        .removeClass('fa-plus')
        .addClass('fa-minus');
}
$('.panel-group').on('hidden.bs.collapse', addPlusIcon);
$('.panel-group').on('shown.bs.collapse', addMinusIcon);
$('.faq-box').on('click', function(e){
    
    var accordian_ID = $(this).data('accordianid');
    console.log('accordian_ID:: ',accordian_ID);
    $('#accordion1').removeClass('show').addClass('hide');
    $('#accordion2').removeClass('show').addClass('hide');
    $('#accordion3').removeClass('show').addClass('hide');
    $('#accordion4').removeClass('show').addClass('hide');
    $('#accordion5').removeClass('show').addClass('hide');
    $('#'+accordian_ID).removeClass('hide').addClass('show');
    
    //'active', 'in-active'
    $('.faq-box').removeClass('active').addClass('in-active');
    $(this).removeClass('in-active').addClass('active');
    
});
</script>
		</div>
		
	
                    </div>
                </section>
            
@endsection
            