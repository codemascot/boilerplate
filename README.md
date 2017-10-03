# TheDramatist Boilerplate

This tool is based on top of [`brightnucleus/boilerplate`](https://github.com/brightnucleus/boilerplate) and the [`inpsyde/boilerplate`](https://github.com/inpsyde/boilerplate) package by [Inpsyde](https://inpsyde.com/). It's goal is to simplify and speed up the process of creating new packages for the daily WordPress work. It's focused on creating composer packages of type `wordpress-plugin`, `wordpress-theme`, `library` and `project` with the default directory structure and meta files (`phpunit.xml.dist`, `composer.json` and so on) but without any code. The created structure follows the Inpsyde Codex.

## Usage

All you need is at least PHP 5.6 with [Git](https://git-scm.com/) and [composer](https://getcomposer.org/) installed. 

```
$ git clone git@github.com:rnaby/boilerplate.git <DIRECTORY>
$ cd <DIRECTORY>
$ composer install
```

After composer has fetched some dependencies and installed them, you will get asked some question about the new package:

```
> TheDramatistBoilerplate\Setup::run
Now running setup tasks...
Task Welcome
  _____   _              ____                                       _     _         _   
 |_   _| | |__     ___  |  _ \   _ __    __ _   _ __ ___     __ _  | |_  (_)  ___  | |_ 
   | |   | '_ \   / _ \ | | | | | '__|  / _` | | '_ ` _ \   / _` | | __| | | / __| | __|
   | |   | | | | |  __/ | |_| | | |    | (_| | | | | | | | | (_| | | |_  | | \__ \ | |_ 
   |_|   |_| |_|  \___| |____/  |_|     \__,_| |_| |_| |_|  \__,_|  \__| |_| |___/  \__|
                                                                                        
  ____            _   _                         _           _          
 | __ )    ___   (_) | |   ___   _ __   _ __   | |   __ _  | |_    ___ 
 |  _ \   / _ \  | | | |  / _ \ | '__| | '_ \  | |  / _` | | __|  / _ \
 | |_) | | (_) | | | | | |  __/ | |    | |_) | | | | (_| | | |_  |  __/
 |____/   \___/  |_| |_|  \___| |_|    | .__/  |_|  \__,_|  \__|  \___|
                                       |_|                             
                                       
Task AskAboutProjectParameters
Vendor name [Human readable vendor name (probably your company's name)] Default: "TheDramatist" ?
Vendor name in lowercase [Used in composer package name (no spaces, [a-z0-9-] )] Default: "inpsyde" ?
Package name [Human readable package name] Default: "Awesome Package" ? My new theme
Package name in lowercase [Used for the composer package name (no spaces, [a-z0-9-] )] Default: "my-new-theme" ?
License [License abbreviation [MIT|GPL]] Default: "MIT" ? GPL
Package type [The composer type of the package (library, wordpress-plugin, wordpress-theme or project)] Default: "wordpress-plugin" ? wordpress-theme
Package base namespace [The base PHP namespace of the package.] Default: "TheDramatist" ?
Textdomain [Used for translation in gettext functions] Default: "my-new-plugin" ?
Package description [The package description in one sentence] Default: "TODO: Describe what this package is all about" ? This is the description of my new theme
Author name [The name of the author (in person) of the package] Default: "Khan M Rashedun-Naby" ? Khan M Rashedun-Naby
Author email [The email of the author.] Default: "naby88@gmail.com" ? naby88@live.com
```

Finally the boilerplate runs some scripts to create all the files according to your inputs. At the end the sources and VCS files of the boilerplate gets deleted and a new git repository is initialized.

After that, your directory looks like this:

```
$ ls -al <DIRECTORY>
drwxrwxr-x  8 khan khan   320 Jun 12 17:33 ./
drwxrwxrwt 18 root root   2440 Jun 12 17:33 ../
drwxrwxr-x  4 khan khan    80 Jun 12 17:33 assets/
-rw-rw-r--  1 khan khan   149 Jun 12 17:33 CHANGELOG.md
-rw-rw-r--  1 khan khan   539 Jun 12 17:33 composer.json
-rw-rw-r--  1 khan khan   158 Jun 12 17:33 functions.php
drwxrwxr-x  7 khan khan   200 Jun 12 17:33 .git/
-rw-rw-r--  1 khan khan    21 Jun 12 17:33 .gitignore
-rw-rw-r--  1 khan khan 17751 Jun 12 17:33 LICENSE
-rw-rw-r--  1 khan khan   389 Jun 12 17:33 phpunit.xml.dist
-rw-rw-r--  1 khan khan   781 Jun 12 17:33 README.md
drwxrwxr-x  2 khan khan    60 Jun 12 17:33 src/
-rw-rw-r--  1 khan khan   258 Jun 12 17:33 style.css
drwxrwxr-x  3 khan khan    60 Jun 12 17:33 tests/
drwxrwxr-x  3 khan khan    80 Jun 12 17:33 vendor/
drwxrwxr-x  2 khan khan    60 Jun 12 17:33 w-org-assets/
```

The structure of the directory depends on the type of package you choose. For example the `w-org-assets/` directory won't appear for `library` or `project` types.

## Acknowledgment

This package is build on top of the [`brightnucleus/boilerplate`](https://github.com/brightnucleus/boilerplate) package by [Alain Schlesser](http://www.alainschlesser.com/) and the [`inpsyde/boilerplate`](https://github.com/inpsyde/boilerplate) package by [Inpsyde](https://inpsyde.com/).

## Crafted by Khan M Rashedun-Naby

I'm a professional web developer and I forked this repository form [`inpsyde/boilerplate`](https://github.com/inpsyde/boilerplate) to use for my personal project.

## License

Copyright (c) 2016 Khan M Rashedun-Naby

Good news, this boilerplate is free for everyone! Since it's released under the [MIT License](LICENSE) you can use it free of charge on your personal or commercial website.

## Contributing

All feedback / bug reports / pull requests are welcome.