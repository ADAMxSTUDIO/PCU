@extends('layout.homeLayout')

@section('content')
<!DOCTYPE html><html class="menu">
<html>

<head>

<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content=="IE=edge"/>
<meta name="google" value="notranslate"/>
<title>Side Menu</title>

<link rel="stylesheet" type="text/css" href="css/dashboard_style.css">
<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

</head>
<body>
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


</div><nav class="main-menu">

<div>
    <img class="logo_menu" src="../uc_logo_text.png" alt="">
</div> 

<div class="settings"></div>
<div class="scrollbar" id="style-1">
      
<ul>
  
<li>                                   
<a href="{{URL::to('/home')}}">
<i class="fa fa-home fa-lg"></i>
<span class="nav-text">Accueil</span>
</a>
</li>   
   
<li class="darkerlishadow">                                 
<a href="{{URL::to('/dashboard')}}">
<i class="fa fa-user fa-lg"></i>
<span class="nav-text">Profile</span>
</a>
</li>

@if(Auth::user()->hasAdmin == 1)
<li class="darkerli">                                 
	<a href="{{URL::to('/user')}}">
	<i class="fa fa-user fa-lg"></i>
	<span class="nav-text">Utilisateurs</span>
	</a>
</li>
@endif
  

<li class="darkerli">
<a href="{{ URL::to('/Case_Show') }}">
<i class="fa fa-clock-o fa-lg"></i>
<span class="nav-text">Les Cas Urgents</span>
</a>
</li>

<li class="darkerli">
<a href="{{ URL::to('/Treatement_Show') }}">
<i class="fa fa-align-left fa-lg"></i>
<span class="nav-text">Traitements
</span>
</a>
</li>


<li class="darkerli">                                 
<a href="https://www.rnp.ma/web/rnp_pub/faq-content">
<i class="fa fa-envelope-o fa-lg"></i>
<span class="nav-text">Contact</span>
</a>
</li> 
  
<li>
                                   
<a href="https://www.rnp.ma/web/rnp_pub/services">
<i class="fa fa-question-circle fa-lg"></i>
<span class="nav-text">Services En Ligne</span>
</a>
</li>   
    
  
<ul class="logout">
<li>
                   <a href="{{ route('logout') }}">
                        <i class="fa fa-desktop fa-lg"></i>
                        <span class="nav-text">
                            Se Déconnecter 
                        </span>
                        
                    </a>
</li>  
</ul>
        </nav>
      
@yield('inside_content')			
  
  
</body>
</html>
@endsection