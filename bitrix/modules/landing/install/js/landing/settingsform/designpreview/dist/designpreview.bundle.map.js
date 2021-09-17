{"version":3,"sources":["designpreview.bundle.js"],"names":["this","BX","Landing","exports","main_core","Control","node","babelHelpers","classCallCheck","createClass","key","value","setParent","parent","setDefaultValue","defaultValue","setChangeHandler","onChange","Event","bind","setClickHandler","onClick","getValue","getValueInternal","_templateObject","data","taggedTemplateLiteral","DesignPreview","form","options","arguments","length","undefined","phrase","initControls","initLayout","applyStyles","onApplyStyles","_this","layout","createLayout","styleNode","document","createElement","Dom","append","paramsObserver","threshold","observer","IntersectionObserver","entries","forEach","entry","isIntersecting","hasOwnProperty","defaultIntersecting","unFixElement","fixElement","elementDesignPreview","querySelector","observe","controls","group","control","_group","_key","addCustomEvent","fieldCode","fieldCodeH","panel","UI","Panel","GoogleFonts","getInstance","body","setAttribute","convertFont","showFontPanel","element","onclick","show","hideOverlay","targetWindow","then","font","response","family","onCustomEvent","generateSelectorStart","className","generateSelectorEnd","selector","getCSSPart1","css","colorPrimary","setColors","colorPickerElement","activeColorNode","isActiveColorPickerElement","classList","contains","dataset","theme","use","checked","corporateColor","concat","getCSSPart2","textColor","typo","hFont","textSize","Math","round","DEFAULT_FONT_SIZE","fontWeight","textWeight","fontLineHeight","textLineHeight","hColor","hWeight","link","createLink","linkH","getCSSPart3","bgColor","background","color","bgFieldNode","bgPictureElement","getElementsByClassName","bgPicture","getAttribute","bgPosition","position","useSite","picture","rel","href","replace","generateCss","innerHTML","paddingDesignForm","designForm","designFormPosition","getBoundingClientRect","designPreview","designPreviewPosition","bodyWidth","clientWidth","positionFixedRight","right","paddingDesignPreview","designPreviewWrap","designPreviewWrapPosition","maxWidth","width","height","fixedStyle","replaceAll","firstSymbol","toUpperCase","Tag","render","title","subtitle","text1","text2","button","defineProperty","SettingsForm"],"mappings":"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","file":"designpreview.bundle.map.js"}