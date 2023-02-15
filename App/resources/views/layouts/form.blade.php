<div class=" portlet-content-container">
				
	<div class="portlet-body">				
						
	
		<div id="js-portlet-_fe_d254_enroll_center_INSTANCE_8AbcWMLChbHL_"><div class="MuiGrid-root MuiGrid-container MuiGrid-direction-xs-column"><div class="MuiGrid-root MuiGrid-item"><div class="MuiPaper-root jss2 MuiPaper-elevation1 MuiPaper-rounded"><div class="MuiContainer-root jss1 MuiContainer-maxWidthLg"><div class="MuiGrid-root MuiGrid-container MuiGrid-justify-xs-space-between"><div class="MuiGrid-root MuiGrid-item"><p class="MuiTypography-root jss3 MuiTypography-body1">SE <span class="jss3" style="font-weight: 200;">CONNECTER</span> </p><nav class="MuiTypography-root MuiBreadcrumbs-root MuiTypography-body1 MuiTypography-colorTextSecondary" aria-label="breadcrumb" style="color: rgb(255, 255, 255);"><ol class="MuiBreadcrumbs-ol"><li class="MuiBreadcrumbs-li"><a class="MuiTypography-root MuiLink-root MuiLink-underlineHover jss4 MuiTypography-colorPrimary" href="{{ URL::to('/index') }}">Accueil</a></li><li aria-hidden="true" class="MuiBreadcrumbs-separator">/</li><li class="MuiBreadcrumbs-li"><p class="MuiTypography-root jss5 MuiTypography-body1">Connecter A votre Compte</p></li></ol></nav></div><div class="MuiGrid-root MuiGrid-item"></div></div></div></div></div><center><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-md-7" style="margin-left: 1.8em; margin-right: 0px; margin-top: 0px;"><div class="MuiGrid-root MuiGrid-container MuiGrid-direction-xs-column"><div class="MuiGrid-root MuiGrid-item"><p class="MuiTypography-root jss7 MuiTypography-body1" style="position:relative;left:7%">Suiver Votre Cas Urgent<sup class="MuiBox-root jss43" style="font-size: 8px; font-weight: normal; opacity: 0;"> (build: 1.22.11.25.131)</sup></p><hr class="MuiDivider-root jss8"><p class="MuiTypography-root jss9 MuiTypography-body1 MuiTypography-paragraph">Veuillez mettez les informations liées à compte pour obtenir l'accès au Services De Traitement Des Cas Unique (SCU) dans lequel vous pourrez finaliser ou entamer votre Cas Urgent.</p></div><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12"><div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2" style="margin-top: 1em;"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-6"></a></div></div></div></div></div></div></div></div></center>
            
        <div class="card-body" style="position:relative;width:50%;left:25%;">
                    <form method="POST" action="/login?email={{ old('email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" style="color:#007E41;" class="col-md-4 col-form-label text-md-end">{{ __('Votre Adresse Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" style="color:#007E41;" class="col-md-4 col-form-label text-md-end">{{ __('Le Mot De Passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4 mt-2">
                                <button type="submit" class="btn btn-outline-success">
                                    {{ __('Connecter') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
        <script type="text/javascript">
	Liferay.Loader.require(
		"fe_d254_enroll_center@1.0.0",
		function(module) {
			var initializer;
			if (typeof module.default === 'function') {
				initializer = module.default;
			}
			else if (typeof module === 'function') {
				initializer = module;
			}
			if (initializer) {
				initializer(
					{
						configuration: {
							portletInstance: JSON.parse('{}'),
							system: JSON.parse('{}')
						},
						contextPath: '/o/fe_d254_enroll_center-1.0.0',
						portletElementId: 'js-portlet-_fe_d254_enroll_center_INSTANCE_8AbcWMLChbHL_',
						portletNamespace: '_fe_d254_enroll_center_INSTANCE_8AbcWMLChbHL_'
					});
			}
			else {
				console.error(
					'Module', 'fe_d254_enroll_center@1.0.0',
					'is not exporting a function: cannot initialize it.');
			}
		});
</script>
	
	
					
				
			
		
	
	
	</div>
			</div>
		
	</div>
</section>
	
		
		
	</div>
</div>
		</div>
	</div>
</div>
