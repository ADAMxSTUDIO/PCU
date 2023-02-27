@extends('layout.homeLayout')

@section('links')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection

@section('content')
<input type="hidden" id="hoveredNavigationMenu" value="">
<script>
	var mouseOverLi = '';
	var hideSubNavigationMenu = 'true';
	$('.rnp-nav-dropdown a > span').hover(function () {
		if (mouseOverLi.length >= 5) {
			$('#' + $("#hoveredNavigationMenu").val()).removeClass('rnp-menu-hover');
		}
		$(this).parent().parent().addClass('rnp-menu-hover');
		mouseOverLi = $(this).parent().parent().attr('id');
		$('#hoveredNavigationMenu').val($(this).parent().parent().attr('id'));
		var childMenuId = $(this).data('submenu-id');
		var html = $('#' + childMenuId).html();
		$('#rnpSubMenuDisplay').addClass('rnp-submenu-display');
		$('#rnpSubMenuDisplayLayout').html('').html(html);
		hideSubNavigationMenu = 'false';
		bindEvents();
	});
	$("body").click(function (e) {
		var target = $(e.target);
		var fontZoomIcons = 'false';
		if (target.is("#increasetext") || target.is("#resettext") || target.is("#decreasetext")) {
			fontZoomIcons = 'true';
		}
		if (fontZoomIcons === 'false') {
			$('#' + $("#hoveredNavigationMenu").val()).removeClass('rnp-menu-hover');
			$('#rnpSubMenuDisplay').removeClass('rnp-submenu-display');
		}
		return true;
	});
	$('.rnp-nav-dropdown a > span').bind("mouseleave", (function () {
		console.log('rnp-nav-dropdown a > span mouseleave  events');
		hideSubNavigationMenu = 'true';
		hideSubmenuTimer(2000);
	}));
	function bindEvents() {
		console.log('binding events rnpSubMenuDisplayLayout');
		$("#rnpSubMenuDisplay").unbind("mouseleave").bind("mouseleave", (function () {
			console.log('mouseout  events');
			$('#' + $("#hoveredNavigationMenu").val()).removeClass('rnp-menu-hover');
			$('#rnpSubMenuDisplay').removeClass('rnp-submenu-display');
		}));
		$("#rnpSubMenuDisplay").unbind("mouseenter").bind("mouseenter", (function () {
			console.log('mouseenter  events');
			hideSubNavigationMenu = 'false';
			console.log('hideSubNavigationMenu :: ', hideSubNavigationMenu);
		}));
	}
	function hideSubmenuTimer(timer) {
		setTimeout(function () {
			console.log('settimeout  events:hideSubNavigationMenu: ', hideSubNavigationMenu);
			if (hideSubNavigationMenu === 'true') {
				$('#' + $("#hoveredNavigationMenu").val()).removeClass('rnp-menu-hover');
				$('#rnpSubMenuDisplay').removeClass('rnp-submenu-display');
			}
		}, timer);
	}
</script>
				</div>
			</div>
        </div>
	</div>
</div>
<!-- MEGAMENU DROPDOWN PLACEHOLDER -->
<div class="container-fluid" style="position:absolute; display:none" id="rnpSubMenuDisplay">
	<div class="dev-and-trade-2-1-layout ltc-layout-template-homepage" role="main">
		<div class="portlet-layout row banner-column" id="rnpSubMenuDisplayLayout"></div>
	</div>
</div>
<script>
const liferayLanguageId = Liferay.ThemeDisplay.getLanguageId();
$(document).ready(function() {
    placeholders();
	changeLangHref();
    
    $(document).on('click', '.search-bar-simple .input-group-item .form-control', function() {
        placeholders();
		changeLangHref();
    });
	function changeLangHref(){
		var urlPath = window.location.pathname.toString();
		if( urlPath === "/web/rnp_pub/search" || urlPath === "/en/web/rnp_pub/search"){
			$('#changeLangFr').attr('href', '/c/portal/update_language?p_l_id=27&redirect=/web/rnp_pub/search&languageId=en_US');
			$('#changeLangAr').attr('href', '/c/portal/update_language?p_l_id=27&redirect=/web/rnp_pub/search&languageId=ar_SA');
		}
	}
	
	$('#changeLangFr, #changeLangAr').on('click', function(event) {
  		$('input[type="text"]').val('');
    });
});
	window.addEventListener('DOMContentLoaded', function () {
	  $(".autofit-col-expand div a").each(function() {
			if(liferayLanguageId === 'ar_SA'){
				var text = $(this).text().replace('QUESTIONS FRÉQUENTES','الأسئلة المتكررة').replace('A PROPOS','عن السجل الوطني للسكان').replace('PROCÉDURE','المسطرة').replace('Mentions légales','إشعارات قانونية');
				$(this).text(text); 
			}
	  });
      if(document.getElementsByClassName("sheet-text")[0] != undefined || document.getElementsByClassName("search-total-label")[0] != undefined){
			var emptyMessage = document.getElementsByClassName("sheet-text")[0].firstChild;
			var searchTotal = document.getElementsByClassName("search-total-label")[0].firstChild;
			let searchT = "";
			var searchSplit = searchTotal.data.split(" ");
            var searchCount = searchSplit[0];
			var listItems = $(".searchcontainer-content .list-group-notification li");
			listItems.each(function(idx, li) {
				var row = $(li);
			    var rowTitleAr = row.find("a")[0];
				var rowTitle = row.find("strong")[0];
				
				if( rowTitle !== undefined && rowTitle.innerHTML !== "QUESTIONS FRÉQUENTES" && rowTitle.innerHTML !== "A PROPOS" && rowTitle.innerHTML !== "PROCÉDURE" && rowTitle.innerHTML !== "Mentions légales"  && rowTitleAr.innerText !== "الأسئلة المتكررة"  && rowTitleAr.innerText !== "عن السجل الوطني للسكان" && rowTitleAr.innerText !== "المسطرة" && rowTitleAr.innerText !== "إشعارات قانونية"){
					row.remove();
					searchCount -=1;
				}
				
			});
			
			$(".pagination-bar .pagination-items-per-page").css("visibility", "hidden");
			$(".pagination-bar .pagination-results").css("visibility", "hidden");
			
			for (var i = 0; i < searchSplit.length; i++) {
				searchSplit[0] = searchCount;
			
				if(searchSplit[i] === "Results") {
					searchSplit[i] = "Résultats";
				}
				if(searchSplit[i] === "for") {
					searchSplit[i] = "pour";
				}
				searchT += searchSplit[i];
				searchT += " ";
				
			}
			if(liferayLanguageId === 'en_US'){
				emptyMessage.data= "Aucun résultat correspondant au mot-clé n'a été trouvé:\t";
				
			}
			
			searchTotal.data = searchT;
			
	  }
	});
</script>
        <!-- Content -->
                <section class="sectionbanner">
                    <div class="largeContainerBanner">
                        <div class="slidertop">
                            <div class="d-flex flex-wrap align-items-center slidewrap w-100">
                                <div class="col-lg-7 quotewrap">
                                    <p class="subsectionttl-awlrs"><strong>Gestionnaire <br> De Cas Urgents</strong></p>
                                    <p class="sectionttl-awlrs">Premier pas pour un accès simple, sûr et inclusif aux programmes d'appui social étatiques.
                                    </p><p class="rnpslidetext-awlrs">Inscription gratuite et ouverte à tous les citoyens marocains et les étrangers résidants au Maroc de tout âge.</p>
                                    <a id="redirect_prereg_fra" class="btn btn-primary custom-btn-gocheck-awlrs-start" href="{{URL::to('/Create_Case')}}" target="_blank" role="button">Remplir la demande d’inscription</a>
                                    <a class="btn btn-primary custom-btn-gocheck-awlrs-track" href="{{ URL::to('/dashboard') }}" target="_blank" role="button">Suivre Le Statut De Votre Cas</a>
                                </div>
                                <div class="col-lg-5">
                                    <!--<div class="slideimg">
                                        <img src="https://www.rnp.ma/o/registry-population-theme/images/cta_illustration.svg">
                                    </div>-->
                                    <div style="position:absolute;left:40%;margin-top:-50px;transform:scale(3.5);filter: invert(15%) sepia(94%) saturate(3523%) hue-rotate(337deg) brightness(96%) contrast(99%);">
                                        <img src="/uc_logo.png"alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- <h1>SESSION -> <script>document.write(sessionStorage.getItem('info'));</script></h1> -->
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