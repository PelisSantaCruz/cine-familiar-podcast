(()=>{"use strict";const e=window.React,t=window.wp.i18n,n=window.wp.blocks,o=window.wp.plugins,a=window.wp.element,l=window.wp.data,r=window.wp.components,i="gutenify",s=window?.[`_${i}_vars`]?window[`_${i}_vars`]:{},{is_pro_activated:c,pro_account_url:u,pro_license_status:d,title:p,prefix:m,slug:_,authorWebSite:w,authorDemoWebSite:g,authorWebSiteProPage:b,defaultTheme:f,authorWebSiteSupport:h,plugin_directory_url:k,brand_color:S,plugin_main_version:$,documentationsURL:v,pro_title:y,active_blocks:C,plugin_main_camel_case_name:E}=s,M=(s?.siteUrl?s.siteUrl:s.site_url,(0,t.sprintf)("Want to enjoy all feature of blocks? Checkout %1$s%2$s%3$s.",'<a href="'+b+'" target="_blank">',y,"</a>"),{pluginMainSlug:"gutenify",pluginMainCamelCaseName:E,pluginMainFunctionPrefix:"gutenify"}),{pluginMainSlug:W}=M,x=()=>{const{insertBlocks:o}=(0,l.useDispatch)("core/block-editor");return(0,e.createElement)(e.Fragment,null,(0,e.createElement)(r.Button,{className:"components-button components-icon-button",onClick:e=>{e.preventDefault(),o((0,n.createBlock)(`${W}/templates-browser`,{isTemplatesModalOnly:!0}))}},(0,e.createElement)(r.Icon,{icon:"grid-view"})," ",(0,t.__)("Add Template","@@text_domain")))};class D extends a.Component{componentDidMount(){let t=document.querySelector(".edit-post-header__toolbar"),n=!1;if(t||(t=document.querySelector(".editor-header__toolbar"),n=!0),t){const o=document.createElement("div");o.classList.add(`${W}-toolbar-templates`),n||o.classList.add(`${W}-toolbar-templates-left`),t.appendChild(o),a.createRoot?(0,a.createRoot)(o).render((0,e.createElement)(x,null)):(0,a.render)((0,e.createElement)(x,null),o)}}render(){return null}}(0,o.registerPlugin)(`${W}-toolbar-templates`,{render:D})})();