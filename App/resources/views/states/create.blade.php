@extends('layout.homeLayout')

@section('title', 'Nouveau Cas Urgent')
@section('links')
   <link rel="stylesheet" href="css/treatments/create.css" />
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
    <section class="container-fluid bg-light" style="padding: 40px 100px 10px !important">
        <h1 class="mb-3 text-primary" style="font-size: 1.6em">Ajouter un nouveau cas urgent</h1>
        <form action="{{ route('state.store') }}" method="POST" class="mt-3">
            @csrf
            @method('POST')

            {{-- Details field --}}
            <div class="form-group">
                <label for="details">Nom Du Doctor</label>
                <input type="text" class="form-control @error('details') is-invalid @enderror" id="details" name="details" placeholder="Mr. VotreNom" value="{{ old('details') }}" required />
                {{-- Details error --}}
                @error('details')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            {{-- Attachment field --}}
            <div class="form-group">
                <label for="attachment" class="form-label">Pièce jointe</label>
                <input type="file" class="form-control text-light @error('attachment') is-invalid @enderror" id="attachment" name="attachment" style="padding: 6px 0 0 10px; background: grey;" value="{{ old('attachment') }}" required />
                {{-- Attachment error --}}
                @error('attachment')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            {{-- Created_by field --}}
            <div class="form-group">
                <label for="created_by">Nom Complet D'Utilasteur</label>
                <input type="text" class="form-control @error('created_by') is-invalid @enderror" id="created_by" name="created_by" placeholder="Mr. VotreNom" value="{{ old('created_by') }}" required />
                {{-- Created_by error --}}
                @error('created_by')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            
            {{-- Patient field --}}
            <div class="form-group mb-3">
                <label for="patient">Patient</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <label class="input-group-text" for="patient">Tous les patients</label>
                    </div>
                    <select class="custom-select @error('patient') is-invalid @enderror" id="patient" name="patient" value="{{ old('patient') }}" required autofocus>
                        <option selected disabled>Sélectionner le patient qui a ce cas urgent...</option>
                        <optgroup label="(IDCS/IDREG) - Nom & Prénom">
                            @forelse ($patients as $patient)
                                <option value="{{ $patient->id }}">{{ "($patient->IDCS/$patient->IDREG) - $patient->lastname $patient->firstname" }}</option>
                            @empty
                                <option class="alert alert-danger">Oops! Un problème est survenu, veuillez s'assurer que vous avez déjà des utilisateurs enregistrés ou contacter l'équipe développeuse</option>
                            @endforelse
                        </optgroup>
                    </select>
                    {{-- Patient error --}}
                    @error('patient')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <small id="usersCreate" class="form-text text-muted ml-3">Notez, Vous devez trouver juste les patients qui'ont déjà un compte actif. Si ce n'est pas le cas, vous devez d'abord l'enregistré d'après'<a href="{{ URL::to('/register') }}"> ici!</a></small>
            </div>

            {{-- Agent field --}}
            <div class="form-group mb-3">
                <label for="agent">Nom du résponsable/Agent</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <label class="input-group-text" for="agent">Tous les agents</label>
                    </div>
                    <select class="custom-select @error('agent') is-invalid @enderror" id="agent" name="agent" value="{{ old('agent') }}" required autofocus>
                        <option selected disabled>Sélectionner le agent qui va suivre ce cas urgent...</option>
                            @forelse ($agents as $agent)
                                <option value="{{ $agent->id }}">{{ "$agent->lastname $agent->firstname" }}</option>
                            @empty
                                <option class="alert alert-danger">Oops! Un problème est survenu, veuillez s'assurer que vous avez déjà des utilisateurs enregistrés ou contacter l'équipe développeuse</option>
                            @endforelse
                    </select>
                    {{-- Agent error --}}
                    @error('agent')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            {{-- Hospital field --}}
            <div class="form-group">
                <label for="hospital">Nom du l'Hopital</label>
                <input type="text" class="form-control @error('hospital') is-invalid @enderror" id="hospital" name="hospital" placeholder="Nom D'Hopital..." value="{{ old('hospital') }}" required />
                {{-- Created_by error --}}
                @error('hospital')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            {{-- Submit btn --}}
            <button type="submit" class="btn btn-success">VALIDER</button>
        </form>
    </section>
@endsection