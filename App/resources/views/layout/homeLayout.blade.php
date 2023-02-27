<html dir="ltr" lang="en-US" class="yui3-js-enabled webkit js safari safari537 safari537-3 opera opera94 opera94-0 win secure ltr"><head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    	
	<title>Gestionnaire de cas urgents</title>
	
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-T4WJSCV"></script><script data-senna-track="permanent" src="/combo?browserId=other&amp;minifierType=js&amp;languageId=en_US&amp;b=7210&amp;t=1675413545588&amp;/o/frontend-js-jquery-web/jquery/jquery.min.js&amp;/o/frontend-js-jquery-web/jquery/bootstrap.bundle.min.js&amp;/o/frontend-js-jquery-web/jquery/collapsible_search.js&amp;/o/frontend-js-jquery-web/jquery/fm.js&amp;/o/frontend-js-jquery-web/jquery/form.js&amp;/o/frontend-js-jquery-web/jquery/popper.min.js&amp;/o/frontend-js-jquery-web/jquery/side_navigation.js" type="text/javascript"></script><style type="text/css" id="operaUserStyle"></style>
<link data-senna-track="permanent" href="/o/frontend-theme-font-awesome-web/css/main.css" rel="stylesheet" type="text/css">
<link href="https://www.rnp.ma/o/registry-population-theme/images/favicon.ico" rel="icon">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="/css/dashboard_style.css" rel="stylesheet">	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@yield('links')
<style>
	body{
		max-width:100%;
	}
</style>
		
			
				<link data-senna-track="temporary" href="https://www.rnp.ma/web/rnp_pub" rel="canonical">
			
		
	
		
			
				<link data-senna-track="temporary" href="https://www.rnp.ma/web/rnp_pub" hreflang="ar-SA" rel="alternate">
			
			
	
		
			
				<link data-senna-track="temporary" href="https://www.rnp.ma/fr/web/rnp_pub" hreflang="fr-FR" rel="alternate">
			
			
	
		
			
				<link data-senna-track="temporary" href="https://www.rnp.ma/en/web/rnp_pub" hreflang="en-US" rel="alternate">
			
			
	
		
			
				<link data-senna-track="temporary" href="https://www.rnp.ma/web/rnp_pub" hreflang="x-default" rel="alternate">
			
			
	
<link class="lfr-css-file" data-senna-track="temporary" href="https://www.rnp.ma/o/registry-population-theme/css/clay.css?browserId=other&amp;themeId=registrypopulationtheme_WAR_registrypopulationtheme&amp;minifierType=css&amp;languageId=en_US&amp;b=7210&amp;t=1675413576000" id="liferayAUICSS" rel="stylesheet" type="text/css">
<link rel="stylesheet" id="yui_patched_v3_18_1_1_1675602507357_41" href="/combo/?browserId=other&amp;minifierType=&amp;languageId=en_US&amp;b=7210&amp;t=1675413526810&amp;/o/frontend-js-web/aui/widget-base/assets/skins/sam/widget-base.css"><script charset="utf-8" id="yui_patched_v3_18_1_1_1675602507357_42" src="/combo/?browserId=other&amp;minifierType=&amp;languageId=en_US&amp;b=7210&amp;t=1675413526810&amp;/o/frontend-js-web/aui/escape/escape-min.js&amp;/o/frontend-js-web/aui/base-core/base-core-min.js&amp;/o/frontend-js-web/aui/base-observable/base-observable-min.js&amp;/o/frontend-js-web/aui/aui-widget-cssclass/aui-widget-cssclass-min.js&amp;/o/frontend-js-web/aui/aui-widget-toggle/aui-widget-toggle-min.js&amp;/o/frontend-js-web/aui/base-build/base-build-min.js&amp;/o/frontend-js-web/aui/timers/timers-min.js" async=""></script><script charset="utf-8" id="yui_patched_v3_18_1_1_1675602507357_111" src="/combo/?browserId=other&amp;minifierType=&amp;languageId=en_US&amp;b=7210&amp;t=1675413526810&amp;/o/portal-search-web/js/search_bar.js" async=""></script><script charset="utf-8" id="yui_patched_v3_18_1_1_1675602507357_115" src="/combo/?browserId=other&amp;minifierType=&amp;languageId=en_US&amp;b=7210&amp;t=1675413526810&amp;/o/frontend-js-web/aui/event-touch/event-touch-min.js&amp;/o/frontend-js-web/aui/event-move/event-move-min.js" async=""></script><link rel="stylesheet" id="yui_patched_v3_18_1_1_1675602507357_116" href="/combo/?browserId=other&amp;minifierType=&amp;languageId=en_US&amp;b=7210&amp;t=1675413526810&amp;/o/frontend-js-web/aui/aui-alert/assets/skins/sam/aui-alert.css"><script charset="utf-8" id="yui_patched_v3_18_1_1_1675602507357_117" src="https://www.rnp.ma/o/frontend-js-web/liferay/available_languages.jsp?browserId=other&amp;themeId=registrypopulationtheme_WAR_registrypopulationtheme&amp;colorSchemeId=01&amp;minifierType=js&amp;languageId=en_US&amp;b=7210&amp;t=1675413524616" async=""></script><script charset="utf-8" id="yui_patched_v3_18_1_1_1675602507357_118" src="/combo/?browserId=other&amp;minifierType=&amp;languageId=en_US&amp;b=7210&amp;t=1675413526810&amp;/o/frontend-js-web/liferay/language.js&amp;/o/frontend-js-web/aui/transition/transition-min.js&amp;/o/frontend-js-web/aui/async-queue/async-queue-min.js&amp;/o/frontend-js-web/aui/gesture-simulate/gesture-simulate-min.js&amp;/o/frontend-js-web/liferay/navigation_interaction.js&amp;/o/frontend-js-web/aui/cookie/cookie-min.js&amp;/o/frontend-js-web/aui/aui-aria/aui-aria-min.js&amp;/o/frontend-js-web/aui/aui-widget-transition/aui-widget-transition-min.js&amp;/o/frontend-js-web/aui/widget-stdmod/widget-stdmod-min.js&amp;/o/frontend-js-web/aui/aui-alert/aui-alert-min.js&amp;/o/frontend-js-web/liferay/portlet_base.js&amp;/o/frontend-js-web/liferay/alert.js&amp;/o/frontend-js-web/liferay/notification.js&amp;/o/frontend-js-web/liferay/session.js" async=""></script><link data-senna-track="temporary" href="/o/frontend-css-web/main.css?browserId=other&amp;themeId=registrypopulationtheme_WAR_registrypopulationtheme&amp;minifierType=css&amp;languageId=en_US&amp;b=7210&amp;t=1675413526348" id="liferayPortalCSS" rel="stylesheet" type="text/css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

	
	
		<link data-senna-track="temporary" href="/combo?browserId=other&amp;minifierType=&amp;themeId=registrypopulationtheme_WAR_registrypopulationtheme&amp;languageId=en_US&amp;b=7210&amp;com_liferay_portal_search_web_search_bar_portlet_SearchBarPortlet_INSTANCE_templateSearch:%2Fcss%2Fmain.css&amp;com_liferay_product_navigation_product_menu_web_portlet_ProductMenuPortlet:%2Fcss%2Fmain.css&amp;com_liferay_product_navigation_user_personal_bar_web_portlet_ProductNavigationUserPersonalBarPortlet:%2Fcss%2Fmain.css&amp;com_liferay_site_navigation_menu_web_portlet_SiteNavigationMenuPortlet:%2Fcss%2Fmain.css&amp;t=1675413576000" id="b7bf2136" rel="stylesheet" type="text/css">
	
<script data-senna-track="temporary" type="text/javascript">
	// <![CDATA[
		var Liferay = Liferay || {};
		Liferay.Browser = {
			acceptsGzip: function() {
				return true;
			},
			
			getMajorVersion: function() {
				return 108.0;
			},
			getRevision: function() {
				return '537.36';
			},
			getVersion: function() {
				return '108.0';
			},
			
			isAir: function() {
				return false;
			},
			isChrome: function() {
				return true;
			},
			isEdge: function() {
				return false;
			},
			isFirefox: function() {
				return false;
			},
			isGecko: function() {
				return true;
			},
			isIe: function() {
				return false;
			},
			isIphone: function() {
				return false;
			},
			isLinux: function() {
				return false;
			},
			isMac: function() {
				return false;
			},
			isMobile: function() {
				return false;
			},
			isMozilla: function() {
				return false;
			},
			isOpera: function() {
				return false;
			},
			isRtf: function() {
				return true;
			},
			isSafari: function() {
				return true;
			},
			isSun: function() {
				return false;
			},
			isWebKit: function() {
				return true;
			},
			isWindows: function() {
				return true;
			}
		};
		Liferay.Data = Liferay.Data || {};
		Liferay.Data.ICONS_INLINE_SVG = true;
		Liferay.Data.NAV_SELECTOR = '#navigation';
		Liferay.Data.NAV_SELECTOR_MOBILE = '#navigationCollapse';
		Liferay.Data.isCustomizationView = function() {
			return false;
		};
		Liferay.Data.notices = [
			null
			
			
		];
		Liferay.PortletKeys = {
			DOCUMENT_LIBRARY: 'com_liferay_document_library_web_portlet_DLPortlet',
			DYNAMIC_DATA_MAPPING: 'com_liferay_dynamic_data_mapping_web_portlet_DDMPortlet',
			ITEM_SELECTOR: 'com_liferay_item_selector_web_portlet_ItemSelectorPortlet'
		};
		Liferay.PropsValues = {
			JAVASCRIPT_SINGLE_PAGE_APPLICATION_TIMEOUT: 0,
			NTLM_AUTH_ENABLED: false,
			UPLOAD_SERVLET_REQUEST_IMPL_MAX_SIZE: 104857600
		};
		Liferay.ThemeDisplay = {
			
			
				getLayoutId: function() {
					return '12';
				},
				
				getLayoutRelativeControlPanelURL: function() {
					return '/group/rnp_pub/~/control_panel/manage';
				},
				getLayoutRelativeURL: function() {
					return '/web/rnp_pub/home';
				},
				getLayoutURL: function() {
					return 'https://www.rnp.ma/web/rnp_pub/home';
				},
				getParentLayoutId: function() {
					return '0';
				},
				isControlPanel: function() {
					return false;
				},
				isPrivateLayout: function() {
					return 'false';
				},
				isVirtualLayout: function() {
					return false;
				},
			
			getBCP47LanguageId: function() {
				return 'en-US';
			},
			getCanonicalURL: function() {
				
				return 'http\x3a\x2f\x2frnp-portal-public\x2eapps\x2edmzprod\x2ernp\x2ema\x2fweb\x2frnp_pub';
			},
			getCDNBaseURL: function() {
				return 'https://www.rnp.ma';
			},
			getCDNDynamicResourcesHost: function() {
				return '';
			},
			getCDNHost: function() {
				return '';
			},
			getCompanyGroupId: function() {
				return '20128';
			},
			getCompanyId: function() {
				return '20101';
			},
			getDefaultLanguageId: function() {
				return 'ar_SA';
			},
			getDoAsUserIdEncoded: function() {
				return '';
			},
			getLanguageId: function() {
				return 'en_US';
			},
			getParentGroupId: function() {
				return '35233';
			},
			getPathContext: function() {
				return '';
			},
			getPathImage: function() {
				return '/image';
			},
			getPathJavaScript: function() {
				return '/o/frontend-js-web';
			},
			getPathMain: function() {
				return '/c';
			},
			getPathThemeImages: function() {
				return 'https://www.rnp.ma/o/registry-population-theme/images';
			},
			getPathThemeRoot: function() {
				return '/o/registry-population-theme';
			},
			getPlid: function() {
				return '27';
			},
			getPortalURL: function() {
				return 'https://www.rnp.ma';
			},
			getScopeGroupId: function() {
				return '35233';
			},
			getScopeGroupIdOrLiveGroupId: function() {
				return '35233';
			},
			getSessionId: function() {
				return '';
			},
			getSiteAdminURL: function() {
				return 'https://www.rnp.ma/group/rnp_pub/~/control_panel/manage?p_p_lifecycle=0&p_p_state=maximized&p_p_mode=view';
			},
			getSiteGroupId: function() {
				return '35233';
			},
			getURLControlPanel: function() {
				return '/group/control_panel?refererPlid=27';
			},
			getURLHome: function() {
				return 'http\x3a\x2f\x2frnp-portal-public\x2eapps\x2edmzprod\x2ernp\x2ema\x2fweb\x2frnp_pub\x2fhome';
			},
			getUserEmailAddress: function() {
				return '';
			},
			getUserId: function() {
				return '20105';
			},
			getUserName: function() {
				return '';
			},
			isAddSessionIdToURL: function() {
				return false;
			},
			isImpersonated: function() {
				return false;
			},
			isSignedIn: function() {
				return false;
			},
			isStateExclusive: function() {
				return false;
			},
			isStateMaximized: function() {
				return false;
			},
			isStatePopUp: function() {
				return false;
			}
		};
		var themeDisplay = Liferay.ThemeDisplay;
		Liferay.AUI = {
			
			getAvailableLangPath: function() {
				return 'available_languages.jsp?browserId=other&themeId=registrypopulationtheme_WAR_registrypopulationtheme&colorSchemeId=01&minifierType=js&languageId=en_US&b=7210&t=1675413524616';
			},
			getCombine: function() {
				return true;
			},
			getComboPath: function() {
				return '/combo/?browserId=other&minifierType=&languageId=en_US&b=7210&t=1675413526810&';
			},
			getDateFormat: function() {
				return '%m/%d/%Y';
			},
			getEditorCKEditorPath: function() {
				return '/o/frontend-editor-ckeditor-web';
			},
			getFilter: function() {
				var filter = 'raw';
				
					
						filter = 'min';
					
					
				return filter;
			},
			getFilterConfig: function() {
				var instance = this;
				var filterConfig = null;
				if (!instance.getCombine()) {
					filterConfig = {
						replaceStr: '.js' + instance.getStaticResourceURLParams(),
						searchExp: '\\.js$'
					};
				}
				return filterConfig;
			},
			getJavaScriptRootPath: function() {
				return '/o/frontend-js-web';
			},
			getLangPath: function() {
				return 'aui_lang.jsp?browserId=other&themeId=registrypopulationtheme_WAR_registrypopulationtheme&colorSchemeId=01&minifierType=js&languageId=en_US&b=7210&t=1675413526810';
			},
			getPortletRootPath: function() {
				return '/html/portlet';
			},
			getStaticResourceURLParams: function() {
				return '?browserId=other&minifierType=&languageId=en_US&b=7210&t=1675413526810';
			}
		};
		Liferay.authToken = 'FhmowNJL';
		
		Liferay.currentURL = '\x2f';
		Liferay.currentURLEncoded = '\x252F';
	// ]]>
</script>
<script src="/o/js_loader_config?t=1675413545594" type="text/javascript"></script>
<script data-senna-track="permanent" src="/combo?browserId=other&amp;minifierType=js&amp;languageId=en_US&amp;b=7210&amp;t=1675413526810&amp;/o/frontend-js-web/loader/config.js&amp;/o/frontend-js-web/loader/loader.js&amp;/o/frontend-js-web/aui/aui/aui.js&amp;/o/frontend-js-web/aui/aui-base-html5-shiv/aui-base-html5-shiv.js&amp;/o/frontend-js-web/liferay/browser_selectors.js&amp;/o/frontend-js-web/liferay/modules.js&amp;/o/frontend-js-web/liferay/aui_sandbox.js&amp;/o/frontend-js-web/misc/svg4everybody.js&amp;/o/frontend-js-web/aui/arraylist-add/arraylist-add.js&amp;/o/frontend-js-web/aui/arraylist-filter/arraylist-filter.js&amp;/o/frontend-js-web/aui/arraylist/arraylist.js&amp;/o/frontend-js-web/aui/array-extras/array-extras.js&amp;/o/frontend-js-web/aui/array-invoke/array-invoke.js&amp;/o/frontend-js-web/aui/attribute-base/attribute-base.js&amp;/o/frontend-js-web/aui/attribute-complex/attribute-complex.js&amp;/o/frontend-js-web/aui/attribute-core/attribute-core.js&amp;/o/frontend-js-web/aui/attribute-observable/attribute-observable.js&amp;/o/frontend-js-web/aui/attribute-extras/attribute-extras.js&amp;/o/frontend-js-web/aui/base-base/base-base.js&amp;/o/frontend-js-web/aui/base-pluginhost/base-pluginhost.js&amp;/o/frontend-js-web/aui/classnamemanager/classnamemanager.js&amp;/o/frontend-js-web/aui/datatype-xml-format/datatype-xml-format.js&amp;/o/frontend-js-web/aui/datatype-xml-parse/datatype-xml-parse.js&amp;/o/frontend-js-web/aui/dom-base/dom-base.js&amp;/o/frontend-js-web/aui/dom-core/dom-core.js&amp;/o/frontend-js-web/aui/dom-screen/dom-screen.js&amp;/o/frontend-js-web/aui/dom-style/dom-style.js&amp;/o/frontend-js-web/aui/event-base/event-base.js&amp;/o/frontend-js-web/aui/event-custom-base/event-custom-base.js&amp;/o/frontend-js-web/aui/event-custom-complex/event-custom-complex.js&amp;/o/frontend-js-web/aui/event-delegate/event-delegate.js&amp;/o/frontend-js-web/aui/event-focus/event-focus.js&amp;/o/frontend-js-web/aui/event-hover/event-hover.js&amp;/o/frontend-js-web/aui/event-key/event-key.js&amp;/o/frontend-js-web/aui/event-mouseenter/event-mouseenter.js&amp;/o/frontend-js-web/aui/event-mousewheel/event-mousewheel.js" type="text/javascript"></script>
<script data-senna-track="permanent" src="/combo?browserId=other&amp;minifierType=js&amp;languageId=en_US&amp;b=7210&amp;t=1675413526810&amp;/o/frontend-js-web/aui/event-outside/event-outside.js&amp;/o/frontend-js-web/aui/event-resize/event-resize.js&amp;/o/frontend-js-web/aui/event-simulate/event-simulate.js&amp;/o/frontend-js-web/aui/event-synthetic/event-synthetic.js&amp;/o/frontend-js-web/aui/intl/intl.js&amp;/o/frontend-js-web/aui/io-base/io-base.js&amp;/o/frontend-js-web/aui/io-form/io-form.js&amp;/o/frontend-js-web/aui/io-queue/io-queue.js&amp;/o/frontend-js-web/aui/io-upload-iframe/io-upload-iframe.js&amp;/o/frontend-js-web/aui/io-xdr/io-xdr.js&amp;/o/frontend-js-web/aui/json-parse/json-parse.js&amp;/o/frontend-js-web/aui/json-stringify/json-stringify.js&amp;/o/frontend-js-web/aui/node-base/node-base.js&amp;/o/frontend-js-web/aui/node-core/node-core.js&amp;/o/frontend-js-web/aui/node-event-delegate/node-event-delegate.js&amp;/o/frontend-js-web/aui/node-event-simulate/node-event-simulate.js&amp;/o/frontend-js-web/aui/node-focusmanager/node-focusmanager.js&amp;/o/frontend-js-web/aui/node-pluginhost/node-pluginhost.js&amp;/o/frontend-js-web/aui/node-screen/node-screen.js&amp;/o/frontend-js-web/aui/node-style/node-style.js&amp;/o/frontend-js-web/aui/oop/oop.js&amp;/o/frontend-js-web/aui/plugin/plugin.js&amp;/o/frontend-js-web/aui/pluginhost-base/pluginhost-base.js&amp;/o/frontend-js-web/aui/pluginhost-config/pluginhost-config.js&amp;/o/frontend-js-web/aui/querystring-stringify-simple/querystring-stringify-simple.js&amp;/o/frontend-js-web/aui/queue-promote/queue-promote.js&amp;/o/frontend-js-web/aui/selector-css2/selector-css2.js&amp;/o/frontend-js-web/aui/selector-css3/selector-css3.js&amp;/o/frontend-js-web/aui/selector-native/selector-native.js&amp;/o/frontend-js-web/aui/selector/selector.js&amp;/o/frontend-js-web/aui/widget-base/widget-base.js&amp;/o/frontend-js-web/aui/widget-htmlparser/widget-htmlparser.js&amp;/o/frontend-js-web/aui/widget-skin/widget-skin.js&amp;/o/frontend-js-web/aui/widget-uievents/widget-uievents.js&amp;/o/frontend-js-web/aui/yui-throttle/yui-throttle.js&amp;/o/frontend-js-web/aui/aui-base-core/aui-base-core.js" type="text/javascript"></script>
<script data-senna-track="permanent" src="/combo?browserId=other&amp;minifierType=js&amp;languageId=en_US&amp;b=7210&amp;t=1675413526810&amp;/o/frontend-js-web/aui/aui-base-lang/aui-base-lang.js&amp;/o/frontend-js-web/aui/aui-classnamemanager/aui-classnamemanager.js&amp;/o/frontend-js-web/aui/aui-component/aui-component.js&amp;/o/frontend-js-web/aui/aui-debounce/aui-debounce.js&amp;/o/frontend-js-web/aui/aui-delayed-task-deprecated/aui-delayed-task-deprecated.js&amp;/o/frontend-js-web/aui/aui-event-base/aui-event-base.js&amp;/o/frontend-js-web/aui/aui-event-input/aui-event-input.js&amp;/o/frontend-js-web/aui/aui-form-validator/aui-form-validator.js&amp;/o/frontend-js-web/aui/aui-node-base/aui-node-base.js&amp;/o/frontend-js-web/aui/aui-node-html5/aui-node-html5.js&amp;/o/frontend-js-web/aui/aui-selector/aui-selector.js&amp;/o/frontend-js-web/aui/aui-timer/aui-timer.js&amp;/o/frontend-js-web/liferay/dependency.js&amp;/o/frontend-js-web/liferay/dom_task_runner.js&amp;/o/frontend-js-web/liferay/events.js&amp;/o/frontend-js-web/liferay/language.js&amp;/o/frontend-js-web/liferay/lazy_load.js&amp;/o/frontend-js-web/liferay/liferay.js&amp;/o/frontend-js-web/liferay/util.js&amp;/o/frontend-js-web/liferay/global.bundle.js&amp;/o/frontend-js-web/liferay/portal.js&amp;/o/frontend-js-web/liferay/portlet.js&amp;/o/frontend-js-web/liferay/workflow.js&amp;/o/frontend-js-web/liferay/form.js&amp;/o/frontend-js-web/liferay/form_placeholders.js&amp;/o/frontend-js-web/liferay/icon.js&amp;/o/frontend-js-web/liferay/menu.js&amp;/o/frontend-js-web/liferay/notice.js&amp;/o/frontend-js-web/liferay/poller.js" type="text/javascript"></script>
	
	<script data-senna-track="temporary" src="/o/js_bundle_config?t=1675413560917" type="text/javascript"></script>
<script data-senna-track="temporary" type="text/javascript">
	// <![CDATA[
		
			
				
		
		
		
	// ]]>
</script>
	
		
			
			
		
		
	
		
			
			
		
	
	
	
	
	
<link class="lfr-css-file" data-senna-track="temporary" href="https://www.rnp.ma/o/registry-population-theme/css/main.css?browserId=other&amp;themeId=registrypopulationtheme_WAR_registrypopulationtheme&amp;minifierType=css&amp;languageId=en_US&amp;b=7210&amp;t=1675413576000" id="liferayThemeCSS" rel="stylesheet" type="text/css">
	<style data-senna-track="temporary" type="text/css">
		
			
		
			
				
					
#p_p_id_com_liferay_portal_search_web_search_bar_portlet_SearchBarPortlet_INSTANCE_templateSearch_ .portlet-content {
}
				
			
		
			
		
			
		
	</style>
<link data-senna-track="permanent" href="https://www.rnp.ma/combo?browserId=other&amp;minifierType=css&amp;languageId=en_US&amp;b=7210&amp;t=1675413531458&amp;/o/change-tracking-change-lists-indicator-theme-contributor/change_tracking_change_lists_indicator.css" rel="stylesheet" type="text/css">
<script data-senna-track="temporary" type="text/javascript">
	if (window.Analytics) {
		window._com_liferay_document_library_analytics_isViewFileEntry = false;
	}
</script>
<script type="text/javascript">
// <![CDATA[
Liferay.on(
	'ddmFieldBlur', function(event) {
		if (window.Analytics) {
			Analytics.send(
				'fieldBlurred',
				'Form',
				{
					fieldName: event.fieldName,
					focusDuration: event.focusDuration,
					formId: event.formId,
					page: event.page
				}
			);
		}
	}
);
Liferay.on(
	'ddmFieldFocus', function(event) {
		if (window.Analytics) {
			Analytics.send(
				'fieldFocused',
				'Form',
				{
					fieldName: event.fieldName,
					formId: event.formId,
					page: event.page
				}
			);
		}
	}
);
Liferay.on(
	'ddmFormPageShow', function(event) {
		if (window.Analytics) {
			Analytics.send(
				'pageViewed',
				'Form',
				{
					formId: event.formId,
					page: event.page,
					title: event.title
				}
			);
		}
	}
);
Liferay.on(
	'ddmFormSubmit', function(event) {
		if (window.Analytics) {
			Analytics.send(
				'formSubmitted',
				'Form',
				{
					formId: event.formId
				}
			);
		}
	}
);
Liferay.on(
	'ddmFormView', function(event) {
		if (window.Analytics) {
			Analytics.send(
				'formViewed',
				'Form',
				{
					formId: event.formId,
					title: event.title
				}
			);
		}
	}
);
// ]]>
</script>
	
	<link href="https://www.rnp.ma/o/registry-population-theme/css/lpg-plugins.css" rel="stylesheet">
    <link href="https://www.rnp.ma/o/registry-population-theme/css/lpg-custom.css" rel="stylesheet">
	
	<script src="https://www.rnp.ma/o/registry-population-theme/js/1_preload.js"></script>
	<script src="https://www.rnp.ma/o/registry-population-theme/js/lpg-custom.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-10LFNR5P2K"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-10LFNR5P2K');
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-T4WJSCV');
    </script>
	<script src="//rum-static.pingdom.net/pa-61cdb75a9034fb0011000553.js" async=""></script>
		
<style type="text/css">:root zeus-ad, :root topadblock, :root span[id^="ezoic-pub-ad-placeholder-"], :root guj-ad, :root gpt-ad, :root div[jsdata*="CarouselPLA-"][data-id^="CarouselPLA-"], :root div[id^="yandex_ad"], :root div[id^="vuukle-ad-"], :root div[id^="sticky_ad_"], :root div[id^="rc-widget-"], :root div[id^="lazyad-"], :root div[id^="gpt_ad_"], :root div[id^="ezoic-pub-ad-"], :root div[id^="div-gpt-"], :root div[id^="dfp-ad-"], :root div[id^="adspot-"], :root div[id^="ads300_250-widget-"], :root div[id^="ads300_100-widget-"], :root div[id^="ads250_250-widget-"], :root div[id^="adrotate_widgets-"], :root div[id^="adngin-"], :root div[id^="ad-div-"], :root div[id^="_vdo_ads_player_ai_"], :root div[id*="ScriptRoot"], :root div[id*="MarketGid"], :root div[data-native_ad], :root div[data-mpu1], :root div[data-insertion], :root div[data-id-advertdfpconf], :root div[data-google-query-id], :root hl-adsense, :root div[data-contentexchange-widget], :root div[data-content="Advertisement"], :root div[data-alias="300x250 Ad 2"], :root div[data-alias="300x250 Ad 1"], :root div[data-adzone], :root div[data-adunit-path], :root div[data-ad-wrapper], :root div[data-ad-targeting], :root div[data-ad-placeholder], :root div[class^="native-ad-"], :root div[data-dfp-id], :root div[class^="kiwi-ad-wrapper"], :root div[class^="Adstyled__AdWrapper-"], :root div[aria-label="Ads"], :root display-ads, :root display-ad-component, :root aside[id^="adrotate_widgets-"], :root article.ad, :root ark-top-ad, :root app-advertisement, :root app-ad, :root amp-fx-flying-carpet, :root amp-embed[type="taboola"], :root amp-connatix-player, :root amp-ad-custom, :root ad-shield-ads, :root ad-desktop-sidebar, :root a[onmousedown^="this.href='https://paid.outbrain.com/network/redir?"][target="_blank"] + .ob_source, :root a[onmousedown^="this.href='https://paid.outbrain.com/network/redir?"][target="_blank"], :root a[onmousedown^="this.href='http://paid.outbrain.com/network/redir?"][target="_blank"] + .ob_source, :root a[href^="https://yogacomplyfuel.com/"], :root a[href^="https://www.vfreecams.com/in/?track="], :root a[href^="https://bngpt.com/"], :root a[href^="https://www.sheetmusicplus.com/"][href*="?aff_id="], :root a[href^="https://t.adating.link/"], :root a[href^="https://www.profitablecpmgate.com/"], :root a[href^="https://www.mypornstarcams.com/landing/click/"], :root a[href^="https://financeads.net/tc.php?"], :root a[href^="https://www.mrskin.com/tour"], :root a[href^="https://www.kingsoffetish.com/tour?partner_id="], :root a[href^="https://www.infowarsstore.com/"] > img, :root a[href^="https://www.highperformancegate.com/"], :root a[href^="https://t.grtyi.com/"], :root a[href^="https://www.highperformancecpmgate.com/"], :root a[href^="https://www.highcpmrevenuenetwork.com/"], :root a[href^="https://www.get-express-vpn.com/offer/"], :root a[href^="https://www.financeads.net/tc.php?"], :root a[href^="https://www.brazzersnetwork.com/landing/"], :root div[class^="Display_displayAd"], :root a[href^="https://www.sheetmusicplus.com/?aff_id="], :root a[href^="https://www.bang.com/?aff="], :root [data-template-type="nativead"], :root a[href^="https://www.adultempire.com/"][href*="?partner_id="], :root a[href^="https://webroutetrk.com/"], :root a[href^="https://wantopticalfreelance.com/"], :root a[href^="https://twinrdsyn.com/"], :root a[href^="https://tsartech.g2afse.com/"], :root a[href^="https://tragency-clesburg.icu/"], :root a[href^="https://tracking.avapartner.com/"], :root a[href^="https://track.afcpatrk.com/"], :root a[href^="https://track.adform.net/"], :root a[href^="https://torguard.net/aff.php"] > img, :root [data-role="tile-ads-module"], :root a[href^="https://adsrv4k.com/"], :root a[href^="https://go.xlviirdr.com"], :root a[href^="https://thaudray.com/"], :root a[href^="https://taghaugh.com/"], :root a[href^="https://www.sweetdeals.com"], :root [href^="https://zstacklife.com/"] img, :root a[href^="https://t.aslnk.link/"], :root a[href^="https://go.trackitalltheway.com/"], :root [href^="https://track.fiverr.com/visit/"] > img, :root a[href^="https://syndication.exoclick.com/"], :root a[href^="https://syndication.dynsrvtbg.com/"], :root a[href^="https://streamate.com/landing/click/"], :root a[href^="https://ad.doubleclick.net/"], :root a[href^="https://static.fleshlight.com/images/banners/"], :root a[href^="https://go.strpjmp.com/"], :root a[href^="https://refpa4903566.top/"], :root a[href^="https://prf.hn/click/"][href*="/camref:"] > img, :root a[href^="https://serve.awmdelivery.com/"], :root a[href^="https://prf.hn/click/"][href*="/adref:"] > img, :root a[href^="https://www.rabbits.webcam/?id="], :root [href^="https://r.kraken.com/"], :root a[href^="https://mmwebhandler.aff-online.com/"], :root a[href^="https://www.bet365.com/"][href*="affiliate="], :root iframe[id^="google_ads_frame"], :root a[href^="https://pb-track.com/"], :root a[href^="https://paid.outbrain.com/network/redir?"], :root div[id^="ad_position_"], :root a[href^="https://ovb.im/"], :root a[href^="https://natour.naughtyamerica.com/track/"], :root [href^="https://www.herbanomic.com/"] > img, :root a[href^="https://maymooth-stopic.com/"], :root a[href^="https://loboclick.com"], :root [href^="https://routewebtk.com/"], :root a[href^="https://see.kmisln.com/"], :root a[href^="https://a.bestcontentweb.top/"], :root a[href^="https://lobimax.com/"], :root a[href^="https://lead1.pl/"], :root a[href^="https://landing.brazzersnetwork.com/"], :root a[href^="https://ads.leovegas.com/redirect.aspx?"], :root a[href^="https://land.brazzersnetwork.com/landing/"], :root a[href^="https://juicyads.in/"], :root a[href^="https://itubego.com/video-downloader/?affid="], :root a[href^="https://iqbroker.com/"][href*="?aff="], :root a[href^="https://incisivetrk.cvtr.io/click?"], :root a[href^="https://iactrivago.ampxdirect.com/"], :root [data-revive-zoneid], :root a[href^="https://googleads.g.doubleclick.net/pcs/click"], :root a[href^="https://clk.wrenchsound.store/"], :root a[href^="https://go.zybrdr.com"], :root [href^="http://join.michelle-austin.com/"], :root a[href^="https://go.xxxiijmp.com"], :root a[href^="https://go.xtbaffiliates.com/"], :root a[href^="https://ismlks.com/"], :root [href^="https://www.mypillow.com/"] > img, :root a[href^="https://azpresearch.club/"], :root a[href^="https://go.xlirdr.com"], :root [data-css-class="dfp-inarticle"], :root .card-captioned.crd > .crd--cnt > .s2nPlayer, :root a[href^="https://go.tmrjmp.com"], :root a[href^="https://go.skinstrip.net"][href*="?campaignId="], :root a[href^="https://go.markets.com/visit/?bta="], :root a[href^="//lambingsyddir.com/"], :root a[href^="https://billing.purevpn.com/aff.php"] > img, :root a[href^="https://go.hpyrdr.com/"], :root a[href^="https://go.goaserv.com/"], :root a[href^="https://track.wg-aff.com"], :root a[href^="https://go.ebrokerserve.com/"], :root a[href^="https://go.dmzjmp.com"], :root a[href^="https://go.admjmp.com/"], :root a[href^="https://www.nutaku.net/signup/landing/"], :root [href^="https://kingered-banctours.com/"], :root a[href^="https://get.surfshark.net/aff_c?"][href*="&aff_id="] > img, :root a-ad, :root a[href^="https://affiliate.rusvpn.com/click.php?"], :root a[href^="https://geniusdexchange.com/"], :root a[href^="https://go.gldrdr.com/"], :root [id^="ad_sky"], :root a[href^="https://funkydaters.com/"], :root a[href^="https://frameworkdeserve.com/"], :root a[href^="https://www.mrskin.com/account/"], :root bottomadblock, :root a[href^="https://fertilitycommand.com/"], :root div[data-native-ad], :root a[href^="https://engine.trackingdesks.com/"], :root [href^="https://totlnkcl.com/"], :root a[href^="https://www.adskeeper.com"], :root [href^="https://www.reimageplus.com/"], :root a[data-redirect^="https://paid.outbrain.com/network/redir?"], :root a[href^="https://engine.phn.doublepimp.com/"], :root a[href^="https://engine.blueistheneworanges.com/"], :root a[href^="https://clixtrac.com/"], :root div.fadeInDown[id$="____equal"][class$="____equal"], :root a[href^="https://mediaserver.gvcaffiliates.com/renderBanner.do?"], :root a[href^="https://join.dreamsexworld.com/"], :root a[href^="https://click.linksynergy.com/fs-bin/"], :root AD-TRIPLE-BOX, :root a[href^="https://click.hoolig.app/"], :root a[href^="https://track.totalav.com/"], :root img[src^="https://images.purevpnaffiliates.com"], :root a[href^="https://porntubemate.com/"], :root a[href^="http://www.gfrevenge.com/landing/"], :root a[href^="https://clickadilla.com/"], :root a[href^="https://click.dtiserv2.com/"], :root a[href^="https://go.xlvirdr.com"], :root a[href^="https://claring-loccelkin.com/"], :root [class^="s2nPlayer"], :root a[href^="https://chaturbate.jjgirls.com/?track="], :root a[href^="https://www.nudeidols.com/cams/"], :root a[href^="https://chaturbate.com/in/?track="], :root a[href^="https://www.onlineusershielder.com/"], :root a[href^="https://chaturbate.com/in/?tour="], :root a[href^="https://cams.imagetwist.com/in/?track="], :root a[href^="https://camfapr.com/landing/click/"], :root a[href^="https://cam4com.go2cloud.org/"], :root a[href^="https://affcpatrk.com/"], :root a[href^="https://bongacams2.com/track?"], :root a[href^="https://bluedelivery.pro/"], :root #topstuff > #tads, :root a[href^="https://black77854.com/"], :root a[href^="https://burpee.xyz/"], :root a[href^="https://ndt5.net/"], :root a[href^="https://batheunits.com/"], :root a[target="_blank"][onmousedown="this.href^='http://paid.outbrain.com/network/redir?"], :root a[href^="https://banners.livepartners.com/"], :root a[href^="https://m.do.co/c/"] > img, :root [href="https://masstortfinancing.com"] img, :root a[href^="https://bongacams10.com/track?"], :root a[href^="https://albionsoftwares.com/"], :root a[href^="https://t.hrtye.com/"], :root a[href^="https://go.etoro.com/"] > img, :root a[href^="https://join.sexworld3d.com/track/"], :root a[href^="https://intenseaffiliates.com/redirect/"], :root a[href^="https://aweptjmp.com/"], :root a[href^="https://ads.ad4game.com/"], :root [id^="google_ads_iframe"], :root a[href^="https://syndication.optimizesrv.com/"], :root a[href^="https://affpa.top/"], :root a[href^="https://adnetwrk.com/"], :root a[href^="https://adjoincomprise.com/"], :root [href^="http://misslinkvocation.com/"], :root a[href^="https://adclick.g.doubleclick.net/"], :root a[href^="https://go.nordvpn.net/aff"] > img, :root [href^="http://clicks.totemcash.com/"], :root a[href^="https://misspkl.com/"], :root a[href^="https://ad.zanox.com/ppc/"] > img, :root a[href^="https://ad.kubiccomps.icu/"], :root a[href^="https://adswick.com/"], :root a[href^="https://refpazkjixes.top/"], :root a[href^="https://ad.atdmt.com/"], :root [data-m-ad-id], :root a[href^="https://a-ads.com/"], :root [href^="https://www.avantlink.com/click.php"] img, :root iframe[src^="https://pagead2.googlesyndication.com/"], :root a[href^="http://www.onwebcam.com/random?t_link="], :root a[href^="http://trk.globwo.online/"], :root a[href^="https://prf.hn/click/"][href*="/creativeref:"] > img, :root a[href^="http://www.adultempire.com/unlimited/promo?"][href*="&partner_id="], :root a[href^="http://tour.mrskin.com/"], :root a[href^="https://join.virtualtaboo.com/track/"], :root a[href^="http://https://www.get-express-vpn.com/offer/"], :root a[href^="https://cagothie.net/"], :root div[id^="google_dfp_"], :root a[href^="http://googleads.g.doubleclick.net/pcs/click"], :root a[href^="https://awentw.com/"], :root a[href^="https://www.googleadservices.com/pagead/aclk?"], :root a[href^="http://www.mrskin.com/tour"], :root a[href^="https://www.purevpn.com/"][href*="&utm_source=aff-"], :root a[href^="http://deloplen.com/"], :root a[href^="https://agacelebir.com/"], :root a[href^="https://spygasm.com/track?"], :root a[href^="http://d2.zedo.com/"], :root .rc-cta[data-target], :root [href^="http://go.cm-trk2.com/"], :root a[href^="http://adtrack1.club/"], :root a[href^="http://click.payserve.com/"], :root a[href^="https://porngames.adult/?SID="], :root a[href^="https://landing1.brazzersnetwork.com"], :root #slashboxes > .deals-rail, :root [href^="http://globsads.com/"], :root [href^="https://www.brighteonstore.com/products/"] img, :root a[href^="http://bc.vc/?r="], :root .trc_rbox_border_elm .syndicatedItem, :root a[href^="http://www.onclickmega.com/jump/next.php?"], :root a[href^="http://adf.ly/?id="], :root [href^="http://homemoviestube.com/"], :root a[href^="http://ad.doubleclick.net/"], :root .commercial-unit-mobile-top .jackpot-main-content-container > .UpgKEd + .nZZLFc > .vci, :root a[href^="//syndication.dynsrvtbg.com/"], :root a[href^="http://static.fleshlight.com/images/banners/"], :root a[href^="https://a.adtng.com/"], :root a[href^="//pubads.g.doubleclick.net/"], :root div[data-adname], :root a[href^="https://thechleads.pro/"], :root a[href^="https://fastestvpn.com/lifetime-special-deal?a_aid="], :root a[href^="https://tour.mrskin.com/"], :root a[href^="http://allaptair.club/"], :root a[href^="//go.eabids.com/"], :root [data-d-ad-id], :root a[href*=".engine.adglare.net/"], :root a[href^="https://a.bestcontentoperation.top/"], :root a[href^="//go.xlviiirdr.com"], :root [data-dynamic-ads], :root a[data-widget-outbrain-redirect^="http://paid.outbrain.com/network/redir?"], :root [data-ad-width], :root [href^="https://join.playboyplus.com/track/"], :root a[data-url^="http://paid.outbrain.com/network/redir?"] + .author, :root a[href^="https://axdsz.pro/"], :root a[href^="http://bodelen.com/"], :root a[data-oburl^="https://paid.outbrain.com/network/redir?"], :root [href^="https://cpa.10kfreesilver.com/"], :root a[href^="https://a.bestcontentfood.top/"], :root a[href^="https://reinstandpointdumbest.com/"], :root a[data-obtrack^="http://paid.outbrain.com/network/redir?"], :root [href^="https://goldforyourfuture.com/clk.trk"] img, :root a[href^="http://wct.link/"], :root [href^="https://infinitytrk.com/"], :root [onclick^="location.href='http://www.reimageplus.com"], :root [id^="section-ad-banner"], :root .commercial-unit-mobile-top > div[data-pla="1"], :root [id^="chp_ads_block"], :root a[href^="https://go.julrdr.com/"], :root .trc_rbox_div .syndicatedItemUB, :root [href^="https://zone.gotrackier.com/"], :root [href^="https://www.targetingpartner.com/"], :root [href^="https://detachedbates.com/"], :root a[href^="https://fourwhenstatistics.com/"], :root [href^="https://www.restoro.com/"], :root [data-ad-manager-id], :root a[href^="https://fleshlight.sjv.io/"], :root div[id^="zergnet-widget"], :root [href^="https://www.mystore.com/"] > img, :root div[id^="ad-position-"], :root a[href^="http://adultfriendfinder.com/go/page/landing"], :root a[href^="http://affiliate.glbtracker.com/"], :root a[href^="https://leg.xyz/?track="], :root div[id^="crt-"][style], :root a[href^="http://adultgames.xxx/"], :root a[href^="https://traffic.bannerator.com/"], :root [href^="https://shiftnetwork.infusionsoft.com/go/"] > img, :root [href^="https://www.mypatriotsupply.com/"] > img, :root a[onmousedown^="this.href='http://paid.outbrain.com/network/redir?"][target="_blank"], :root [href^="https://secure.bmtmicro.com/servlets/"], :root a[href^="https://losingoldfry.com/"], :root .scroll-fixable.rail-right > .deals-rail, :root a[href^="https://oackoubs.com/"], :root a[href^="https://awptjmp.com/"], :root a[href^="https://go.goasrv.com/"], :root .commercial-unit-mobile-top > .v7hl4d, :root [href^="http://mypillow.com/"] > img, :root a[href^="http://bongacams.com/track?"], :root a[href^="https://mediaserver.entainpartners.com/renderBanner.do?"], :root [href^="https://stvkr.com/"], :root a[href^="https://promo-bc.com/"], :root a[href^="https://clicks.pipaffiliates.com/"], :root [href^="https://noqreport.com/"] > img, :root a[href^="https://go.hpyjmp.com"], :root ADS-RIGHT, :root [href^="https://mystore.com/"] > img, :root [href^="https://mypatriotsupply.com/"] > img, :root [href^="https://mylead.global/stl/"] > img, :root #leader-companion > a[href], :root a[href^="https://transfer.xe.com/signup/track/redirect?"], :root .vid-present > .van_vid_carousel__padding, :root a[href^="https://go.xxxijmp.com"], :root [href^="https://istlnkcl.com/"], :root [href^="https://www.hostg.xyz/"] > img, :root .section-subheader > .section-hotel-prices-header, :root [href^="http://join.ts-dominopresley.com/"], :root [href^="https://go.affiliatexe.com/"], :root [href^="https://go.4rabettraff.com/"], :root [href^="https://glersakr.com/"], :root [href="https://ourgoldguy.com/contact/"] img, :root a[href^="https://1startfiledownload1.com/"], :root a[href^="https://wittered-mainging.com/"], :root [href^="https://engine.gettopple.com/"], :root [href^="https://awbbjmp.com/"], :root a[href^="https://k2s.cc/pr/"], :root [href^="https://affect3dnetwork.com/track/"], :root a[href^="https://go.currency.com/"], :root [href^="http://www.mypillow.com/"] > img, :root [href^="https://v.investologic.co.uk/"], :root [href^="https://cipledecline.buzz/"], :root [href^="http://join.trannies-fuck.com/"], :root [href^="http://www.fleshlightgirls.com/"], :root div[id^="div-ads-"], :root [href^="https://rapidgator.net/article/premium/ref/"], :root a[href^="https://www.sugarinstant.com/?partner_id="], :root a[href^="https://adultfriendfinder.com/go/page/landing"], :root div[data-role="sidebarAd"], :root [href^="https://join3.bannedsextapes.com"], :root div[data-spotim-slot], :root [href^="https://antiagingbed.com/discount/"] > img, :root a[href^="https://go.247traffic.com/"], :root [href^="https://join.girlsoutwest.com/"], :root [href^="http://trafficare.net/"], :root a[href^="https://tc.tradetracker.net/"] > img, :root a[href^="https://adserver.adreactor.com/"], :root [href^="http://join.shemalesfromhell.com/"], :root [id^="ad_slider"], :root [href^="https://clk.right-wing-health.com/"], :root a[href^="http://www.adultdvdempire.com/?partner_id="][href*="&utm_"], :root [href^="http://join.shemale.xxx/"], :root [href^="https://ilovemyfreedoms.com/landing-"], :root a[href^="https://ads.betfair.com/redirect.aspx?"], :root .trc_rbox .syndicatedItem, :root a[href^="http://cam4com.go2cloud.org/aff_c?"], :root a[href^="https://cpmspace.com/"], :root [href^="https://freecourseweb.com/"] > .sitefriend, :root [class^="chp_ads_block"], :root a[href^="https://ads.planetwin365affiliate.com/redirect.aspx?"], :root [href^="http://join.rodneymoore.com/"], :root a[href^="https://www.privateinternetaccess.com/"] > img, :root [href^="https://shrugartisticelder.com"], :root a[href*=".trust.zone"], :root [href^="https://go.xlrdr.com"], :root [id^="div-gpt-ad"], :root .ob_container .item-container-obpd, :root [href^="http://www.pingperfect.com/aff.php"], :root [name^="google_ads_iframe"], :root [href^="https://safer-redirection.com"], :root [href^="https://optimizedelite.com/"] > img, :root [data-name="adaptiveConstructorAd"], :root [href^="//ngeoziadiyc4hi2e.com/"], :root a[href^="https://go.xxxjmp.com"], :root [data-desktop-ad-id], :root [href^="https://wct.link/"], :root [href^="https://traffserve.com/"], :root #kt_player > a[target="_blank"], :root a[href^="https://www.awin1.com/cread.php?awinaffid="], :root [href="https://www.masstortfinancing.com/"] > img, :root [href^="https://mypillow.com/"] > img, :root [href^="https://ad.admitad.com/"], :root a[href^="https://u.expresstech.io/"], :root [href="https://jdrucker.com/gold"] > img, :root a[href^="https://www.iyalc.com/"], :root a[href^="https://track.ultravpn.com/"], :root [href^="https://goldcometals.com/clk.trk"], :root [data-mobile-ad-id], :root a[href^="http://tc.tradetracker.net/"] > img, :root a[href^="http://affiliates.thrixxx.com/"], :root #searchResultsList > div > div[onclick$="'inline.ad'});"], :root a[href^="https://go.xlivrdr.com"], :root [data-freestar-ad], :root [data-ez-name], :root AMP-AD, :root [data-ad-cls], :root a[href^="https://www.goldenfrog.com/vyprvpn?offer_id="][href*="&aff_id="], :root [id^="ad-wrap-"], :root div[id^="taboola-stream-"], :root [href^="https://go.astutelinks.com/"], :root [href^="http://join.hardcoreshemalevideo.com/"], :root a[href^="http://ads2.williamhill.com/redirect.aspx?"], :root [onclick*="content.ad/"], :root [href^="http://residenceseeingstanding.com/"], :root div[data-adunit], :root app-large-ad, :root [href^="https://turtlebids.irauctions.com/"] img, :root [href^="https://www.cloudways.com/en/?id"], :root [class^="amp-ad-"], :root a[href^="http://go.xtbaffiliates.com/"], :root [href^="https://click2cvs.com/"], :root a[href^="https://www.liquidfire.mobi/"], :root .grid > .container > #aside-promotion, :root DFP-AD, :root AD-SLOT, :root .ob_dual_right > .ob_ads_header ~ .odb_div, :root .trc_related_container div[data-item-syndicated="true"], :root [href^="http://join.shemalepornstar.com/"], :root a[href^="https://go.xlviiirdr.com"], :root .trc_rbox_div .syndicatedItem, :root [data-ad-module], :root a[href^="https://go.cmtaffiliates.com/"], :root [href^="https://trackfin.asia/"], :root .plistaList > .plista_widget_underArticle_item[data-type="pet"], :root a[href*="//lkstrck2.com/"], :root .plistaList > .itemLinkPET, :root atf-ad-slot, :root .commercial-unit-mobile-top .jackpot-main-content-container > .UpgKEd + .nZZLFc > div > .vci, :root a[href^="http://partners.etoro.com/"], :root [data-advadstrackid], :root a[href^="https://a2.adform.net/"], :root [href^="https://affiliate.fastcomet.com/"] > img, :root #atvcap + #tvcap > .mnr-c > .commercial-unit-mobile-top, :root a[href^="http://traffic.tc-clicks.com/"], :root a[href^="https://traffdaq.com/"], :root a[href^="https://tm-offers.gamingadult.com/"], :root [class^="div-gpt-ad"], :root a[href^="https://bs.serving-sys.com"], :root a[href^="https://join.virtuallust3d.com/"], :root #taw > .med + div > #tvcap > .mnr-c:not(.qs-ic) > .commercial-unit-mobile-top, :root [data-adblockkey] { display: none !important; }</style><script src="/combo/?browserId=other&amp;minifierType=&amp;languageId=en_US&amp;b=7210&amp;t=1675413526810&amp;/o/js/resolved-module/frontend-js-metal-web$metal@2.16.8/lib/coreNamed.js&amp;/o/js/resolved-module/frontend-js-metal-web$metal@2.16.8/lib/core.js&amp;/o/js/resolved-module/frontend-js-metal-web$metal@2.16.8/lib/array/array.js&amp;/o/js/resolved-module/frontend-js-metal-web$metal@2.16.8/lib/async/async.js&amp;/o/js/resolved-module/frontend-js-metal-web$metal@2.16.8/lib/disposable/Disposable.js&amp;/o/js/resolved-module/frontend-js-metal-web$metal@2.16.8/lib/object/object.js&amp;/o/js/resolved-module/frontend-js-metal-web$metal@2.16.8/lib/string/string.js&amp;/o/js/resolved-module/frontend-js-metal-web$metal@2.16.8/lib/metal.js&amp;/o/js/resolved-module/frontend-js-metal-web$metal-dom@2.16.8/lib/domData.js&amp;/o/js/resolved-module/frontend-js-metal-web$metal-events@2.16.8/lib/EventHandle.js&amp;/o/js/resolved-module/frontend-js-metal-web$metal-events@2.16.8/lib/EventEmitter.js&amp;/o/js/resolved-module/frontend-js-metal-web$metal-events@2.16.8/lib/EventEmitterProxy.js&amp;/o/js/resolved-module/frontend-js-metal-web$metal-events@2.16.8/lib/EventHandler.js&amp;/o/js/resolved-module/frontend-js-metal-web$metal-events@2.16.8/lib/events.js&amp;/o/js/resolved-module/frontend-js-metal-web$metal-dom@2.16.8/lib/DomDelegatedEventHandle.js&amp;/o/js/resolved-module/frontend-js-metal-web$metal-dom@2.16.8/lib/DomEventHandle.js&amp;/o/js/resolved-module/frontend-js-metal-web$metal-dom@2.16.8/lib/domNamed.js&amp;/o/js/resolved-module/frontend-js-metal-web$metal-dom@2.16.8/lib/dom.js&amp;/o/js/resolved-module/frontend-js-metal-web$metal-dom@2.16.8/lib/DomEventEmitterProxy.js&amp;/o/js/resolved-module/frontend-js-metal-web$metal-dom@2.16.8/lib/features.js&amp;/o/js/resolved-module/frontend-js-metal-web$metal-dom@2.16.8/lib/globalEval.js&amp;/o/js/resolved-module/frontend-js-metal-web$metal-dom@2.16.8/lib/globalEvalStyles.js&amp;/o/js/resolved-module/frontend-js-metal-web$metal-dom@2.16.8/lib/events.js&amp;/o/js/resolved-module/frontend-js-metal-web$metal-dom@2.16.8/lib/all/dom.js"></script><script src="/combo/?browserId=other&amp;minifierType=&amp;languageId=en_US&amp;b=7210&amp;t=1675413526810&amp;/o/js/resolved-module/frontend-js-metal-web@3.0.11/bridge/metal-dom/src/all/dom.js"></script><script src="/combo/?browserId=other&amp;minifierType=&amp;languageId=en_US&amp;b=7210&amp;t=1675413526810&amp;/o/js/resolved-module/frontend-taglib-clay$classnames@2.2.6/index.js&amp;/o/js/resolved-module/frontend-js-react-web$object-assign@4.1.1/index.js&amp;/o/js/resolved-module/frontend-js-react-web$react@16.12.0/cjs/react.production.min.js&amp;/o/js/resolved-module/frontend-js-react-web$react@16.12.0/index.js&amp;/o/js/resolved-module/@frontend-taglib-clay$clayui/tooltip@3.1.0/lib/Tooltip.js&amp;/o/js/resolved-module/frontend-js-react-web$scheduler@0.18.0/cjs/scheduler.production.min.js&amp;/o/js/resolved-module/frontend-js-react-web$scheduler@0.18.0/index.js&amp;/o/js/resolved-module/frontend-js-react-web$react-dom@16.12.0/cjs/react-dom.production.min.js&amp;/o/js/resolved-module/frontend-js-react-web$react-dom@16.12.0/index.js&amp;/o/js/resolved-module/@frontend-taglib-clay$clayui/shared@3.1.0/lib/Portal.js&amp;/o/js/resolved-module/@frontend-taglib-clay$clayui/shared@3.1.0/lib/useFocusManagement.js&amp;/o/js/resolved-module/@frontend-taglib-clay$clayui/shared@3.1.0/lib/FocusScope.js&amp;/o/js/resolved-module/@frontend-taglib-clay$clayui/shared@3.1.0/lib/getEllipsisItems.js&amp;/o/js/resolved-module/@frontend-taglib-clay$clayui/button@3.3.0/lib/Group.js&amp;/o/js/resolved-module/@frontend-taglib-clay$clayui/button@3.3.0/lib/Button.js&amp;/o/js/resolved-module/frontend-taglib-clay$warning@4.0.3/warning.js&amp;/o/js/resolved-module/@frontend-taglib-clay$clayui/icon@3.0.4/lib/index.js&amp;/o/js/resolved-module/@frontend-taglib-clay$clayui/button@3.3.0/lib/ButtonWithIcon.js&amp;/o/js/resolved-module/@frontend-taglib-clay$clayui/button@3.3.0/lib/index.js&amp;/o/js/resolved-module/@frontend-taglib-clay$clayui/link@3.1.0/lib/Context.js&amp;/o/js/resolved-module/@frontend-taglib-clay$clayui/link@3.1.0/lib/index.js&amp;/o/js/resolved-module/@frontend-taglib-clay$clayui/shared@3.1.0/lib/LinkOrButton.js&amp;/o/js/resolved-module/@frontend-taglib-clay$clayui/shared@3.1.0/lib/sub.js&amp;/o/js/resolved-module/@frontend-taglib-clay$clayui/shared@3.1.0/lib/useDebounce.js"></script><script src="/combo/?browserId=other&amp;minifierType=&amp;languageId=en_US&amp;b=7210&amp;t=1675413526810&amp;/o/js/resolved-module/@frontend-taglib-clay$clayui/shared@3.1.0/lib/useTransitionHeight.js&amp;/o/js/resolved-module/@frontend-taglib-clay$clayui/shared@3.1.0/lib/index.js&amp;/o/js/resolved-module/frontend-taglib-clay$dom-align@1.10.4/dist-node/index.js&amp;/o/js/resolved-module/@frontend-taglib-clay$clayui/tooltip@3.1.0/lib/TooltipProvider.js&amp;/o/js/resolved-module/@frontend-taglib-clay$clayui/tooltip@3.1.0/lib/index.js&amp;/o/js/resolved-module/frontend-js-node-shims$process@0.11.10/browser.js&amp;/o/js/resolved-module/frontend-js-node-shims$process@0.11.10/index.js&amp;/o/js/resolved-module/frontend-js-react-web@3.0.6/js/render.es.js&amp;/o/js/resolved-module/frontend-js-react-web@3.0.6/js/hooks/useEventListener.es.js&amp;/o/js/resolved-module/frontend-js-react-web@3.0.6/js/hooks/useIsMounted.es.js&amp;/o/js/resolved-module/frontend-js-react-web@3.0.6/js/hooks/useInterval.es.js&amp;/o/js/resolved-module/frontend-js-react-web@3.0.6/js/hooks/usePrevious.es.js&amp;/o/js/resolved-module/frontend-js-react-web@3.0.6/js/hooks/useTimeout.es.js&amp;/o/js/resolved-module/frontend-js-react-web@3.0.6/js/index.es.js&amp;/o/js/resolved-module/frontend-js-metal-web$metal-position@2.1.2/lib/Geometry.js&amp;/o/js/resolved-module/frontend-js-metal-web$metal-position@2.1.2/lib/Position.js&amp;/o/js/resolved-module/frontend-js-metal-web$metal-position@2.1.2/lib/Align.js&amp;/o/js/resolved-module/frontend-js-metal-web$metal-position@2.1.2/lib/all/position.js&amp;/o/js/resolved-module/frontend-js-tooltip-support-web@2.0.4/reducer.js&amp;/o/js/resolved-module/frontend-js-tooltip-support-web@2.0.4/index.js"></script></head>
<body class=" controls-visible  yui3-skin-sam signed-out public-page site pos-relative">
    <!-- zoom/unzoom -->
    <div class="zommer absolute d-none d-sm-block">
        <button id="zoomOut" class="btn btn-sm btn-link" onclick="changeFontSize(-25)" style="box-shadow: none; padding: 4px; border: 0;"><img src="https://www.rnp.ma/o/registry-population-theme/images/zoomminus.svg"></button> <br>
        <button id="zoomReset" class="btn btn-sm btn-link" onclick="changeFontSize(0)" style="box-shadow: none; padding: 4px; border: 0;"><img src="https://www.rnp.ma/o/registry-population-theme/images/zoomreset.svg"></button> <br>
        <button id="zoomIn" class="btn btn-sm btn-link" onclick="changeFontSize(25)" style="box-shadow: none; padding: 4px; border: 0;"><img src="https://www.rnp.ma/o/registry-population-theme/images/zoomplus.svg"></button><br>
    </div>
	<!-- FAQPOPUP -->
	<div class="container-fluid">
<div class="faq-modal-popup-main">
  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="rnpFaqModelPopup">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        
	
	
		<div class="journal-content-article " data-analytics-asset-id="RNP_FAQ_POP_UP" data-analytics-asset-title="RNP_FAQ_POP_UP" data-analytics-asset-type="web-content">
			
			<div class="rnp-article-template">
    
	<div class="mb-lg-auto mb-5 col-12">
		<div class="rnp-faq-popup">
			<div class="modal-header">
				<h5 class="rp-carousel-header">Pièces à fournir</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">x</span>
				</button>
			</div>
			<div class="demo">
				<div role="tabpanel">
					<!-- Nav tabs -->
					<!-- <ul class="nav nav-tabs nav-justified nav-tabs-dropdown" role="tablist">
						<li class="active" role="presentation"><a aria-controls="home" data-toggle="tab" href="#home" role="tab">Marocain majeur</a></li>
						<li role="presentation"><a aria-controls="profile" data-toggle="tab" href="#profile" role="tab">Etranger majeur</a></li>
						<li role="presentation"><a aria-controls="messages" data-toggle="tab" href="#messages" role="tab">Marocain Mineur</a></li>
						<li role="presentation"><a aria-controls="settings" data-toggle="tab" href="#settings" role="tab">Etranger mineur</a></li>
					</ul> -->
					<!-- Tab panes -->
					
					<div class="tab-content">
						<!-- <div class="tab-pane active" id="home" role="tabpanel"> -->
						    <p class="popup_tabs">La demande d’inscription au RNP est accompagnée par le formulaire d’inscription rempli ainsi que l’un des documents suivants : </p>
							<ul class="list-unstyled links" style="margin-left:3%;">
								<li><i class="fa fa-arrow-right"></i>Une photocopie de la carte nationale d’identité électronique en cours de validité</li>
								<li><i class="fa fa-arrow-right"></i>Une photocopie du titre de séjour en cours de validité pour les étrangers résidents au Maroc</li>
								<li><i class="fa fa-arrow-right"></i>Un extrait d’acte de naissance</li>
								<li><i class="fa fa-arrow-right"></i>Un justificatif de la qualité de représentant légal lorsque la demande d’inscription concerne un mineur ou un majeur sous tutelle.</li>
								<p></p>
							    <p class="popup_tabs">À défaut de pièce justifiant l’identité de la personne concernée, l’autorité administrative locale peut accepter le témoignage de deux personnes inscrites au registre national de la population, titulaires de la carte nationale d’identité électronique ou du titre de séjour.</p>
							</ul>
						<!-- </div> -->
						<!-- <div class="tab-pane" id="profile" role="tabpanel">
							<ul class="list-unstyled links">
								<li><i class="fa fa-arrow-right"></i>Le formulaire d’inscription rempli</li>
								<li><i class="fa fa-arrow-right"></i>Une photocopie du titre de séjour en cours de validité</li>
							</ul>
						</div>
						<div class="tab-pane" id="messages" role="tabpanel">
							<ul class="list-unstyled links">
								<li><i class="fa fa-arrow-right"></i>Le formulaire d’inscription rempli</li>
								<li><i class="fa fa-arrow-right"></i>Un extrait d’acte de naissance lorsqu’il s’agit d’un mineur ne disposant pas de carte nationale d’identité</li>
								<li><i class="fa fa-arrow-right"></i>Un justificatif de la qualité de représentant légal au cas où il est différent de l’un des deux parents</li>
								<li><i class="fa fa-arrow-right"></i>Une photocopie de la carte nationale d’identité électronique du représentant légal en cours de validité</li>
							</ul>
						</div>
						<div class="tab-pane" id="settings" role="tabpanel">
							<ul class="list-unstyled links">
								<li><i class="fa fa-arrow-right"></i>Le formulaire d’inscription rempli</li>
								<li><i class="fa fa-arrow-right"></i>Une photocopie du titre de séjour en cours de validité</li>
								<li><i class="fa fa-arrow-right"></i>Un justificatif de la qualité de représentant légal au cas où il est différent de l’un des deux parents</li>
								<li><i class="fa fa-arrow-right"></i>Une photocopie du titre de séjour du représentant légal en cours de validité</li>
							</ul>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<style>
.rnp-article-template .text-graphite {
    color: #3C3C3C;
    font-family: Montserrat;
    font-size: 1.2rem;
    font-weight: 700;
    letter-spacing: 0;
    line-height: 24px;
}
.rnp-article-template .text-graphite.ar {
    font-family: Cairo;
}
</style>
		</div>
		
	
      </div>
    </div>
  </div>
</div>	</div>
    
    <!-- show a cool animated image until website is loading -->
    <div class="se-pre-con" style="display: none;"></div>
    <!--  hidden Skip to Content link that shows on the first Tab stroke. This grants keyboard users a fast way to access the content and skip all the navigation elements on the top of the page. -->
	<nav aria-label="Quick Links" class="quick-access-nav" id="lolk_quickAccessNav">
		<h1 class="hide-accessible">Navigation</h1>
		<ul>
			
				<li><a href="#main-content">Skip to Content</a></li>
			
			
		</ul>
	</nav>
    <div class="pt-0" id="wrapper">
        <!-- Navigation -->
<div class="header pos-relative">
    <div class="headermain">
		<!-- RNP logo fr/ar -->
		<div class="float-left logorespwrp d-none d-lg-block">
			<a class="display-inline-block logo-adjust logo default-logo" href="{{ URL::to('/index') }}" title="">
				<img src="https://www.rnp.ma/o/registry-population-theme/images/header-left.png" class="dblock logoresp">
			</a>
		</div>
		<!-- MEGAMENU TOP BAR -->
		<div class="pos-relative header-custom-new navbar navbar-classic navbar-expand-lg navbar-light d-none d-lg-flex">
			<img src="https://www.rnp.ma/o/registry-population-theme/images/ornement-green.svg" class="header-ornement">
			
			<a href="#" class="btn btn-link rnp-btn-link hide" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</a>
			
			<!-- MEGAMENU -->
			<div class="right-side-section">
				<!-- responsiveness : burger menu btn : display none for non-mobile media (min-width: 768px) -->	
				<button aria-controls="navigationCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right" data-target="#navigationCollapse" data-toggle="collapse" type="button">
					<span class="navbar-toggler-icon"></span>
				</button>
				<!-- responsiveness : menu dropdown -->
				<div aria-expanded="false" class="collapse navbar-collapse rnp-mega-menu rnp-md-float-right" id="navigationCollapse">
					<!-- MEGAMENU -->
<div id="navbar_portlet_com_liferay_site_navigation_menu_web_portlet_SiteNavigationMenuPortlet">
	<ul aria-label="Site Pages" class="nav navbar-blank navbar-nav navbar-site rnp-mega-menu-ul" role="menubar" id="yui_patched_v3_18_1_1_1675602507357_131">
				<!-- put angle-down icon on item with children -->
				<li class="lfr-nav-item nav-item" id="layout_portlet_com_liferay_site_navigation_menu_web_portlet_SiteNavigationMenuPortlet_14" role="presentation" data-submenu-id="rnp_layout_portlet_com_liferay_site_navigation_menu_web_portlet_SiteNavigationMenuPortlet_14_submenu">
					<a aria-labelledby="layout_portlet_com_liferay_site_navigation_menu_web_portlet_SiteNavigationMenuPortlet}_14" class="nav-link text-truncate" href="https://www.rnp.ma/web/rnp_pub/a-propos" role="menuitem" tabindex="0" id="yui_patched_v3_18_1_1_1675602507357_150">
						<span class="text-truncate" data-submenu-id="rnp_layout_portlet_com_liferay_site_navigation_menu_web_portlet_SiteNavigationMenuPortlet_14_submenu">
							 RNP.MA 
						</span>
					</a>
				</li>
				<!-- put angle-down icon on item with children -->
				<li class="lfr-nav-item nav-item" id="layout_portlet_com_liferay_site_navigation_menu_web_portlet_SiteNavigationMenuPortlet_16" role="presentation" data-submenu-id="rnp_layout_portlet_com_liferay_site_navigation_menu_web_portlet_SiteNavigationMenuPortlet_16_submenu">
					<a aria-labelledby="layout_portlet_com_liferay_site_navigation_menu_web_portlet_SiteNavigationMenuPortlet}_16" class="nav-link text-truncate" href="https://www.rnp.ma/web/rnp_pub/proc%C3%A9dure" role="menuitem" tabindex="-1" id="yui_patched_v3_18_1_1_1675602507357_188">
						<span class="text-truncate" data-submenu-id="rnp_layout_portlet_com_liferay_site_navigation_menu_web_portlet_SiteNavigationMenuPortlet_16_submenu">
							 CAS URGENTS 
						</span>
					</a>
				</li>
				@guest
				@if (Route::has('login'))
					<!-- put angle-down icon on item with children -->
					<li class="lfr-nav-item nav-item" id="layout_portlet_com_liferay_site_navigation_menu_web_portlet_SiteNavigationMenuPortlet_17" role="presentation" data-submenu-id="rnp_layout_portlet_com_liferay_site_navigation_menu_web_portlet_SiteNavigationMenuPortlet_17_submenu">
						<a aria-labelledby="layout_portlet_com_liferay_site_navigation_menu_web_portlet_SiteNavigationMenuPortlet}_17" class="nav-link text-truncate" href="{{ URL::to('/login') }}" role="menuitem" tabindex="-1" id="yui_patched_v3_18_1_1_1675602507357_190">
							<span class="text-truncate" data-submenu-id="rnp_layout_portlet_com_liferay_site_navigation_menu_web_portlet_SiteNavigationMenuPortlet_17_submenu">
								Se Connecter
							</span>
						</a>
					</li>
				@endif
				@elseif(Auth::user()->hasAdmin == 1)
					<li class="lfr-nav-item nav-item" id="layout_portlet_com_liferay_site_navigation_menu_web_portlet_SiteNavigationMenuPortlet_17" role="presentation" data-submenu-id="rnp_layout_portlet_com_liferay_site_navigation_menu_web_portlet_SiteNavigationMenuPortlet_17_submenu">
						<a aria-labelledby="layout_portlet_com_liferay_site_navigation_menu_web_portlet_SiteNavigationMenuPortlet}_17" class="nav-link text-truncate" href="{{ URL::to('/register') }}" role="menuitem" tabindex="-1" id="yui_patched_v3_18_1_1_1675602507357_190">
							<span class="text-truncate" data-submenu-id="rnp_layout_portlet_com_liferay_site_navigation_menu_web_portlet_SiteNavigationMenuPortlet_17_submenu">
								Ajouter Agent/Patient
							</span>
						</a>
					</li>
					<li class="lfr-nav-item nav-item" id="layout_portlet_com_liferay_site_navigation_menu_web_portlet_SiteNavigationMenuPortlet_17" role="presentation" data-submenu-id="rnp_layout_portlet_com_liferay_site_navigation_menu_web_portlet_SiteNavigationMenuPortlet_17_submenu">
						<button class="button-28" role="button" onclick={window.location.href="{{ route('dashboard') }}"}>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }} ‖ Admin</button>
					</li>
				@else
					<li class="lfr-nav-item nav-item" id="layout_portlet_com_liferay_site_navigation_menu_web_portlet_SiteNavigationMenuPortlet_17" role="presentation" data-submenu-id="rnp_layout_portlet_com_liferay_site_navigation_menu_web_portlet_SiteNavigationMenuPortlet_17_submenu">
						<button class="button-28" role="button" onclick={window.location.href="{{ route('dashboard') }}"}>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</button>
					</li>
				@endguest
</ul>
<main class="py-4">
    @yield('content')
</main>
<form action="#" class="hide" id="hrefFm" method="post" name="hrefFm" aria-hidden="true"><span></span><input hidden="" type="submit"></form>                </div>
            
            <footer class="footer">
                <!-- the footer columns -->
                <div class="container largeContainer">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <h5>Registre National de la Population</h5>
                            <ul class="list-unstyled links">
                                <li><a href="https://www.rnp.ma/web/rnp_pub">Accueil</a></li>
                                <li><a href="https://www.rnp.ma/web/rnp_pub/rnp-support">A propos</a></li>
                                <li><a href="https://www.rnp.ma/web/rnp_pub/faq-content">Questions fréquentes</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <h5>Services</h5>
                            <ul class="list-unstyled links">
                                <li><a href="https://www.rnp.ma/web/rnp_pub/rs255fra" target="_blank">Remplir la demande d'inscription</a></li>
                                <li><a href="https://www.rnp.ma/web/rnp_pub/rs254">Trouver un Centre de Services aux Citoyen (CSC)</a></li>
                                <li><a href="https://www.rnp.ma/web/rnp_pub/services">Tous les services en ligne</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <h5>Informations légales</h5>
                            <ul class="list-unstyled links">
                                <li><a href="https://www.rnp.ma/web/rnp_pub/mentions-legales">Mentions légales</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- bottom footer -->
                <div class="btmfooter">
                    <div class="container largeContainer">
                        <nav class="navbarWrapper d-flex flex-wrap flex-md-row align-items-center">
                            <div class="logoWraper col-xl-5 mb-3 mb-md-0 col-md-3">
                                <p class="copyrighttext mb-0 d-none d-xl-block">
                                    ©2022 Ministère de l'Intérieur - Tous droits réservés
                                </p>
                            </div>
                            <div class="navWrapper col-xl-7 col-md-9">
                                <p class="copyrighttext text-md-right text-center mb-md-2 d-none d-md-block d-xl-none">
                                    ©2022 Ministère de l'Intérieur - Tous droits réservés
                                </p>
                            </div>
                        </nav>
                    </div>
                </div>
            </footer>
	
	
	
	
	
	
	
	
<script type="text/javascript">
// <![CDATA[
	
		
			
			
		
	
	Liferay.BrowserSelectors.run();
// ]]>
</script>
<script type="text/javascript">
	// <![CDATA[
		
		Liferay.currentURL = '\x2fweb\x2frnp_pub\x2frs254';
		Liferay.currentURLEncoded = '\x252Fweb\x252Frnp_pub\x252Frs254';
	// ]]>
</script>
	
	
	<script type="text/javascript">
		// <![CDATA[
			
				
				
			
		// ]]>
	</script>
	
	
		
		
	

<script src="https://www.rnp.ma/o/registry-population-theme/js/main.js?browserId=other&amp;minifierType=js&amp;languageId=en_US&amp;b=7210&amp;t=1675848292000" type="text/javascript"></script>
<script type="text/javascript">
	// <![CDATA[
		AUI().use(
			'aui-base',
			function(A) {
				var frameElement = window.frameElement;
				if (frameElement && frameElement.getAttribute('id') === 'simulationDeviceIframe') {
					A.getBody().addClass('lfr-has-simulation-panel');
				}
			}
		);
	// ]]>
</script><script type="text/javascript">
// <![CDATA[
Liferay.Loader.require('frontend-js-tooltip-support-web@2.0.4/index', function(frontendJsTooltipSupportWeb204Index) {
(function(){
var TooltipSupport = frontendJsTooltipSupportWeb204Index;
(function() {
try {
TooltipSupport.default()
}
catch (err) {
console.error(err);
}
})();})();
});
// ]]>
</script>
    </div>
    <script>
        function changeFontSize(size) {
            const inc = document.body.style;
            inc.zoom = inc.zoom || '100%';
            if (size == 0 ) {
                // reset zoom
                size = '100';
                inc.zoom =  parseFloat(size) + '%';
            } else {
                // increase/decrease zoom : max is 175% and min is 100%
                if ((inc.zoom < '175%') && (inc.zoom >= '100%') && size > 0) {
                    // we can increase provided we are not at max already
                    inc.zoom = parseFloat(inc.zoom) + parseFloat(size) + '%'; 
                } else if ((inc.zoom <= '175%') && (inc.zoom > '100%') && size < 0) {
                    // we can decrease provided we are not at min already
                    inc.zoom = parseFloat(inc.zoom) + parseFloat(size) + '%'; 
                }
            }
        }
    </script>
    <p class="footer-version">v0.21.02.23.3.238</p>