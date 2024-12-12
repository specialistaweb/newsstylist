
// load the new template path for NEWS +ext
plugin.tx_news.view.templateRootPaths  = EXT:newsstylist/Resources/Private/Templates/Styles/Twb/Templates/

// load the new partial path for NEWS +ext
plugin.tx_news.view.partialRootPaths  = EXT:newsstylist/Resources/Private/Templates/Styles/Twb/Partials/
  
// PAGE inclusion: Css bundle, Scss and JS
page.includeCSS {
      newsstylist-0 = {$plugin.tx_newsstylist.settings.CssPath}swiper-bundle.css
      newsstylist-1 = {$plugin.tx_newsstylist.settings.ScssPath}theme.scss
}

page.includeJS {
     newsstylist = {$plugin.tx_newsstylist.settings.JavascriptPath}swiper-bundle.js
}


plugin.tx_news.settings {
      layout.name = {$plugin.tx_newsstylist.settings.layout.name}
      layout.menuCardItems = {$plugin.tx_newsstylist.settings.layout.menuCardItems}
      layout.headLineOnTop = {$plugin.tx_newsstylist.settings.layout.headLineOnTop}
      layout.dateFormat = {$plugin.tx_newsstylist.settings.layout.dateFormat}
      layout.additionalInfoFirst = {$plugin.tx_newsstylist.settings.layout.additionalInfoFirst}
      layout.colImage = {$plugin.tx_newsstylist.settings.layout.colImage}
      layout.colText = {$plugin.tx_newsstylist.settings.layout.colText}
      layout.imageRight = {$plugin.tx_newsstylist.settings.layout.imageRight}
      layout.moreLink = {$plugin.tx_newsstylist.settings.layout.moreLink}
      svgicon.width = {$plugin.tx_newsstylist.settings.svgicon.width}
      svgicon.height ={$plugin.tx_newsstylist.settings.svgicon.height}
      show.moreLink = {$plugin.tx_newsstylist.settings.show.moreLink}    
      show.Image = {$plugin.tx_newsstylist.settings.show.Image}
      displayDummyIfNoMedia = {$plugin.tx_newsstylist.settings.displayDummyIfNoMedia}
      show.headLine = {$plugin.tx_newsstylist.settings.show.headLine}
      show.lead = {$plugin.tx_newsstylist.settings.show.lead}
      show.extraInfo = {$plugin.tx_newsstylist.settings.show.extraInfo}
      show.extraIcons = {$plugin.tx_newsstylist.settings.show.extraIcons}
      show.Categories = {$plugin.tx_newsstylist.settings.show.Categories}
      show.Author = {$plugin.tx_newsstylist.settings.show.Author}
      show.Tags = {$plugin.tx_newsstylist.settings.show.Tags}
      show.extraTime = {$plugin.tx_newsstylist.settings.show.extraTime}
      swiper.enable = {$plugin.tx_newsstylist.settings.swiper.enable}
      swiper.autoplay = {$plugin.tx_newsstylist.settings.swiper.autoplay}
      swiper.scroll = {$plugin.tx_newsstylist.settings.swiper.scroll}
      swiper.itemsPerSlide = {$plugin.tx_newsstylist.settings.swiper.itemsPerSlide}
      swiper.showarrows = {$plugin.tx_newsstylist.settings.swiper.showarrows}
      swiper.shownavigation = {$plugin.tx_newsstylist.settings.swiper.shownavigation}
      swiper.speed = {$plugin.tx_newsstylist.settings.swiper.speed}
      swiper.delay = {$plugin.tx_newsstylist.settings.swiper.delay}
      swiper.mousewheel = {$plugin.tx_newsstylist.settings.swiper.mousewheel}
      swiper.keyboard = {$plugin.tx_newsstylist.settings.swiper.keyboard}
}


plugin.tx_news._LOCAL_LANG.default {
        paginate_previous = <
        paginate_next = >
}

plugin.tx_news._LOCAL_LANG.it {
        paginate_previous = <
        paginate_next = >
}

lib.currentdomain = TEXT
lib.currentdomain {
    data = getEnv:HTTP_HOST
    stdWrap.wrap = http://
}

lib.getFileUid = COA
lib.getFileUid {
	10 = TEXT
        10.current = 1
	10.stdWrap.replacement {
		10 {
		  search = GeorgRinger\News\Domain\Model\FileReference:
		  replace =
		}
	}
}
