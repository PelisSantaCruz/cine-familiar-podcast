(()=>{"use strict";const t=window.wp.hooks,e=window.lodash,s=window.wp.i18n,i="gutenify",a=window?.[`_${i}_vars`]?window[`_${i}_vars`]:{},{is_pro_activated:r,pro_account_url:l,pro_license_status:n,title:o,prefix:u,slug:c,authorWebSite:p,authorDemoWebSite:_,authorWebSiteProPage:b,defaultTheme:d,authorWebSiteSupport:g,plugin_directory_url:y,brand_color:$,plugin_main_version:w,documentationsURL:f,pro_title:m,active_blocks:h,plugin_main_camel_case_name:k}=a;a?.siteUrl?a.siteUrl:a.site_url,(0,s.sprintf)("Want to enjoy all feature of blocks? Checkout %1$s%2$s%3$s.",'<a href="'+b+'" target="_blank">',m,"</a>"),(0,t.addFilter)("blocks.registerBlockType",`${c}--add-attributes`,(function(s){const{name:i}=s,a=i.split("/");return!a||a.lenght<2?s:(s?.attributes?.blockClientId||(s.attributes=(0,e.assign)(s.attributes,{blockClientId:{type:"string",default:""}})),s?.attributes?.customCss||(s.attributes=(0,e.assign)(s.attributes,{customCss:{type:"string",default:""}})),s?.attributes?.[`${k}Styles`]||(s.attributes=(0,e.assign)(s.attributes,{[`${k}Styles`]:{type:"string",default:""}})),(0,e.assign)({},s,{[`${k}`]:{customStylesCallback(e){const s=i.replace("/","--");let a=(0,t.applyFilters)(`${c}--${s}--inline-styles`,"",e);return a=(0,t.applyFilters)(`${c}--inline-styles--${s}`,"",e),a}}}))}))})();