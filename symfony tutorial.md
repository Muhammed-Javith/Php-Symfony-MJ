symfony working procedure:

first project - FstPrjCrUsComposer

	1.download xampp or php and start server
 
	2.do composer install 
 
	3.run following command to  create project
		composer create-project symfony/skeleton #prj_name
	4.now project created and to start symfonyserver run the following command
		symfony server:start
	5.open http://localhost:8000 and see the symfony server welcome page
	6.look the code for adding route url to project.
		controller and routes.yaml changed.
	7.test it by going through the following url
		http://127.0.0.1:8000/  (ouput:hello)
		http://127.0.0.1:8000/hello (output:welcome)
		http://127.0.0.1:8000/hello/javith (output: hello javith)
second project:  - SecPrjCrUsCmd
	1.install symfony cli using scoop
	2.run following command to create project.
		symfony new #prjname or
		symfony new #prjname --version = 5.7(with version)
	3.creat controller using 2 ways:
		1.create normal way by creating files
		2.create through cmd.	
			php bin/console make:controller
		   for the above cmd you will get error bcz need to install another package.
			composer require symfony/maker-bundle --dev or
			composer require maker
		    run the above command so that package will be installed.
		   when you run php bin/console make:controller  it will ask name then controller will be created.
	4.start server and go and see the output.
			routes.yaml not changed 
Third project: - SymControllerandRouter
	1.run following command to create project.
		symfony new #prjname or
		symfony new #prjname --version = 5.7(with version)
	2.creat controller using 2 ways:
		1.create normal way by creating files
		2.create through cmd.	
			php bin/console make:controller
		   for the above cmd you will get error bcz need to install another package.
			composer require symfony/maker-bundle --dev or
			composer require maker
		    run the above command so that package will be installed.
		   when you run php bin/console make:controller  it will ask name then controller will be created.
	3.start server and go and see the output.
			routes.yaml not changed 
Fourth project: - SymRouteParam
	1.run following command to create project.
		symfony new SymRouteParam 
	2.create controller php bin/console make:controller
		for the above cmd you will get error bcz need to install another package.
			composer require symfony/maker-bundle --dev or
			composer require maker
	3.symfony console debug:router will shows router in your project.
fith Project : Twig 
	1.run following command to create project.
		symfony new Symtwig
	2.create controller php bin/console make:controller
		for the above cmd you will get error bcz need to install another package.
			composer require symfony/maker-bundle --dev or
			composer require maker
	3.to work in twig do the installation of package.
			composer require twig
	4.under templates create index.html.twig
		twig is kind of language
		to work html with twig do the following
			1.file -> preferences ->search settings -> edit in settings.json
			  -> add the following line:
				"emmet.includeLanguages": {"twig" : "HTML"},
		  v 	2.add code and run and check.
sixth project: twig layout
	1.run following command to create project.
		symfony new Symtwiglayout
	2.create controller php bin/console make:controller
		for the above cmd you will get error bcz need to install another package.
			composer require symfony/maker-bundle --dev or
			composer require maker
	3.to work in twig do the installation of package.
			composer require twig
	4.under templates create index.html.twig
	5.global variables given in twig.yaml
seventhproject: orm with doctrine
how to create database?
 orm - doctrine
	symfony console - it shows all commands 
	to create database - symfony console doctrine:database:create
	if u get error for above cmd run following
		 composer require symfony/orm-pack
	- open .env file
	- update database url:
	DATABASE_URL="mysql://useradmin:admin123@127.0.0.1:3306/movies?serverVersion=8.0.34&charset=utf8"
	- now you will get database created successfully.
	- to drop - symfony console doctrine:database:drop
	symfony console list doctrine - show only doctrine command
	- symfony console make:entity to create entity
	- you will get error for above one so run follow cmd
		composer require symfony/maker-bundle --dev

	- when you cretae entity two files created and one under entity and another in repository.
	- give values and name of entity too.
	- create two entity - movie,actor
	- again create movie entity and add actors property and give ManyToMany while asking datatype and give className
	- to prepare migration script - symfony console make:migration
	- to push(migrate) in db - symfony console doctrine:migrations:migrate
eight project: data fixtures
- data fixtures:
	- to load predefined data in database we use this data fixtures.
	- composer require --dev doctrine/doctrine-fixtures-bundle
	now data fixtures folder data will be created.
	-symfony console doctrine:fixtures:load
	- now you will see the datafixtures and use it for u r project use.
9th project: entity repository
	- see the code
10th project: asset
 	- run composer require symfony/webpack-encore-bundle
	- now asset folder created and within that yiu can see the style files and js files.
	- if needed to install - npm install
	- to run - npm run dev (only run)
	- if needed to start server - npm run watch
	- run composer require symfony/asset
	- add our style sheet in base.html.twig
11.application form
	1.php bin/console make:controller

	2.composer require twig
	
	3.php bin/console make:form
composer require symfony/form

		if u get error: composer require form validator orm
	4.php bin/console cache:clear  clear cache




