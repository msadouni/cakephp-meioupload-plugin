# MeioUpload packaged as a plugin

This plugin provides an easy way to include [MeioUpload Behavior](http://www.meiocodigo.com/meioupload) from Vinicius Mendes in your application, as well as the possibility to translate the error message (orignially only in portuguese) and the use of phpThumb as a better thumbnail generator.

It adds :

- translations capabilities for the error messages
- phpThumb for thumbnail generation, from Pierre-Emmanuel Fringant [http://www.github.com/kalt](http://www.github.com/kalt) and [http://www.formation-cakephp.com](http://www.github.com/kalt)

## Installation
- Clone from github : in your plugin directory type `git clone git://github.com/msadouni/cakephp-meioupload-plugin.git meio_upload`
- Add as a git submodule : in your plugin directory type `git submodule add git://github.com/msadouni/cakephp-meioupload-plugin.git meio_upload`
- Download an archive from github and extract it in `/plugins/meio_upload`

# Usage
In a model that needs uploading, replace the class declaration with :

    <?php
    App::import('Plugin', 'MeioUploadAppModel');
    class MyModel extends MeioUploadAppModel {
        ...
    }

This is needed to translate the error messages, since you can't use the __() function in `var $validate` declaration, they are translated afterwards in MeioUploadappModel::invalidate() [as seen in the CakeBook](http://book.cakephp.org/view/163/Internationalization-in-CakePHP) (last paragraph).

The rest of the documentation is included at the original website : [http://www.meiocodigo.com/meioupload](http://www.meiocodigo.com/meioupload) and in the source code of the behavior.

# Translation
French translation is included, to add a translation :

1. Create a new .po file from `/plugins/meio_upload/locale/meio_upload.pot` with a tool like PoEdit
2. Save the finished translation to `/plugins/meio_upload/locale/<your locale>/LC_MESSAGES/meio_upload.po`
3. Send me a pull request or an email to matthieusadouni@gmail.com so that I can include it in the plugin
