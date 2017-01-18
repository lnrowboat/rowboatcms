Mongodb Laravel Doctrine
========================
Wrapper from Mongopper


composer.json
-------------

"require": {
	...
	"alcaeus/mongo-php-adapter": "dev-master",
	"doctrine/mongodb-odm": "dev-master"
},

"autoload": {
	"psr-4": {
		...
		"Mongopper\\": "packages/mongopper/src"
	}
},

"provide": {
   "ext-mongo": " ^1.5" 
},



Controller TemplateEditorController

view url http://.../find-insert
