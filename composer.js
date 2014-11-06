{
  "name": "webtise/whitmoreandwhite_theme",
  "type": "magento-module",
  "require": {
    "magento-hackathon/magento-composer-installer": "*"
  },
  "extra":{
        "map":[
            ["skin/frontend/rwd/whitmoreandwhite", "skin/frontend/rwd/whitmoreandwhite"],
            ["app/design/frontend/rwd/whitmoreandwhite", "app/design/frontend/rwd/alyaka"],
            ["app/code/local/Webtise/Whitmoreandwhite", "app/code/local/Webtise/Whitmoreandwhite"],
            ["app/etc/modules/Whitmoreandwhite_Theme.xml", "app/etc/modules/Whitmoreandwhite_Theme.xml"],
        ]
   }
}