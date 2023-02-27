@extends('layout.homeLayout')

@section('title', 'Liste d\'utilisateurs')
@section('links')
    <link rel="stylesheet" href="css/index.css" />
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
    <section>
        <h1>Liste d'utilisateurs</h1>
        @php
            use App\Models\Role;
            use Illuminate\Support\Facades\DB;
        @endphp

        {{-- Search bar --}}
        <div class="search">
            <i id="search-icon" class="fa-solid fa-magnifying-glass"></i>
            <i id="reset-icon" class="fa-sharp fa-solid fa-circle-xmark"></i>
            <input type="text" name="search" id="search" class="" placeholder="Rechercher par nom, prénom, nom , type, date d'emploi, nom d'util..." />
            <div id="search-results">
                <div>Aucun utilisateur n'est trouvé</div>
            </div>
        </div>
        

        {{-- User cards --}}
        <div class="user-cards">
            @forelse($users as $user)
                    <div class="user-card">
                        <div class="profile-pic">
                            <img src="../profile.png" alt="la photo de profile d'utilidsateur" title="la photo de profile d'utilidsateur" />
                        </div>
                        <div class="card-content">
                            <div class="content-ids">
                                <span class="role">{{ Role::findOrFail($user->hasRole)->label }}</span>
                                <span class="date">{{ $user->created_at->format('d.m.Y') }}</span>
                            </div>
                            <div class="content-infos">
                                <h3 class="first"><span class="last">{{ $user->lastname }} </span>{{ $user->firstname }}</h3>
                                <span class="username">{{ $user->email }}</span>
                            </div>
                        </div>
                        <div class="action">
                            <a href={{ route('user.show', ['user' => $user->id]) }} class="btn btn-success">Plus d'infos</a>
                        </div>
                    </div>
                @empty
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                              </symbol>
                        </svg>
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                        Oops!!</h4>
                    <p class="text-danger">Aucun utilisateur n'est trouvé, veuillez ajouter des nouveaux utilisateurs ou contacter l'équipe développeuse pour plus d'infos.</p>
                </div> 
            @endforelse
        </div>
        {{ $users->links() }}
    </section>
    
{{-- @endsection --}}
<script type="text/javascript" src="js/index.js"></script>
@endsection