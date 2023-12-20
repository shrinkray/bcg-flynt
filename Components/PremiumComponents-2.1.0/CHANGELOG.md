# Changelog

All notable changes to this project will be documented in this file. See [standard-version](https://github.com/conventional-changelog/standard-version) for commit guidelines.

## [2.1.0](https://github.com/bleech/PremiumComponents/compare/v2.0.0...v2.1.0) (2023-12-04)


### Features

* **AccordionDefault:** use delegate, add cleanup function ([37207c4](https://github.com/bleech/PremiumComponents/commit/37207c4631db38f9dae4f6cd9573721907b79864))
* **BlockImageTextParallax:** adjust styling and parallax ([a406a52](https://github.com/bleech/PremiumComponents/commit/a406a52b0eb5695d79c6611ceb9519240484910f))
* **HeroImageCta:** add min height options ([d3cad63](https://github.com/bleech/PremiumComponents/commit/d3cad635ed162d56e8d1d7d8d360ecdeb2af3046))
* **HeroImageCta:** change wording ([b7fb724](https://github.com/bleech/PremiumComponents/commit/b7fb724d6e5357594cef07bfeff1c2634d50f2f2))
* **ListLogos:** add is_external and is_target_blank to links and use this values ([3698b63](https://github.com/bleech/PremiumComponents/commit/3698b63d31421196b08ed31e8ec9527bea9d0606))
* **NavigationFooterColumns:** use is_external and is_target_blank ([c9987a3](https://github.com/bleech/PremiumComponents/commit/c9987a3d3a25a8ad6abd9f4bca33259e09d234d6))


### Bug Fixes

* **FormContactForm7:** remove overflow bug ([a00e94b](https://github.com/bleech/PremiumComponents/commit/a00e94b3cc6ad22a0817c4dd775d24128d027c22))
* **FormContactForm7:** set acceptance to full width ([9c073f3](https://github.com/bleech/PremiumComponents/commit/9c073f31e2551ef0be2988554fe1a6e4d3c7fa4d))
* **HeroImageCta:** add outer spacing if not full width ([5a40eee](https://github.com/bleech/PremiumComponents/commit/5a40eee5e036fd2fa4e3932ef21d93b00f71f0a8))
* **HeroImageCta:** force space between attributes, but trim whitespace when the attribute will not rendered ([cf6649e](https://github.com/bleech/PremiumComponents/commit/cf6649e3743e29eb8bc19a73db5f2abc199d91d0))
* **SliderImageGallery:** adjust styles on smaller screens ([2154ecf](https://github.com/bleech/PremiumComponents/commit/2154ecf4d2333aeb670a5afa7020fd82b84871ea))
* **SliderImagesCentered:** fix button position, use individual transform properties ([4eeb981](https://github.com/bleech/PremiumComponents/commit/4eeb98122dd912cf1392a7bee6dfad4689e72c9b))
* **SliderImagesCentered:** remove jumping on large screens ([7946425](https://github.com/bleech/PremiumComponents/commit/794642593623d0583dc74db36d9efe1b8e0e3d9f))


### Other

* **AccordionDefault:** use individual transform properties ([48fc061](https://github.com/bleech/PremiumComponents/commit/48fc0610f0fb8d0eb897bb017ef51ee4a0371f3e))
* **FormContactForm7:** update styles ([ef6a4d7](https://github.com/bleech/PremiumComponents/commit/ef6a4d70b279a3119e6bdc1564206fb2ef2d408e))
* **FormContactForm7:** use individual transform properties ([61babbb](https://github.com/bleech/PremiumComponents/commit/61babbb5faa166f82e579822c235fbed8fdf469a))
* **FormContactForm7:** use sprintf for instructions ([f0a863a](https://github.com/bleech/PremiumComponents/commit/f0a863a5d969b75944a5aa57d8beda0e7012ab07))
* **HeroSlider:** move initSlider function ([3d2f01e](https://github.com/bleech/PremiumComponents/commit/3d2f01e571964b460342ef1e0180c86d90bd3107))
* **HeroSlider:** use individual transform properties ([8443b09](https://github.com/bleech/PremiumComponents/commit/8443b0942d9b78556d654846a9d6a5b62eb5ea7c))
* **screenshots:** add more compressed version ([a50f3da](https://github.com/bleech/PremiumComponents/commit/a50f3dac5e6d868d5c32995202513ce98978b744))
* **SliderImageGallery:** use individual transform properties ([dd93445](https://github.com/bleech/PremiumComponents/commit/dd9344551fe456f00cf7d6027ca44782414a9111))
* **SliderImagesCentered:** move initSlider function ([efd44b3](https://github.com/bleech/PremiumComponents/commit/efd44b350b03af367e6f4252c386957fd5ae995d))

## [2.0.0](https://github.com/bleech/PremiumComponents/compare/v1.1.1...v2.0.0) (2023-07-18)


### Features

* **AccordionDefault:** wrap button with a heading ([1d209ef](https://github.com/bleech/PremiumComponents/commit/1d209ef4b5b777dc37bb7a57312db6c94b106f57))
* add data-text-align ([f7f6dec](https://github.com/bleech/PremiumComponents/commit/f7f6decb92c17e16de97ef3927497f88c55ac105))
* **BlockCountUp:** add jpg and png support ([7a8e92d](https://github.com/bleech/PremiumComponents/commit/7a8e92d8a2592c552c804c218d46e41ec69f673b))
* **BlockCountUp:** drop raw svg and use a image field instead ([1874d51](https://github.com/bleech/PremiumComponents/commit/1874d51530c77feaca67020dfdef5f9039b3e3bc))
* **BlockTextImageCrop:** add svg support ([576b146](https://github.com/bleech/PremiumComponents/commit/576b146c48acc5b9bd5875051efae8a9179dd3af))
* **Components:**  remove acf wysiwyg delay ([0c55728](https://github.com/bleech/PremiumComponents/commit/0c55728945fc60a8b5450907249cd868f4f23d05))
* **Components:** add mine_type webp ([43faec9](https://github.com/bleech/PremiumComponents/commit/43faec91f18f730709802643116552d77f6be5b9))
* **components:** readjust sizes, alignements and styling ([8fa578f](https://github.com/bleech/PremiumComponents/commit/8fa578f410bd30f70e893f9872d8ceffa587e48d))
* **Hero*:** load images eagerly ([96876ad](https://github.com/bleech/PremiumComponents/commit/96876ad5351c2de59f6fea7ab7e592defe16561e))
* **HeroCta:** use data attributes for alignment ([ad844c7](https://github.com/bleech/PremiumComponents/commit/ad844c72b8afe8e0ffeee699df7287ebfbb13d40))
* **HeroImageCta:** add inner and outer theme option ([53961a1](https://github.com/bleech/PremiumComponents/commit/53961a1db7b810418296aba06655c4f96c422a10))
* **HeroImageCta:** add svg image support ([c059d54](https://github.com/bleech/PremiumComponents/commit/c059d5473e7b9bdff55393041888158dd33fcdf1))
* **HeroImageCta:** make content fully relevant to a chosen theme ([3286a29](https://github.com/bleech/PremiumComponents/commit/3286a29f7b40d31b91b4b8d6f84b44b33543d64d))
* **HeroImageText:** add svg image support ([c4ddc63](https://github.com/bleech/PremiumComponents/commit/c4ddc63e5dbc71eec0e9b108ad83137a8c0de952))
* **HeroSlider:** only import required css ([06d84d1](https://github.com/bleech/PremiumComponents/commit/06d84d18cb756799d173a08cfc10beed50517168))
* **HeroSlider:** remove lazyload class ([66bee62](https://github.com/bleech/PremiumComponents/commit/66bee6226ff2552c43235cc13d458a374406d492))
* **HeroTextImage:** fix desktop image height to 750px and correct sizes attribute ([321a076](https://github.com/bleech/PremiumComponents/commit/321a076cb6012573db1dba3c50f02bedfb97f06d))
* **ListIcons:** add jpg and png support ([2aea43a](https://github.com/bleech/PremiumComponents/commit/2aea43a85fefb3067190ebce62a5440dd9fc74e3))
* **ListIcons:** drop raw svg and use a image field instead ([131fb8d](https://github.com/bleech/PremiumComponents/commit/131fb8d27cda0160aa9e5c442c5692282e92f7a6))
* remove hidding br tags as it's added into basestyles ([b12636a](https://github.com/bleech/PremiumComponents/commit/b12636a0b1e0882e121c62047dc5fb75656ae985))
* **SliderImagesCentered:** only import required css ([343638f](https://github.com/bleech/PremiumComponents/commit/343638f5784956c9fde4e7f3e585bf317ad03b20))
* **SliderImagesCentered:** set first active ([ee0cfb2](https://github.com/bleech/PremiumComponents/commit/ee0cfb28f20854b636fb150a770f3a38aa78c7da))
* **SliderImagesGallery:** only import required css ([25b0106](https://github.com/bleech/PremiumComponents/commit/25b0106403343969bfd1d2f5907a7a3773129379))
* **swiper:** migrate to v10 ([0a55a91](https://github.com/bleech/PremiumComponents/commit/0a55a917af010b634e21aea162bbf8e2d050b278))


### Bug Fixes

* **AccordionDefault:** add padding to button ([ba5c3f8](https://github.com/bleech/PremiumComponents/commit/ba5c3f881897c65acd8ccee2bf75500c2a59d713))
* **BlockImageTextParallax:** improve behaviour ([f76a997](https://github.com/bleech/PremiumComponents/commit/f76a997abc86bca196219329a4262f5bd38daada))
* **BlockTextImageCrop:** display image before content on small screens ([b2e5755](https://github.com/bleech/PremiumComponents/commit/b2e5755029c7a2a205d6bc7fcba6e364a1b9d2f9))
* **BlockWysiwygSidebar:** respect selected sidebar position ([7055410](https://github.com/bleech/PremiumComponents/commit/7055410ed2644115deba6187ef4b21afd7f130ec))
* **HeroCta:** don’t display br on smaller screens ([ab77804](https://github.com/bleech/PremiumComponents/commit/ab77804a1aee0abf69c678febfc3b3471a5761a2))
* **HeroImageCta:** auto-balance text on mobile by using data-text-align attribute ([9f05f95](https://github.com/bleech/PremiumComponents/commit/9f05f950a66bf36d04f73fd880f6ccac7f2560fa))
* **HeroImageCta:** close img tag correctly ([8a4b65e](https://github.com/bleech/PremiumComponents/commit/8a4b65e367ba206762afbb3e08421fac0dc8b2c7))
* **HeroImageCta:** container size ([801adb6](https://github.com/bleech/PremiumComponents/commit/801adb6b91ce15560eb661d1cec474615308d0cb))
* **HeroImageCta:** don’t display br on smaller screens ([f18fda2](https://github.com/bleech/PremiumComponents/commit/f18fda224392555fd80d27676e66e99810dc068b))
* **HeroImageCta:** increase min-block-size ([3aab5ec](https://github.com/bleech/PremiumComponents/commit/3aab5ec5391d1336052b841d83a83214625bd206))
* **HeroImageCta:** rename themes, fix not full width block padding ([e0093a5](https://github.com/bleech/PremiumComponents/commit/e0093a5ac1902e9b25253bda2503ac4b8779b286))
* **HeroImageCta:** round height values ([c3de8ea](https://github.com/bleech/PremiumComponents/commit/c3de8eabd7b015ef72e7daee8fc76c22b9ce2d88))
* **HeroImageText:** add heading classes selectors ([fdba402](https://github.com/bleech/PremiumComponents/commit/fdba402ba99a6542741a7b306941822cc6671577))
* **HeroImageText:** auto-balance text on mobile by using data-text-align attribute ([74783a4](https://github.com/bleech/PremiumComponents/commit/74783a4f618957b317aff1c3e1ace7500da22841))
* **HeroImageText:** close img tag correctly ([5bbc569](https://github.com/bleech/PremiumComponents/commit/5bbc569ae719d1baf0a953044b73c47e0fb18520))
* **HeroImageText:** don’t display br on smaller screens ([6b6600a](https://github.com/bleech/PremiumComponents/commit/6b6600a7435f3647052933d3552748a576be1ebb))
* **HeroSlider:** always display first slide ([58bbf71](https://github.com/bleech/PremiumComponents/commit/58bbf7154014911f4bc06bc03afb3b62dfd563c5))
* **HeroSlider:** auto-balance text on mobile by using data-size attribute ([48eb538](https://github.com/bleech/PremiumComponents/commit/48eb538d8d090259ae06a95d6564538551466235))
* **HeroTextImage:** remove overlapping image on medium screen sizes ([9808815](https://github.com/bleech/PremiumComponents/commit/98088152028135688dbfede558ad22c9b83860fd))
* **ListIcons:** add max-inline-size to item ([73d17a9](https://github.com/bleech/PremiumComponents/commit/73d17a9d9973f2f691b0a787525a92737588c450))
* **ListSocial:** use correct field ([8ab7759](https://github.com/bleech/PremiumComponents/commit/8ab7759d79df52d6b743de3ccfe0f3c0fdde208a))
* **SliderImageGallery:** add Controller module ([94046f4](https://github.com/bleech/PremiumComponents/commit/94046f4a2ebed2502d0951298904beec85b96eed))
* **SliderImageGallery:** reduce cls ([3fca369](https://github.com/bleech/PremiumComponents/commit/3fca369f4821a4f448ff5b27b5898188a2cedebd))
* **SliderImagesCentered:** add Pagination module ([ca5f6e9](https://github.com/bleech/PremiumComponents/commit/ca5f6e93e56524e50193f62c6e36449ffa03a1b9))
* **SliderImagesCentered:** reduce cls ([5cab797](https://github.com/bleech/PremiumComponents/commit/5cab79782725fdcd369b1dbc8203c1ec6fdebe93))
* **SliderImagesCentered:** reduce cls ([cb3ac8c](https://github.com/bleech/PremiumComponents/commit/cb3ac8cbcac6c857e7bdab4671fb356ce218cfa1))
* **SliderImagesCentered:** reduce margin-block-start of pagination ([92017a0](https://github.com/bleech/PremiumComponents/commit/92017a01ef204bb3d5672e94e4cb429f7e7458a2))
* **SliderImagesCentered:** remove linting issue ([4b63f1a](https://github.com/bleech/PremiumComponents/commit/4b63f1af8390c92f904b2737f7db947f79f8ead6))
* **SliderImagesGallery:** add componentSpacing class, adjust padding of sliderThumb ([350c44a](https://github.com/bleech/PremiumComponents/commit/350c44ac51d14a951a872753e9e7d75323c5db88))


### Other

* **AccordionDefault:** update description ([3168314](https://github.com/bleech/PremiumComponents/commit/31683149dd174ad93a61e2aca80986b77555a3ba))
* **AcfFields:** rename General to Content ([d45f02d](https://github.com/bleech/PremiumComponents/commit/d45f02d4ecfc72bd33fcdba42bb0b39b75d1db54))
* **BlockWysiwygSidebar:** add typography correct quotes ([90bb76a](https://github.com/bleech/PremiumComponents/commit/90bb76a983e89f4e9228516884958492c8c71292))
* **BlockWysiwygTwoCol:** add typography correct quotes ([6925ba7](https://github.com/bleech/PremiumComponents/commit/6925ba7983343e48f773532ea65c68ff11605d32))
* change centerMaxWidthContainer to container ([5d5fdb9](https://github.com/bleech/PremiumComponents/commit/5d5fdb9b0966dc7c12772f79b60b433816eabff1))
* **components:** add instructions to preContentHtml fields ([3e9f214](https://github.com/bleech/PremiumComponents/commit/3e9f21462af6ad09cc50ab15575330103adb6aea))
* **Components:** update wysiwyg labels ([501ec5f](https://github.com/bleech/PremiumComponents/commit/501ec5fa7178aad91bdc6d1e03fedcbe7de3bb7b))
* **HeroCta:** remove button link ([44bdcf0](https://github.com/bleech/PremiumComponents/commit/44bdcf01d19fe628b29d7eb8637451a874babf0d))
* **HeroCta:** udpate description ([6662974](https://github.com/bleech/PremiumComponents/commit/6662974c731d724e18300b928bc896008f048242))
* **HeroImageCta:** udpate description ([6da0051](https://github.com/bleech/PremiumComponents/commit/6da0051266232e219b52e74e70b6b45a6c4e7c01))
* **HeroImageText:** udpate description ([7cd6243](https://github.com/bleech/PremiumComponents/commit/7cd62430e114528464145babca991ba3f7dd8243))
* **HeroSlider:** use consistent order ([dcda295](https://github.com/bleech/PremiumComponents/commit/dcda295b0a459a06b5804e2f5d30f8e3ab309941))
* **HeroTextImage:** remove whitespace ([f8138ff](https://github.com/bleech/PremiumComponents/commit/f8138ffed4c6f1a506930d1206c45d859062725a))
* **Layout:** change usage of --container-max-width to --content-max-width-full ([56a9696](https://github.com/bleech/PremiumComponents/commit/56a96967313c1f9b02217e7e80659a574988b872))
* **ListIcons:** remove link ([edff340](https://github.com/bleech/PremiumComponents/commit/edff34051f2aa5f3f95231a5b76474c8204fd4a9))
* **ListIcons:** update description ([7cafe0d](https://github.com/bleech/PremiumComponents/commit/7cafe0d9f882f99dc8a8164f83cfe77951fa4100))
* **ListSocial:** move getting componentPath outside array_map ([d021322](https://github.com/bleech/PremiumComponents/commit/d021322e250d283f465b32c35d460727bb8ab860))
* **NavigationFooterColumns:** use br instead wpautop ([0433482](https://github.com/bleech/PremiumComponents/commit/04334822684020dd1bfbbf95502b09e580cd60f2))
* **README.md:** uppercase company name ([ceb0655](https://github.com/bleech/PremiumComponents/commit/ceb06557a5a1af9dcb82f0f420736fffd4645dcc))
* replace centerContentMaxWidth with data attributes ([9fb5c53](https://github.com/bleech/PremiumComponents/commit/9fb5c53498fd57f7828a504d80e5ec8263650759))
* replace postContent with data attributes ([eff6611](https://github.com/bleech/PremiumComponents/commit/eff6611d0459250b4f0b2b1b67a4497f130a16d9))
* replace preContent with data attributes ([b8b5eb0](https://github.com/bleech/PremiumComponents/commit/b8b5eb01c556e7adc2bfad3649d495eff63b0265))
* **SliderImagesCentered:** use consistent order ([a3f0d00](https://github.com/bleech/PremiumComponents/commit/a3f0d00fd87eed02fd7b855f342dbbb637623178))
* **styles:** remove $heading-selectors and $input-selectors ([198c6a4](https://github.com/bleech/PremiumComponents/commit/198c6a4869d24a62343b9b4952892d748d6ab5ab))
* **styles:** remove unused --color-headline css variable ([444580f](https://github.com/bleech/PremiumComponents/commit/444580f6f2ed98c37601673ad7fdf046b5a2c911))

## [1.1.1](https://github.com/bleech/PremiumComponents/compare/v1.1.0...v1.1.1) (2020-10-23)


### Bug Fixes

* **NavigationFooterColumns:** center social icons on smaller screens ([#27](https://github.com/bleech/PremiumComponents/issues/27)) ([f6639c9](https://github.com/bleech/PremiumComponents/commit/f6639c9e20a0af82a6cfb383095a80c43e9340ec))
* **Sliders:** add Number polyfill to fix Swiper v6 in IE ([#25](https://github.com/bleech/PremiumComponents/issues/25)) ([b6ffcae](https://github.com/bleech/PremiumComponents/commit/b6ffcae08d78bb2bd6d39afe315dbbf4a597ef63))


### Other

* **NavigationFooterColumns:** use custom header logo ([#28](https://github.com/bleech/PremiumComponents/issues/28)) ([b5a7d82](https://github.com/bleech/PremiumComponents/commit/b5a7d820c937405d3e8e5be911841978ad07cee4))
* **swiper:** only import needed components ([#29](https://github.com/bleech/PremiumComponents/issues/29)) ([e3cdee4](https://github.com/bleech/PremiumComponents/commit/e3cdee4ef0c224dde98f2255a505b290365dba26))

## [1.1.0](https://github.com/bleech/PremiumComponents/compare/v1.0.0...v1.1.0) (2020-08-13)


### Features

* **acfLabels:** make labels translatable, remove class autosize ([13cf8c4](https://github.com/bleech/PremiumComponents/commit/13cf8c4a328e1808a802b9d5923bd05e9f80ab8d))
* **BlockCountUp:** preserve decimals if given number has decimals ([85bb0d0](https://github.com/bleech/PremiumComponents/commit/85bb0d0712e24b6acf606929a741ecd690e47c75))
* **Components:** Accessibility Improvements ([6fd3881](https://github.com/bleech/PremiumComponents/commit/6fd38812d282231682ac32fa0ceaa75e646df59f))
* **NavigationFooterColumns:** add component ([de11b94](https://github.com/bleech/PremiumComponents/commit/de11b94af980be9c17fb127a73cd3d0d7fd5ac68))


### Bug Fixes

* **BaseStyle,Components:** prevent active link / button state when opening target in new tab ([976c4a3](https://github.com/bleech/PremiumComponents/commit/976c4a3f1040289ba9e6ae31f36e89206943cc0e))
* **BlockTextImageCrop:** prevent object fit image invisibly pushing down following components (IE11) ([f9b90d1](https://github.com/bleech/PremiumComponents/commit/f9b90d1d6e772ae58fc4fb0e4980bc5a01e439dc))
* **FormContactForm7:** defer script loading ([17c8fb2](https://github.com/bleech/PremiumComponents/commit/17c8fb2ca4e4f9dbfcaf1664db0edc9ca42c319d))
* **FormContactForm7:** prevent input grid breaking into new line (IE11, Edge) ([a26b8f2](https://github.com/bleech/PremiumComponents/commit/a26b8f2f24dcace8dbed0b5b891c501e6c507e86))
* **HeroImageText:** add widths on srcset ([d41bb38](https://github.com/bleech/PremiumComponents/commit/d41bb3830ee04a1ce8f2486e55c1893fede089fb))
* **HeroSlider:** fix html vaidator errors ([d11aac1](https://github.com/bleech/PremiumComponents/commit/d11aac145f4f75d265311b2775cf188f1437a2b3))
* **ListIcons:** center option style ([f21785d](https://github.com/bleech/PremiumComponents/commit/f21785d3a72747e30f57dd31a575fb2e38cd4dd2))
* **ListIcons:** IE11 flexbox bug ([7814f99](https://github.com/bleech/PremiumComponents/commit/7814f998e34b5a9831c9f2b9cdc305c36101fcc4))
* **ListLogos:** prevent cropped logos ([e6e3ebf](https://github.com/bleech/PremiumComponents/commit/e6e3ebf6625c773f268705e96d4efeed8b7bfdd6))
* **ListSocial:** add mailto link support by changing field type from url to text ([dfb3498](https://github.com/bleech/PremiumComponents/commit/dfb3498c9d1e53708b3af2a636772cfe4a0f43de))
* **MimeTypes:** allow png uploads, update instructions ([039ec66](https://github.com/bleech/PremiumComponents/commit/039ec66c74f2da97f753640d079c50c3e070703b))

## 1.0.0 (2019-11-19)

Initial release
